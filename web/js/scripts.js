function scrollFooter(scrollY, heightFooter) {
    if (scrollY >= heightFooter) {
        $('footer').css({
            'bottom': '0px'
        });
    } else {
        $('footer').css({
            'bottom': '-' + heightFooter + 'px'
        });
    }
}

// $(window).load(function(){
var windowHeight = $(window).height(),
    footerHeight = $('footer').height(),
    heightDocument = (windowHeight) + ($('.content').height()) + ($('footer').height());

// Definindo o tamanho do elemento pra animar
$('#scroll-animate, #scroll-animate-main').css({
    'height': heightDocument + 'px'
});

// Definindo o tamanho dos elementos header e conteúdo
$('header').css({
    'height': windowHeight + 'px',
    // 'line-height' : windowHeight + 'px'
});

$('.wrapper-parallax').css({
    'margin-top': windowHeight + 'px'
});

scrollFooter(window.scrollY, footerHeight);

// ao dar rolagem
window.onscroll = function () {
    var scroll = window.scrollY;

    /* $("body,html").animate({
             scrollTop: 700
         }, 300);
*/
    var op;
    var m = document.querySelector('.top-menu');
    var logo = document.querySelector('.logo-img');
    if (scroll > 150) {
        op = 1;
        m.classList.add('top-menu-anim');
        logo.classList.add('logo-img-anim');
        $('.opening').hide(300);
    } else {
        m.classList.remove('top-menu-anim');
        logo.classList.remove('logo-img-anim');
        op = 0.3;
        $('.opening').show(300);
    }

    $('.top-menu').css({
        'background': 'rgba(255, 255, 255, ' + op + ')'
    });


    $('#scroll-animate-main').css({
        'top': '-' + scroll + 'px'
    });

    $('header').css({
        'background-position-y': 50 - (scroll * 100 / heightDocument) + '%'
    });

    scrollFooter(scroll, footerHeight);
}
// });
///// END PARALLAX
///// PJAX
$(document).on('pjax:beforeSend', function () {
    document.body.style.cursor = 'progress';

});
$(document).on('pjax:complete', function () {
    document.body.style.cursor = 'default';
});