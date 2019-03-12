const {preloadImage} = require('./helpers');

PortfolioTheme.PreviewPlugin = (function () {

    let _previewContainer = null;
    let _loaderElem = null;
    let _timeoutInterval = null;
    let _timeoutInterval2 = null;
    let _previewLabel = null;
    let _previewDesc = null;
    let _previewItems = null;
    let _currentSelectedItemKey = null;

    const init = () => {
        _previewItems = document.querySelectorAll('[data-item-key]');
        _previewContainer = document.querySelector('[data-preview-container]');
        _loaderElem = document.querySelector('[data-preview-loader ]');
        _previewLabel = document.querySelector('[data-preview-label]');
        _previewDesc = document.querySelector('[data-preview-desc]');

        /* Error handling */
        if (!_previewItems) throw new Error('Could not found elements with [data-item-key] attribute');
        if (!_previewContainer) throw new Error('Could not found element with [data-preview-container] attribute');

        _assignEvents(_previewItems);

        /**
         * Initial first element
         */
        const initialItem = _previewItems[0];
        const itemKey = initialItem.dataset.itemKey || null;
        _validateItemKey(itemKey);
        _currentSelectedItemKey = itemKey;
        _reset(initialItem);
        _showContentAtPreviewContainer(initialItem.dataset);
    };

    const _assignEvents = items => items.length && [].forEach.call(items, item => item.addEventListener('mouseenter', event => _handleMouseEnter(event.target)));

    const _handleMouseEnter = target => {
        const itemKey = target.dataset.itemKey || null;
        _validateItemKey(itemKey);
        if (_currentSelectedItemKey === itemKey) return;
        _currentSelectedItemKey = itemKey;
        _reset(target);
        _showContentAtPreviewContainer(target.dataset);
    };

    const _validateItemKey = (item = null) => {
        if (!item || typeof item === 'undefined' || !item.length) throw new Error('Attribute [data-item-key] is required and must be unique value');
    };

    const _reset = item => {
        _resetPreviewItems();
        clearTimeout(_timeoutInterval);
        clearTimeout(_timeoutInterval2);
        item && item.classList.add('active');
        _previewLabel && _previewLabel.classList.remove('visible');
        _loaderElem && _loaderElem.classList.add('visible');
        _previewDesc && _previewDesc.classList.remove('visible');
    };

    const _showContentAtPreviewContainer = ({previewUrl, label, previewDesc}) => {
        preloadImage(previewUrl)
            .then(url => {
                _timeoutInterval = setTimeout(() => {
                    _setPreviewImage(url);
                    if (_previewLabel) _previewLabel.innerText = label;
                    if (_previewDesc) _previewDesc.innerText = previewDesc;
                    _loaderElem && _loaderElem.classList.remove('visible');
                    _timeoutInterval2 = setTimeout(() => {
                        _previewLabel && _previewLabel.classList.add('visible');
                        previewDesc && previewDesc.length && _previewDesc && _previewDesc.classList.add('visible');
                    }, 500);
                }, 500);
            });

    };

    const _resetPreviewItems = () =>  _previewItems && _previewItems.length && [].forEach.call(_previewItems, item => item.classList.remove('active'));

    const _setPreviewImage = imageUrl =>  imageUrl && imageUrl.length ? (_previewContainer.style.backgroundImage = `url(${imageUrl})`) : null;

    return {
        init
    };

})();
