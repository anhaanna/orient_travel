<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php if(Request::segment(2)==null): ?>
        <title><?php echo app('translator')->getFromJson('home.title'); ?></title>
        <meta name="keywords" content="<?php echo app('translator')->getFromJson('home.keywords'); ?>">
        <meta name="description" content="<?php echo app('translator')->getFromJson('home.meta_description'); ?>">
    <?php else: ?>
        <title><?php echo app('translator')->getFromJson($countryName.'.title'); ?></title>
        <meta name="keywords" content="<?php echo app('translator')->getFromJson($countryName.'.keywords'); ?>">
        <meta name="description" content="<?php echo app('translator')->getFromJson($countryName.'.meta_description'); ?>">
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='/js/main.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    

</head>

<body>


        <a href='/<?php echo e(App::getLocale()); ?> '  id="orient-logo">
            <img src="/images/orient.svg" alt="Orient Travel">
        </a>


<?php echo $__env->yieldContent('content'); ?>

    <footer>
        <div class="container">
            <div id="footer">
                <div class="footer-dest footer-first">
                    <ul class="footer1 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-10 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/terms" >Terms & Conditions</a>

                        </li>
                        <li class="item-11" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/privacy_policy" >Privacy Policy</a>
                        </li>
                        <li class="item-12" itemprop="name">
                            <p id="copyright"> © 2018 orient.travel</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer2 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-1 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/armenia" > Armenia</a>
                        </li>
                        <li class="item-2" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/georgia" > Georgia</a>
                        </li>
                        <li class="item-3" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/iran" > Iran </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer3 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-4 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/tajikistan" >Tajikistan</a>
                        </li>
                        <li class="item-5" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/turkmenistan" >Turkmenistan</a>
                        </li>
                        <li class="item-6" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/kazakhstan" >Kazakhstan</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer4 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-7 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/mongolia" >Mongolia</a>
                        </li>
                        <li class="item-8" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/uzbekistan" >Uzbekistan</a>
                        </li>
                        <li class="item-9" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/kyrgyzstan" >Kyrgyzstan</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-logos"> 
                    <div class="logos">
                        <a target="_blank" href="http://route-de-la-soie.com/"><img src="/images/silk_logo.png" alt="silk road tour"></a>
                    </div>
                    <div class="logos">
                        <a target="_blank" href="http://voyage-en-armenie.com/fr/"><img src="/images/armenia_logo.png" alt="armenia tour"></a>
                    </div>
                </div>  
            </div>
        </div>

    </footer>

</body>

</html>