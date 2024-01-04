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

});