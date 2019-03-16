/**
 * Author: Przemysław Chudziński
 */

PortfolioTheme.ProtectedAreaPlugin = (function () {

    const init = () => {

        const protectedElements = document.querySelectorAll('[data-protected-area]');

        protectedElements && protectedElements.length && protectedElements.forEach(protectedElement => {
            _setupSingleElement(protectedElement);
        });

    };

    const _setupSingleElement = protectedElement => {

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
        const contentElement = document.createElement('div');
        const content = protectedElement.dataset.content || '';
        const id = protectedElement.dataset.protectedArea || null;
        const protectedEvent = new CustomEvent('protected:opened', {
            detail: {protectedElement, id}
        });
        contentElement.classList.add('pc-protected-element__content');
        contentElement.textContent = content;

        target.remove();
        protectedElement.appendChild(contentElement);

        dispatchEvent(protectedEvent);
    };

    return {init};


})();
