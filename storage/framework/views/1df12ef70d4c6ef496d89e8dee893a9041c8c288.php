<?php $__env->startSection('content'); ?>
<div id="top-content">
    
    <div id="fixed-social">
                        <div><a href="https://www.facebook.com/travel.orienttravel/" class="fixed fixed-facebook" target="_blank"><span>Facebook</span></a></div>
                        <div><a href="#" class="fixed fixed-twitter" target="_blank"><span>Twitter</span></a></div>
                        <div><a href="#" class="fixed fixed-instagram" target="_blank"><span>Instagram</span></a></div>
                    </div>

                    <?php use Illuminate\Support\Facades\Request;?>
                <div id="fixed-language">
                        <div class="menu-item"><a class="lang lang-en" href="/en/<?php if(Request::segment(2)!=null): ?><?php echo e(Request::segment(2)); ?><?php endif; ?>">EN</a></div>
                        <div class="menu-item"><a class="lang lang-fr" href="/fr/<?php if(Request::segment(2)!=null): ?><?php echo e(Request::segment(2)); ?><?php endif; ?>">FR</a></div>
                        <div class="menu-item"><a class="lang lang-de" href="/de/<?php if(Request::segment(2)!=null): ?><?php echo e(Request::segment(2)); ?><?php endif; ?>">DE</a></div>
                </div>
                
    <?php if($countryName !='terms' && $countryName != 'privacy_policy'): ?>
    <div class="container">

      <section id="slidecorner">
            <div  id="slideshow">
                <div>
                    <img src="/images/<?php echo e($countryName); ?>/<?php echo e($countryName); ?>_1.jpg">
                </div>
                <div>
                    <img src="/images/<?php echo e($countryName); ?>/<?php echo e($countryName); ?>_2.jpg">
                </div>
                <div>
                    <img src="/images/<?php echo e($countryName); ?>/<?php echo e($countryName); ?>_3.jpg">
                </div>

            </div>
            <div class="corners"></div>
        </section>
                
    </div>
   
    <div id="content-text">
        <h1><?php echo app('translator')->getFromJson($countryName.'.top_h1'); ?></h1>
    </div>

    <?php endif; ?>

</div>

<div id="middle-content">


    <div id="about-country">
        <img id="star-country" src="/images/ornament.png">
        <h1><?php echo app('translator')->getFromJson($countryName.'.popup_h1'); ?></h1>
        <p><?php echo app('translator')->getFromJson($countryName.'.popup_p'); ?></p>
    </div>

    <div id="enquire">
        <a id="enquire-a" role="button"><?php echo app('translator')->getFromJson('home.enquire_now'); ?></a>
    </div>

    <?php echo $__env->make('layouts.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>