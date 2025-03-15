<?php
    session_start();
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>CubeGuide | Login</title>
        <link rel="shortcut icon" href="../../img/favicon.png" type='image/png'>
        <link rel="stylesheet/less" type="text/css" href="../../css/login/login.less">
        <script src="../../scripts/less.js"></script>
    </head>
    <body>
        <main>
            <form action="../../obj/sign/signin.php" method="POST">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин..." required>
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите свой пароль..." required>
                <button type="submit">Войти</button>
                <label id="label-reg">У вас нет акканута? <a href="register.php" id="a-reg">Зарегистрируйтесь</a></label>
                <?php
                    if (isset($_SESSION['error_message'])) {
                        echo '<label class="msg">'  . $_SESSION['error_message'] . '</label>';
                    }
                    unset($_SESSION['error_message']);
                ?>
            </form>
        </main>
    </body>
</html>