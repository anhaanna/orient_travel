<nav id='main-menu' class="is-visible" data-nav-status="toggle">
    <a href='/'  id="orient-logo">
        <img src="/images/orient.svg" alt="Orient Travel">
    </a>
    <div id='nav-menu'>

        <ul id='center-menu'>
            <li class="menu-item"><a href="/#destinations"><?php echo app('translator')->getFromJson('home.destinations_low'); ?></a></li>
            <li class="menu-item"><a href="/#contact"><?php echo app('translator')->getFromJson('home.contact'); ?></a></li>
        </ul>

        <ul id='languages'>
            <li class="menu-item"><a href='/en'>EN</a></li>
            <li class="menu-item"><a href='/fr'>FR</a></li>
            <li class="menu-item"><a href='/de'>DE</a></li>
        </ul>

    </div>
</nav>