
var lastScrollTop = 0;



$(document).ready(function() 
{
  

 $(".carousel-indicators>li").click(function() 
        {
  
  if($(this).hasClass("active")==false)
  {
        $('.carousel-indicators>li.active').removeClass('active');
        $(this).addClass("active");
        $('.sections.activeS').removeClass('activeS');
        var id = $(this).children('a').attr('href');
        $(id).addClass("activeS");
           
        if($("#s4").hasClass("activeS"))
            {
                   
                $('.count').each(function () 
                     {
                        $(this).prop('Counter',0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function (now) 
                            {
                                $(this).text(Math.ceil(now));
                            }
                            });
                     });
            }
 }
        });
});

// Scrolling of sections begins
var isMoving = false;
$(document).ready(function()
                 
{
  
    {
    $(window).bind('mousewheel DOMMouseScroll', function(event)
        {
    
        // console.log("1:"+isMoving);
  
        if(isMoving==false)
            {
                if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0)
                    {
        // scroll up
                        isMoving=true; 
      
                        if($(".activeS").hasClass("first")==false)
                            {
                                $('.active').removeClass("active").prev().addClass('active'); // for dots
                                $(".activeS").removeClass("activeS").prev(".sections").addClass("activeS"); // for section
           
                            }
        //counting stats
                        if($("#s4").hasClass("activeS"))
                        {
                           
   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
  });
}
                
    
      setTimeout(function(){
      isMoving=false;
      }, 1000); // adds delay to prevent fast scrolling
        
    }
    else {
        // scroll down
        isMoving=true;
       // console.log("2:"+isMoving);
       
        if($(".activeS").hasClass("last")==false)
            {
        $('.active').removeClass("active").next().addClass('active'); // for dots
        $(".activeS").removeClass("activeS").next(".sections").addClass("activeS"); // for section
            }
          // counting stats
            if($("#s4").hasClass("activeS"))
        {    
   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
  });
}
      
     setTimeout(function(){
      isMoving=false;
            // console.log("3:"+isMoving);
      }, 1000); // adds delay to prevent fast scrolling
      
}
    }   
   

});
}
    });

	// Scrolling of sections ends

// Mobile Swiping



var mobileMoving = false;

var s = $(".sections");



$(document).ready(function(){
    
        s.swipe( {
            tap:function(event, target) {
         console.log(event.type+": event type")
        },
        //Generic swipe handler for all directions
        swipe:function(event, direction, distance, duration, fingerCount, fingerData, currentDirection) {
            if(mobileMoving==false){
         if(direction=="down")
             {
                    mobileMoving=true;
                  if($(".activeS").hasClass("first")==false)
                            {
                                $('.active').removeClass("active").prev().addClass('active'); // for dots
                                $(".activeS").removeClass("activeS").prev(".sections").addClass("activeS"); // for section
           
                            }
                 
                 
                            if($("#s4").hasClass("activeS"))
        {    
   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
  });
}
    
                 setTimeout(function(){
                        mobileMoving=false;
                    }, 1000);
                 
             }
            if(direction=="up")
                {
                    mobileMoving=true;
                    if($(".activeS").hasClass("last")==false)
            {
        $('.active').removeClass("active").next().addClass('active'); // for dots
        $(".activeS").removeClass("activeS").next(".sections").addClass("activeS"); // for section
            }
                               if($("#s4").hasClass("activeS"))
        {    
   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text() 
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
  });
}
    
                     setTimeout(function(){
      mobileMoving=false;
      }, 1000);
                }
        }
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
         threshold:2
      });

});


$(document).ready(function(){
      $('.modal').on('show.bs.modal', function (e) {
  isMoving=true;
});
  $('.modal').on('hidden.bs.modal', function (e) {
  isMoving=false;
});
});

