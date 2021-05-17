function isVisible(elem) {
    
    let coords = elem.getBoundingClientRect();

    let windowHeight = document.documentElement.clientHeight;

    // верхний край элемента виден?
    let topVisible = coords.top > 0 && coords.top < windowHeight;

    // нижний край элемента виден?
    let bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

    return topVisible || bottomVisible;
}

function showVisible() {
for (let img of document.querySelectorAll('div[style="visibility: hidden;"]')) {

    if (isVisible(img)) {
        setTimeout(() => {
            img.style.visibility = 'visible';
            img.classList.add('showElem');
        }, 300);
    }
}
}

showVisible();
window.onscroll = showVisible;