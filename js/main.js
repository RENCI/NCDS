
var jQ = jQuery.noConflict();

jQ(document).ready(function(){

// /*START Activate Sidebar Team Widget----------------------------*/

//   var contadorTeam = 1;
 
//     jQ('.team-bios-widget .Grid-Boxes-with-Side-Panel .single-box .img-wrap a').click(function(event){
//       event.preventDefault();
//       var sidebarID = jQ(this).attr('href');
//       if (contadorTeam == 1) {
//         jQ(sidebarID).animate({
//           right: '0'
//         });
//         contadorTeam = 0;
//       } else {
//         contadorTeam = 1;
//         jQ(sidebarID).animate({
//           right: '-100%'
//         });
//       }
//     });

//     jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Side-Panel .bio-wrap .content-wrap .box-top button.close').click(function(event){
//       event.preventDefault();
       
//         contadorTeam = 1;
//         jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Side-Panel').animate({
//           right: '-100%'
//         });
      
//     });

//   /*START Activate Sidebar Team Widget----------------------------*/

  var contadorTeam3 = 1;
 
    jQ('.team-bios-widget .Stacked-Layout-with-Side-Panel .single-box .img-wrap a, .team-bios-widget .Grid-Boxes-2.with-Side-Panel .single-box .img-wrap a').click(function(event){
      event.preventDefault();
      jQ('.team-bios-widget.overlay').addClass('active');
      var sidebarID = jQ(this).attr('href');
      if (contadorTeam3 == 1) {
        jQ(sidebarID).animate({
          right: '0'
        });
        contadorTeam3 = 0;
      } else {
        contadorTeam3 = 1;
        jQ(sidebarID).animate({
          right: '-100%'
        });
      }
    });

    jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Side-Panel .bio-wrap .content-wrap .box-top button.close').click(function(event){
      event.preventDefault();
       jQ('.team-bios-widget.overlay').removeClass('active');
        contadorTeam3 = 1;
        jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Side-Panel').animate({
          right: '-100%'
        });
    });




  var contadorTeam2 = 1;
 
    jQ('.team-bios-widget .Grid-Boxes-with-Pop-Up .single-box .img-wrap a, .team-bios-widget .Grid-Boxes-2.with-Pop-Up .single-box .img-wrap a').click(function(event){
      event.preventDefault();
      var sidebarID = jQ(this).attr('href');
      if (contadorTeam2 == 1) {
        jQ(sidebarID).animate({
          right: '0'
        });
        contadorTeam2 = 0;
      } else {
        contadorTeam2 = 1;
        jQ(sidebarID).animate({
          right: '-100%'
        });
      }
    });

    jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Pop-Up .big-content-wrap .info-side-right .close-box button.close').click(function(event){
      event.preventDefault();
       
        contadorTeam2 = 1;
        jQ('.team-bios-widget .sidebar-Grid-Boxes-with-Pop-Up').animate({
          right: '-100%'
        });
      
    });

  
/*END Activate Sidebar Team Widget----------------------------*/

/*START function Same height boxes--------------------*/ 
  
 function sameheight1($object){
    var Box1 = 0;
      jQ($object).each(function(){  
        if(jQ(this).height() > Box1){  
          Box1 = jQ(this).height();  
        }
    });    
    jQ($object).height(Box1);
  }

  // sameheight1("#");


  function sameheight2($object1, $object2){
    var Box2 = 0;
    jQ($object1).each(function(){  
      if(jQ(this).height() > Box2){  
        Box2 = jQ(this).height();  
      }
    });    
    jQ($object2).height(Box2);
  }

  // sameheight2("#1", "#2" );

/*END function Same height boxes--------------------*/ 


/*Start function Slider Wrap into Item----------------------------*/

  function itemswrap($path, $number, $wrap){
     var divgallry = jQ($path);
    for(var i = 0; i < divgallry.length; i+=$number) {
      divgallry.slice(i, i+$number).wrapAll($wrap);
    }
    
  }
  function itemsunwrap($path){
    jQ($path).unwrap();
  }

/*END function Slider Wrap into Item----------------------------*/


/*Start function Slider Bullets Wrap----------------------------*/

  function bulletsWrap($sliderID){
    var indicatorsProduct= jQ($sliderID + " .item").size();  

    var row = jQ('<li data-target="'+$sliderID+'"></li>');
    
    for (var i=0; i<indicatorsProduct; i++) {
        jQ($sliderID + ' .carousel-indicators').append(row.clone());

    }

    var counterProduct=-1;
    jQ($sliderID + " .carousel-indicators li").each(function(){
    counterProduct++;
        var self=jQ(this);
        self.attr('data-slide-to', counterProduct);
    });  

    jQ($sliderID + " .carousel-indicators li").first().addClass('active');
    
  }

/*END function Slider Bullets Wrap----------------------------*/


