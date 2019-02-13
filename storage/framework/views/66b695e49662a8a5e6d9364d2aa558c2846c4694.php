<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>

        <?php echo $__env->make('inc.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <title>Turkmenistan | Orient Travel</title>

    </head>
    <body>
        <?php echo $__env->make('inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div id="top-content">

            <?php echo $__env->make('inc.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <section id="slidecorner">
                <div  id="slideshow">
                    <div>
                        <img src="/images/Armenia/armenia1.jpg">
                    </div>
                    <div>
                        <img src="/images/Armenia/armenia2.jpg">
                    </div>
                    <div>
                        <img src="/images/Armenia/armenia3.jpg">
                    </div>

                </div>
                <div class="corners"></div>
            </section>


            <div id="content-text">
                <h1>turkmenistan_headline</h1>
            </div>
        </div>

        <div id="middle-content">


            <div id="about-country">
                <img id="star-country" src="/images/ornament.png">
                <h1>turkmenistan_h1</h1>
                <p>turkmenistan_about</p>
            </div>

            <div id="enquire">
                <a id="enquire-a" role="button">enquire_now</a>
            </div>

            <!-- Include Modal FORM -->


        </div>


        <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </body>
</html>
