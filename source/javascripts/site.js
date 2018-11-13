$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $(".menu-container").fadeOut();
    } else {
        $(".menu-container").fadeIn();
    }
});

// $(function () {
//     $('.tlt').textillate({
//     	loop: true,
//     	minDisplayTime: 1000,
//     });
// });

$(function(){ 
$("#memberx").click(function(){
$(".more-info-x").slideToggle();
});
$("#membery").click(function(){
$(".more-info-y").slideToggle();
});
$("#memberz").click(function(){
$(".more-info-z").slideToggle();
});
});
