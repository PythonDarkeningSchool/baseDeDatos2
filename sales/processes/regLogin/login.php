<?php
    session_start();
    require_once '../../class/connection.php';
    require_once '../../class/users.php';

    $obj = new Users();

    $data = array(
        $_POST['user'],
        $_POST['password'],
    );

    echo $obj -> loginUser($data);

?>