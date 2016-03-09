$(function() {
    //$('.bodybtm').hide();

    $('.button').click(function(){
        $('.bodybtm').show();
        //$('.bodybtm').css('display', 'block');
        //$('.button').hide();
        $('.button').css('visibility', 'hidden');
    });

    $('.button2').click(function(){
        $('.bodybtm').hide();
        //$('.bodybtm').css('display', 'none');
        //$('.button').show();
        $('.button').css('visibility', 'visible');
    });

});

/*--sample2---------------------------------------------------------*/

/*
$(function() {
$('.button3').click(function(){
$('.bodybtm2').toggle();
//$('.bodybtm2').toggle(true);
});
});
*/

$(document).ready(function(){
    //$('.bodybtm2').hide();
    var flg = 'close';
    $('.button3').click(function(){
        $('.bodybtm2').slideToggle('fast');
        if(flg == 'close'){
            flg = 'open';
            $(this).text('髢峨§繧�');
        }else{
            flg = 'close';
            $(this).text('邯壹″繧定ｪｭ繧');
        }
    });
});