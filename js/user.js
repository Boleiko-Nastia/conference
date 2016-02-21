function set_lang(lang){
    $.post( "settings.php", { lang: lang }).done(function( data ) {
        window.location.reload();
    });
}





