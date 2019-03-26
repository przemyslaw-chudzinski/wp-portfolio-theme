PortfolioTheme.HiddenAreaPlugin = (function () {

    const init = () => {
        const hiddenItems = document.querySelectorAll('[data-h-area]');
        hiddenItems && hiddenItems.length && [].forEach.call(hiddenItems, hiddenItem => _initElement(hiddenItem));
    };

    const _initElement = hiddenItem => {
        const triggerElemSelector = hiddenItem.dataset.hAreaTrigger || null;
        const triggerElements = triggerElemSelector && document.querySelectorAll(triggerElemSelector);

        const hAreaWrapper = _createHAreaWrapper(hiddenItem);
        triggerElements && triggerElements.length && [].forEach.call(triggerElements,triggerElem => _assignEventsForTriggers(hAreaWrapper, triggerElem));
    };

    const _assignEventsForTriggers = (hAreaWrapper, triggerElem) => triggerElem.addEventListener('click', event => _handleTriggerClick(hAreaWrapper, triggerElem, event));

    const _handleTriggerClick = (hAreaWrapper, triggerElement) => {
        hAreaWrapper.style.height = '100%';
        triggerElement.remove();
    };

    const _createHAreaWrapper = hiddenItem => {
        const ID = 'h-area-wrapper' + Date.now() + 1;
        const heightVisibleArea = +hiddenItem.dataset.hAreaHeight || 0;
        const hAreaWrapper = document.createElement('div');
        hAreaWrapper.classList.add('h-area-wrapper');
        hAreaWrapper.setAttribute('id', ID);
        hAreaWrapper.style.height = heightVisibleArea + 'px';
        hiddenItem.parentNode.insertBefore(hAreaWrapper, hiddenItem);
        hAreaWrapper.appendChild(hiddenItem);
        return hAreaWrapper;
    };

    return {
        init
    };


})();
