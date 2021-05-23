function appendNews() {
        

    let str = '<div style="text-align: center;"><form action="#"><p><input type="text" placeholder="Заголовок"></p><br><p><textarea name="contentNews" id="" cols="30" rows="10"></textarea></p><br><input type="date"></form></div>';
    
    

    // var xhr = new XMLHttpRequest();
    // xhr.open('POST', '/admin/news');
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // // Обработка запроса на сервер
    // xhr.onreadystatechange = function() {
    //     if(xhr.readyState === 4 && xhr.status === 200) {
    //         // Полученый ответ от сервера
    //         modalWindow(xhr.responseText);
    //     }
    // }

    // // Отправка запроса на сервер
    // xhr.send('item=true');
}


window.onload = function () {
    document.forms.saveNews.onsubmit = function (e) {
        e.preventDefault();
    }
};