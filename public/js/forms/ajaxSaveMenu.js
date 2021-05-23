function saveItemMenu(item) {
    id = item.name;
    item = encodeURIComponent(item.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
        }
    }

    // Отправка запроса на сервер
    xhr.send('item=' + item + '&id=' + id);
}

function saveItemSubMenu(item) {
    id = item.name;
    item = encodeURIComponent(item.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
        }
    }

    // Отправка запроса на сервер
    xhr.send('itemSub=' + item + '&id=' + id);
}

function saveLinkMenu(link) {
    id = link.name;
    link = encodeURIComponent(link.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
        }
    }

    // Отправка запроса на сервер
    xhr.send('link=' + link + '&id=' + id);
}

function saveLinkSubMenu(link) {
    id = link.name;
    link = encodeURIComponent(link.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
        }
    }

    // Отправка запроса на сервер
    xhr.send('linkSub=' + link + '&id=' + id);
}

function appendMenu() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
            setTimeout(() => {location.reload()}, 2000);
        }
    }

    // Отправка запроса на сервер
    xhr.send('newMenu=true');
}

function appendSubMenu(id) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
            setTimeout(() => {location.reload()}, 2000);
        }
    }

    // Отправка запроса на сервер
    xhr.send('newSubMenu=' + id);
}

function deletedMenu(link) {
    id = link.name;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
            setTimeout(() => {location.reload()}, 2000);
        }
    }

    // Отправка запроса на сервер
    xhr.send('delMenu=true&id=' + id);
}

function deletedSubMenu(link) {
    id = link.name;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/menu');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
            setTimeout(() => {location.reload()}, 2000);
        }
    }

    // Отправка запроса на сервер
    xhr.send('delMenuSub=true&id=' + id);
}

window.onload = function () {
    document.forms.saveMenu.onsubmit = function (e) {
        e.preventDefault();
    }
};