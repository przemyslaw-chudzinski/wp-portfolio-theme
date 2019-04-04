PortfolioTheme.Parallax = (function () {

    const init = () => {
        if (window.innerWidth < 991) return;
        const header = document.querySelector('header[data-has-parallax]');
        header && (header.style.backgroundAttachment = 'fixed');
        header && addEventListener('scroll', event => _scrollHandler(header, event));
    };

    const _scrollHandler = header => {
        const userSpeed = header.dataset.parallaxSpeed ? parseFloat(header.dataset.parallaxSpeed) : null;
        const speed = userSpeed || 0.3;
        header.style.backgroundPositionY = -1 * scrollY * speed + 'px';
    };

    return {
        init
    };

})();
