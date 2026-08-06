$(document).ready(function(){

    $("#loginform").bind("submit", function(){

        $.ajax({

            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(response),

            success: function(){

                $("body").overhang({
    
                    type: "success",
                    message: "Redirigiendo..."
    
                });


            },

            error: function(){

                $("body").overhang({

                    type: "error",
                    message: "Algo salio mal"

                });

            }

        })

    }); 

});