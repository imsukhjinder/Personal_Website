
$(document).ready(function () {
    /* Setting of Loader Functions */
      $('#loader').fadeOut(1200);

    /* Setting of acheivement section */
    (function () {
    var viewportWidth = $(window).width();
    if (viewportWidth > 850) {
    $('#loadgall').load('pages/8-acheive.php');
    } else {
    $('#loadgall').load('pages/8.1-gall.php');
    }}());

          /* Setting of MenuFunctions */
  toggle = document.querySelectorAll(".toggle")[0];
  nav = document.querySelectorAll("nav")[0];
  toggle_open_text = 'Menu';
  toggle_close_text = 'Close';
  toggle.addEventListener('click', function() {
  nav.classList.toggle('open');
//  nav.classList.toggle('open');
  if (nav.classList.contains('open')) {
  toggle.innerHTML = toggle_close_text;
  setTimeout(function() {
    var navtopright = document.getElementById("topright");
    topright.style.visibility = "visible";
  },100);
  } else {
  toggle.innerHTML = toggle_open_text;
  setTimeout(function() {
    var navtopright = document.getElementById("topright");
    topright.style.visibility = "hidden";
  },600);
  }
  }, false);
  setTimeout(function(){
  nav.classList.toggle('open');
  }, 800);
  setTimeout(function(){
    var navtopright = document.getElementById("topright");
    topright.style.visibility = "hidden";
  }, 1800);

  /* Setting of Cover Text Functions */
   consoleText(['Designer', 'Developer'], 'text',['Red','Yellow']);
  function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {
      if (letterCount === 0 && waiting === false) {
        waiting = true;
        target.innerHTML = words[0].substring(0, letterCount)
        window.setTimeout(function() {
          var usedColor = colors.shift();
          colors.push(usedColor);
          var usedWord = words.shift();
          words.push(usedWord);
          x = 1;
          target.setAttribute('style', 'color:' + colors[0])
          letterCount += x;
          waiting = false;
        }, 1000)
      } else if (letterCount === words[0].length + 1 && waiting === false) {
        waiting = true;
        window.setTimeout(function() {
          x = -1;
          letterCount += x;
          waiting = false;
        }, 1000)
      } else if (waiting === false) {
        target.innerHTML = words[0].substring(0, letterCount)
        letterCount += x;
      }
    }, 120)
    window.setInterval(function() {
      if (visible === true) {
        con.className = 'console-underscore hidden'
        visible = false;
      } else {
        con.className = 'console-underscore'
        visible = true;
      }
    }, 400)
  }

  /* Setting of Promoscope Height Functions */
      var divWidth = $('.large-window').width();
        $('.large-window').height(divWidth);

  /* Promoscope Show Function */
    $(window).scroll(function(){
        var wScroll = $(this).scrollTop();
      if(wScroll > $('.large-window').offset().top - $(window).height()){
              $('.large-window').css({'background-position':'center '+ (wScroll - $('.large-window').offset().top) +'px'});
              var opacity = (wScroll - $('.large-window').offset().top + 400) / (wScroll / 5);
              $('.window-tint').css({'opacity': opacity});
            }
  });

