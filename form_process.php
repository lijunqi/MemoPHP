<?php

if (isset($_POST['subm'])) {
    echo "Yes. It works.<br>";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validation
    if (strlen($username) < 5) {
        echo "<h1>Username has to be longer than 5</h1>";
    }
    printf("Username: %s Password: %s", $username, $password);
}

?>
