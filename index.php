<?php require_once('./_includes/config.php');?>
<?php require_once('./_includes/header.php');?>
<aside>
    <div>
        <h1>CSS Only Sliding Showcase</h1>
        <p>Made with <i class="fas fa-heart"></i> by <a href="http://joshuasanger.ca">Joshua Sanger</a>.</p>
    </div>
    <a href="https://github.com/joshsanger/css-only-slider" target="_blank"><i class="fab fa-github"></i></a>
</aside>
<section>
    <input type="radio" name="slides" id="slide-1-control" value="1" checked autofocus>
    <div class="arrows">
        <label for="slide-4-control" class="prev"><span class="fal fa-long-arrow-left"></span></label>
        <label for="slide-2-control" class="next"><span class="fal fa-long-arrow-right"></span></label>
    </div>
    <input type="radio" name="slides" id="slide-2-control" value="2">
    <div class="arrows">
        <label for="slide-1-control" class="prev"><span class="fal fa-long-arrow-left"></span></label>
        <label for="slide-3-control" class="next"><span class="fal fa-long-arrow-right"></span></label>
    </div>
    <input type="radio" name="slides" id="slide-3-control" value="3">
    <div class="arrows">
        <label for="slide-2-control" class="prev"><span class="fal fa-long-arrow-left"></span></label>
        <label for="slide-4-control" class="next"><span class="fal fa-long-arrow-right"></span></label>
    </div>
    <input type="radio" name="slides" id="slide-4-control" value="4">
    <div class="arrows">
        <label for="slide-3-control" class="prev"><span class="fal fa-long-arrow-left"></span></label>
        <label for="slide-1-control" class="next"><span class="fal fa-long-arrow-right"></span></label>
    </div>
    <div class="track">
        <label for="slide-1-control"></label>
        <label for="slide-2-control"></label>
        <label for="slide-3-control"></label>
        <label for="slide-4-control"></label>
    </div>
    <article class="overflow-wrapper">
        <div class="slides flex-wrapper">
            <label for="slide-1-control" class="slide" id="slide1" style="background-image: url(./_assets/images/slide1.png);"><span>01</span></label>
            <label for="slide-2-control" class="slide" id="slide2" style="background-image: url(./_assets/images/slide2.png);"><span>02</span></label>
            <label for="slide-3-control" class="slide" id="slide3" style="background-image: url(./_assets/images/slide3.png);"><span>03</span></label>
            <label for="slide-4-control" class="slide" id="slide4" style="background-image: url(./_assets/images/slide4.png);"><span>04</span></label>
        </div>
    </article>
</section>

<?php require_once('./_includes/footer.php');?>
