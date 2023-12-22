$(document).ready(function(){

    $(".ham_btn").click(function(){
        $(".left_menu").stop().css("left","0");
        $(".cate_time_btn").click(function(){
            $(".left_menu").stop().css("left","100%");
        });
    })

    $(".l_menu>h2").click(function(){
        $(this).parent().find("ul").stop().slideToggle(500);
        $(">span",this).stop().toggleClass("on")
    })
    $("#datepicker1, #datepicker2").datepicker({
        dateFormat: 'yy.mm.dd',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
        monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
        dayNames: ['일','월','화','수','목','금','토'],
        dayNamesShort: ['일','월','화','수','목','금','토'],
        dayNamesMin: ['일','월','화','수','목','금','토'],
        showMonthAfterYear: true,
        changeMonth: true,
        changeYear: true,
        yearSuffix: '년'
    });
    
    $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });
    
    $('.r_class .class_list1 li h3').on('click', function(){
        $(this).next('.class_list2').slideToggle(300);
    });
});
