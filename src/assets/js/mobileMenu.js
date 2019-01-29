PortfolioTheme.MobileMenu = (function () {
    const init = () => {
        const _triggers = document.querySelectorAll('[data-mobile-target]');

        _triggers && _triggers.length && [].forEach.call(_triggers, trigger => {
            const mobileTarget = trigger.dataset.mobileTarget || null;
            const mobileMenu = document.querySelector('[data-mobile-menu="' + mobileTarget + '"]');
            const backdrop = mobileMenu.querySelector('[data-backdrop]');

            if (!mobileTarget || !mobileTarget.length) throw new Error('Attribute [data-mobile-target] is not specified');
            if (!mobileMenu) throw new Error('Could not found [data-mobile-menu="' + mobileMenu + '" attribute');

            trigger && trigger.addEventListener('click', event => _toggle(mobileMenu, event));
            backdrop && backdrop.addEventListener('click', event => _close(mobileMenu, event));
        });
    };

    const _toggle = (item, event) => {
        event.stopPropagation();
        item.classList.toggle('open');
    };

    const _close = (item, event) => {
        event.stopPropagation();
        item.classList.remove('open');
    };

    return {
        init
    };

})();

