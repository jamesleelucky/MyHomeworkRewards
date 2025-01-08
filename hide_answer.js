var pressed = false;
jQuery(".show-answer").click(function() {
  pressed = !pressed;
  var target = "#" + jQuery(this).data("target");

  // Animation
  jQuery(target).slideToggle(200);
  // Accessibility
  jQuery(this).toggleClass('expanded collapsed');
  jQuery(this).attr('aria-pressed', pressed);
  if(jQuery(this).attr('class')==="show-answer collapsed"){
jQuery(this).html("Show Answer");
}else{
jQuery(this).html("Hide Answer");
}	
});