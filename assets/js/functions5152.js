


( function( $ ) {

    jQuery(document).ready(function($) {
 //js code for mobile menu 
      $('.mobile-toggle').on('click', function(e) {
        $('body').toggleClass('open-mobile-menu')
      });

      $('.mobile-menu>ul>li>a,.mobile-menu ul.dropdown-menu>li>a').on('click', function(e) {
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
          element.removeClass('open');
          element.find('li').removeClass('open');
          element.find('ul').slideUp(1500,"swing");
        }
        else {
          element.addClass('open');
          element.children('ul').slideDown(1500,"swing");
          element.siblings('li').children('ul').slideUp(1500,"swing");
          element.siblings('li').removeClass('open');
          element.siblings('li').find('li').removeClass('open');
          element.siblings('li').find('ul').slideUp(1500,"swing");
        }
      }); 

    //menu options
        var fixed_top = $(".menu-section");

        $(window).on('scroll', function(){
          
          if( $(this).scrollTop() > 100 ){  
            fixed_top.addClass("animated fadeInDown menu-fixed");
          }
          else{
            fixed_top.removeClass("animated fadeInDown menu-fixed");
          }
        });

    });


    // sticky nav
    $(window).scroll(function(){
                if($(this).scrollTop()>40){
                    $('.primary-menu').addClass("sticky");
                }
                else{
                    $('.primary-menu').removeClass("sticky");
                }
            })

} )( jQuery );
























/*-------------------------- Top Search and Cart -----------------------*/
jQuery("#site-search a").click(function(e){
    jQuery('.search-form').addClass('top-search-open');
    e.stopPropagation();
    e.preventDefault();
});
jQuery(".fa-close").click(function(e){
    jQuery('.search-form').removeClass('top-search-open');
    e.stopPropagation();
    e.preventDefault();
});

/**  fixed menu.
--------------------------------------------------------------------------------------------------- */
var firstMenuHeight = 200;
var secondMenuHeight = 260;  

jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > firstMenuHeight) {
        jQuery('#peace-menu').addClass('fixed-on-top');
    } else {
        jQuery('#peace-menu').removeClass('fixed-on-top');
    }

    if (jQuery(window).scrollTop() > secondMenuHeight) {
        jQuery('#peace-menu').addClass('fix-menu');
    } else {
        jQuery('#peace-menu').removeClass('fix-menu');
    }

});


