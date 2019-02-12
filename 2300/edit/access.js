

$(document).ready(function(){

    $('#ac').keypress(function(e) {
        var key = e.which;
        // 13, the enter key
        if (key == 13) {
            alert("gas");
        }
    });

});

