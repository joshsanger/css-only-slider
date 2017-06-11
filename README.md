# CSS Only Slider

## The Mission

As a challenge to myself, I set out to make a CSS only slider. After trying 3 different approaches, the following is the best way I have found so far. [View demo](http://joshuasanger.ca/libraries/css-only-slider)

## The Markup

Each slide consists of an input field, a label for the input (So you can style it however you wish) and a slide. 

```html
<div class="slider-wrapper">
    
    <!-- /slide 1 -->
    <input type="radio" name="slide-control" id="control1" checked/>
    <label for="control1"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=1062)">
        <div>
            <span>Slide 1</span>
        </div>
    </div>
    
    <!-- /slide 2 -->
    <input type="radio" name="slide-control" id="control2"/>
    <label for="control2"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=876)">
        <div>
            <span>Slide 2</span>
        </div>
    </div>
    
    <!-- /slide 3 -->
    <input type="radio" name="slide-control" id="control3"/>
    <label for="control3"></label>
    <div class="slide" style="background-image: url(https://unsplash.it/1200/600/?image=957)">
        <div>
            <span>Slide 3</span>
        </div>
    </div>
    
</div>

```

## The Styling (Less)
Apart from some styling for the demo, all you need for this to work is:
```less
.slider-wrapper {
    width: 100%;
    max-width: 1200px;
    margin: 60px auto 0 auto;
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    position: relative;
    padding-top: 500px;
    overflow: hidden;
    & > * + *:not(.slide) {
        margin-left: 15px;
    }
    & input[type="radio"] {
        position: absolute;
        left: -9999px;
        & + label {
            cursor: pointer;
            margin-top: 20px;
            height: 17px;
            width: 17px;
            border-radius: 50%;
            display: inline-block;
            background: #cccccc;
        }
        &:checked {
            & + label {
                background: #0099ff;
                
                // make all slides after the input field right
                & ~ .slide {
                    transform: translate(100%);
                }
                
                // bring the active slide to the middle
                & + .slide {
                    transform: translate(0%);
                }
            }
        }
    }
    & .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 480px;
        .trans(all, 0.4s);
        transform: translate(-100%);    
        background: #777777;
    }
}
```
