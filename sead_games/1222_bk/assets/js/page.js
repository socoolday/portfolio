$(document).ready(function(){
    
    $('.vi ul, .mi_favo_game ul').show().slick({
        infinite: true,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
    });
    $('.mi_rank_li ul').show().slick({
        infinite: true,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
    });
    $(".ham").click(function(){
        $(".gnb").stop().toggleClass("on");
        $(this).stop().toggleClass("on");
    });
    $(".my_info_btn").click(function(){
        $(".my_info_b").stop().slideToggle(300);
        $(this).stop().toggleClass("on");
    });
    
    $(".add_coment").click(function(){
        $(".bo_v_coment").stop().slideToggle(300);
    });
    $(".bcd_b_cl").click(function(){
        $("+ .bcd_btn", this).stop().toggleClass("on");
    });
    $(".transfer_tit").click(function(){
        $(" > ul", this).stop().slideToggle(500);
        $(" > button", this).stop().toggleClass("on");
    });
     $(".tef_fir_change_btn").click(function(){
        $(".tef_fir").stop().toggleClass("on");
        $(".tef_sec").stop().toggleClass("on");
    });
})

