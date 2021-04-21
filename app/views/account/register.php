<style>
.signin {
    min-width: 350px;
    min-height: 250px;
    background-color: var(--colorOneDark);
    border-radius: 6px;
    box-shadow: 0 0 20px var(--colorTwoDark);
    animation: showSignIn 0.4s linear;
}
@keyframes showSignIn {
    0% {
        transform: scale(0);
    }
    50% {
        transform: scale(0.5);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 20px var(--colorThreeDark);
    }
}
.signin:hover {
    box-shadow: 0 0 200px var(--colorThreeDark);
}
.signin:focus {
    box-shadow: 0 0 200px var(--colorThreeDark);
}
.signin > h2 {
    color: var(--colorZeroDark);
    text-align: center;
    margin: 10px;
    margin-top: 30px;
    font-weight: 100;
}
</style>
<?php
    $signup = '';
    switch($_SESSION['lang']) {
        case 'ru':
            $signup = 'Регистрация';
        break;
        case 'kz':
            $signup = 'Тіркелу';
        break;
        case 'en':
            $signup = 'Sign Up';
        break;
    }
    $login = '';
    switch($_SESSION['lang']) {
        case 'ru':
            $login = 'Вход';
        break;
        case 'kz':
            $login = 'Аты';
        break;
        case 'en':
            $login = 'Login';
        break;
    }
    $password = '';
    switch($_SESSION['lang']) {
        case 'ru':
            $password = 'Пароль';
        break;
        case 'kz':
            $password = 'Құпия сөзді еңгізіңіз';
        break;
        case 'en':
            $password = 'Password';
        break;
    }
    $password2 = '';
    switch($_SESSION['lang']) {
        case 'ru':
            $password2 = 'Повторите пароль';
        break;
        case 'kz':
            $password2 = 'Құпия сөзді қайталаңыз';
        break;
        case 'en':
            $password2 = 'Repeat password';
        break;
    }
    $err = '';
    switch($_SESSION['lang']) {
        case 'ru':
            $err = 'Введите логин !';
        break;
        case 'kz':
            $err = 'Логинді енгізіңіз !';
        break;
        case 'en':
            $err = 'Enter login !';
        break;
    }
?>
<div class="fullScreen">
    <form name="registerForm" class="signin">
        <h2><?=$signup?></h2>
        <input type="text" class="inp" placeholder="<?=$login?>" name="login">
        <input type="password" class="inp" placeholder="<?=$password?>" name="pass">
        <input type="password" class="inp" placeholder="<?=$password2?>" name="pass2">
        <input class="btn" onclick="let login = document.querySelector('input[name=\'login\''); if(login.value == '') {modalWindow('<?=$err?>'); return false;}" value="<?=$signup?>" name="signin" type="submit">
    </form>
</div>

<script src="/public/js/forms/ajaxRegisterForm.js"></script>
