// <![CDATA[
$(function() {

  // Slider
  $('#coin-slider').coinslider({width:960,height:360,opacity:1});

  // Radius Box
  //$('.menu_nav ul li a, .content p.pages span, .content p.pages a').css({"border-radius":"6px", "-moz-border-radius":"6px", "-webkit-border-radius":"6px"});
  //$('.content .mainbar img.fl, p.infopost, .searchform, .content .sidebar .gadget').css({"border-radius":"10px", "-moz-border-radius":"10px", "-webkit-border-radius":"10px"});
  //$('.content p.pages span, .content p.pages a').css({"border-radius":"16px", "-moz-border-radius":"16px", "-webkit-border-radius":"16px"});
  $('.menu_nav ul li a').css({"border-top-left-radius":"6px", "border-top-right-radius":"6px", "-moz-border-radius-topleft":"6px", "-moz-border-radius-topright":"6px", "-webkit-border-top-left-radius":"6px", "-webkit-border-top-right-radius":"6px"});

});	

// Cufon
Cufon.replace('h1, h2, h3, h4, h5, h6, .content .mainbar a.com, .content .mainbar a.rm', { hover: true });
//Cufon.replace('h1', { color: '-linear-gradient(#fff, #ffaf02)'});
//Cufon.replace('h1 small', { color: '#8a98a5'});

// ]]>