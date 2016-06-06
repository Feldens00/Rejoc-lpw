$(document).ready(function() {


    $("#products_add_form").on("submit", function (e) {

        var url = $("#products_add_form").attr("action");
 
        var formData = new FormData($(this)[0]);
            
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {

                var json = $.parseJSON(data);

                if (json.status == 0) {

                    $("#products_add_output").empty();
                    $("#products_add_output").append('<div class="alert alert-danger">' + json.message + '</div>');

                    setTimeout(function () {
                        $("#products_add_output").empty();
                    }, 2000);

                } else {

                    $("#products_add_output").empty();
                    $("#products_add_output").append('<div class="alert alert-success">' + json.message + '</div>');


                    setTimeout(function () {
                        window.location.replace("http://localhost/trabalhoRestauranteEvandro/views/admin/cardapio/");
                    }, 2000);

                }

            }
        });

        return false;

    });
}); 