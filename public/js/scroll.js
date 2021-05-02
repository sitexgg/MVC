window.onscroll = headerMin;

function headerMin() {
    let hed = document.querySelector('header');
    let account = document.querySelector('.account');
    if(window.scrollY > 25) {
        hed.style.height = '40px';
        account.style.border = '0px';
    } else {
        hed.style.height = '60px';
        account.style.border = '1px solid white';
    }
}