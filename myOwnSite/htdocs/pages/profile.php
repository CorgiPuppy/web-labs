<?php
    session_start();
    error_reporting(0);
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>CubeGuide</title>
    <meta name="description" content="Обучающий метод по сборке кубика Рубика">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/favicon.png" type='image/png'>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet/less" type="text/css" href="../css/additional/button.less">
    <link rel="stylesheet/less" type="text/css" href="../css/structure/nav.less">
    <link rel="stylesheet/less" type="text/css" href="../css/structure/header.less">
    <link rel="stylesheet/less" type="text/css" href="../css/structure/main.less">
    <link rel="stylesheet/less" type="text/css" href="../css/structure/footer.less">
    <script src="../scripts/less.js"></script>
</head>
    <body>
        <nav>
            <div class="logo">
                <a href="index.php">
                <img src="../img/logo.png" alt="CubeGuide">
                </a>
            </div>
            <ul class="links">
                <li class="link"><a href="index.php">Главная</a></li>
                <li id="link1" class="link"><a href="#">Обучение</a></li>
                <li id="link2" class="link"><a href="#">Таймер</a></li>
                <li id="link3" class="link"><a href="#">Контакты</a></li>
            </ul>
            <form>
                <img src="../img/<?= $_SESSION['user']['avatar'] ?>" alt="avatar">
                <h2><?= $_SESSION['user']['login'] ?></h2>
                <a href="../obj/sign/logout.php" class="btn">Выйти</a>
            </form>
            <form method="POST" action="../obj/profile/deleteProfile.php">
                <input type="hidden" name="profile_id" value="<?= $_SESSION['user']['id'] ?>">
                <button type="submit" class="btn" name="delete_profile_btn">Удалить профиль</button>
            </form>
        </nav>
        <header class="container">
            <div class="content">
                <h3>Добро пожаловать!</h3>
                <h1>Привет, Я Андрей, студент</h1>
                <p>Я написал этот обучающий материал, чтобы любой, кто захотел научиться собирать кубик Рубика, смог себе это позволить в кратчайшие сроки</p>
                <button class="btn" onclick='redirect("guide/guide_index.php")'>Перейти к материалам</button>
            </div>
            <div class="image">
                <img src="../img/header.png" alt="header">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="image">
                    <img src="../img/timer.png" alt="timer">
                </div>
                <div class="content">
                    <h1>Таймер</h1>
                    <p>Вы можете попробовать собрать свой первый кубик Рубика на время</p>
                    <button class="btn" onclick='redirect("timer/timer_index.php")'>Перейти к таймеру</button>
                </div>
            </div>
        </main>
        <footer class="container">
            <div class="column">
                <div class="logo">
                    <img src="../img/logo.png" alt="logo">
                </div>
            </div>
            <div class="column">
                <h4>Телефон</h4>
                <a href="tel:89821479831">8 982 147-98-31</a>
            </div>
            <div class="column">
                <h4>Почта</h4>
                <a href="mailto:andrey.zolotukhin2017@mail.ru">andrey.zolotukhin2017@mail.ru</a>
            </div>
        </footer>
        <div class="copyright">
            Copyright &copy; 2024. Все права защищены.
        </div>
        <script src="../scripts/linkButton.js"></script>
        <script src="../scripts/smooth.js"></script>
    </body>
</html>