/*START Slider Touchable--------------------*/

  jQ("#home-slider").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#home-slider").swipeleft(function() {  
    jQ(this).carousel('next');  
  }); 

  jQ("#testimonial-slider").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#testimonial-slider").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#sponsors-slider").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#sponsors-slider").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

   jQ("#custom-slider-1").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-1").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider-2").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-2").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider-3").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-3").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider-4").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-4").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider-5").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-5").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#custom-slider-6").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#custom-slider-6").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

  jQ("#testimonial-slider-2").swiperight(function() {  
    jQ(this).carousel('prev');  
  });  

  jQ("#testimonial-slider-2").swipeleft(function() {  
    jQ(this).carousel('next');  
  });

bootstrapArrows = '<a class="left carousel-control" href="#social-slider" data-slide="prev"><span class="fa fa-angle-double-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#social-slider" data-slide="next"><span class="fa fa-angle-double-right"></span><span class="sr-only">Next</span></a>';
  
var checkSocials = setInterval(function(){
  var hasSocials = jQ('.f .dc-wall .stream li').length;
     console.log(hasSocials);
  if(hasSocials >= 5){
     itemswrap('.f .dc-wall .stream li', 2, '<div class="single-box"></div>');
     itemswrap('.f .dc-wall .stream .single-box', 1, '<div class="item"></div>');
     jQ('.f .dc-wall .stream .item').wrapAll('<div class="carousel-inner"></div>');
     jQ('.f .dc-wall .stream .carousel-inner').wrapAll('<div id="social-slider" class="carousel slide carousel-fade"></div>');
     jQ('.f .dc-wall .stream #social-slider').append(bootstrapArrows);
     setTimeout(function(){
      jQ('.f #social-slider .item').first().addClass('active');
     },500);
      clearInterval(checkSocials);
  }
},1000);


/*START Slider Touchable--------------------*/

jQ(".content-tabs ul.nav.nav-tabs li").first().addClass('active');
jQ(".content-tabs .tab-content .tab-pane").first().addClass('active');


/*START clone content header-to to navihation mobile --------------------*/
var menuTop = jQ('.content-header .content-side-right .header-top').clone().addClass("header-top-mobile"); 
       jQ('.content-header .header-bottom #navigation ul.nav.navbar-nav').after(menuTop);

/*END clone content header-to to navihation mobile --------------------*/

/*END Activate checbox menu mobile  --------------------*/
jQ('.content-header .content-side-right .header-top .top-container .button-menu button').click(function(){
    jQ( '.content-header .header-bottom #btn-menu' ).click()

    });

/*END Activate checbox menu mobile  --------------------*/


/*START Social Stream activated Facebook --------------------*/

  var sit = setInterval(function(){
    var isoActive = jQ('#dcsns-filter .f-facebook a').hasClass('iso-active');
    if(isoActive !== true){
      jQ('a[data-filter=".dcsns-facebook"]').click();
    }else{
      clearInterval (sit);
   }
  },1000); 

/*END Social Stream activated Facebook --------------------*/


/*START video popup--------------------*/



jQ("button.video.mp4").click(function () {
     var theModal = jQ(this).data("target"),
     videoSRC = jQ(this).attr("data-video"),
     videoSRCauto = videoSRC;
     jQ(theModal).find("video").css("display", "block");
     jQ(theModal).find("iframe").css("display", "none");
     jQ(theModal + ' video source').attr('src', videoSRCauto);
      setTimeout(function() {
      jQ(theModal + ' video').get(0).load();
      jQ(theModal + ' video').get(0).play();
    },500);

     jQ(theModal + ' button.close').click(function () {
       jQ(theModal + ' video source').attr('src', videoSRC);
       jQ(theModal + ' video').get(0).pause();
   });
 });

 jQ("button.video.youtube").click(function () {
    var theModal1 = jQ(this).data("target"),
   videoSRC1 = jQ(this).attr("data-video"),
   videoSRCauto1 = videoSRC1 + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
   jQ(theModal1).find("video").css("display", "none");
    jQ(theModal1).find("iframe").css("display", "block");
   jQ(theModal1 + ' iframe').attr('src', videoSRCauto1);
   jQ(theModal1 + ' button.close').click(function () {
     jQ(theModal1 + ' iframe').attr('src', videoSRC1);
   });
 });

/*START video popup--------------------*/

 /*START anchor animation--------------------*/ 




//  jQ('.click-anchor').each(function(){
//   var text = jQ(this).text();
//   var id = jQ(this).attr('id');
//   var anchor = '<a class="anchor" href="#'+ id +'">'+ text +'</a>';
//   jQ('.anhors-interior .content-wrap').append(anchor);
//  });


// jQ(".anhors-interior .content-wrap .anchor").click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

//       var target = jQ(this.hash);
//       target = target.length ? target : jQ('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         jQ('html,body').animate({
//           scrollTop: target.offset().top - 200
//         }, 600);
//         return false;
//       }
//     }
//   });


/*START anchor animation--------------------*/ 

