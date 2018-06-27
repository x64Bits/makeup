$(document).ready(function(){

  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: '<i id="slider_prev" class="fas fa-chevron-left slider_button"></i>',
    nextArrow: '<i id="slider_next" class="fas fa-chevron-right slider_button"></i>'
  });

  $('.slider_text').slick({	
    prevArrow: '<i id="slider_prev" class="fas fa-chevron-left slider_button"></i>',
    nextArrow: '<i id="slider_next" class="fas fa-chevron-right slider_button"></i>'
  });
});



$('#btn_toggle_responsive_menu').click( function () {
	$('.responsive_menu').toggleClass('toggle_responsive_menu');
})

$('#link_to_contact').click(function(){
    //$('#footer_public').scroll();
    $('html, body').animate({ scrollTop: $('.footer').offset().top }, 2000);
    return false;
});
$('#link_to_categories').click(function(){
    $('html, body').animate({ scrollTop: $('#wrapper_to_categories').offset().top }, 1500);
    return false;
}) 

$('#link_to_contact2').click(function(){
    //$('#footer_public').scroll();
    $('html, body').animate({ scrollTop: $('.footer').offset().top }, 2000);
    return false;
});
$('#link_to_categories2').click(function(){
    $('html, body').animate({ scrollTop: $('#wrapper_to_categories').offset().top }, 1500);
    return false;
}) 