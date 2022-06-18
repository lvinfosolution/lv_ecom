$('.dod-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})

$('.sgti-carousel').owlCarousel({
    loop:false,
    margin:20,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6,
            slideBy: 3
        }
    }
})

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.paddingBottom = null;
    } else {
    //   panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.maxHeight = 220+"px";
      panel.style.paddingBottom = 30 + "px";
    } 
  });
}


$(document).ready(function(){


    $("#brand").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#brand li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });


});