jQ(".anhors-interior a.anchor").click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = jQ(this.hash);
      target = target.length ? target : jQ('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQ('html,body').animate({
          scrollTop: target.offset().top - 200
        }, 1000);
        return false;
      }
    }
  });

/*START Add class Iframe--------------------*/




/*START same height --------------------*/
  
  /* Resources  --------------------*/
  sameheight1("header.header ul.navbar-nav > li > a");



  // sameheight2(".news-widget #news-slider .item", ".news-widget #news-slider .item" );

/*END same height --------------------*/



/*START Wrap items --------------------*/

jQ('a.btn-1, a.btn-2').each(function(){
  var text = jQ(this).text();
  var allText = '<span class="bd-top"></span><span class="btn-content">'+text+'</span><span class="bd-button"></span>';
  jQ(this).html(allText);
});


jQ('a.btn-1, a.btn-2').click(function(event){
    event.preventDefault();
    jQ(this).find('span.btn-content').addClass('is-active');
    var getHref = jQ(this).attr('href');
    setTimeout(function(){
      window.location.href = getHref;
    },1000);
});


  
  //var btnTetx = jQ('a.btn-1').text().wrap('<div class="item"></div>');




  // var btnTetx = jQ('a.btn-1').text();
  // var newSpan1 = document.createElement('span');

  // var insertElement = document.getElementById('id_481fde76-184b-4e80-a1e8-d19fd3cdfea9');
  // insertElement.appendChild(newSpan1);
  
  // jQ("#id_481fde76-184b-4e80-a1e8-d19fd3cdfea9 label").addClass('label-a');
  

  // jQ('a.btn-1').html(function (i, html) {
  //      return html.replace(/(\w+\w)/, '<span>$1</span>')
  //   });

  // itemswrap(btnTetx, 1, '<div class="item"></div>');
  
  /* SLIDER  --------------------*/
  // itemswrap("#home-slider .slider-box", 1, '<div class="item"></div>');

  // itemswrap("#testimonial-slider .single-box", 1, '<div class="item"><div class="content-wrap"></div></div>');

  // itemswrap("#custom-slider .single-box", 8, '<div class="item"><div class="content-wrap"></div></div>');

  // itemswrap("#gallery-slider .single-box", 3, '<div class="item"><div class="content-wrap"></div></div>');

  // itemswrap("#sponsors-slider .single-box", 4, '<div class="item"><div class="content-wrap"></div></div>');



/*END Wrap items --------------------*/

/*START activate bullets slider --------------------*/
  bulletsWrap("#resources-slider");

  //bulletsWrap("#custom-slider");
/*END activate bullets slider --------------------*/


// jQ('.d h2').html(function (i, html) {
//        return html.replace(/\s(.*)$/, '<span>$1</span>')
//     });


  
// function countUp($number){
//   var quantity = jQ($number).text();
//   quantity = parseInt(quantity);
//   var comma_separator_number_step = jQ.animateNumber.numberStepFactories.separator(',')
//   jQ($number).animateNumber(
//     {
//       number: quantity,
//       numberStep: comma_separator_number_step
//     },
//     2000
//   );
// }


// countUp('.number');
// var num = 234567890;
// var comma_separator_number_step = jQ.animateNumber.numberStepFactories.separator(',')
// jQ('.number').animateNumber(
//   {
//     number: num,
//     numberStep: comma_separator_number_step
//   }
// );

setTimeout(function(){

var widthBox = jQ('.swiper-container .swiper-wrapper.center .box.swiper-slide.swiper-slide-active .single-box ').width();
jQ('.c .arrows-wrap .swiper-button-next').css('margin-right', - widthBox / 2 - 60 );
jQ('.c .arrows-wrap .swiper-button-prev').css('margin-left', - widthBox / 2 - 60 );
},1000);


jQ('.header-menu nav').css('display','none');
var navCount = 0;

jQ('.content-header .content-side-right .header-top .top-container .button-menu button').click(function(){
  if(navCount == 0){
    //jQ('#navigation .navbar-nav li').removeClass('out');
    jQ('.content-header .header-content-wrap').addClass('active');
    jQ('#navigation .navbar-nav li').addClass('in');
    jQ(this).addClass('is-active');
    jQ('.header-menu nav').css('display','block');
    navCount = 1;
  }else{
    jQ('.content-header .header-content-wrap').removeClass('active');
    jQ('#navigation .navbar-nav li').removeClass('in');
    jQ('#navigation .navbar-nav li').addClass('out');
    jQ(this).removeClass('is-active');
    navCount = 0;
    setTimeout(function(){
      jQ('.header-menu nav').css('display','none');
      jQ('#navigation .navbar-nav li').removeClass('out');
    },1100);
  }
});


// var contador2 = 1;
 