/**  circular countdown.
--------------------------------------------------------------------------------------------------- */
function JBCountDown(settings) {
    var glob = settings;
   
    function deg(deg) {
        return (Math.PI/180)*deg - (Math.PI/180)*90;
    }
    
    glob.total   = Math.floor((glob.endDate - glob.startDate)/86400);
    glob.days    = Math.floor((glob.endDate - glob.now ) / 86400);
    glob.hours   = 24 - Math.floor(((glob.endDate - glob.now) % 86400) / 3600);
    glob.minutes = 60 - Math.floor((((glob.endDate - glob.now) % 86400) % 3600) / 60) ;
    glob.seconds = 60 - Math.floor((glob.endDate - glob.now) % 86400 % 3600 % 60);
    
    if (glob.now >= glob.endDate) {
        return;
    }
    
    var clock = {
        set: {
            days: function(){
                var cdays = jQuery(".canvas_days").get(0);
                var ctx = cdays.getContext("2d");
                ctx.clearRect(0, 0, cdays.width, cdays.height);
                ctx.beginPath();
                ctx.strokeStyle = glob.daysColor;
                
                ctx.shadowBlur    = 10;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 0;
                ctx.shadowColor = glob.daysGlow;
                
                ctx.arc(54.5, 54.5, 52.5, deg(0), deg(360 / glob.total * (glob.total - glob.days)));
                ctx.lineWidth = 5;
                ctx.stroke();
                jQuery(".clock_days .val").text(glob.days);
            },
            
            hours: function(){
                var cHr = jQuery(".canvas_hours").get(0);
                var ctx = cHr.getContext("2d");
                ctx.clearRect(0, 0, cHr.width, cHr.height);
                ctx.beginPath();
                ctx.strokeStyle = glob.hoursColor;
                
                ctx.shadowBlur    = 10;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 0;
                ctx.shadowColor = glob.hoursGlow;
                
                ctx.arc(54.5, 54.5, 52.5, deg(0), deg(15 * glob.hours));
                ctx.lineWidth = 5;
                ctx.stroke();
                jQuery(".clock_hours .val").text(24 - glob.hours);
            },
            
            minutes : function(){
                var cMin = jQuery(".canvas_minutes").get(0);
                var ctx = cMin.getContext("2d");
                ctx.clearRect(0, 0, cMin.width, cMin.height);
                ctx.beginPath();
                ctx.strokeStyle = glob.minutesColor;
                
                ctx.shadowBlur    = 10;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 0;
                ctx.shadowColor = glob.minutesGlow;
                
                ctx.arc(54.5, 54.5, 52.5, deg(0), deg(6 * glob.minutes));
                ctx.lineWidth = 5;
                ctx.stroke();
                jQuery(".clock_minutes .val").text(60 - glob.minutes);
            },
            seconds: function(){
                var cSec = jQuery(".canvas_seconds").get(0);
                var ctx = cSec.getContext("2d");
                ctx.clearRect(0, 0, cSec.width, cSec.height);
                ctx.beginPath();
                ctx.strokeStyle = glob.secondsColor;
                
                ctx.shadowBlur    = 10;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 0;
                ctx.shadowColor = glob.secondsGlow;
                
                ctx.arc(54.5, 54.5, 52.5, deg(0), deg(6 * glob.seconds));
                ctx.lineWidth = 5;
                ctx.stroke();
        
                jQuery(".clock_seconds .val").text(60 - glob.seconds);
            }
        },
       
        start: function(){
            /* Seconds */
            var cdown = setInterval(function(){
                if ( glob.seconds > 59 ) {
                    if (60 - glob.minutes === 0 && 24 - glob.hours === 0 && glob.days === 0) {
                        clearInterval(cdown);
                        
                        /* Countdown is complete */
                        
                        return;
                    }
                    glob.seconds = 1;
                    if (glob.minutes > 59) {
                        glob.minutes = 1;
                        clock.set.minutes();
                        if (glob.hours > 23) {
                            glob.hours = 1;
                            if (glob.days > 0) {
                                glob.days--;
                                clock.set.days();
                            }
                        } else {
                            glob.hours++;
                        }
                        clock.set.hours();
                    } else {
                        glob.minutes++;
                    }
                    clock.set.minutes();
                } else {
                    glob.seconds++;
                }
                clock.set.seconds();
            },1000);
        }
    };
    clock.set.seconds();
    clock.set.minutes();
    clock.set.hours();
    clock.set.days();
    clock.start();
}

/**  festival countdown
--------------------------------------------------------------------------------------------------- */
jQuery(document).ready(function($){                
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="hour col-xs-6"><h3>%m</h3><span>months</span></div> <div class="hour min col-xs-6"><h3>%n</h3><span>days</span></div>'));
        });
    });
    $('[data-timecountdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('timecountdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="hour col-xs-6"><h3>%H</h3><span>hour</span></div> <div class="hour min col-xs-6"><h3>%M</h3><span>minitue</span></div>'));
        });
    });
});

/**  boxer.
--------------------------------------------------------------------------------------------------- */
jQuery(".boxer").lightbox();


/**  preloader.
--------------------------------------------------------------------------------------------------- */
// Site Preloader
jQuery(window).load(function () {
    jQuery(".loader").fadeOut();
    jQuery("#preloader").delay(350).fadeOut("slow");
});


 // scrollReveal Init
    if (screen.width > 966) {
      jQuery( document ).ready(function() {
        new WOW().init();
      });
    }














