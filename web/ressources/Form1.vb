Public Class Form1

    Property _ListLotFab As New ClsLotFab
    Property x1 As Integer = 1
    Property y1 As Integer = 1
    Property _annee As String = DateTime.Now.ToString("yyyy")
    Property _semaine As String = DatePart(DateInterval.WeekOfYear, Now, FirstDayOfWeek.Monday, FirstWeekOfYear.FirstFourDays) + 1
    Property _idMachine As Integer = 211010
    Property _IdClient As Integer = 200168
    Property _Fait As Boolean = False



    Private Sub Form1_Load(sender As System.Object, e As System.EventArgs) Handles MyBase.Load
        generateTable()

    End Sub

    Sub generateTable()

        _ListLotFab.ListLotFab.Clear()
        x1 = 1
        y1 = 1

        Using s_FbMyReader As New ClassConnection.ClsOdbcConnection("SELECT * FROM [dbPOTER].[dbo].[LotFabrication] where Semaine = " & _annee & _semaine & " and idMachine = " & _idMachine & " and IdClient = " & _IdClient, ClassConnection.ClsChaineConnection.ChaineConnection.POTER)
            With s_FbMyReader
                While .OdbcReader.Read
                    Dim _lotfab As New ClsLotFab.ClsLigneLotFab
                    _lotfab.EntiteRegroupement = .OdbcReader("EntiteRegroupement")
                    _lotfab.Fait = .OdbcReader("Fait")
                    If Not IsDBNull(.OdbcReader("Type")) Then _lotfab.Type = .OdbcReader("Type")
                    _ListLotFab.Add(.OdbcReader("IdLotFab"), _lotfab)
                End While
            End With
        End Using
        Dim memLettres As String = ""

        For Each _item In _ListLotFab.ListLotFab

            If IsNumeric(Mid(_item.Value.EntiteRegroupement, Len(_item.Value.EntiteRegroupement) - 1, 2)) Then
                _item.Value._lettre = Mid(_item.Value.EntiteRegroupement, 1, Len(_item.Value.EntiteRegroupement) - 2)
                _item.Value._chiffre = Mid(_item.Value.EntiteRegroupement, Len(_item.Value.EntiteRegroupement) - 1)
            Else
                _item.Value._lettre = Mid(_item.Value.EntiteRegroupement, 1, Len(_item.Value.EntiteRegroupement) - 1)
                _item.Value._chiffre = Mid(_item.Value.EntiteRegroupement, Len(_item.Value.EntiteRegroupement))
            End If

            If memLettres <> _item.Value._lettre Then
                memLettres = _item.Value._lettre
                y1 = y1 + 1

                Dim _lbl As New System.Windows.Forms.Label
                _lbl.Name = "Lbl" & _item.Value._lettre
                _lbl.Text = _item.Value._lettre
                _lbl.Font = New System.Drawing.Font("Arial", 10, FontStyle.Bold)
                _lbl.Dock = DockStyle.Fill
                _lbl.TextAlign = ContentAlignment.MiddleCenter
                TableLayoutPanel1.Controls.Add(_lbl, 1, y1)

                'Boutons couleur'
                Dim _btnCouleur As New System.Windows.Forms.Button
                _btnCouleur.Text = ""
                _btnCouleur.Font = New System.Drawing.Font("Arial", 10, FontStyle.Bold)
                _btnCouleur.Name = "btn" & _item.Value._lettre
                _btnCouleur.Dock = DockStyle.Fill
                AddHandler _btnCouleur.Click, AddressOf ButtonsCouleur_Click

                Select Case _item.Value.Type
                    Case ""
                        _btnCouleur.Text = ""
                        _btnCouleur.BackColor = SystemColors.Control
                    Case "Stemas"
                        _btnCouleur.Text = "Stemas"
                        _btnCouleur.BackColor = Color.Orange
                    Case "Box"
                        _btnCouleur.Text = "box"
                        _btnCouleur.BackColor = Color.Yellow
                End Select
                TableLayoutPanel1.Controls.Add(_btnCouleur, 2, y1)
            End If

            'Parametre par defauts des boutons'
            Dim _btn As New System.Windows.Forms.Button
            _btn.Font = New System.Drawing.Font("Arial", 10, FontStyle.Bold)
            _btn.Name = "btn" & _item.Value._lettre & _item.Value._chiffre
            _btn.Dock = DockStyle.Fill
            AddHandler _btn.Click, AddressOf Buttons_Click
            If _item.Value.Fait = True Then
                _btn.Text = "Fait "
            Else
                _btn.Text = _item.Value._chiffre
            End If
            TableLayoutPanel1.Controls.Add(_btn, Val(_item.Value._chiffre) + 2, y1)

        Next

        'titre'
        Dim _lblTitre As New System.Windows.Forms.Button
        _lblTitre.Name = "LblTitre"
        _lblTitre.Text = "BETON LEICHT SEM " & _semaine
        _lblTitre.Font = New System.Drawing.Font("Arial", 30, FontStyle.Bold)
        _lblTitre.Dock = DockStyle.Fill
        _lblTitre.FlatStyle = FlatStyle.Flat
        TableLayoutPanel1.Controls.Add(_lblTitre, 1, 0)
        TableLayoutPanel1.SetColumnSpan(_lblTitre, TableLayoutPanel1.ColumnCount - 1)
        AddHandler _lblTitre.Click, AddressOf _lblTitre_Click
    End Sub


    Private Sub Buttons_Click(sender As Object, e As EventArgs)
        If (IsNumeric(sender.text)) Then
            sender.Text = "FAIT"
            _Fait = True
        Else
            If IsNumeric(Mid(sender.Name, Len(sender.Name) - 1, 2)) Then
                sender.text = Mid(sender.name, Len(sender.name) - 1, 2)
                _Fait = False
            Else
                sender.text = Mid(sender.name, Len(sender.name))
                _Fait = False
            End If
        End If
        Dim req As String = "update [dbo].[LotFabrication] set Fait = '" & _Fait & "' where Semaine = " & _annee & _semaine & " and idMachine = " & _idMachine & " and IdClient = " & _IdClient & " and EntiteRegroupement like '" & Mid(sender.name, 4) & "'"
        Using _odbcConnection As New ClassConnection.ClsOdbcConnection(ClassConnection.ClsChaineConnection.ChaineConnection.POTER)
            _odbcConnection.OdbcNotSelectQuery(req)
        End Using
    End Sub

    Private Sub ButtonsCouleur_Click(sender As Object, e As EventArgs)
        If sender.BackColor = SystemColors.Control Then
            sender.BackColor = Color.Yellow
            sender.text = "Box"
        ElseIf sender.BackColor = Color.Yellow Then
            sender.BackColor = Color.Orange
            sender.text = "Stemas"
        ElseIf sender.BackColor = Color.Orange Then
            sender.BackColor = SystemColors.Control
            sender.text = ""
        End If
        Dim req As String = "update [dbo].[LotFabrication] set Type = '" & sender.text & "' where Semaine = " & _annee & _semaine & " and idMachine = " & _idMachine & " and IdClient = " & _IdClient & " and EntiteRegroupement like '" & Mid(sender.name, 4) & "%'"
        Using _odbcConnection As New ClassConnection.ClsOdbcConnection(ClassConnection.ClsChaineConnection.ChaineConnection.POTER)
            _odbcConnection.OdbcNotSelectQuery(req)
        End Using
    End Sub

    Private Sub _lblTitre_Click(sender As Object, e As EventArgs)
        Dim resultMsg = InputBox("Choisir une semaine", "Choix semaine")
        If resultMsg.Length > 1 Then
            If IsNumeric(resultMsg) Then
                _semaine = resultMsg
                TableLayoutPanel1.Controls.Clear()
                generateTable()
            End If
        End If
    End Sub


End Class
