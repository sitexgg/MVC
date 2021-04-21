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
                        echo '<li class="menuItem"><span onclick="location.href = \''.$v['link'].'\'">'.$v['item'].'</span>';
                        echo '<ul class="hideMenuItem">';
                        foreach($submenu as $k2 => $v2) {
                            if($v['id'] == $v2['menu_id']) {
                                echo    '<li  onclick="location.href = \''.$v2['link'].'\'">'.$v2['item'].'</li>';
                            }
                        }
                        echo '</ul></li>';
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
        <div class="account">
            <img src="/public/img/user.svg">
                <?php
                    $signin = '<span onclick="location.href = \'/account/login\';">'.$signin. ' </span>';
                    $signup = '<span onclick="location.href = \'/account/register\';">' . $signup.'</span>';

                    if(isset($_SESSION['login']) && !empty($_SESSION['login'])) {
                        $signin = '<span onclick="location.href = \'/main/index\';">'.$_SESSION['login']. ' </span>';
                        $signup = '<span onclick="location.href = \'/account/logout\';">'.$exit. ' </span>';
                    }

                    echo '<p>'.$signin.' / '.$signup.'</p>';
                ?>
        </div>
    </header>
    <div class="headerTwo">
        <div class="logo" onclick="location.href = '/'">
            <img src="/public/img/logoTwo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
            <h1><?=$shortDes?></h1>
            <img src="/public/img/logo.png" alt="Логотип Казахского Государственного Женского Педагогического Университета Научной библиотеки">
        </div>
        <div class="search">
            <input type="text" placeholder="<?=$search?>">
            <svg class="svg" style="position: relative; left: -40px;" height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title></title><desc></desc><defs></defs><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#929292"><path d="M19.4271164,21.4271164 C18.0372495,22.4174803 16.3366522,23 14.5,23 C9.80557939,23 6,19.1944206 6,14.5 C6,9.80557939 9.80557939,6 14.5,6 C19.1944206,6 23,9.80557939 23,14.5 C23,16.3366522 22.4174803,18.0372495 21.4271164,19.4271164 L27.0119176,25.0119176 C27.5621186,25.5621186 27.5575313,26.4424687 27.0117185,26.9882815 L26.9882815,27.0117185 C26.4438648,27.5561352 25.5576204,27.5576204 25.0119176,27.0119176 L19.4271164,21.4271164 L19.4271164,21.4271164 Z M14.5,21 C18.0898511,21 21,18.0898511 21,14.5 C21,10.9101489 18.0898511,8 14.5,8 C10.9101489,8 8,10.9101489 8,14.5 C8,18.0898511 10.9101489,21 14.5,21 L14.5,21 Z"></path></g></g></svg>
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
                    echo '<b>'.$adress.': </b>'.$company['adress_'.$_SESSION['lang']].'<br>';
                    echo '<b>'.$phone.': </b>'.$company['phone'].'<br>';
                    echo '<b>Fax: </b>'.$company['fax'].'<br>';
                    echo '<b>E-mail: </b>'.$company['email'].'<br>';
                ?>
            </div>
        </div>
        <div>
            <hr>
            <p style="text-align: center; margin: 10px;">
                <?php echo '© '. date('Y').'<br>'.$shortDes?>
            </p>
        </div>
    </footer>
    <script src="/public/js/modalWindow.js"></script>
</body>
</html>


