$(document).ready(function(){
 
    //모달 스크롤 잠금
    $('.modal').on('shown.bs.modal', function() {
      $('html').addClass('no-scroll');
    });

    $('.modal').on('hidden.bs.modal', function() {
      $('html').removeClass('no-scroll');
    });
    
    //type js
    var typed = new Typed('#text', {
        strings: ["Moon Pakr","Designer","Coder","Planners",],
        typeSpeed: 100,
        loop : true,
        backSpeed: 50,
        backDelay : 1000
        
    });
      
    
    //scroll
    var controller = new ScrollMagic.Controller();
    // build scenes
    var revealElements = document.getElementsByClassName("digit");
    for (var i=0; i<revealElements.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
                            triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
                            offset: 50,												 // start a little later
                            triggerHook: 0.9,
                            marker:false,
                        })
                        .setClassToggle(revealElements[i], "visible") // add class toggle
//                        .addIndicators({name: "digit " + (i+1) }) // add indicators (requires plugin)
                        .addTo(controller);
    }
});