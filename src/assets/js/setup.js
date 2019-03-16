PortfolioTheme.Global = {
    host: 'localhost',
    ajaxurl: ''
};

PortfolioTheme.Setup = config => {
    Object.assign(PortfolioTheme.Global, config);
    PortfolioTheme.Global.ajaxurl = PortfolioTheme.Global.host + '/wp-admin/admin-ajax.php';
};
