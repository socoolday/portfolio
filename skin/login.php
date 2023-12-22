<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>


<div class="shop_con">
     <div class="cont_path">
        <ul class="cont_p_list">
            <li><a href="./main.php">홈</a></li>
            <li>
                <i class="xi-angle-right-min"></i>
                로그인
            </li>
        </ul>
    </div>
    <div class="login">
        <h1>로그인</h1>
        <div class="login_box">
            <form>
                <input type="text" placeholder="아이디" class="login_text">
                <input type="text" placeholder="비밀번호" class="login_text">

                <div class="login_check">
                    <input type="checkbox" id="log_check">
                    <label for="log_check">아이디 저장</label>
                </div>

                <button type="button" class="login_btn">로그인</button>

                <div class="login_find">
                    <ul>
                        <li><a href="./join.php">회원가입</a></li>
                        <li><a href="">아이디 찾기</a></li>
                        <li><a href="">비밀번호 찾기</a></li>
                    </ul>
                </div>
            </form>
            <div class="login_sns">
                <h2>SNS 로그인</h2>
                <ul>
                    <li><a href=""><img src="./images/login_naver.png" alt=""><p>네이버</p></a></li>
                    <li><a href=""><img src="./images/login_face.png" alt=""><p>페이스북</p></a></li>
                    <li><a href=""><img src="./images/login_twit.png" alt=""><p>트위터</p></a></li>
                    <li><a href=""><img src="./images/login_kakao.png" alt=""><p>카카오톡</p></a></li>
                </ul>
            </div>

            <div class="login_pbox">
                <p><a href="./join.php"><span>회원가입</span></a>을 하시면 더 많은 혜택을 얻으실 수 있습니다.</p>
                <button type="button" class="login_nm" onclick="location.href='login_nomember.php' ">비회원 주문조회</button>
            </div>
        </div>
    </div>
</div>
<style>
    .foot_sns{display: none;}
</style>

<?php include "./lib/footer.php"; ?>