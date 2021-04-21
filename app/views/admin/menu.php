<div id="content">
    <button class="btn" onclick="location.href='?lang=ru'" style="width: 20%; display: inline;">RU</button>
    <button class="btn" onclick="location.href='?lang=kz'" style="width: 20%; display: inline;">KZ</button>
    <button class="btn" onclick="location.href='?lang=en'" style="width: 20%; display: inline;">EN</button>
    <hr>
    <br>
    <p><span style="margin-left: 5%; margin-right: 25%;">Содержимое</span><span>Ссылка</span></p>
    <form name="saveMenu">
        <?php
            foreach($data['menu'] as $k => $v) {
                echo '<p style="display: flex; align-items: center;"><input type="text" onchange="saveItemMenu(this)" name="'.$v['id'].'" value="'.$v['item'].'" class="inp" style="margin-left: 5px; width: 30%; display: inline;">';
                echo '<input type="text" name="'.$v['id'].'" onchange="saveLinkMenu(this)" value="'.$v['link'].'" class="inp" style="margin-left: 5px; width: 30%; display: inline;">';
                echo '<img src="/public/img/admin/trash.svg" onclick="deletedMenu(this.previousSibling)" class="imgBtn"><img style="margin-left: 5px;" src="/public/img/admin/add.svg" onclick="appendSubMenu(this.previousSibling.previousSibling.name)" class="imgBtn"></p>';
                foreach($data['submenu'] as $k2 => $v2) {
                    if($v2['menu_id'] == $v['id']) {
                        echo '<div style="background: rgba(83, 83, 83, 0.1)">';
                        echo '<p style="display: flex; align-items: center; margin-left: 50px;"><input type="text" onchange="saveItemSubMenu(this)" name="'.$v2['id'].'" value="'.$v2['item'].'" class="inp" style="margin-left: 5px; width: 30%; display: inline;">';
                        echo '<input type="text" name="'.$v2['id'].'" onchange="saveLinkSubMenu(this)" value="'.$v2['link'].'" class="inp" style="margin-left: 5px; width: 30%; display: inline;">';
                        echo '<img src="/public/img/admin/trash.svg" onclick="deletedSubMenu(this.previousSibling)" class="imgBtn"></p></div>';
                    }
                }
            }
        ?>
    <hr>
    <br>
        <button class="btn" onclick="appendMenu();" style="width: 20%; display: inline;">Добавить элемент</button>
    </form>
</div>
<script src="/public/js/forms/ajaxSaveMenu.js"></script>