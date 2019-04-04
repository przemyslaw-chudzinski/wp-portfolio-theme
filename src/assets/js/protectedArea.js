/**
 * Author: Przemysław Chudziński
 */

PortfolioTheme.ProtectedAreaPlugin = (function () {

    const init = () => {
        const protectedElements = document.querySelectorAll('[data-protected-area]');
        protectedElements && protectedElements.length && protectedElements.forEach(protectedElement => _setupSingleElement(protectedElement));
    };

    const _setupSingleElement = protectedElement => {
        let hidden = isHidden(protectedElement);

        if (!hidden) return _renderHiddenArea(protectedElement);

        const label = protectedElement.dataset.label || 'Wyświetl';

        const triggerElement = document.createElement('a');
        triggerElement.textContent = label;
        triggerElement.href = '#';
        triggerElement.classList.add('pc-protected-element');

        triggerElement.addEventListener('click', event => {
            event.preventDefault();
            event.stopPropagation();
            _handleClick(protectedElement, event.target, event);
        });

        protectedElement.appendChild(triggerElement);

    };

    const _handleClick = (protectedElement, target) => {
        const protectedEvent = new CustomEvent('protected:opened', {
            detail: {protectedElement}
        });
        _renderHiddenArea(protectedElement, target);
        dispatchEvent(protectedEvent);
    };

    const _renderHiddenArea = (protectedElement, target = null) => {
        const contentElement = document.createElement('div');
        const content = protectedElement.dataset.content || '';

        contentElement.classList.add('pc-protected-element__content');
        contentElement.textContent = content;

        target && target.remove();
        protectedElement.appendChild(contentElement);
    };

    const _localStorageKey = protectedElement => {
        const id = protectedElement.id;
        return id ? 'protected-' + protectedElement.id : null;
    };

    const isHidden = protectedElement => {
        if ('localStorage' in window) {
            const value = localStorage.getItem(_localStorageKey(protectedElement));
            return !(value && value.length);
        }
        return false;
    };

    const markAsVisible = protectedElement => {
        if ('localStorage' in window) {
            localStorage.setItem(_localStorageKey(protectedElement), 'true');
        }
    };

    return {init, isHidden, markAsVisible};


})();
