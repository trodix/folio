function sendForm(contact) {
    $.ajax({
        type: 'post',
        url: '/contact/ajax',
        cache: 'false',
        data: contact,
        datatype: 'json',
        200: function(data) {
            //vider les champs du formulaire
            $('.form-group').empty();
            //ajout des infos json dans la page
            if (data.successMessage) {
                var msg = "<div class='alert alert-success'>" + data.successMessage + "</div>";
                $('#contact-form-contener').insertAfter(msg);
            } else {
                var msg = "<div class='alert alert-danger'>" + data.errorMessage + "</div>";
                $('#contact-form-contener').insertAfter(msg);
            }
        }
    });
}


// function getProduit(categChoisie) {
//     $.ajax({
//         url: "include/getProduit.inc.php",
//         cache: false,
//         data: "zlCateg=" + escape(categChoisie),
//         datatype: "html",
//         success: function(html) {
//             $('#zlProduit').empty();
//             $('#zlProduit').append(html);
//         }
//     });
//     $('ca').empty();
// }

// function getProduitXML(categChoisie) {
//     $.ajax({
//         url: "include/getProduitXML.inc.php",
//         cache: false,
//         data: "zlCateg=" + escape(categChoisie),
//         datatype: "xml",
//         success: function(xml) {
//             $('#zlProduit').empty();
//             $(xml).find("PRODUIT").each(function() {
//                 var info = "<option value='" + $(this).find("CATEGORIE").text() + "'>";
//                 info += $(this).find("LIBELLE").text() + '</option>';
//                 $('#zlProduit').append(info);
//             });
//         }
//     });
//     $('ca').empty();
// }