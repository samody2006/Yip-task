$(document).ready(function() {
    $('#registerForm').on('submit', function(e) {
        e.preventDefault(); 

        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#formErrors').html(''); 
                if (response.success) {
                    var successHtml = '<div class="alert alert-success">';
                    successHtml += 'Registration successful! Welcome on baord, ' + response.success.username + '!';
                    successHtml += '</div>';
                    $('#formErrors').html(successHtml);
                    $('#registerForm')[0].reset(); 
                }
            },
            error: function(xhr) {
                var errors = JSON.parse(xhr.responseText);
                var errorHtml = '<div class="alert alert-danger">';
                $.each(errors.errors, function(field, error) {
                    errorHtml += '<p>' + error + '</p>';
                });
                errorHtml += '</div>';
                $('#formErrors').html(errorHtml);
            }
        });
    });
});
