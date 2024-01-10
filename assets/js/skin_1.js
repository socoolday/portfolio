$(document).ready(function(){
	//페이지 접속 시
	window.onload = function() {
	  // 1. yllow_box 애니메이션
	  var yllow_box = document.querySelector('.yllow_box');
	  yllow_box.style.transform = 'translate(0, -50%) rotate(10deg)';

	  // 2. vi_l_txt와 vi_txt_b 애니메이션
	  var vi_l_txt = document.querySelector('.vi_l_txt');
	  var vi_txt_b = document.querySelector('.vi_txt_b');

	  vi_l_txt.style.justifyContent = 'space-between';
	  vi_l_txt.style.opacity = '1';

	  setTimeout(function() {
		vi_txt_b.style.opacity = '1';
	  }, 3000);

	  // 3. my_img 애니메이션
	  setTimeout(function() {
		var my_img = document.querySelector('.my_img');
		my_img.style.opacity = '1';
	  }, 4000);
	}
    //모달 스크롤 잠금
    $('.modal').on('shown.bs.modal', function() {
      $('html').addClass('no-scroll');
    });

    $('.modal').on('hidden.bs.modal', function() {
      $('html').removeClass('no-scroll');
    });
	
    // text animation
	var textWrapper = document.querySelector('.ml3');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

	setTimeout(function() {
		var letters = document.querySelectorAll('.ml3 .letter');
		for (var i = 0; i < letters.length; i++) {
			letters[i].style.opacity = '1';
		}

		anime.timeline({loop: false})
		.add({
			targets: '.ml3 .letter',
			scale: [4,1],
			opacity: [0,1],
			translateZ: 0,
			easing: "easeOutExpo",
			duration: 950,
			delay: (el, i) => 70*i
		});
	}, 1000); 
	
    //type js
    setTimeout(function() {
		var typed = new Typed('#text', {
			strings: ["Moon Pakr","Designer","Coder","Planners"],
			typeSpeed: 100,
			loop : true,
			backSpeed: 50,
			backDelay : 1000
		});
	}, 3500);
	
	
	$('#fullpage').fullpage({
//		sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        anchors: ['Pixel', 'AbouteMe', 'Experience', 'Portfolio', 'ContactMe'],
        menu: '#menu',
        navigation: true,
		scrollingSpeed: 600,
        afterLoad: function(anchorLink, index){
			//section 1
            if(index == 1){
                //moving the image
                $(".logo").addClass("white");
            }else{
				$(".logo").removeClass("white");
			}
            //section 2
            if(index == 2){
                //moving the image
            }else{
			}

            //section 3
            if(anchorLink == '3rdPage'){
            }
        }
    });
	// Fullpage.js 초기화
//	new fullpage('#fullpage', {
//		afterLoad: function(origin, destination, direction) {
//			// 섹션 로드 후, 해당 섹션에 대한 애니메이션 재생
//			tl.play(destination.index);
//		},
//		onLeave: function(origin, destination, direction) {
//			// 섹션 떠날 때, 해당 섹션에 대한 애니메이션 역재생
//			tl.reverse(origin.index);
//		}
//	});
});