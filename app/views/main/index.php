<!-- <div class="slider">
    <img src="/public/img/banners/arrowLeft.svg" id="backSlide" class="arrow">
    <div class="imgSlider">
        <img src="/public/img/banners/1.jpg" class="slides">
        <div class="paginationSlider">
            <span class="datSlider datSliderActive" slide="1" onclick="clickDatSlide(this);">•</span>
            <span class="datSlider" slide="2" onclick="clickDatSlide(this);">•</span>
            <span class="datSlider" slide="3" onclick="clickDatSlide(this);">•</span>
            <span class="datSlider" slide="4" onclick="clickDatSlide(this);">•</span>
            <span class="datSlider" slide="5" onclick="clickDatSlide(this);">•</span>
        </div>
    </div>
    <img src="/public/img/banners/arrowRight.svg" id="nextSlide" class="arrow arrowTwo">
</div> -->
<?php require_once 'slider.php';?>
<!-- <script src="/public/js/slider.js"></script> -->
<style>
    .centerContent {
        margin-top: 70vh;
    }
    @media only screen and (max-width: 1000px) {
        .centerContent {
            margin-top: 20px;
        }
    }
</style>
<div class="centerContent">
    <h3><?=$news?></h3>
    <div class="newsContent">
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
        <div class="showNews"></div>
    </div>
    <h3><?=$newsLib?></p></h3>

    <p><?=$storyLibrary?></p>
    
</div>




