<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>


<div class="shop_con">
    <div class="cont_path">
        <ul class="cont_p_list">
            <li><a href="./main.php">홈</a></li>
            <li>
                <i class="xi-angle-right-min"></i>
                아이디/비밀번호 찾기
            </li>
        </ul>
    </div>
    <div class="login idpw_search_form">
        <div class="tab_p_tit">
            <ul class="nav">
                <li ><button class="active" data-bs-toggle="pill" data-bs-target=".tab_1_con" type="button" role="tab"><i class="xi-user-o"></i><p>아이디 찾기</p></button></li>
                <li><button data-bs-toggle="pill" data-bs-target=".tab_2_con" type="button" role="tab"><i class="xi-lock-o"></i><p>비밀번호 찾기</p></button></li>
            </ul>
        </div>
        <div class="tab-content ">
            <div class="tab-pane fade show active tab_1_con" role="tabpanel">
                <h1>아이디 찾기</h1>
                <div class="login_box">
                    <form>
                        <input type="text" placeholder="신청 시 사용한 이메일을 입력해 주세요." class="login_text">
                        <input type="password" placeholder="비밀번호" class="login_text">
                        <button type="button" class="login_btn">아이디 찾기</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade tab_2_con" role="tabpanel">
                <h1>비밀번호 찾기</h1>
                <div class="login_box">
                    <form>
                        <input type="text" placeholder="아이디 입력" class="login_text">
                        <input type="text" placeholder="신청 시 사용한 이메일을 입력해 주세요." class="login_text">
                        <button type="button" class="login_btn">비밀번호 찾기</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</div>
<style>
    .foot_sns{display: none;}
</style>

<?php include "./lib/footer.php"; ?>