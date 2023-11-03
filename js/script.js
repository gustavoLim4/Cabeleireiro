$(document).ready(function(){
    $('.fotoCortes').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 500,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              arrows: false,
              slidesToShow: 4,
              slidesToScroll: 3,
              infinite: true,
              
            }
          },
          {
            breakpoint: 601,
            settings: {
              arrows: false,
              slidesToShow: 4,
              slidesToScroll: 1
            }
          },



          {
            breakpoint: 590,
            settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 3,
              autoplaySpeed: 900,
              
             
              
            }
          },
          {
            breakpoint: 520,
            settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 3,
              autoplaySpeed: 900,
             
             
              
            },
          },
        
          
        ]
    });
  });
  new WOW().init();

  document.querySelector(".abrir-menu").onclick = function () {
    document.documentElement.classList.add("menu-mobile");  
  }
  document.querySelector(".fechar-menu").onclick = function (){
    document.documentElement.classList.remove("menu-mobile");
  }
 
  