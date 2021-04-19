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
    </header>
    <div class="headerTwo">
        <div class="logo" onclick="location.href = '/'">
            <img src="/public/img/logoTwo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
            <h1><?=$shortDes?></h1>
            <img src="/public/img/logo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
        </div>
        <div class="search">
            <input type="text" placeholder="<?php switch($_SESSION['lang']) {case 'ru': echo 'Поиск';break; case 'kz': echo 'Ізденіс';break; case 'en': echo 'Search';break;} ?>">
        </div>
    </div>

    <?=$content?>


    <footer>
        <br>
        <hr>
        <div class="footerContent">
            <div style="width: 20%;">
                <div class="footerLogo" onclick="location.href = '/'">
                    <img src="/public/img/logoTwo.png" style="background: white; border-radius: 100px;" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
                    <img src="/public/img/logo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
                    <h1 style="width: 50%;"><?=$shortDes?></h1>
                </div>
            </div>
            <div class="footerMenu">
                <ul>
                    <?php
                        foreach($menu as $k => $v) {
                            echo '<li class="menuItem" onclick="location.href = \''.$v['link'].'\'">'.$v['item'].'</li>';
                        }
                    ?>
                </ul>
            </div>
            <div>
                <?php
                    $adress = '';
                    switch($_SESSION['lang']) {
                        case 'ru':
                            $adress = 'Aдресс библиотеки: ';
                        break;
                        case 'kz':
                            $adress = '';
                        break;
                        case 'en':
                            $adress = 'Library adress: ';
                        break;
                    }

                    $phone = '';
                    switch($_SESSION['lang']) {
                        case 'ru':
                            $phone = 'Контактные телефоны: ';
                        break;
                        case 'kz':
                            $phone = 'Байланыс телефондар';
                        break;
                        case 'en':
                            $phone = 'Contact phones: ';
                        break;
                    }


                    echo '<b>'.$adress.'</b>'.$company['adress_'.$_SESSION['lang']].'<br>';
                    echo '<b>'.$phone.'</b>'.$company['phone'].'<br>';
                    echo '<b>Fax: </b>'.$company['fax'].'<br>';
                    echo '<b>E-mail: </b>'.$company['email'].'<br>';
                ?>
            </div>
        </div>
        <div>
            <hr>
            <p style="text-align: center; margin: 10px;">
                <?php echo '©'. date('Y').'<br>'.$shortDes?>
            </p>
        </div>
    </footer>
    <script src="/public/js/modalWindow.js"></script>
</body>
</html>


