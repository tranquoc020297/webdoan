<div class="content display-container">
    <div class="mySlides animate-fading">
        <img src="source/images/slider/1.jpg" style="width:100%">
        <div class="slide-caption-left">
            <h1><strong>Porsche</strong></h1>
        </div>
    </div>
    <div class="mySlides animate-fading">
        <img src="source/images/slider/2.jpg" style="width:100%">
        <div class="slide-caption-left">
            <h1><strong>Lamporghini</strong></h1>
        </div>
    </div>
    <div class="mySlides animate-fading">
        <a href=""></a><img src="source/images/slider/3.jpg" style="width:100%">
        <div class="slide-caption-left">
            <h1><strong>Ferrari</strong></h1>
        </div>
    </div>
    <div class="mySlides animate-fading">
        <img src="source/images/slider/4.jpg" style="width:100%">
        <div class="slide-caption-left">
            <h1><strong>Lexus</strong></h1>
        </div>
    </div>
    <div class="mySlides animate-fading">
        <img src="source/images/slider/5.jpg" style="width:100%">
        <div class="slide-caption-left">
            <h1><strong>Audi</strong></h1>
        </div>
    </div>
    <div class="progress-bar" style="width:100%">
        <div id="myBar" class="progress-bar-run" style="width:0%"></div>
    </div>
    <!-- <div class="slide-caption-right">
        <h1><strong>Trần Ngọc Quốc</strong></h1>
        <h2>1560453</h2>
        <h3>15CK4</h3>
    </div> -->
    <div class="center container section large text-white display-middle" style="width:100%">
        <div class="left hover-text-khaki" onclick="moveSlide(-1)">&#10094;</div>
        <div class="right hover-text-khaki" onclick="moveSlide(1)">&#10095;</div>
    </div>
    <div class="center container section large text-white display-bottommiddle">
        <span class="mybadge demo border-badge transparent hover-white" onclick="currentDiv(1)"></span>
        <span class="mybadge demo border-badge transparent hover-white" onclick="currentDiv(2)"></span>
        <span class="mybadge demo border-badge transparent hover-white" onclick="currentDiv(3)"></span>
        <span class="mybadge demo border-badge transparent hover-white" onclick="currentDiv(4)"></span>
        <span class="mybadge demo border-badge transparent hover-white" onclick="currentDiv(5)"></span>
    </div>
</div>
<div style="height:10%">&nbsp;</div>
<?php
	include('page/Highlights.php');
?>