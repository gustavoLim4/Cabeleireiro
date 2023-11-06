$(document).ready(function(){
    $('.fotoCortes').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 500,
    });
  });
  new WOW().init();

  document.querySelector(".abrir-menu").onclick = function () {
    document.documentElement.classList.add("menu-mobile");  
  }
  document.querySelector(".fechar-menu").onclick = function (){
    document.documentElement.classList.remove("menu-mobile");
  }
 
  