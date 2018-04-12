function modifier(id) {

    let input_title = document.getElementById("input_title");
    let input_body = document.getElementById("input_body");
    let input_id = document.getElementById("input_id");

    input_title.value = "";
    input_body.value = "";

    $(document).ready(function() {
        $.ajax({
            url: '/api/article/' + id, //Your api url
            type: 'GET', //type is any HTTP method
            dataType: 'json',
            success: function(json_res, statut) {
                input_title.value = json_res.data.title;
                input_body.value = json_res.data.body;
                input_id.dataset.id = json_res.data.id;
            }
        });
    });

}

function sendModif() {

    let form = document.getElementById("myform");
    let input_title = document.getElementById("input_title");
    let input_body = document.getElementById("input_body");
    let input_id = document.getElementById("input_id");
    let file = $('#input_file')[0].files[0]
    if (file) {
        console.log(file.name);
    }
    let article = {
        'title': input_title.value,
        'body': input_body.value,
        'urlImage': file ? 'img/articles/' + file.name : '',
        'file': new FormData(form)
    };

    $(document).ready(function() {
        $.ajax({
            url: '/api/article/' + input_id.dataset.id, //Your api url
            type: 'PUT', //type is any HTTP method
            dataType: 'json',
            data: article,
            success: function(json_res, statut) {
                console.log(statut);
            }
        });
    });

}

function supprimer(id) {

}