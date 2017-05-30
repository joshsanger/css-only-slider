<?php require_once('./_includes/config.php');?>
<?php require_once('./_includes/header.php');?>


<div class="slider-wrapper">



    <input type="radio" name="slide-control" id="control1" checked/>
    <label for="control1"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=1062)">
        <span>Slide 1</span>
    </div>
    <input type="radio" name="slide-control" id="control2"/>
    <label for="control2"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=876)">
        <span>Slide 2</span>
    </div>
    <input type="radio" name="slide-control" id="control3"/>
    <label for="control3"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=957)">
        <span>Slide 3</span>
    </div>
</div>

<?php require_once('./_includes/footer.php');?>