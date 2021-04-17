window.onload = function () {
    document.forms.createPageForm.onsubmit = function (e) {
        e.preventDefault();

        let title = document.forms.createPageForm.title.value;
        title = encodeURIComponent(title);
        let namePage = document.forms.createPageForm.namePage.value;
        namePage = encodeURIComponent(namePage);

        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/admin/createPage');

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Обработка запроса на сервер
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                // Полученый ответ от сервера
                modalWindow(xhr.responseText);
            }
        }

        // Отправка запроса на сервер
        xhr.send('title=' + title + '&namePage=' + namePage);
    }
};