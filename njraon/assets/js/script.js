$(document).ready(function(){

    $('#fullpage').fullpage({
        sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage', '6thpage', '7thpage', '8thpage'],
        menu: '#menu',
        navigation: true,
        afterLoad: function(anchorLink, index){
        
            //section 2
            if(index == 2){
                //moving the image
                $('#section1').find('img').delay(500).animate({
                    left: '0%'
                }, 1500, 'easeOutExpo');

                $('#section1').find('p').first().fadeIn(1800, function(){
                    $('#section1').find('p').last().fadeIn(1800);
                });;

            }

            //section 3
            if(anchorLink == '3rdPage'){
                //moving the image
                $('#section2').find('.intro').delay(500).animate({
                    left: '0%'
                }, 1500, 'easeOutExpo');
            }
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
	
	$(".sec_04 .sec_3_txt ul li p").height( $(".sec_04 .sec_3_txt ul li p").width() );
});

$(window).resize(function(){
	$(".sec_04 .sec_3_txt ul li p").height( $(".sec_04 .sec_3_txt ul li p").width() );
})

//$('#fullpage').fullpage({
//        //Navigation
//        menu: '#menu',
//        lockAnchors: false,
//        anchors:['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage'],
//        navigation: true,
//        navigationPosition: 'right',
//        navigationTooltips: ['firstSlide', 'secondSlide'],
//        showActiveTooltip: false,
//        slidesNavigation: true,
//        slidesNavPosition: 'bottom',
//
//        //Scrolling
//        css3: true,
//        scrollingSpeed: 1000,
//        autoScrolling: true,
//        fitToSection: true,
//        fitToSectionDelay: 1000,
//        scrollBar: false,
//        easing: 'easeInOutCubic',
//        easingcss3: 'ease',
//        loopBottom: false,
//        loopTop: false,
//        loopHorizontal: true,
//        continuousVertical: false,
//        continuousHorizontal: false,
//        scrollHorizontally: false,
//        interlockedSlides: false,
//        dragAndMove: false,
//        offsetSections: false,
//        resetSliders: false,
//        fadingEffect: false,
//        normalScrollElements: '#element1, .element2',
//        scrollOverflow: false,
//        scrollOverflowReset: false,
//        scrollOverflowOptions: null,
//        touchSensitivity: 15,
//        bigSectionsDestination: null,
//
//        //Accessibility
//        keyboardScrolling: true,
//        animateAnchor: true,
//        recordHistory: true,
//
//        //Design
//        controlArrows: true,
//        verticalCentered: true,
//        sectionsColor : ['#ccc', '#fff'],
//        paddingTop: '3em',
//        paddingBottom: '10px',
//        fixedElements: '#header, .footer',
//        responsiveWidth: 0,
//        responsiveHeight: 0,
//        responsiveSlides: false,
//        parallax: false,
//        parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},
//        cards: false,
//        cardsOptions: {perspective: 100, fadeContent: true, fadeBackground: true},
//
//        //Custom selectors
//        sectionSelector: '.section',
//        slideSelector: '.slide',
//
//        lazyLoading: true,
//
//        //events
//        onLeave: function(anchorLink, index){
//            $("#text-"+index).removeClass('active',0);
//        },
//        afterLoad: function(anchorLink, index){
//
//            $("#text-"+index).addClass('active');
//
//        },
//        afterRender: function(){},
//        afterResize: function(width, height){},
//        afterReBuild: function(){},
//        afterResponsive: function(isResponsive){},
//        afterSlideLoad: function(section, origin, destination, direction){
//        },
//        onSlideLeave: function(section, origin, destination, direction){}
//    });