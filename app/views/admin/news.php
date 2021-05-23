<style>
    .allNews {
        background: rgba(83, 83, 83, 0.1);
        padding: 20px;
    }
    .newsLine:nth-child(odd) {
        background: rgba(83, 83, 83, 0.4);
    }
    .newsLine {
        padding: 5px;
    }
    .newsLine:hover {
        cursor: pointer;
        background: var(--colorBlue);
    }
    .newsLine > span {
        padding-right: 5px;
    }
    .newsId {
        color: var(--colorBlue);
    }
    .newsDate {
        float: right;
        color: var(--colorBlue);
    }
</style>
<div id="content">
    <button class="btn" onclick="location.href='?lang=ru'" style="width: 20%; display: inline;">RU</button>
    <button class="btn" onclick="location.href='?lang=kz'" style="width: 20%; display: inline;">KZ</button>
    <button class="btn" onclick="location.href='?lang=en'" style="width: 20%; display: inline;">EN</button>
    <hr>
    <br>
    <form name="saveNews" method="POST">
        <input type="text" class="inp" placeholder="Заголовок" name="title" <?php if($data['changeNews']) { echo 'value="'.$data['changeNews'][0]['title'].'"';}?>>
        <textarea id="" cols="30" rows="10" class="inp" name="content"><?php if($data['changeNews']) { echo $data['changeNews'][0]['content'];}?></textarea>
        <input type="date" class="inp" placaholder="Дата" <?php if($data['changeNews']) { echo 'value="'.$data['changeNews'][0]['date'].'"';}?> name="date" style="width: 20%;">
        
        <?php 
        
            if(!$data['changeNews']) { 
                echo '<button class="btn" onclick="appendNews();" style="width: 20%; display: inline;">Добавить новость</button>';   
            } else {
                echo '<button class="btn" onclick="changeNews('.$data['changeNews'][0]['id'].');" style="width: 20%; display: inline;">Изменить новость</button>';
                echo '<button class="btn" onclick="appendNews();" style="float: right; width: 20%; display: inline;">Добавить новость</button>'; 
            }
        ?>
        
        
        <hr>
        <br>
    </form>
    <div class="allNews">
        <?php
            foreach($data['news'] as $k => $v) {
                echo '<div class="newsLine" onclick="location.href = \'/admin/news?idNews='.$v['id'].'\'"><span class="newsId">'.$v['id'].'</span><span class="newsTitle">'.$v['title'].'</span><span class="newsDate">'.$v['date'].'</span></div>';
            }
        ?>
    </div>

</div>
<script src="/public/js/forms/ajaxSaveNews.js"></script>

