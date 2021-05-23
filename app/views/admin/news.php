<div id="content">
    <button class="btn" onclick="location.href='?lang=ru'" style="width: 20%; display: inline;">RU</button>
    <button class="btn" onclick="location.href='?lang=kz'" style="width: 20%; display: inline;">KZ</button>
    <button class="btn" onclick="location.href='?lang=en'" style="width: 20%; display: inline;">EN</button>
    <hr>
    <br>
    <form name="saveNews">
        <input type="text" class="inp">
        <textarea name="" id="" cols="30" rows="10" class="inp"></textarea>
        <input type="text" class="inp">
        <button class="btn" onclick="appendNews();" style="width: 20%; display: inline;">Добавить новость</button>
        <hr>
        <br>
    </form>
</div>
<script src="/public/js/forms/ajaxSaveNews.js"></script>

