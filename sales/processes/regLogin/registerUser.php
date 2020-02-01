<?php

    require_once '../../class/connection.php';
    require_once '../../class/users.php';

    $obj = new Users();

    $pass = sha1($_POST['password']);
    $data = array(
        $_POST['name'],
        $_POST['last-name'],
        $_POST['user'],
        $pass
    );

    echo $obj -> registerUser($data);

?>