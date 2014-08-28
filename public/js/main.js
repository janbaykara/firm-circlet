$(document).ready(function () {
  
  $(window).resize(function () {
    // ...
  });
  
  $(window).load(function () {
    // ...
  });
  
  $(window).scroll(function () {
    if($(window).scrollTop() > 1)
      $("body").addClass("scrolling");
    else
      $("body").removeClass("scrolling");
  });
});