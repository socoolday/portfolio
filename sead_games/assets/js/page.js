$(document).ready(function(){

    $('.vi ul').show().slick({
        infinite: true,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="xi-angle-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="xi-angle-right"></i></button>'
    });
    $('.mi_favo_game ul').show().slick({
        infinite: true,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        variableWidth: true,
    });


    $('.mi_rank_li ul').show().slick({
        infinite: true,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        variableWidth: true,
    });

    $(".ham").click(function(){
        $(".gnb").stop().toggleClass("on");
        $(this).stop().toggleClass("on");
    });


    $(".my_info_btn").click(function(){
        $(".my_info_b").stop().slideToggle(300);
        $(this).stop().toggleClass("on");
    });
    
    $(".faq_tab ul li").click(function(){
        $(">.faqt_answer", this).stop().slideToggle(100);
    });

   $(".ham").mouseup(function (e) {
      var container = $(".my_info_b");
      if (!container.is(e.target) && container.has(e.target).length === 0){
         container.css("display","none");
      };
      var container = $(".my_info_btn");
      if (!container.is(e.target) && container.has(e.target).length === 0){
         container.stop().removeClass("on");
      };
   });

   $(".my_info_btn").mouseup(function (e) {
      var container = $(".gnb");
      if (!container.is(e.target) && container.has(e.target).length === 0){
         container.stop().removeClass("on");
      };
      var container = $(".ham");
      if (!container.is(e.target) && container.has(e.target).length === 0){
         container.stop().removeClass("on");
      };
   });

    $(".add_coment").click(function(){
        $(".bo_v_coment").stop().slideToggle(300);
    });
    $(".bcd_b_cl").click(function(){
        $("+ .bcd_btn", this).stop().toggleClass("on");
    });
    // $(".transfer_tit").click(function(){
    //     $(" > ul", this).stop().slideToggle(500);
    //     $(" > button", this).stop().toggleClass("on");
    // });
     $(".tef_fir_change_btn").click(function(){
        $(".tef_fir").stop().toggleClass("on");
        $(".tef_sec").stop().toggleClass("on");
    });

    var fileTarget = $('.filebox .upload-hidden');

     fileTarget.on('change', function(){  // 값이 변경되면
       if(window.FileReader){  // modern browser
         var filename = $(this)[0].files[0].name;
       }
       else {  // old IE
         var filename = $(this).val().split('/').pop().split('\\').pop();  // 파일명만 추출
       }

       // 추출한 파일명 삽입
       $(this).siblings('.upload-name').val(filename);
     });
})
