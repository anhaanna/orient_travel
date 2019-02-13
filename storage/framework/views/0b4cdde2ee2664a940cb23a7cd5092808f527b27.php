<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title>Kazakhstan | Orient Travel</title>

</head>
<body>

<div id="top-content">

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
        <h1>kazakhstan_headline</h1>
    </div>
</div>

<div id="middle-content">


    <div id="about-country">
        <img id="star-country" src="/images/ornament.png">
        <h1>kazakhstan_h1</h1>
        <p>kazakhstan_about</p>
    </div>

    <div id="enquire">
        <a id="enquire-a" role="button">enquire_now</a>
    </div>
<?php echo $__env->yieldContent('content'); ?>
    <!-- Include Modal FORM -->


</div>




</body>
</html>






















