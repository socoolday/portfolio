$(document).ready(function(){
    //메인비주얼배너
    $('.vi_rol').show().slick({
        centerMode: true,
        centerPadding: '25%',
        slidesToShow: 1,
        autoplay:true,
        arrows:false,
        dots:true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    /* 자바스크립트
    if (currentSlide !== nextSlide) {
        document.querySelectorAll('.slick-center + .slick-cloned').forEach((next) => {
            // timeout required or Slick will overwrite the classes
            setTimeout(() => next.classList.add('slick-current', 'slick-center'));
        });
    }
    */
    // IE 호환성을 고려한 제이쿼리
    if (currentSlide !== nextSlide) {
        $('.slick-center + .slick-cloned').each(function(index, node) {
            var $node = $(node);
            
            setTimeout(function() {
                $node.addClass('slick-current');
                $node.addClass('slick-center');
            });
        });
    }
    });
    //search btn 모바일 스타일 추가 제거
//    var alterClass = function() {
//        var ww = document.body.clientWidth;
//        if (ww <= 768) {
//          $('.search_btn').addClass('s_modal');
//        } else if (ww >= 769) {
//          $('.test').removeClass('s_modal');
//        };
//    };
//    $(window).resize(function(){
//        alterClass();
//    });
//    
//    alterClass();
    //
    //my page button click option
    $(".my_p").mouseenter(function(){
        $(">ul", this).stop().slideDown(300);
        $(".my_p").mouseleave(function(){
            $(">ul", this).stop().slideUp(300);
        });
    });
    
    $(".mfm_on").click(function(){
        $(".mfm_ml").stop().show(100);
        $(".mfm_close").click(function(){
            $(".mfm_ml").stop().fadeOut(300);
        });
    });
    
    $(".mb_ham").click(function(){
        $(this).stop().toggleClass("on");
        $(".m_menu").stop().toggleClass("on");
    });
    
    $('.moim_rol').show().slick({
        infinite: true,
        slidesToShow: 3,
        swipeToSlide: true,
        useTransform: false,
    });
    var slider = $('.moim_rol');     
    var timer;    

     $(window).on('load resize',function(){         
        clearTimeout( timer );          
        timer = setTimeout( sliderResponsive(), 100 ); 
    })
    function sliderResponsive(){         
        if($(window).width() < 767){             
            slider.filter('.slick-initialized').slick('unslick');         
        }else{             
            slider.not('.slick-initialized').slick({                
                infinite: true,
                slidesToShow: 3,
                swipeToSlide: true,
                useTransform: false,
            });                         
        }       
    }
})

