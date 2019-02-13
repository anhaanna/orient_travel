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
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />


    

</head>

<body>


        <a href='/<?php echo e(App::getLocale()); ?> '  id="orient-logo">
            <img src="/images/orient.svg" alt="Orient Travel">
        </a>

        <div class="guide">
            <a id="ara_guide" role="button">
                <img src="/images/ara.png" alt="Ara Khurshudian" title="Ara Khurshudian">
                <p class="guide_p"><?php echo app('translator')->getFromJson('home.advisor'); ?></p>
            </a>
        </div>


<?php echo $__env->yieldContent('content'); ?>

    <footer>
        <div class="container">
            <div id="footer">
                <div class="footer-dest footer-first">
                    <ul class="footer1 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-10 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/terms" ><?php echo app('translator')->getFromJson('home.terms'); ?></a>

                        </li>
                        <li class="item-11" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/privacy_policy" ><?php echo app('translator')->getFromJson('home.privacy'); ?></a>
                        </li>
                        <li class="item-12" itemprop="name">
                            <p id="copyright"> © 2018 orient.travel</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer2 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-1 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/armenia" ><?php echo app('translator')->getFromJson('home.armenia'); ?></a>
                        </li>
                        <li class="item-2" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/georgia" ><?php echo app('translator')->getFromJson('home.georgia'); ?></a>
                        </li>
                        <li class="item-3" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/iran" ><?php echo app('translator')->getFromJson('home.iran'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer3 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-4 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/tajikistan" ><?php echo app('translator')->getFromJson('home.tajikistan'); ?></a>
                        </li>
                        <li class="item-5" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/turkmenistan" ><?php echo app('translator')->getFromJson('home.turkmenistan'); ?></a>
                        </li>
                        <li class="item-6" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/kazakhstan" ><?php echo app('translator')->getFromJson('home.kazakhstan'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer4 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-7 parent" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/mongolia" ><?php echo app('translator')->getFromJson('home.mongolia'); ?></a>
                        </li>
                        <li class="item-8" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/uzbekistan" ><?php echo app('translator')->getFromJson('home.uzbekistan'); ?></a>
                        </li>
                        <li class="item-9" itemprop="name">
                            <a itemprop="url" href="/<?php echo e(App::getLocale()); ?>/kyrgyzstan" ><?php echo app('translator')->getFromJson('home.kyrgyzstan'); ?></a>
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