PortfolioTheme.Parallax = (function () {

    const init = () => {
        const header = document.querySelector('header[data-has-parallax]');
        header && addEventListener('scroll', event => _scrollHandler(header, event));
    };

    const _scrollHandler = header => (header.style.backgroundPositionY = -1 * scrollY * 0.3 + 'px');

    return {
        init
    };

})();
