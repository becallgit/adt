$(function(){
    if (params){
        let reg = '/?';
        params = params.replace(reg, '&');
        let params_array = params.split('&');
        params_array.forEach(function (element, index){
            if (element.indexOf('utm_source=') > -1){
                let fuente = element.split('=', 2)[1];
                docCookies.setItem('adt_fuente', fuente);
            }
            if (element.indexOf('utm_medium=') > -1){
                let campana = element.split('=', 2)[1];
                docCookies.setItem('adt_medium', campana);
            }
            if (element.indexOf('utm_term=') > -1){
                let term = element.split('=', 2)[1];
                docCookies.setItem('adt_term', term);
            }
            if (element.indexOf('utm_content=') > -1){
                let content = element.split('=', 2)[1];
                docCookies.setItem('adt_content', content);
            }
            if (element.indexOf('utm_campaign=') > -1){
                let campaign = element.split('=', 2)[1];
                docCookies.setItem('adt_campaign', campaign);
            }
            if (element.indexOf('gclid=') > -1){
                let gclid = element.split('=', 2)[1];
                docCookies.setItem('adt_gclid', gclid);
            }
            if (element.indexOf('fclid=') > -1){
                let fclid = element.split('=', 2)[1];
                docCookies.setItem('adt_fclid', fclid);
            }
        });
    }
});
