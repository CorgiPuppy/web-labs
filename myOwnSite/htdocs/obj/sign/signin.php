<?php

    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $DB = new DB();
    
    $check_user = $DB->checkUser($login, $password);
    
    if ($check_user && $check_user->num_rows > 0) {
        $user = $check_user->fetch_assoc();
        $_SESSION['user'] = $user;
        header('Location: ../../pages/index.php');
    } else {
        $_SESSION['error_message'] = 'Неверный логин или пароль!';
        header('Location: ../../pages/log/login.php');
    }
?>