// jQ('.content-header .content-side-right .header-top .top-container .button-menu button').click(function(event){
//   event.preventDefault();
//   if (contador2 == 1) {
//     jQ(this).addClass('is-active');
//     jQ("header.header").addClass('active')
//     contador2 = 0;
//   } else {
//     contador2 = 1;
//     jQ(this).removeClass('is-active');
//   }
// });
/*START  DEFAULT SETINGS --------------------*/



/*START Fixed Header--------------------*/

        jQ(window).bind('scroll', function () {
            if (jQ(window).scrollTop() > 135) {
                jQ('body').addClass('fixed');

            }
            else {
              jQ('body').removeClass('fixed');
            }

        });



        jQ(window).bind('scroll', function () {
            if (jQ(window).scrollTop() > jQ('body.custom-page .interior-top').height()) {
                jQ('body.custom-page').addClass('fixed');
              var headerBox = jQ('body.custom-page header.header').height();
              jQ('body.custom-page').css("paddingTop",headerBox);

            }
            else {
              jQ('body.custom-page').removeClass('fixed');
              jQ('body.custom-page').css("paddingTop",0);
            }

        });




jQ('.accordion-title').click(function(){
  var idAn = jQ(this).attr('id');
  setTimeout(function(){
    jQ("html, body").animate({ scrollTop: jQ('#' + idAn).offset().top - 270 }, 500);
  },500);
});

jQ('a[data-parent="#accordion"]').click(function(){
  var idAn = jQ(this).attr('href');
  setTimeout(function(){
    jQ("html, body").animate({ scrollTop: jQ(idAn).offset().top - 270 }, 500);
  },500);
}); 


setTimeout(function(){
  sameheight2(".c .content-wrap", ".swiper-container-coverflow .swiper-wrapper " );
},1000);




       
         

      /*END Fixed Header--------------------*/

  if (jQ(window).width() > 1201){

      //jQ('body').css("paddingTop", 0 );
      




  }else{

/*END Dropdown Main Menu Animation--------------------*/
  } // CLOSE ELSE 1200

  if (jQ(window).width() < 992 && jQ(window).width() > 768){
      jQ(' .content-tabs ul.nav.nav-tabs li a').click(function(){
        var idAn = jQ(this).attr('href');
        setTimeout(function(){
          jQ("html, body").animate({ scrollTop: jQ(idAn).offset().top - 200 }, 500);
        },500);
      });
  }else{
    
  }


  if (jQ(window).width() < 767 && jQ(window).width() > 483){

    jQ(' .content-tabs ul.nav.nav-tabs li a').click(function(){
        var idAn = jQ(this).attr('href');
        setTimeout(function(){
          jQ("html, body").animate({ scrollTop: jQ(idAn).offset().top - 100 }, 500);
        },500);
      });

  }else{
    
  }


  if (jQ(window).width() < 482){
      jQ(' .content-tabs ul.nav.nav-tabs li a').click(function(){
        var idAn = jQ(this).attr('href');
        setTimeout(function(){
          jQ("html, body").animate({ scrollTop: jQ(idAn).offset().top - 75}, 500);
        },500);
      });

  }else{
    
  }


/*END  DEFAULT SETINGS --------------------*/









/*START  Add class a socialstream --------------------*/
  setTimeout(function(){   

    jQ(".wall-outer .dc-wall .dcwss-content ul.stream li.dcsns-li > a").addClass('social-icon');

  },2000);

/*END  Add class a socialstream --------------------*/


/*START Dropdown Main Menu Animation--------------------*/




/*END Dropdown Main Menu Animation--------------------*/





/*END CUSTOM --------------------*/  


/*START Activate Bootstrap Slider--------------------*/  

  // jQ('#home-slider .item').first().addClass('active');
   
  // jQ("#testimonial-slider .item").first().addClass('active');
   
  // jQ("#custom-slider .item").first().addClass('active');

  // jQ("#sponsors-slider .item").first().addClass('active');

  // jQ("#gallery-slider .item").first().addClass('active');


/*END Activate Bootstrap Slider--------------------*/  


/*START Search--------------------*/
    
  // jQ('.search #searchform #s').attr('placeholder', 'Search here...');

  jQ('.open-search').click(function() {
    jQ('.search-section').slideToggle('300');
    setTimeout(function(){
      jQ('.search-section #s').focus();
    },400);
  });  

/*END Search--------------------*/


setTimeout(function(){  
  sameheight1("#custom-slider-6 .single-box");
},400);


setTimeout(function(){  
  itemswrap("#custom-slider-6 .single-box", 1, '<div class="item"></div>');
  jQ("#custom-slider-6 .item").first().addClass('active');
},500);

  
// START Home Slider
  itemswrap("#home-slider .slider-box", 1, '<div class="item"></div>');
  itemswrap("#internal-slider .slider-box", 1, '<div class="item"></div>');
  sameheight1("#testimonial-home-slider-a .single-box");
  itemswrap("#testimonial-home-slider-a .single-box", 1, '<div class="item"></div>');

  sameheight1("#testimonial-slider-2 .single-box");
  itemswrap("#testimonial-slider-2 .single-box", 1, '<div class="item"></div>');

  // sameheight1("#testimonial-home-slider-b .single-box");



