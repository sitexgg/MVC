<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/adminStyle.css">
    <title><?=$title?></title>
</head>
<body>
    <header>

    </header>
    <nav>
        <ul>
            <li class="navItem" url-data="/admin/panel" onclick="location.href = '/admin/panel'">
                <img src="/public/img/admin/leftNav/home.svg">Главная</li>
            <li class="navItem" onclick="if(this.nextSibling.nextSibling.style.display != 'block') {this.nextSibling.nextSibling.style.display = 'block';} else {this.nextSibling.nextSibling.style.display = 'none'}">
                <img src="/public/img/admin/leftNav/settings.svg">Настройки</li>
                <ul class="hideNavItem">
                    <li class="navItem" url-data="/admin/settings" onclick="location.href = '/admin/settings'">Основные</li>
                    <li class="navItem" url-data="/admin/menu" onclick="location.href = '/admin/menu'">Настройки меню</li>
                </ul>
                <li class="navItem" url-data="/admin/createPage" onclick="location.href = '/admin/createPage'">
                    <img src="/public/img/admin/leftNav/createPage.svg">Новая страница</li>
            </ul>
    </nav>
    <div id="all">
        <?=$content?>
    </div>
    <footer>
        access
    </footer>
    <script>
        // Отображение активных элементов меню
        document.querySelector('li[url-data="'+location.pathname+'"]').classList.add('navItemActive');
        // Отображать список если выбран элемент
        if(document.querySelector('.hideNavItem > li.navItemActive')) {
            document.querySelector('.hideNavItem > li.navItemActive').parentNode.style.display = 'block';
        } 
        
    </script>
    <script src="/public/js/modalWindow.js"></script>
</body>
</html>