<?php include "./lib/meta.php"; ?>

<div class="wrap">
    <div class="log_lang">
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="xi-globus"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item" href="#"><img src="./images/flag_th.png" alt=""> Thailand</a></li>
                <li><a class="dropdown-item" href="#"><img src="./images/flag_ko.png" alt=""> Korea</a></li>
                <li><a class="dropdown-item" href="#"><img src="./images/flag_us.png" alt=""> Us English</a></li>
            </ul>
        </div>
    </div>
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
                        <li>
                            <div class="igl_tit">
                                <p>이름</p>
                            </div>
                            <div class="igl_input">
                                <input type="text" placeholder="이름 입력">
                            </div>
                        </li>
                        <li>
                            <div class="igl_tit">
                                <p>이메일</p>
                            </div>
                            <div class="igl_input">
                                <input type="password" placeholder="이메일 입력">
                            </div>
                        </li>
                        <li>
                            <div class="igl_tit">
                                <p>국가코드</p>
                            </div>
                            <div class="igl_input">
                                <select name="" id="">
                                    <option value=""> Thailand</option>
                                    <option value=""> Korea</option>
                                    <option value=""> Us</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="input_btn">
                    <button type="button" class="bg_blue_1" onclick="location.href='./index.php'">가입하기</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./lib/footer.php"; ?>