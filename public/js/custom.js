$(document).ready(function(){

  $("#owl-carousel").owlCarousel({
            items: 1,
            singleItem: true,
            rewind: true,
        });

  $("#owl-carousel_mini").owlCarousel({
            items: 4,
            singleItem: false,
            rewind: true,
            loop:false,
   			margin:10,
        });
  

});