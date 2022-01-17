$('.single-features-area').hover(function(){
    $(this).parent().find('.package-name').css({
        color:'white'
    });
});

$('.single-features-area').mouseleave(function(){
    $(this).parent().find('.package-name').css({
        color:'rgb(59, 59, 59)'
    });
});