setTimeout(function(){   

  sameheight2("#social-slider", ".wall-outer" );


},5000);

// jQ(".wp-embedded-content").addClass('embed-responsive-item');
// itemswrap(".wp-embedded-content.embed-responsive-item", 1, '<div class="embed-responsive embed-responsive-16by9"></div>');

// <div class="embed-responsive embed-responsive-16by9">
//  <iframe class="embed-responsive-item" src="..."></iframe>
// </div>
  
  itemswrap("#testimonial-home-slider-b .single-box", 1, '<div class="item"></div>');
// END Home Slider

// START Testimonial Slider
  itemswrap("#testimonial-slider .single-box", 1, '<div class="content-wrap"></div>');
  sameheight1("#testimonial-slider .content-wrap");
  itemswrap("#testimonial-slider .content-wrap", 1, '<div class="item"></div>');
// END Testimonial Slider
    

  jQ("#testimonial-home-slider-a .item").first().addClass('active');
  jQ("#testimonial-home-slider-b .item").first().addClass('active');
  jQ("#home-slider .item").first().addClass('active');
  
  jQ("#internal-slider .item").first().addClass('active');
  jQ("#testimonial-slider-2 .item").first().addClass('active');
  jQ("#testimonial-slider .item").first().addClass('active');


  bulletsWrap("#testimonial-slider-2");
  bulletsWrap("#testimonial-home-slider-a");
  bulletsWrap("#home-slider");




// setTimeout(function(){   

//   sameheight1("#custom-slider-2 .single-box");

// },500);

// itemswrap("#custom-slider-1 .single-box", 1, '<div class="item"></div>');
// itemswrap("#custom-slider-2 .single-box", 1, '<div class="item"></div>');

// jQ("#custom-slider-1 .item").first().addClass('active');
// jQ("#custom-slider-2 .item").first().addClass('active');


// jQ('#custom-slider-1, #custom-slider-2').carousel({
//   interval: false
// })
// jQ('.b .carousel-control.left').click(function(event) {
//   // event.stopPropagation();
//   jQ(".carousel").promise().done(function() {
//     jQ('#custom-slider-2').carousel('prev');
//     jQ('#custom-slider-1').carousel('prev');
//   });
// });
// jQ('.b .carousel-control.right').click(function(event) {
//   // event.stopPropagation();
//   jQ(".carousel").promise().done(function() {
//     jQ('#custom-slider-2').carousel('next');
//     jQ('#custom-slider-1').carousel('next');
//   });
// });
// jQ('#custom-slider-1 .carousel-indicators li').click(function(event) {
//   event.stopPropagation();
//   var indicatorNumber = jQ(this).attr('data-slide-to');
//   jQ('#custom-slider-2').carousel(parseInt(indicatorNumber));
//   jQ('#custom-slider-1').carousel(parseInt(indicatorNumber));
// });
// jQ("body").keyup(function(e) {
//   e.stopPropagation();
//   if (e.keyCode == 37) { // left
//     jQ('#custom-slider-1 ').trigger('click');
//   } else if (e.keyCode == 39) { // right
//     jQ('#custom-slider-1').trigger('click');
//   }
// }); 





sameheight1("#custom-slider-5 .single-box");
itemswrap("#custom-slider-4 .single-box", 1, '<div class="item"></div>');
itemswrap("#custom-slider-5 .single-box", 1, '<div class="item"></div>');

jQ("#custom-slider-4 .item").first().addClass('active');
jQ("#custom-slider-5 .item").first().addClass('active');


jQ('#custom-slider-4, #custom-slider-5').carousel({
  interval: false
})
jQ('.o .carousel-control.left').click(function(event) {
  // event.stopPropagation();
  jQ(".carousel").promise().done(function() {
    jQ('#custom-slider-5').carousel('prev');
    jQ('#custom-slider-4').carousel('prev');
  });
});
jQ('.o .carousel-control.right').click(function(event) {
  // event.stopPropagation();
  jQ(".carousel").promise().done(function() {
    jQ('#custom-slider-5').carousel('next');
    jQ('#custom-slider-4').carousel('next');
  });
});
jQ('#custom-slider-4 .carousel-indicators li').click(function(event) {
  event.stopPropagation();
  var indicatorNumber = jQ(this).attr('data-slide-to');
  jQ('#custom-slider-5').carousel(parseInt(indicatorNumber));
  jQ('#custom-slider-4').carousel(parseInt(indicatorNumber));
});
jQ("body").keyup(function(e) {
  e.stopPropagation();
  if (e.keyCode == 37) { // left
    jQ('#custom-slider-4 ').trigger('click');
  } else if (e.keyCode == 39) { // right
    jQ('#custom-slider-4').trigger('click');
  }
}); 









