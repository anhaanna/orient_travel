<div id="top-content">
    <?php echo $__env->make('inc.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">

        <div id="content-img">

            <div id='desert'><iframe src="/virap/virap.html"></iframe></div>

            <div class='corners'></div>
        </div>

        <div id="content-text">
            <h1> <?php echo app('translator')->getFromJson('home.top_h1'); ?> </h1>
            <h2> <?php echo app('translator')->getFromJson('home.top_h2'); ?> </h2>
        </div>

    </div>
</div>


<div id="middle-content">

    <div class="container">

        <div id="boxes">
            <div class="box box1">
                <h2><span class="icon"></span><?php echo app('translator')->getFromJson('home.box1_h2'); ?></h2>
                <p id="wave">〰〰〰〰〰〰〰</p>
                <p><?php echo app('translator')->getFromJson('home.box1_p'); ?></p>
            </div>
            <div class="box box2">
                <h2><span class="icon"></span><?php echo app('translator')->getFromJson('home.box2_h2'); ?></h2>
                <p id="wave">〰〰〰〰〰〰〰</p>
                <p><?php echo app('translator')->getFromJson('home.box2_p'); ?></p>
            </div>
            <div class="box box3">
                <h2><span class="icon"></span><?php echo app('translator')->getFromJson('home.box3_h2'); ?></h2>
                <p id="wave">〰〰〰〰〰〰〰</p>
                <p><?php echo app('translator')->getFromJson('home.box3_p'); ?></p>
            </div>
        </div>

        <div id="enquire">
            <a id="enquire-a" role="button"><?php echo app('translator')->getFromJson('home.enquire_now'); ?></a>
        </div>

        <div id="popup">
            <img id="star" src="/images/ornament.png">
            <h1 id="step-1"><?php echo app('translator')->getFromJson('home.popup_h1'); ?></h1>
            <p id="step-2"><?php echo app('translator')->getFromJson('home.popup_p'); ?></p>
        </div>

    </div>


    <!-- Include Modal FORM -->
<?php /*include 'modal/modal.php'; */?>

<!-- dest -->
    <div id="destinations">
        <h1><?php echo app('translator')->getFromJson('home.destinations_upp'); ?></h1>

        <div id="slider-container">
            <div class="slider">

                <?php
                    $cntrs = array('armenia', 'georgia', 'iran', 'tajikistan', 'turkmenistan', 'kazakhstan', 'mongolia', 'uzbekistan', 'kyrgyzstan');

                        ?>
                <?php $__currentLoopData = $cntrs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cntr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span>
                    <a class="dest-a" href="/<?php echo e($cntr); ?>" target="_self">
		                <img src="/images/<?php echo e($cntr); ?>/<?php echo e($cntr); ?>.jpg"/>
		                <div class="corner-dest"></div>
		                <p class="dest-name"><?php echo e($cntr); ?></p>
                    </a>
                </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

    </div>
    <!-- end dest -->

    <div class="container">

        <div id="trip">
            <h1><?php echo app('translator')->getFromJson('home.trip_h1'); ?></h1>
            <h2><?php echo app('translator')->getFromJson('home.trip_h2'); ?></h2>
            <div id="trip-boxes">

                <div class="trip-box" id="trip-box1">
                    <p><span class="icon"></span></p>
                    <p><?php echo app('translator')->getFromJson('home.trip-box1_p'); ?></p>
                </div>
                <div class="trip-box" id="trip-box2">
                    <p><span class="icon"></span></p>
                    <p><?php echo app('translator')->getFromJson('home.trip-box2_p'); ?></p>
                </div>
                <div class="trip-box" id="trip-box3">
                    <p><span class="icon"></span></p>
                    <p><?php echo app('translator')->getFromJson('home.trip-box3_'); ?>p</p>
                </div>
                <div class="trip-box" id="trip-box4">
                    <p><span class="icon"></span></p>
                    <p><?php echo app('translator')->getFromJson('home.trip-box4_p'); ?></p>
                </div>
            </div>
        </div>


        <div id="contact">
            <div id="help">
                <h1><?php echo app('translator')->getFromJson('home.help_h1'); ?></h1>
                <div id="contact-boxes">

                    <div class="contact-box" id="contact-box1">
                        <p><span class="icon"></span></p>
                        <p id="wave">〰〰〰〰〰</p>
                        <p><?php echo app('translator')->getFromJson('home.contact-box1_p'); ?></p>
                    </div>
                    <div class="contact-box" id="contact-box2">
                        <p><span class="icon"></span></p>
                        <p id="wave">〰〰〰〰〰</p>
                        <p><?php echo app('translator')->getFromJson('home.contact-box2_p'); ?></p>
                    </div>
                    <div class="contact-box" id="contact-box3">
                        <p><span class="icon"></span></p>
                        <p id="wave">〰〰〰〰〰</p>
                        <p><?php echo app('translator')->getFromJson('home.contact-box3_p'); ?></p>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

