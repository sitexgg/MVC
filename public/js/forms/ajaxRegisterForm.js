window.onload = function () {
    document.forms.registerForm.onsubmit = function (e) {
        e.preventDefault();

        let login = document.forms.registerForm.login.value;
        login = encodeURIComponent(login);
        let pass = document.forms.registerForm.pass.value;
        pass = encodeURIComponent(pass);
        let pass2 = document.forms.registerForm.pass2.value;
        pass2 = encodeURIComponent(pass2);

        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/account/register');

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Обработка запроса на сервер
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                // Полученый ответ от сервера
                if(xhr.responseText == 'registration') {
                    location.href = '/main/index';
                } else {
                    modalWindow(xhr.responseText);
                }
            }
        }

        // Отправка запроса на сервер
        xhr.send('login=' + login + '&pass=' + pass + '&pass2=' + pass2);
    }
};