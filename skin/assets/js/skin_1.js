$(document).ready(function(){
    //헤더 언어선택
    $(".language").mouseenter(function(){
        $(">ul", this).stop().slideDown(200);
        $(".language").mouseleave(function(){
            $(">ul", this).stop().slideUp(200);
        });
    });
    //헤더 나의 페이지
    $(".tit_my_p").mouseenter(function(){
        $(">ul", this).stop().slideDown(200);
        $(".tit_my_p").mouseleave(function(){
            $(">ul", this).stop().slideUp(200);
        });
    });
    //ALL 카테고리
    $(".gnb_all_btn").click(function(){
        $(".cate_mask").stop().addClass('on');
        $(".category").stop().addClass('on');
        $("body").css("overflow", "hidden");
        $("body").css("height", "100vh");
        $(".cate_mask").click(function(){
            $(this).stop().removeClass('on');
            $(".category").stop().removeClass('on');
            $("body").css("overflow", "visible");
            $("body").css("height", "100%");
        });
    });
    $(".cate_brand").mouseenter(function(){
        $(".brand_category").stop().slideDown(300);
        $(".brand_category").mouseleave(function(){
            $(".brand_category").stop().slideUp(200);
        });
        $(".mob_brand_close").click(function(){
            $(".brand_category").stop().slideUp(200);
        });
    });
    $(".cate_close button").click(function(){
        $(".cate_mask").stop().removeClass('on');
        $(".category").stop().removeClass('on');
        $("body").css("overflow", "visible");
        $("body").css("height", "100%");
    });
    $(".quick_menu input").click(function(){
        $(".quick_menu").stop().toggleClass('on');
    });
    //메인 배너
    $('.visual_ban').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow:".vi_prev_btn",
        nextArrow:".vi_next_btn",
    });
    //메인 하단 배너
    $('.vbb_1, .vbb_2, .vbb_3').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.tsf_ban').slick({
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay:true,
		speed:700,
		pauseOnHover : true,
		autoplaySpeed:3000,
		prevArrow : ".tsf-prev",
		nextArrow : ".tsf-next",
	});
    
    $('.tsc_ban').slick({
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay:true,
		speed:700,
		pauseOnHover : false,
		autoplaySpeed:3000,
		prevArrow : ".tsc-prev",
		nextArrow : ".tsc-next",
	});
    $('.play').click(function(){
        $('.tsf_ban').slick('slickPlay');
    });
    $('.stop').click(function(){
        $('.tsf_ban').slick('slickPause');
    });
    $('.play_1').click(function(){
        $('.tsc_ban').slick('slickPlay');
    });
    $('.stop_2').click(function(){
        $('.tsc_ban').slick('slickPause');
    });
    
    //list 상세상품 검색
    $(".list_search_btn button").click(function(){
        $(".sub_search_cover").stop().slideDown();
        $(".sbb_close").click(function(){
            $(".sub_search_cover").stop().slideUp();
        });
    });
    //찜하기 버튼
    $(".wish_btn").click(function(){
        $(">i", this).stop().toggleClass("on");
    });
    //버튼 툴팁
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    //모바일 구매하기
    $(".sub_de_bbuy_fake").click(function(){
        $(this).stop().addClass("on");
        $(".detain_mo_option").stop().addClass("on");
        $(".detain_mo_close_btn").click(function(){
            $(".sub_de_bbuy_fake").stop().removeClass("on");
            $(".detain_mo_option").stop().removeClass("on");
        });
    });
    //상품문의 slidedown
    $(".dql_con_c_cver").click(function(){
        $(this).parent().find(".dqlcc_coment").stop().slideToggle();
    });
    
    //상세페이지 썸네일
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        arrows:false,
        focusOnSelect: true
    });
     //제품 상세페이지 하단부 제품 상세컷
    $('.detail_slide .slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.detail_slide .slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      focusOnSelect: true
    });
    
    //FAQ
	$(".sub_faq_2").click(function(){
		$(this).parent(".sub_faq_ibox").next(".sub_faq_view").toggleClass("on");
	})
});

//카테고리 아코디언 메뉴
$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;

    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }

  var accordion = new Accordion($('.accordion-menu'), false);
});
//팝업 js
// 쿠키 생성
function setCookie( name, value, expiredays ) {  // 쿠키저장
	var todayDate = new Date();  //date객체 생성 후 변수에 저장
	todayDate.setDate( todayDate.getDate() + expiredays ); 
   	 // 시간지정(현재시간 + 지정시간)
	document.cookie = name + "=" + value + "; path=/; expires=" + todayDate.toUTCString() + ";"
} 
$(function(){
	$(".popup_box").draggable({containment:'parent', scroll:false}); // 레이어 팝업 창 드래그 가능
	//{containment:'parent', scroll:false} 화면 영역 밖으로 드래그 안됌.
                
	if(document.cookie.indexOf("popToday=close") < 0 ){      // 쿠키 저장여부 체크
		document.getElementById("popup_layer").style.display = "block";
		}else {
		document.getElementById("popup_layer").style.display = "none"; 
		}
	});
             
//오늘하루만보기 닫기버튼 스크립트
function closeToday() { 
	setCookie( "popToday", "close" , 1  ); 
	$("#popup_layer").css("display", "none");
	document.getElementById("popup_layer").style.display = "none";
}
//그냥 닫기버튼 스크립트
function closePop() { 
	document.getElementById("popup_layer").style.display = "none";
}