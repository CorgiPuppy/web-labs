<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>CubeGuide | Register</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type='image/png'>
    <link rel="stylesheet/less" type="text/css" href="../../css/login/login.less">
    <script src="../../scripts/less.js"></script>
</head>
<body>
    <main>
        <form action="../../obj/sign/signup.php" method="POST" enctype="multipart/form-data">
            <label>Фамилия, имя (если имеется, отчество)</label>
            <input type="text" name="name" placeholder="Введите ваше полное имя..." required>
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин..." required>
            <label>Изображение профиля</label>
            <input type="file" id="file-input" name="avatar" required>
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите свой электронный адрес..." required>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите свой пароль..." required>
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Повторите написанный выше пароль..." required>
            <button type="submit">Зарегистрироваться</button>
            <label id="label-reg">У вас уже есть акканут?<a href="login.php" id="a-reg">Авторизируйтесь</a></label>
            <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<label class="msg">'  . $_SESSION['error_message'] . '</label>';
                }
                unset($_SESSION['error_message']);
            ?>
        </form>
    </main>
</body>