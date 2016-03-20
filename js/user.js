function set_lang(lang){
    $.post( "settings.php", { lang: lang }).done(function( data ) {
        window.location.reload();
    });
}

$(function(){
    $(".dropdown-menu li a").click(function(){
        $(".position:first-child").text($(this).text());
        $(".position:first-child").val($(this).text());
    });
});

$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '../admin/bin/add_user.php',
            data: $('form').serialize(),
            success: function (data) {
                var div = document.getElementById('danger');
                div.style.display = 'none';
                var div = document.getElementById('success');
                div.style.display = 'none';
                if(data == 'false') {
                    var div = document.getElementById('danger');
                    div.style.display = 'block';
                } else {
                    var div = document.getElementById('success');
                    div.style.display = 'block';
                    document.getElementById('user').reset();
                }
            }
        });
    });
});

$('#myModal').on('shown.bs.modal', function() {
    var div = document.getElementById('danger');
    div.style.display = 'none';
    var div = document.getElementById('success');
    div.style.display = 'none';
})





