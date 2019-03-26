PortfolioTheme.Global = {
    siteUrl: null,
    ajaxurl: ''
};

PortfolioTheme.Setup = config => {
    Object.assign(PortfolioTheme.Global, config);
    PortfolioTheme.Global.ajaxurl = PortfolioTheme.Global.siteUrl + '/wp-admin/admin-ajax.php';
};
