<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<div class="switch">
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>
</div>
<header>
	<div class="logo">
		<a href=""><img src="./images/logo.png" alt=""><p>Pixel<br>Design</p></a>
	</div>
	<div class="nav">
		<ul>
			<li><button type="button">About Me</button></li>
			<li><button type="button">Experience</button></li>
			<li><button type="button">Portfolio</button></li>
			<li><button type="button">Contact Me</button></li>
		</ul>
	</div>
</header>
<div class="vi">
    <div class="vi_txt">
        <div class="vi_txt_b">
            <h5>Hello, I'm</h5>
            <h2><span id="text"></span></h2>
        </div>
    </div>
    <div class="vi_img">
        <div class="my_img">
            <img src="./images/img_me.png" alt="">
        </div>
    </div>
</div>

<!--검색모달:e-->
<?php include "./lib/footer.php"; ?>