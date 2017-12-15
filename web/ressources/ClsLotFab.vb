Public Class ClsLotFab

    Property ListLotFab As New Dictionary(Of Integer, ClsLigneLotFab)

    Public Class ClsLigneLotFab
        Property EntiteRegroupement As String
        Property Type As String = ""
        Property Fait As Boolean
        Property _lettre As String
        Property _chiffre As Integer
    End Class

    Public Sub Add(_int As Integer, _lf As ClsLigneLotFab)
        ListLotFab.Add(_int, _lf)
    End Sub

End Class
