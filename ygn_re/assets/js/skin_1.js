$(document).ready(function(){
    
    // Get all sections that have an ID defined
    const sections = document.querySelectorAll("section[id]");

    // Add an event listener listening for scroll
    window.addEventListener("scroll", navHighlighter);

    function navHighlighter() {

      // Get current scroll position
      let scrollY = window.pageYOffset;

      // Now we loop through sections to get height, top and ID values for each
      sections.forEach(current => {
        const sectionHeight = current.offsetHeight;

        const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 400;
        sectionId = current.getAttribute("id");

        if (
          scrollY > sectionTop &&
          scrollY <= sectionTop + sectionHeight
        ){
          document.querySelector(".navigation a[href*=" + sectionId + "]").classList.add("active");
        } else {
          document.querySelector(".navigation a[href*=" + sectionId + "]").classList.remove("active");
        }
      });
    }
//카테고리 ham 버튼
    $(".ham_btn").click(function(){
        $(this).stop().toggleClass('on');
        $(".gnb ul").stop().slideToggle(500);
    });
    
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow:"<button type='button' class='slick-prev pull-left'><span><</span></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><span>></span></button>",
        
    });
    $('.slider-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 990,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            }
        ]
    });
    
    
    
    $(window).resize(function () {
        var width = $(window).width();
        if (width<=770) {
            $(".foot_cate>ul>li>font").mouseenter(function(){
                $("+ul", this).stop().slideDown(500);
                $(this).stop().addClass('on');
                $(this).mouseleave(function(){
                    $("+ul", this).stop().slideUp(500);
                    $(this).stop().removeClass('on');
                });
            });
        }
    });
    $(window).trigger("resize");
    
    ScrollOut({
        targets : 'h1, h2, h3, h4, p, img, li, div, mark, ul, dl, button',
		threshold: 0.5,
        once:true
    });
    
    

});
