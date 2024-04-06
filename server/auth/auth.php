<?php 
    session_start();

    require('../server-config.php');
    echo($_SESSION['loggedIn']);
    if (isset($_SESSION['loggedIn'])) {
        header('Location: ../../index.php');
        exit();
    };
    if (isset($_POST['login'])) {
        $email = $connection->real_escape_string($_POST['email']);
        $password = $connection->real_escape_string($_POST['password']);
        $data = $connection->query(query: "SELECT id FROM users WHERE email='$email' AND password='$password'");
        if ($data->num_rows > 0 ) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $email;
            exit('success');
        } else {
            exit('failed');
        };

        exit($email . " = " . $password);
    }
?>