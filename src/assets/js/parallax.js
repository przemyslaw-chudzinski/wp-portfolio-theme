PortfolioTheme.Parallax = (function () {

    const init = () => {
        const items = document.querySelectorAll('[data-has-parallax]');

        items && items.length && [].forEach.call(items, item => {
            item.style.backgroundAttachment = 'fixed';
            item.style.backgroundPosition = 'center';
        });
    };

    return {
        init
    };

})();
