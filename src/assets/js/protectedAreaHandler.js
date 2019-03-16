const {create, ajaxMethods} = require('./ajax');

(function () {

    const _handler = ({detail: {protectedElement}}) => {
        switch (protectedElement.id) {
            case 'protectedPhone': return _handleProtectedPhone();
            default: return console.log('def');
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
