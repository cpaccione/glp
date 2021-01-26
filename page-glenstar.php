<?php

/*

Template Name: Glenstar LP Suburbs

*/


?>


<?php get_header('lp'); ?>

<body>
    <section class="hero">
        <div class="hero__container">
            <a href="https://glenstar.com/" target="_blank"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ) ;?>/images/glenstar_logo.svg" alt="Glenstar"></a>
            <a class="contact" href="#">contact us</a>
            <div class="hero__text">
                <img src="<?php echo esc_url( get_template_directory_uri() ) ;?>/images/home_hero_text.svg" alt="Work Near Home">
            </div>
        </div> 
    </section>

    <section class="intro-text">
        <div class="container">
            <div class="intro">
                <h2>Get your workforce back to work with convenient suburban office space.</h2>
                <p>Business priorities are shifting and getting employees back together in a safe and colaborative environment that is closer to home has never been a better option. See how office space at a suburban-Chicago Glenstar property can change the way you get to work.</p>
                <a href="#" class="contact">contact us</a>
            </div>
        </div>
        <div class="intro__slider">
            <div class="intro__slider__one">your content</div>
            <div class="intro__slider__one">your content</div>
            <div class="intro__slider__one">your content</div>
        </div>
    </section>

    <section class="slider-one intro">
        <div class="col left">
            <h2>Convenience</h2>
            <p>Business priorities are shifting and getting employees back together in a safe and colaborative environment that is closer to home has never been a better option. See how office space at a suburban-Chicago Glenstar property can change the way you get to work.</p>
        </div>
        <div class="col right">
            <div class="intro__slider">
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
            </div>
        </div>
    </section>

    <section class="slider-two intro">
        <div class="col">
            <h2>Quality</h2>
            <p>Glenstar is redifining what suburban office space looks like. We combine urban style and first-class amenities like fitness clubs and cafes with the vast outdoor space and conveniences of the suburbs. Our thoughtfully developed properties inspire creativity, encourage activity and build communities.</p>        
        </div>
        <div class="col">
            <div class="intro__slider">
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
            </div>
        </div>
    </section>

    <section class="slider-three intro">
        <div class="col">
            <h2>Flexibility</h2>
            <p>With available office space ranging from 800 to 200,000 square feet, our floor plans are as flexible as our leasing options. Whether it’s a quick turnaround for a custom build-out or move-in ready and fully furnished, we have the right office space for your company– as much as you need, for as long as you need.</p> 
        </div>
        <div class="col">
            <div class="intro__slider">
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
                <div class="intro__slider__one">your content</div>
            </div>
        </div>
    </section>

<?php get_footer('lp'); ?>