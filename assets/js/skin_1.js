$(document).ready(function(){
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
		vi_txt_b.style.justifyContent = 'space-between';
		vi_txt_b.style.opacity = '1';
	  }, 1000);

	  // 3. vi_img 애니메이션
	  setTimeout(function() {
		var vi_img = document.querySelector('.vi_img');
		vi_img.style.opacity = '1';
	  }, 2000);
	}
    //모달 스크롤 잠금
    $('.modal').on('shown.bs.modal', function() {
      $('html').addClass('no-scroll');
    });

    $('.modal').on('hidden.bs.modal', function() {
      $('html').removeClass('no-scroll');
    });
	
    // Wrap every letter in a span
	var textWrapper = document.querySelector('.ml3');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

	anime.timeline({loop: false})
	.add({
		targets: '.ml3 .letter',
		scale: [4,1],
		opacity: [0,1],
		translateZ: 0,
		easing: "easeOutExpo",
		duration: 950,
		delay:5000,
		delay: (el, i) => 70*i
	})
	
	
    //type js
    var typed = new Typed('#text', {
        strings: ["Moon Pakr","Designer","Coder","Planners",],
        typeSpeed: 100,
        loop : true,
        backSpeed: 50,
        backDelay : 1000
        
    });

});