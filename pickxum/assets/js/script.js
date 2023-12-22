$(document).ready(function(){
    $('.visual_rol').slick({
        dots: true,
        arrows:true,
        appendArrows:$('.vi_arrow_btn'),
        prevArrow: $('#prevArrow'),
        nextArrow: $('#nextArrow'),
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        auto:true,
        pauseOnFocus: false,
        fade: true,
        cssEase: 'linear'
    });
    $(".ht_notifi").click(function(){
        $(".htn_con").stop().fadeIn(500);
        $(".htn_pop_close").click(function(){
            $(".htn_con").stop().fadeOut(500);
        });
    });
    $(".htn_con_mask").click(function(){
        $(".htn_con").stop().fadeOut(500);
    });
    $(".ht_my").mouseenter(function(){
        $(">ul",this).stop().fadeIn(100);
        $(".ht_my").mouseleave(function(){
            $(">ul",this).stop().fadeOut(100);
        });
    });
    $(".category>li").mouseenter(function(){
        $(">ul",this).stop().slideDown(100);
        $(".category>li").mouseleave(function(){
            $(">ul",this).stop().slideUp(100);
        });
    });
    $(".qm_top").click(function(){
        $(this).stop().toggleClass('on');
        $(".quick_menu ul").stop().toggleClass('on');
    });
    $(".ham_btn").click(function(){
        $(this).stop().toggleClass('on');
        $('.category').stop().slideToggle(500);
    });
    $(".pr_btn_group button").click(function(){
        $(this).stop().toggleClass('active');
    });
    $(".hash_btn_group button").click(function(){
        $(this).stop().toggleClass('active');
    });
	
	
	
	$(".a_share_icon").click(function(){
		$(this).prev().stop().slideToggle();
	})
	
	
});






