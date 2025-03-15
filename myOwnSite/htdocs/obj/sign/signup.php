<?php
    
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');
    
    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    if ($password === $password_confirm) {
        $path = 'uploads/' . time() . $_FILES["avatar"]["name"];
        if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], '../../img/' . $path)) {
            $_SESSION['error_message'] = 'Не удалось загрузить файл';
            header('Location: ../../pages/log/register.php');
        } else {
            $password = md5($password);
            $data = [
                'name' => $name,
                'login' => $login,
                'email' => $email,
                'password' => $password,
                'avatar' => $path
            ];

            $DB = new DB();

            $inserted = $DB->insertData('users', $data);
            $_SESSION['error_message'] = 'Регистрация успешно пройдена!';
            header('Location: ../../pages/log/login.php');
        }
    } else {
        $_SESSION['error_message'] = 'Пароли не совпадают!';
        header("Location: ../../pages/log/register.php");
    }
?>