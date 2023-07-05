import $ from "jquery";

setInterval(function(){
    $.ajax({
        type : "post",
        url : wpCredentials.url,
        data: {
            action : 'counter_libro_ajax'
        },
        error: function(response){
            console.log(response);
        },
        success: function(response) {
            $("#counter-libro").val(response);
        }
    })
}, 1000);
clearInterval();