/* Work Show Functions */
 $("#website").click(function (){
          $(".Website").parent().parent().show("clip",{},600);
          $(".PhotoShop").parent().parent().hide("clip",{},600);
  });

 $("#all").click(function (){
                $(".Website").parent().parent().show("clip",{},600);
                $(".PhotoShop").parent().parent().show("clip",{},600);
  });

 $("#PS").click(function (){
          $(".PhotoShop").parent().parent().show("clip",{},600);
          $(".Website").parent().parent().hide("clip",{},600);
  });

 //resizing-cover text
 (function( $ ){
  $.fn.fitText = function( kompressor, options ) {
    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);
    return this.each(function(){
      // Store the object
      var $this = $(this);
      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };
      // Call once to set.
      resizer();
      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);
    });
  };
  })( jQuery );
 $(".console-container").fitText(1.2, { minFontSize: '33px', maxFontSize: '75px' });

 //contact label settings
  $(".awesome-form .group input").focusout(function() {
        var text_val = $(this).val();
        if(text_val==" "){
            $(this).removeClass("has-value");
        }
        else{
          $(this).addClass("has-value");
        }
  });

  //contact textarea settings
   $(".awesome-form .group .mess").focusout(function() {
         var text_val = $(this).val();
         if(text_val==" "){
             $(this).removeClass("has-value");
         }
         else{
           $(this).addClass("has-value");
         }
   });

   /* Menu Scrolling */
   $('nav').children().click(function(e){
     var linkHref = $(this).attr('href');
     $('html, body').animate({
       scrollTop: $(linkHref).offset().top
     },1200);

     if($('nav').hasClass('open')){
       $('nav').removeClass('open');
       $('.l5').html('Menu');
     }
     e.preventDefault();
   });

   /* Scroll Animations */
      window.sr = ScrollReveal();
      sr.reveal('.icon-1',{
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.icon-4',{
        duration: 2000,
        origin: 'bottom',
        distance: '300px'
      });
      sr.reveal('.icon-2',{
        duration: 2000,
        origin: 'bottom',
        distance: '300px'
      });
      sr.reveal('.icon-3',{
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.face',{
        duration: 2500,
        origin: 'top',
        rotate: { x: 60, y: 60, z: 60 }
      });
      sr.reveal('.skill-line', {
        duration: 2500 ,
         origin: 'left',
        distance: '20px'}, 30);
        sr.reveal('.work-img', {
          duration: 1000 ,
          origin: 'bottom',
      }, 300);
      sr.reveal('.sc',{
        duration: 1000,
        origin: 'bottom',
          distance: '500px'
      });
      sr.reveal('.letter',{
        duration: 1000,
        origin: 'left',
          distance: '500px'
      });

  //form validation
   $('form').submit(function () {
  var name = $.trim($('#name').val());
  var email = $('#email').val();
  var phone = $('#call').val();
  var msg = $('#mess').val();
  var txterror;
    function errorhandle(datatxt) {
      $('.alerttext').html("<h1 style='color:white;'>"+datatxt+"</h1><img src='assets/images/icons/rs.png' class='stamp'> ");
        $('#alert').addClass('show');
          $('.letter').css('position','absolute');
    }
  // Check if empty of not
    if (name  === '' || email  === '' || phone  === '' || msg  === '') {
      txterror = "Please fill all Fields ";
      errorhandle(txterror);
      return false;  }
//check that name has only letters
    if(!name.match(/^[A-Za-z\s]+$/))    {
      txterror = "Name can have Only Alphabets ";
      errorhandle(txterror);
      return false;
    }
//check that email id is proper
      if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        txterror = "E-mail address is not Valid";
        errorhandle(txterror);
        return false;
      }
//check that phone has only Number
    if(!phone.match(/^[0-9]+$/)){
      txterror = "Phone Number can have Only Numbers ";
      errorhandle(txterror);
      return false;
    }
//check that writing script is not allowed
      if(msg.match(/<script>/i)){
        txterror = "Writing Script is not allowed ";
        errorhandle(txterror);
        return false;
      }
      if(msg.match(/<?php/i)){
        txterror = "Writing php is not allowed please p.h.p";
        errorhandle(txterror);
        return false;
      }
});
//close btn
    $(".closebtn").click(function (){
      $('#alert').removeClass('show');
      $('.letter').css('position','relative');
    });

  //alert size Setting
    if($(window).width() <= 575 ){
      var calwidth= $('.letter').height();
        $('#alert').css('height',calwidth);
        $('.sub').click(function() {
        });
    }

  //menu setting
    $('.l7,.l6,.l1,.l2,.l3,.l4').click(function () {
      setTimeout(function () {
        $('#topright').css('visibility','hidden');
      },600)
    });
});
