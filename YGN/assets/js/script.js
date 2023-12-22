$(document).ready(function(){
    
//    $(window).scroll(function(){
//        if($(window).scrollTop() > 50){
//            if(scroll_header == 1) return;
//            scroll_header=1
//            $("#menu").stop().css("background","rgba(21, 34, 61, .8)")
//        }else{
//            scroll_header=0
//            $("#menu").stop().css("background","rgba(255, 255, 255, 0)")
//        }
//    })
    
    $('#fullpage').fullpage({
        sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        anchors: ['YG&', 'Business', 'History', 'News', 'Cooperation', 'footer', '7thpage', '8thpage'],
        menu: '#menu',
        navigation: true,
        afterLoad: function(anchorLink, index){
            
            if(index == 1){
                //moving the image
                $('#menu').css({background: '#16223e'});
                
            }

            //section 1
            if(index == 2){
                $('#menu').css({background: '#172440'});
                $('.main_art').addClass('on');
            }
            //section 2
            if(index == 3){
                $('#menu').css({background: '#475483'});
                $('.main_history').addClass('on');
                $('#section2').addClass('on');
            }
            //section 3
            if(index == 4){
                $('#menu').css({background: '#5e709a'});
                $('#section3').addClass('on');
            }
            //section 4
            if(index == 5){
                $('#menu').css({background: '#475e8c'});
                $('#section4').addClass('on');
            }
            //section 3
//            if(anchorLink == '3rdPage'){
//                //moving the image
//                $('#section2').find('.intro').delay(500).animate({
//                    left: '0%'
//                }, 1500, 'easeOutExpo');
//            }
        }
    });
    
        var clickslider = $('.bxslider').bxSlider( {
        mode: "fade",  
		slideWidth: 0,
		slideMargin: 0,
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 0,
		startSlide: 0,
		infiniteLoop: true,
		//captions: true,
		pager: true,
		pagerType: "full",
		//pagerLocation: "top",  // "bottom", "top" - location of pager
		//pagerShortSeparator: "1",           // string - ex: "of" pager would display 1 of 4
		//   pagerActiveClass: "on",
		pagerCustom:".bx-page-custom",
		adaptiveHeight: true,
		auto: true,
		//   autoControls: true,
		autoHover: false,
		pause: 9000,
		speed: 500,
		easing: "easeInOutCirc",

		touchEnabled:false,

		controls: true,
		prevSelector: '#visual_btn_L',
		nextSelector: '#visual_btn_R',
		prevText: '',
		nextText: '',

		//video: true,
		useCSS: false,

        onSliderLoad: function(){
            $(".bs_time .bst_f").stop().animate({width:"100%"},9000);
            $(".bs_article").addClass("on");
            $(".bs_article.on .inner_box").delay(500).animate({opacity:"1"},1000);
            //$(".bs_article.on .ib_txt_box .bx_title").delay(1500).animate({opacity:"1"},1000);
            $(".bs_article.on .ib_txt_box p").delay(2500).animate({opacity:"1"},1000);
            $(".bs_article.on .ib_txt_box .sec_3_btn").delay(3000).animate({opacity:"1"},1000);
            //$(".bs_article.on .ib_txt_box p").delay(2500).animate({width:"100%"},1000);
        },

        onSlideBefore: function(){
            $(".bs_time .bst_f").stop().animate({width:"0%"},0,function(){
                $(".bs_time .bst_f").css({width:"0%"});
            });
            $(".bs_article").removeClass("on");
            $(".bs_article .inner_box").stop().animate({opacity:"0"},0);
            $(".bs_article .ib_txt_box .bx_title").stop().animate({opacity:"0"},0);
            $(".bs_article .ib_txt_box p").stop().animate({opacity:"0"},0);
            $(".bs_article .ib_txt_box .sec_3_btn").stop().animate({opacity:"0"},0);
        },

        onSlideAfter: function(){
            $(".bs_time .bst_f").stop().animate({width:"100%"},8500);
            $(".bs_article").addClass("on");
            $(".bs_article.on .inner_box").delay(500).animate({opacity:"1"},1000);
            $(".bs_article.on .ib_txt_box .bx_title").delay(1500).animate({opacity:"1"},1000);
            $(".bs_article.on .ib_txt_box p").delay(2500).animate({opacity:"1"},1000);
            $(".bs_article.on .ib_txt_box .sec_3_btn").delay(3000).animate({opacity:"1"},1000);
        }

		});
	$(document).on('click','#visual_btn_L, #visual_btn_R, .bx-page-custom, .visual .bx-wrapper .bx-pager .bx-pager-item a',function(){
		clickslider.stopAuto();
		clickslider.startAuto();
	})
    
    
    $('.btn-group').mouseenter(function(){
        $('.dropdown-menu').stop().slideDown(200);
		$('.btn-group').mouseleave(function(){
			$('.dropdown-menu').stop().slideUp(200);
		})
    });
	
	$('.mob_ham').click(function(){
        $('.mob_ham').stop().toggleClass('on');
        $('.nav').stop().slideToggle(500);
        $('.nav>li').stop().toggleClass("on");
    });
    
	//해더 메뉴
	$("#menu ul > li").mouseenter(function(){
		$(this).find("ul").stop().slideDown();
	});
	$("#menu ul > li").mouseleave(function(){
		$(this).find("ul").stop().slideUp();
	});
    
	//뉴스_toggle
	$('.news_tr>.news_tri').click(function(){
        $(this).parent().find('.news_page').stop().slideToggle(500).toggleClass('news_sel');
        $('>.news_img', this).stop().toggleClass('on');
    });
    
    
	//메인뉴스
	$('.main_news').slick({
	  infinite: true,
	  speed: 600,
	  autoplaySpeed :2000,
	  slidesToShow: 3,
	  autoplay:false,
	  arrows : false,
	  prevArrow : "<button type='button' class='slick-prev'>Previous</button>",
	  nextArrow : "<button type='button' class='slick-next'>Next</button>",
		responsive: [ 
			{ breakpoint: 1200,
			  settings: { 
				  slidesToShow: 2,  
			  }
			}, 
			{ breakpoint: 800,
			  settings: { 
				  slidesToShow: 1, 
			  } 
			} 
		]
	});
	$(".news_play").click(function(){
		$(this).toggleClass("stop");
		
		if( $(".news_play").hasClass("stop") ){
			$('.main_news').slick('slickPause');
			$(this).html('<i class="xi-play"></i>')
		}else{
			$('.main_news').slick('slickPlay');
			$(this).html('<i class="xi-pause"></i>')
		}
	});
	$(".news .slick-prev").on('click', function(e) {
		$('.main_news').slick('slickPrev');
	});
	$(".news .slick-next").on('click', function(e) {
		$('.main_news').slick('slickNext');
	});
	$(".news .slick-prev").html('<i class="xi-angle-left"></i>')
	$(".news .slick-next").html('<i class="xi-angle-right"></i>')
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});


