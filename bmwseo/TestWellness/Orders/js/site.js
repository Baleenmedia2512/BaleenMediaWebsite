// Write your JavaScript code.

$(function() {
    $("#button").click(function() {
        var OrderNumber = $('#onum').val();
        alert(OrderNumber);
        $.post('www.baleenmedia.com/LiveWebApp/saveTime.php',
            function(_Data, _Status) {
                alert(_Status);
                // if (_Data == 1) {
                //     alert('Updated');
                // } else {
                //     alert('oops! Something went wrong');
                //     return false;
                // }
            }
        );

    });


});