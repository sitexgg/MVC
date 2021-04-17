<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/style.css">
    <title><?=$title?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <menu>
            <ul>
                <?php
                    foreach($menu as $k => $v) {
                        echo '<li class="menuItem" onclick="location.href = \''.$v['link'].'\'">'.$v['item'].'</li>';
                    }
                ?>
            </ul>
        </menu>
        <div class="lang">
            <span onclick="location.href = '?lang=kz'">KZ</span>
            /
            <span onclick="location.href = '?lang=ru'">RU</span>
            /
            <span onclick="location.href = '?lang=en'">EN</span>
        </div>
        <span style="float: right;color: red; font-weight: 900;">
        <?=$_SESSION['lang']?></span>
    </header>
    <div class="headerTwo">
        <div class="logo" onclick="location.href = '/'">
            <img src="/public/img/logo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
            <p><?=$title?></p>
        </div>
    </div>

    <?=$content?>

    <script src="/public/js/modalWindow.js"></script>
</body>
</html>