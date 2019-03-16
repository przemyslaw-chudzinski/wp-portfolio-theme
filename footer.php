<!-- Contact form section -->
<section class="contact-form-section u-section" data-bg="<?= get_static_image_url('contact-form-bg.jpg'); ?>">
    <div class="container">
        <?= get_template_part('partials/contact-form'); ?>
    </div>
</section>

<!-- END: Contact form section -->

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

<!-- Scroll to top -->
<a id="scrollToTop" href="javascript:void(0)" class="scroll-to-top theme-button theme-button--secondary">
    <span class="fa fa-chevron-up"></span>
</a>
<!-- END: Scroll to top -->

<!-- END: Footer -->

<!-- Templates -->
<?= get_template_part('partials/search'); ?>
<?= get_template_part('partials/mobile-navigation'); ?>
<?= get_template_part('partials/cookies-info'); ?>
<!-- END: Templates -->

<!-- Scripts -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55938708-9"></script>

<?= wp_footer(); ?>
<script>
    PortfolioTheme.Setup({
        host: '<?= get_home_url("/"); ?>'
    });
    PortfolioTheme.MobileMenu.init();
    PortfolioTheme.DynamicBackground.init();
    PortfolioTheme.Parallax.init();
    PortfolioTheme.Search.init();
    PortfolioTheme.CookiesInfo.init();
    PortfolioTheme.Validator.init();
    PortfolioTheme.StickyNav.init();
    PortfolioTheme.ImgLazy.init();
    PortfolioTheme.ScrollToTop.init();
    PortfolioTheme.ProtectedAreaPlugin.init();
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
