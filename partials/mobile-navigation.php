<!-- Mobile menu -->
<div class="mobile-menu d-lg-none" data-mobile-menu="menu1">
    <nav class="mobile-menu__nav">
        <?= wp_nav_menu([
            'menu_class' => 'mobile-menu__list',
            'menu' => 'Mobile menu',
            'container' => ''
        ]); ?>
    </nav>
    <div data-backdrop class="mobile-menu__backdrop"></div>
</div>
<!-- END: Mobile menu -->
