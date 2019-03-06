<?= !is_project_page() && get_template_part('partials/social-media'); ?>
<?= get_template_part('partials/contact-form'); ?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                Designed & Built By Przemysław Chudziński
            </div>
            <div class="col footer__menu">
                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
<?= get_template_part('partials/search'); ?>
<?= get_template_part('partials/mobile-navigation'); ?>
<?= get_template_part('partials/cookies-info'); ?>
<!-- Scripts -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55938708-9"></script>

<?= wp_footer(); ?>
<script>
    PortfolioTheme.MobileMenu.init();
    PortfolioTheme.DynamicBackground.init();
    PortfolioTheme.Parallax.init();
    PortfolioTheme.Search.init();
    PortfolioTheme.CookiesInfo.init();
    PortfolioTheme.Validator.init();
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-55938708-9');
</script>
<?php if (is_page('projekty')): ?>
<script>
    PortfolioTheme.PreviewPlugin.init();
</script>
<?php endif; ?>

</body>
</html>
