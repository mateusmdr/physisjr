$(function () {
    
    var el = 
    "<div class='opacity-background'>\
        <div class='success'>\
            <h1>Sua mensagem foi recebida com sucesso!</h1>\
            <div class='success-img'></div>\
        </div>\
    </div>";

    var popup = $(el).appendTo('aside#success');
    $('body').css('overflow','hidden');

    $('aside#success').click(function() {
        $('.opacity-background').remove();
        $('body').css('overflow','initial');
    });

    $('aside#success .opacity-background .success').click(function (e) {
        e.stopPropagation();
    });
});