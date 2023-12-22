<?php include "./lib/meta.php"; ?>




<div class="log_wrap">
    <div class="log_form">
        <div class="log_form_tit">
            <h1><span>로그인</span>이 필요합니다.</h1>
            <p>T-world global admin</p>
        </div>
        <div class="log_form_con">
            <img src="./images/log_logo.png" alt="">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><img src="./images/ic_1_w.png" alt=""></span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><img src="./images/ic_2_w.png" alt=""></span>
                <input type="text" class="form-control" placeholder="password" aria-describedby="basic-addon1">
            </div>
            <button type="button" class="btn btn-default" onClick="location.href='main.php'">Login</button>
            <label><input type="checkbox" value="" class="check_style"> 로그인 유지</label>
            <label><input type="checkbox" value="" class="check_style"> 아이디 저장</label>
        </div>
    </div>
</div>