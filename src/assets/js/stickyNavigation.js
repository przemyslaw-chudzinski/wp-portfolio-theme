PortfolioTheme.StickyNav = (function () {

    const className = 'navigation--scrolled';

    const init = () => {
        const navigation = document.querySelector('[data-nav-sticky]');
        navigation && addEventListener('scroll', event => _scrollHandler(navigation, event));
    };

    const _scrollHandler = (navigation, event) => scrollY === 0 ? navigation.classList.remove(className) : navigation.classList.add(className);

    return {
        init
    };

})();
