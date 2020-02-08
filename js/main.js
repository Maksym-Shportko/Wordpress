/*обізатєльна часть */
jQuery(document).ready(function($) {
 $(document).ready(function(){

$('.slider-items').slick({
  dots: true,
  infinite: true,
  speed: 50,
  fade: true,
  cssEase: 'linear',
  arrows: false,
   autoplay: true,

});
});
});
$('.second_slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  centerMode: true,
  variableWidth: false,
  cssEase: 'linear',
  autoplay: true,
  slidesToScroll: 3
});
