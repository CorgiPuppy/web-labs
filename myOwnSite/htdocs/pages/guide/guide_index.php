<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']) {
        header('Location: guide_profile.php');
    }
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <title>CubeGuide | Guide</title>
        <meta name="description" content="Обучающий метод по сборке кубика Рубика">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="../../img/favicon.png" type='image/png'>
        <link rel="stylesheet" href="../../css/index.css">
        <link rel="stylesheet/less" type="text/css" href="../../css/additional/button.less">
        <link rel="stylesheet/less" type="text/css" href="../../css/structure/nav.less">
        <link rel="stylesheet/less" type="text/css" href="../../css/structure/header.less">
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
                <li id="link1" class="link"><a href="../index.php">Главная</a></li>
                <li id="link2" class="link"><a href="#">Обучение</a></li>
                <li class="link"><a href="../timer/timer_index.php">Таймер</a></li>
                <li id="link3" class="link"><a href="#">Контакты</a></li>
            </ul>
            <button class="btn" onclick='redirect("../log/login.php")'>Войти</button>
        </nav>
        <main>
            <h3>Введение</h3>
            <p><br>Каждый из нас хотя бы раз в своей жизни пытался собрать кубик Рубика, но мало у кого это выходило. На первый взгляд это может показаться довольно трудным. На самом же деле кубик может покориться любому желающему, независимо от его математических способностей, нужно лишь понять логику сборки и запомнить несколько очень простых алгоритмов. С помощью этой инструкции, разработанной специально для начинающих, вы легко соберете ваш первый кубик. Давайте же начнем.</p>
            <h3>Устройство кубика</h3>
            <p><br>Для начала нам нужно понять, из каких элементов состоит кубик Рубика. Как говорится, все гениальное – просто. Кубик 3x3x3 состоит из <i>6 центов</i>, <i>12 ребер</i> и <i>8 углов</i>. Внутри всей конструкции находится крестовина, благодаря которой двигаются грани, но для самой сборки она не понадобится, поэтому разберемся с основными элементами.
            <br>Каждый центр показывает, что на этой стороне в собранном состоянии будет один из <i>6 цветов</i> - белый, желтый, красный, оранжевый, синий и зеленый. Нужно понимать, что все центры никаким образом не меняют своего положения относительно друг друга во время сборки, поэтому белый всегда находится напротив желтого, красный напротив оранжевого и синий напротив зеленого.
            <br>Каждое из 12 ребер всегда имеет <i>2 цвета</i>. Очень важно понять, что ребро представляет собой цельный элемент, цвета которого мы не можем разбить, как бы мы ни вращали грани.
            <br>То же самое относится и к каждому из 8 углов. Они имеет 3 цвета, которые нельзя разделить. Например, сине-красно-белый угол всегда таким и останется, где бы ни находился, можете сами в этом убедиться.
            <br>Таково механическое строение любого классического кубика 3х3x3 – скоростного или же самого простого из палатки.
            <h4>Язык вращений</h4>
            <br><p>Для того, чтобы понимать формулы, используемые для сборки, нужно ознакомиться с языком вращений.

            <br>Язык вращений – это особые обозначения движений граней кубика, при помощи который можно записать какой-либо алгоритм, решение или скрамбл (последовательность ходов, с помощью которой запутывают кубик).

            <br>F - front - фронтальная сторона
            <br>B - back - задняя сторона
            <br>L - left - левая сторона
            <br>R - right - правая сторона
            <br>U - up - верхняя сторона
            <br>D - down - нижняя сторона


            <br>Fw (f) - фронтальная сторона вместе со средним слоем
            <br>Bw (b) - задняя сторона вместе со средним слоем
            <br>Lw (l) - левая сторона вместе со средним слоем
            <br>Rw (r) - правая сторона вместе со средним слоем
            <br>Uw (u) - верхняя сторона вместе со средним слоем
            <br>Dw (d) - нижняя сторона вместе со средним слоем</p>


            <h2>Также существуют более редкие движения, которые практически никогда не используются в сборках:</h2>
            <p><br>M - middle - средний слой, находящийся между правой (R) и левой (L) сторонами
            <br>S - standing - средний слой, находящийся между фронтальной (F) и задней (B) сторонами
            <br>E - equatorial - средний слой, находящийся между верхней (U) и нижней (D) сторонами


            <br>Кроме вращений граней куба, существуют обозначения, указывающие на изменения положения кубика в пространстве. Эти движения называются перехватами:

            <br>x - весь куб вращается от себя по плоскости, совпадающей с правым (R) и левым (L) слоями (F превращается в U)
            <br>x' - весь куб вращается к себе по плоскости, совпадающей с правым (R) и левым (L) слоями (F превращается в D)
            <br>y - весь куб вращается по часовой стрелке в горизонтальной плоскости (F превращается в L)
            <br>y' - весь куб вращается против часовой стрелки в горизонтальной плоскости (F превращается в R)
            <br>z - весь куб вращается по часовой стрелке в фронтальной плоскости (U превращается в R)
            <br>z' - весь куб вращается против часовой стрелки в фронтальной плоскости (U превращается в L)</p>

            <h2>Движения кубика и перехваты записываются в соответствии со следующими правилами:</h2>

            <p><br>- Если написана только буква - крутим сторону по часовой стрелке, как если бы мы смотрели на грань в лицо
            <br>- Если после буквы стоит штрих «'» - крутим сторону против часовой стрелки, как если бы мы смотрели на грань в лицо
            <br>- Если после буквы стоит «2» - крутим эту сторону на 180 градусов. Если ещё стоит штрих, к примеру U2', то это означает, что в данном алгоритме удобнее вращать U2 против часовой стрелки</p>
            <h3>1 этап - сборка правильного креста</h3>
            <p>Итак, первый этап сборки кубика Рубика - сборка правильного креста на любой из сторон, для удобства мы будем собирать его на белой. Крест является правильным, если цвет реберных наклеек совпадает с цветом наклеек центров.</p>
            <p>Для удобства будем ставить элементы креста по одному. Для начала ставим белый центр наверх и на кубике находим 4 ребра с белым цветом: бело-красное, бело-оранжевое, бело-синее и бело-зеленое. После этого выбираем любое, его мы и будем ставить первым. У нас может возникнуть несколько ситуаций, каждая из которых рассмотрена на картинках ниже.

            <p>Если ребро стоит в среднем слое, то просто движениями R или L' ставим их к белому центру.</p>
            <p>Но это место может оказаться уже занято другим ребром с белым цветом, поэтому мы должны отвести его в сторону при помощи поворотов U, U' или U2 и поставить нужное нам ребро уже знакомыми поворотами R или L'.</p>
            <p>Если же ребро окажется на верхнем или нижнем слое, то движениями F или F' ставим их в средний слой и делаем R или L', как и до этого.</p>
            <p>Также ребро может оказаться в нижнем слое и белым цветом смотреть вниз. В таком случае ставим свободное место наверху над ним и поднимаем ребро движением F2.</p>

            <p>Таким образом нужно поставить к белому центру все 4 ребра.</p>
            <h3>2 этап - сборка первого слоя</h3>
            <p>После сборки правильного креста следует сборка первого слоя.</p>
            <p>Находим один из четырех белых углов, находим место на нижнем слое, где этот уголок должен находиться (например, бело-красно-синий уголок должен стоят между синим и красным элементами креста), ставим найденный уголок над этим местом. Ниже рассмотрены все случаи, которые могут выпасть на данном этапе. Выполнив алгоритм, мы поставим уголок на свое место. Подобным образом ставим оставшиеся три. Обращаем ваше внимание на случаи, когда белый угол находится не на верхнем слое, а внизу.</p>
            <h3>3 этап - сборка второго слоя</h3>
            <p>На данном этапе собираем второй слой. Для этого необходимо найти 4 ребра и поставить их на свои места между центрами второго (среднего) слоя.</p>
            <p>Как уже было сказано выше, находим 4 ребра без желтого цвета. Выбираем на верхнем слое одно, которое будем ставить первым, и крутим верхнюю грань до тех пор, пока одна из наклеек этого ребра не совпадет по цвету с центром. Далее получаем одну из ситуаций. Как и в предыдущем этапе, элементы могу оказаться не на верхнем слое, а ниже, эти ситуации также рассмотрены.</p>
            <h3>4 этап - сборка желтого креста</h3>
            <p>На этапе сборки желтого креста может быть всего лишь 3 ситуации, решив которые, мы его получим. Также нам может повезти, если желтый крест соберется сам.</p>
            <h3>5 этап - сборка желтой стороны</h3>
            <p>После того, как собран желтый крест, нам может выпасть 7 ситуаций, для каждой из которых придется запомнить свой алгоритм, чтобы собрать желтую сторону.</p>
            <h3>6 этап - сборка углов верхнего слоя</h3>
            <p>Выбираем любой уголок и движениями U, U' и U2 ставим его на свое место, чтобы оба цвета угла совпали с двумя цветами на нижних слоях. В зависимости от полученной ситуации, делаем один из алгоритмов. Обращаем внимание, что они делаюся из другого положения, поэтому нужно взять кубик белым цветом к себе.</p>
            <p>Могут возникнуть 2 дополнительные ситуации:</p>
            <p>Уголок встал на свое место, но рядом с ним на свое место встал еще один. Продолжаем крутить верхнюю грань, следя теперь за другим несобранным уголком. Он уже встанет так, как нужно в первых двух ситуациях.</p>
            <p>Уголок встал на свое место, но по диагонали на свое место встал еще один. Берем кубик белым цветом к себе и делаем алгоритм “Глаза справа”. Выбираем любой уголок и ставим его на своё место. Теперь уже всё получится так, как нужно для первых двух ситуаций.</p>
            <h3>7 этап - сборка ребер верхнего слоя</h3>
            <p>Мы уже на финишной прямой! Осталось расставить ребра по своим местам. Снова ничего сложного, всего лишь 4 ситуации, для решения которых понадобится знать только один алгоритм.</p>
            <h1>Поздравляем! Вы собрали ваш первый кубик!</h1>
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
    </body>
</html>
