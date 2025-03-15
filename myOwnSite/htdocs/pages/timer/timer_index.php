<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']) {
        header('Location: timer_profile.php');
    }
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>CubeGuide | Timer</title>
        <link rel="shortcut icon" href="../../img/favicon.png" type='image/png'>
        <link rel="stylesheet" href="../../css/index.css">
        <link rel="stylesheet/less" type="text/css" href="../../css/additional/button.less">
        <link rel="stylesheet/less" type="text/css" href="../../css/structure/nav.less">
        <link rel="stylesheet/less" type="text/css" href="../../css/structure/main.less">
        <link rel="stylesheet/less" type="text/css" href="../../css/structure/footer.less">
        <script src="../../scripts/less.js"></script>
    </head>
    <body>
        <nav>
            <div class="logo">
                <a href="../index.php">
                <img src="../../img/logo.png" alt="CubeGuide">
                </a>
            </div>
            <ul class="links">
                <li class="link"><a href="../index.php">Главная</a></li>
                <li id="link1" class="link"><a href="../guide/guide_index.php">Обучение</a></li>
                <li id="link2" class="link"><a href="#">Таймер</a></li>
                <li id="link3" class="link"><a href="#">Контакты</a></li>
            </ul>
            <button class="btn" onclick='redirect("../log/login.php")'>Войти</button>
        </nav>
        <main>
        	<div class="timer">
        		<div class="content">
        			<div class="watch">
        				<h2 id="watch">00:00:00:00</h2>
        			</div>
                    <div class="buttons">
                        <button class="btn" id="start">Старт</button>
                        <button class="btn" id="pause">Пауза</button>
                        <button class="btn" id="reset">Сбросить</button>
                    </div>
        		</div>
        	</div>
    	</main>
        <footer class="container">
            <div class="column">
                <div class="logo">
                    <img src="../../img/logo.png" alt="logo">
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
        <script src="../../scripts/linkButton.js"></script>
        <script src="../../scripts/smooth.js"></script>
        <script src="../../scripts/timer.js"></script>
    </body>
</html>