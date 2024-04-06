$(document).ready(function() {
    $("#login").on('click', function() {
        var email = $("#login-email").val();
        var password = $("#login-password").val();

        if (email == "" || password == "") {
            alert('Please check your inputs');
        } else {
            $.ajax({
                url: '/server/auth/auth.php',
                method: 'POST',
                data: {
                    login: 1,
                    email: email,
                    password: password
                },
                success: function(response) {
                    console.log(response);
                    if (response == 'success') {
                        window.location.href = '/dashboard.php';
                    }
                },
                dataType: 'text'
            })
        }
 
    })
})