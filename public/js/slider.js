let slider = document.querySelector('.slider');
let image = slider.querySelector('.imgSlider > img');
let count = 1;

setInterval(nextSlide, 8000);

function nextSlide() {
    document.querySelector('.datSliderActive').classList.remove('datSliderActive');
    count = ++count;
    if(count == 6) {
        count = 1;
    }
    image.src = '/public/img/banners/'+count+'.jpg';
    document.querySelector('span[slide="'+count+'"]').classList.add('datSliderActive');
}

function clickDatSlide(el) {
    document.querySelector('.datSliderActive').classList.remove('datSliderActive');
    image.src = '/public/img/banners/'+el.getAttribute('slide')+'.jpg';
    document.querySelector('span[slide="'+el.getAttribute('slide')+'"]').classList.add('datSliderActive');
}

document.querySelector('#nextSlide').addEventListener('click', () => {
    document.querySelector('.datSliderActive').classList.remove('datSliderActive');
    count = ++count;
    if(count == 6) {
        count = 1;
    }
    image.src = '/public/img/banners/'+count+'.jpg';
    document.querySelector('span[slide="'+count+'"]').classList.add('datSliderActive');
});

document.querySelector('#backSlide').addEventListener('click', () => {
    document.querySelector('.datSliderActive').classList.remove('datSliderActive');
    count = --count;
    if(count == 0) {
        count = 5;
    }
    image.src = '/public/img/banners/'+count+'.jpg';
    document.querySelector('span[slide="'+count+'"]').classList.add('datSliderActive');
});