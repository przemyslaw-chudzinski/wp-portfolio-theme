const {throttle} = require('./helpers');

PortfolioTheme.ScrollToTop = (function () {

    const init = () => {
        const btn = document.querySelector('#scrollToTop');
        const _partialThrottle = throttle(_handleScroll);
        btn && addEventListener('scroll', () => _partialThrottle(btn));
    };

    const _handleScroll = btn => {
        if (scrollY >= 200) {
            btn.style.visibility = 'visible';
            btn.style.opacity = '1';
        } else {
            btn.style.visibility = 'hidden';
            btn.style.opacity = '0';
        }
    };

    return {
        init
    };

})();