jQ('#testimonial-home-slider-a, #testimonial-home-slider-b').carousel({
  interval: false
})
jQ('.e .carousel-control.left').click(function(event) {
  // event.stopPropagation();
  jQ(".carousel").promise().done(function() {
    jQ('#testimonial-home-slider-b').carousel('prev');
    jQ('#testimonial-home-slider-a').carousel('prev');
  });
});
jQ('.e .carousel-control.right').click(function(event) {
  // event.stopPropagation();
  jQ(".carousel").promise().done(function() {
    jQ('#testimonial-home-slider-b').carousel('next');
    jQ('#testimonial-home-slider-a').carousel('next');
  });
});
jQ('#testimonial-home-slider-a .carousel-indicators li').click(function(event) {
  event.stopPropagation();
  var indicatorNumber = jQ(this).attr('data-slide-to');
  jQ('#testimonial-home-slider-b').carousel(parseInt(indicatorNumber));
  jQ('#testimonial-home-slider-a').carousel(parseInt(indicatorNumber));
});
jQ("body").keyup(function(e) {
  e.stopPropagation();
  if (e.keyCode == 37) { // left
    jQ('#testimonial-home-slider-a ').trigger('click');
  } else if (e.keyCode == 39) { // right
    jQ('#testimonial-home-slider-a').trigger('click');
  }
});  


// jQ('#testimonial-home-slider-a,#testimonial-home-slider-b').carousel({
//  pause: null
// });


// jQ('#testimonial-home-slider-a,#testimonial-home-slider-b').mouseover(function() {
//     jQ('#testimonial-home-slider-a,#testimonial-home-slider-b').carousel('pause');
// })



// jQ('#testimonial-home-slider-b .item .img-wrap, .item .img-wrap').click(function() {
//     var mainSlider = jQ(this).parent().attr('data-slide-to');
//     jQ('#testimonial-home-slider-a,#ctestimonial-home-slider-b').carousel(parseInt(mainSlider));
// });

/*START Include Dropdown Button--------------------*/

var itemBtn = '<button  class="dropdown-toggle dropdown-btn"><span class="caret"></span></button>';

jQ( 'header #navigation .nav .dropdown > a').after(itemBtn);




jQ(".c .content-tabs ul.nav.nav-tabs li").first().addClass('active');
jQ(".c .content-tabs .tab-content .tab-pane").first().addClass('active');


/*END Dropdown Main Menu Animation--------------------*/

