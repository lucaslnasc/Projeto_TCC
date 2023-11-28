$(document).ready(function() {
    $('#checkbox').on('change', function() {
        $.ajax({
            url: 'favoritarLocal.php',
            type: 'POST',
            data: $('#form').serialize(),
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.log('Error: ' + error);
            }
        });
    });
});