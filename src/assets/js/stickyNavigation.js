PortfolioTheme.StickyNav = (function () {

    const className = 'navigation--scrolled';

    const init = () => {
        const navigation = document.querySelector('[data-nav-sticky]');
        navigation && _setAptlyClass(navigation);
        navigation && addEventListener('scroll', () => _setAptlyClass(navigation));
    };

    const _setAptlyClass = navigation => scrollY === 0 ? navigation.classList.remove(className) : navigation.classList.add(className);

    return {
        init
    };

})();
