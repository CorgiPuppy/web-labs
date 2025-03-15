<?php

    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');

    $login = $_SESSION['user']['login'];
    $time = $_POST['time'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && isset($_SESSION['user'])) {
        $data = [
            'name' => $login, 
            'time' => $time
        ];

        $DB = new DB();
            
        $result = $DB->insertData('timer', $data);
    
        if ($result) {
            echo "Данные успешно добавлены в базу данных.";
        } else {
            echo "Ошибка при добавлении данных в базу данных.";
        }
    } else {
        echo "Не удалось получить данные из формы или пользователь не авторизован.";
    }
?>