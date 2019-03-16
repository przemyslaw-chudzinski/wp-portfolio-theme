const {create, ajaxMethods} = require('./ajax');

(function () {

    const _handler = ({detail: {protectedElement}}) => {

        PortfolioTheme.ProtectedAreaPlugin.markAsVisible(protectedElement);

        switch (protectedElement.id) {
            case 'protectedPhone': return _handleProtectedPhone();
            default: return null;
        }
    };

    const _handleProtectedPhone = () => {
        const xhr = create({
            async: true,
            url: PortfolioTheme.Global.ajaxurl,
            method: ajaxMethods.POST
        });

        xhr.exec({action: 'emailShown'});
    };

    addEventListener('protected:opened', _handler);


})();