/*START Resize--------------------*/

  function myOrientResizeFunction(){


    if (jQ(window).width() > 1201){


        var headerBox = jQ('header.header').height();
            
           
        // jQ('body:not(body.custom-page)').css("paddingTop",headerBox);

      
      jQ(".dropdown-btn").unbind();
      jQ(".dropdown-menu .dropdown").unbind();
       jQ(".dropdown").unbind();
       jQ(".dropdown-menu").unbind();

      jQ('.dropdown, .dropdown-menu').hover(function(){
          jQ(this).children('.dropdown-menu').stop(true, false).slideDown("slow");
      }, function(){
          jQ(this).children('.dropdown-menu').stop(true, false).slideUp("fast");
      });

    }else{

      var headerBox = jQ('header.header').height();
          
         
      // jQ('body:not(body.custom-page)').css("paddingTop",headerBox);

      // jQ('body').css("paddingTop", 0 );
       
       jQ(".dropdown-btn").unbind();
       jQ(".dropdown-menu .dropdown").unbind();
       jQ(".dropdown").unbind();
       jQ(".dropdown-menu").unbind();

       jQ(".dropdown-btn").click(function(){
        var findactivecaret = jQ(this).find('.caret').hasClass('active');
            if(findactivecaret==true){
              jQ(this).parent().parent().parent().find("li ul").slideUp();
              jQ(this).parent().parent().parent().find("li .caret").removeClass("active");
              jQ(this).next().slideUp("slow");
              jQ(this).find('.caret').removeClass('active');
            }
            else{
              jQ(this).parent().parent().parent().find("li ul").slideUp();
              jQ(this).parent().parent().parent().find("li .caret").removeClass("active");
              jQ(this).next().slideDown("slow");
              jQ(this).find('.caret').addClass('active');
            }
        });
       jQ('header #navigation .nav .dropdown .dropdown-menu').css('display','none');


    }



    if (jQ(window).width() > 1023){
      



      // jQ('.h .info-wrap').css('display','none');
      // jQ('.h .info-wrap').hover(function(){
      //     jQ(this).find('.info-wrap').stop(true, false).slideDown("slow");
      // }, function(){
      //     jQ(this).find('.info-wrap').stop(true, false).slideUp("fast");
      // });


      // jQ('.k .info-wrap').css('display','none');
      // jQ('.k .info-wrap').hover(function(){
      //     jQ(this).find('.info-wrap').stop(true, false).slideDown("slow");
      // }, function(){
      //     jQ(this).find('.info-wrap').stop(true, false).slideUp("fast");
      // });


      jQ('.testimonial-widget .tiled-testimonial .hover-wrap').css('display','none');
      jQ('.testimonial-widget .tiled-testimonial .hover-wrap').hover(function(){
          jQ(this).find('.info-wrap').stop(true, false).slideDown("slow");
      }, function(){
          jQ(this).find('.hover-wrap').stop(true, false).slideUp("fast");
      });


    }

    if (jQ(window).width() > 1023){

      // START Gallery Slider
      itemsunwrap('#news-slider .content-wrap .single-box');
      itemsunwrap('#news-slider .item .single-box');
      itemswrap("#news-slider .single-box", 2, '<div class="content-wrap"></div>');
      sameheight1("#news-slider .content-wrap");
      itemswrap("#news-slider .content-wrap", 1, '<div class="item"></div>');
    }else{

      // START Gallery Slider
      itemsunwrap('#news-slider .content-wrap .single-box');
      itemsunwrap('#news-slider .item .single-box');
      itemswrap("#news-slider .single-box", 1, '<div class="content-wrap"></div>');
      sameheight1("#news-slider .content-wrap");
      itemswrap("#news-slider .content-wrap", 1, '<div class="item"></div>');
    // END Gallery Slider
    }



    if (jQ(window).width() > 769){
      // START Gallery Slider
      itemsunwrap('#custom-slider-1 .content-wrap .single-box');
      itemsunwrap('#custom-slider-1 .item .single-box');
      itemswrap("#custom-slider-1 .single-box", 3, '<div class="content-wrap"></div>');
      sameheight1("#custom-slider-1 .content-wrap");
      itemswrap("#custom-slider-1 .content-wrap", 1, '<div class="item"></div>');
    }

    if (jQ(window).width() < 769 && jQ(window).width() > 600) {
      // START Gallery Slider
      itemsunwrap('#custom-slider-1 .content-wrap .single-box');
      itemsunwrap('#custom-slider-1 .item .single-box');
      itemswrap("#custom-slider-1 .single-box", 2, '<div class="content-wrap"></div>');
      sameheight1("#custom-slider-1 .content-wrap");
      itemswrap("#custom-slider-1 .content-wrap", 1, '<div class="item"></div>');

    }
    if (jQ(window).width() <= 600) {
      // START Gallery Slider
        itemsunwrap('#custom-slider-1 .content-wrap .single-box');
        itemsunwrap('#custom-slider-1 .item .single-box');
        itemswrap("#custom-slider-1 .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#custom-slider-1 .content-wrap");
        itemswrap("#custom-slider-1 .content-wrap", 1, '<div class="item"></div>');
    }


    if (jQ(window).width() > 600){


        

        // START Gallery Slider
        itemsunwrap('#custom-slider-2 .content-wrap .single-box');
        itemsunwrap('#custom-slider-2 .item .single-box');
        itemswrap("#custom-slider-2 .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#custom-slider-2 .content-wrap");
        itemswrap("#custom-slider-2 .content-wrap", 1, '<div class="item"></div>');


       // START Gallery Slider
        itemsunwrap('#gallery-slider .content-wrap .single-box');
        itemsunwrap('#gallery-slider .item .single-box');
        itemswrap("#gallery-slider .single-box", 3, '<div class="content-wrap"></div>');
        sameheight1("#gallery-slider .content-wrap");
        itemswrap("#gallery-slider .content-wrap", 1, '<div class="item"></div>');
      
      // START Custom Slider
        itemsunwrap('#sponsors-tiled-home-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-tiled-home-slider .item .single-box');
        itemswrap("#sponsors-tiled-home-slider .single-box", 8, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-tiled-home-slider .content-wrap");
        itemswrap("#sponsors-tiled-home-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider

      // START Custom Slider
        itemsunwrap('#sponsors-home-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-home-slider .item .single-box');
        itemswrap("#sponsors-home-slider .single-box", 5, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-home-slider .content-wrap");
        itemswrap("#sponsors-home-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider


      // START Custom Slider
        itemsunwrap('#testimonial-slider-3 .content-wrap .single-box');
        itemsunwrap('#testimonial-slider-3 .item .single-box');
        itemswrap("#testimonial-slider-3 .single-box", 4, '<div class="content-wrap"></div>');
        sameheight1("#testimonial-slider-3 .content-wrap");
        itemswrap("#testimonial-slider-3 .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider


    }else{



      // START Gallery Slider
        itemsunwrap('#custom-slider-2 .content-wrap .single-box');
        itemsunwrap('#custom-slider-2 .item .single-box');
        itemswrap("#custom-slider-2 .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#custom-slider-2 .content-wrap");
        itemswrap("#custom-slider-2 .content-wrap", 1, '<div class="item"></div>');



      // START Gallery Slider
        itemsunwrap('#gallery-slider .content-wrap .single-box');
        itemsunwrap('#gallery-slider .item .single-box');
        itemswrap("#gallery-slider .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#gallery-slider .content-wrap");
        itemswrap("#gallery-slider .content-wrap", 1, '<div class="item"></div>');
      // END Gallery Slider

      // START Custom Slider
        itemsunwrap('#sponsors-tiled-home-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-tiled-home-slider .item .single-box');
        itemswrap("#sponsors-tiled-home-slider .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-tiled-home-slider .content-wrap");
        itemswrap("#sponsors-tiled-home-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider

      // START Custom Slider
        itemsunwrap('#sponsors-home-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-home-slider .item .single-box');
        itemswrap("#sponsors-home-slider .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-home-slider .content-wrap");
        itemswrap("#sponsors-home-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider

      // START Custom Slider
        itemsunwrap('#testimonial-slider-3 .content-wrap .single-box');
        itemsunwrap('#testimonial-slider-3 .item .single-box');
        itemswrap("#testimonial-slider-3 .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#testimonial-slider-3 .content-wrap");
        itemswrap("#testimonial-slider-3 .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider

    }


    if (jQ(window).width() > 600){

      // END Gallery Slider

       // START Sponsors Slider
        itemsunwrap('#sponsors-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-slider .item .single-box');
        itemswrap("#sponsors-slider .single-box", 4, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-slider .content-wrap");
        itemswrap("#sponsors-slider .content-wrap", 1, '<div class="item"></div>');
      // END Sponsors Slider

      // START Custom Slider
        itemsunwrap('#custom-slider .content-wrap .single-box');
        itemsunwrap('#custom-slider .item .single-box');
        itemswrap("#custom-slider .single-box", 8, '<div class="content-wrap"></div>');
        sameheight1("#custom-slider .content-wrap");
        itemswrap("#custom-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider
    
    } else {

       

       // START Sponsors Slider
        itemsunwrap('#sponsors-slider .content-wrap .single-box');
        itemsunwrap('#sponsors-slider .item .single-box');
        itemswrap("#sponsors-slider .single-box", 1, '<div class="content-wrap"></div>');
        sameheight1("#sponsors-slider .content-wrap");
        itemswrap("#sponsors-slider .content-wrap", 1, '<div class="item"></div>');
      // END Sponsors Slider

      // START Custom Slider
        itemsunwrap('#custom-slider .content-wrap .single-box');
        itemsunwrap('#custom-slider .item .single-box');
        itemswrap("#custom-slider .single-box", 2, '<div class="content-wrap"></div>');
        sameheight1("#custom-slider .content-wrap");
        itemswrap("#custom-slider .content-wrap", 1, '<div class="item"></div>');
      // END Custom Slider
    }

    
    jQ("#gallery-slider .item").first().addClass('active');
    jQ("#custom-slider-1 .item").first().addClass('active');
    jQ("#custom-slider-2 .item").first().addClass('active');
    jQ("#news-slider .item").first().addClass('active');
    jQ("#sponsors-slider .item").first().addClass('active');
    jQ("#sponsors-home-slider .item").first().addClass('active');
    // Custom Slider Activate First Item & Bullets
    jQ('#custom-slider ol.carousel-indicators li').remove();
    jQ("#sponsors-tiled-home-slider .item").first().addClass('active');
    

    bulletsWrap("#custom-slider");


    jQ('#news-slider ol.carousel-indicators li').remove();
    jQ("#news-slider .item").first().addClass('active');
    bulletsWrap("#news-slider");



    jQ('#testimonial-slider-3 ol.carousel-indicators li').remove();
    jQ("#testimonial-slider-3 .item").first().addClass('active');
    bulletsWrap("#testimonial-slider-3");

    jQ('.testimonial-widget #testimonial-slider-3 .content-wrap .single-box a').click(function(event){
      event.preventDefault();
      var tclass = jQ(this).parent().parent().hasClass('active');
      if (tclass) {
        
      } else {
        var id = jQ(this).attr('href');
        jQ('.testimonial-widget #testimonial-slider-3 .content-wrap .single-box a').parent().parent().removeClass('active');
        jQ(this).parent().parent().addClass('active');
        jQ('.testimonial-widget .view-story').slideUp();
        jQ(id).slideDown();
      }
    });
    jQ('.testimonial-widget #testimonial-slider-3 .carousel-control').click(function(){
        jQ('.testimonial-widget #testimonial-slider-3 .content-wrap .single-box').removeClass('active');
    });


  }



  myOrientResizeFunction();


  // setTimeout(function(){
  // }, 500);


  jQ(window).bind('resize', function(e){
    if (window.RT) clearTimeout(window.RT);
    window.RT = setTimeout(function(){
       // this.location.reload(false); /* false to get page from cache */
        myOrientResizeFunction();
    }, 0);
  });

  jQ(window).resize(function(){
   myOrientResizeFunction();
  });


/*END  Resize--------------------*/



});
  


    





    



