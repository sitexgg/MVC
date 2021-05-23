function appendNews() {    

    let titleNews = document.forms.saveNews.title.value;
    let contentNews = document.forms.saveNews.content.value;
    let dateNews = document.forms.saveNews.date.value;
    

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/news');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Обработка запроса на сервер
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            // Полученый ответ от сервера
            modalWindow(xhr.responseText);
        }
    }

    // Отправка запроса на сервер
    xhr.send('title=' + titleNews + '&content=' + contentNews + '&date=' + dateNews);
}

function changeNews(idNews) {

        let titleNews = document.forms.saveNews.title.value;
        let contentNews = document.forms.saveNews.content.value;
        let dateNews = document.forms.saveNews.date.value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/admin/news');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
        // Обработка запроса на сервер
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                // Полученый ответ от сервера
                modalWindow(xhr.responseText);
            }
        }
    
        // Отправка запроса на сервер
        xhr.send('idNewsChange=' + idNews + '&title=' + titleNews + '&content=' + contentNews + '&date=' + dateNews);
}

window.onload = function () {
    document.forms.saveNews.onsubmit = function (e) {
        e.preventDefault();
    }
};