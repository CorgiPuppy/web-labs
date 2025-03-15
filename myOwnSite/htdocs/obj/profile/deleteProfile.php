<?php

    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');
    
    $DB = new DB();
    
    if(isset($_POST['delete_profile_btn'])) {
        $id = $_POST['profile_id'];
    
        if($DB->deleteData('users', $id)) {
            $_SESSION['error_message'] = 'Профиль удален';
            header('Location: ../../pages/log/login.php');
        } else {
            $_SESSION['error_message'] = 'Ошибка удаления профиля';
            header('Location: ../../pages/log/login.php');
        }
    }
?>
