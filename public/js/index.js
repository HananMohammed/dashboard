



/*button click active*/
$(".productList").on('click','li', function(){
  $(".productList li").removeClass('active');
  $(this).addClass('active');
})

function init(){
  $(".cars").show( );
  $(".offers").hide();
  $("li.nav-item:first-child").addClass("checked-radio");
}
init()
/*data show and hide*/
$(".allCars").on('click', function(){
  $(".cars").show(500 );
  $(".offers").hide(500);
})
$(".carOffers").on('click', function(){
  $(".cars").hide(500 );
  $(".offers").show(500);
})






function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}

// $("#companyCash-tab").click(function(){
//   if($("#companyCash-tab").find('active').length == 1)
//   {
//     console.log("test")
//   }
//   else
//   {
//     // $("#companyFinance-tab").removeAttr("checked");
//     $("#companyFinance-tab").removeClass("active");
//     // $("#companyCash-tab").attr("checked" , "checked");
//
//     console.log("test11")
//    // $("#companyCash-tab").removeClass("active");
//
//   }
// })

$("#nav-Companies-tab , #nav-individual-tab").click(function(){

  $("#transitionText").show();

    $("li.nav-item:first-child").addClass("checked-radio");
    $('li.nav-item:first-child').click(function(){
        $('li.nav-item:last-child').removeClass("checked-radio");
        $(this).addClass("checked-radio");
    });

    $('li.nav-item:last-child').click(function(){
        $('li.nav-item:first-child').removeClass("checked-radio");
        $(this).addClass("checked-radio");
    });

});


$("#nav-government-tab").click(function(){

  $("#transitionText").hide();
});



// owl carousal fire function
$(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });


$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,

  autoplay:true,
  autoplayTimeout:2500,
  responsiveClass:true,
  nav:false,
  responsive:{
    0:{
      items:1,
    },
    600:{
      items:3,
    },
    1000:{
      items:5,
    }
  }
})

/*scrolled navbar*/
// $(function () {
//   $(document).scroll(function () {
//     var $nav = $(".nav-fixed-top");
//     // var $logo = $("img.img-fluid.logo1");
//     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//     // $logo.attr("src", "public/images/AC.png");
//   });
// });
//


/*navabr*/
var $logoMain = $("#lego .logo  img.img-fluid.logo1");
$logoMain.attr("src", "public/images/AC.png");

$(function () {
    var $logo = $(" #log .logo img.img-fluid.logo1");
    if($('#logo2').length==0){
                console.log('homepage')
            }else{
                console.log('singel page')
                $logoMain.attr("src", "public/images/AC-white(logo).png");
                 console.log( $('#lego img').attr("src"))
            }
    $(document).scroll(function () {
        var $nav = $(".nav-fixed-top");

        
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        if($(this).scrollTop() > $nav.height() ){
            
           $logoMain.attr("src", "public/images/AC.png");
        }else{
             if($('#logo2').length==0){
                console.log('homepage')
            }else{
                console.log('singel page')
                 $logoMain.attr("src", "public/images/AC-white(logo).png");
                 console.log( $('#lego img').attr("src"))
            }
            //logo no 1
           
        
        }

    });

});


//
// $(function () {
//   $(document).scroll(function () {
//     var $nav = $(".nav-fixed-top");
//     var $logo = $(".logo1");
//     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//       // $logo.attr('src', '{{URL::asset('public/images/AC-white(logo).png')}}');
//   });
// });

// $(document).scroll() {function() {
//     var src = ($(this).attr('src') === '{{URL::asset('public/images/AC-white(logo).png')}}')
//         ? '{{URL::asset('public/images/AC.png')}}'
//         : '{{URL::asset('public/images/AC-white(logo).png')}}';
//     $(this).attr('src', {{URL::asset('public/images/AC-white(logo).png')}});
//   }
// };


// var btn = $('#top');
//
// $(window).scroll(function() {
//   if ($(window).scrollTop() > 300) {
//     btn.addClass('show');
//   } else {
//     btn.removeClass('show');
//   }
// });
//
// btn.on('click', function(e) {
//   e.preventDefault();
//   $('html, body').animate({scrollTop:0}, '300');
// });
//



