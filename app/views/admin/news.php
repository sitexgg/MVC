<div id="content">
    <button class="btn" onclick="location.href='?lang=ru'" style="width: 20%; display: inline;">RU</button>
    <button class="btn" onclick="location.href='?lang=kz'" style="width: 20%; display: inline;">KZ</button>
    <button class="btn" onclick="location.href='?lang=en'" style="width: 20%; display: inline;">EN</button>
    <hr>
    <br>
    <form name="saveNews" method="POST">
        <input type="text" class="inp" placeholder="Заголовок" name="title">
        <textarea id="" cols="30" rows="10" class="inp" name="content"></textarea>
        <input type="date" class="inp" placaholder="Дата" name="date" style="width: 20%;">
        <button class="btn" onclick="appendNews();" style="width: 20%; display: inline;">Добавить новость</button>
        <hr>
        <br>
    </form>
    <?php
        foreach($data['news'] as $k => $v) {
            echo '<div class="newsLine"><span>'.$v['id'].'</span><span class="newsTitle">'.$v['title'].'</span><span class="newsDate">'.$v['date'].'</span></div>';
        }
    ?>
</div>
<script src="/public/js/forms/ajaxSaveNews.js"></script>

