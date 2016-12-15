/**
 * Created by Strogg on 24.10.2016.
 */

function setLocale(name){
    $.post('/site/set-locale', {locale_name: name }).done(function(result){
        console.log(result);
    });
    location.reload();
    return false;
}
