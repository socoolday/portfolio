<?php include "./lib/meta.php"; ?>
<div class="wrap">
    <div class="join_form">
        <div class="log_img">
            <img src="./images/index_logo.png" alt="">
        </div>
        
        <div class="log_input_form">
            <div class="input_group">
                <div class="input_g_list">
                    <ul class="one_line">
                        <li>
                            <div class="igl_tit">
                                <p>아이디</p>
                            </div>
                            <div class="igl_input">
                                <input type="text" placeholder="아이디 입력">
                            </div>
                        </li>
                        <li>
                            <div class="igl_tit">
                                <p>패스워드</p>
                            </div>
                            <div class="igl_input">
                                <input type="password" placeholder="패스워드 입력">
                            </div>
                        </li>
                        <li class="input_check">
                            <input type="checkbox" id="login_id">
                            <label for="login_id">아이디 저장</label>
                        </li>
                    </ul>
                </div>
                <div class="input_btn">
                    <button type="button" class="bg_blue_1" onclick="location.href='./index.php'">로그인</button>
                    <button type="button" class="bg_blue_5" onclick="location.href='./join.php'">회원가입</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./lib/footer.php"; ?>