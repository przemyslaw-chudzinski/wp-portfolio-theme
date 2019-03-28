<!-- Search -->
<script type="text/x-template" id="searchTpl">
    <div data-search data-search-url="<?= get_home_url() ?>" class="search">

        <span data-search-close class="fa fa-close search__close-btn"></span>

        <div class="input-group__wrapper">
            <div class="input-group__position-container">
                <input data-search-input type="text" class="search__input" placeholder="Zacznij pisać" autofocus>
                <span class="fa fa-search input-group__icon"></span>
            </div>
        </div>

        <div data-search-results class="search__results"></div>

        <div data-search-preloader class="preloader">
            <div class="preloader-1 preloader-1--primary-white preloader-1--size-medium"></div>
        </div>

    </div>

</script>
<!-- ENd: Search -->

