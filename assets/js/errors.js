$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: siteUrls.contactStore,
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                console.log('Response:', response);
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonText: 'OK'
                    }).then(function(result) {
                        console.log('Result:', result);
                        if (result.isConfirmed) {
                            window.location.href = siteUrls.home;
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error:', status, error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred. Please try again later.'
                });
            }
        });
    });
});
