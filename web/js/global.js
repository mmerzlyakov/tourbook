/**
 * Created by Strogg on 24.10.2016.
 */

function setLocale(name){
    $.post('/site/set-locale', {locale_name: name });
    location.reload();
    return false;
}
