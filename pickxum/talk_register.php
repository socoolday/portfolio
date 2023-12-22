<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<div class="sub_head">
    <div class="con">
        <div class="sh_txt">
            <ul>
                <li>
                    <a href="">HOME</a>
                </li>
                <li>
                    <a href="">픽썸톡</a>
                </li>
                <li>
                    <a href="">문의등록</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sub_con">
    <div class="con">
        <div class="sub_tit">
        <h2>문의등록</h2>
        </div>
        <div class="y_rg">
            <div class="y_rg_box">
                <ul>
                    <li>
                        <div class="y_rg_l">아이디</div>
                        <div class="y_rg_r y_rg_b">
                            <input type="text" placeholder="4~20자 이상 (영문, 숫자, 특수문자)" class="mfm">
                            <div class="y_rg_bt">
                                <button class="y_id_cf">아이디중복확인</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">비밀번호</div>
                        <div class="y_rg_r">
                            <input type="password" placeholder="4~20자 이상 (영문, 숫자, 특수문자)" class="w100_ mfm">
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">비밀번호 확인</div>
                        <div class="y_rg_r">
                            <input type="password" placeholder="비밀번호를 한번 더 입력해 주세요." class="w100_ mfm">
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">이름</div>
                        <div class="y_rg_r">
                            <input type="text" placeholder="이름을 입력해 주세요." class="w100_ mfm">
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">카테고리</div>
                        <div class="y_rg_r">
                            <select class="w100_ mfm">
                                <option>공지사항</option>
                                <option>오디션 후기</option>
                                <option>자유게시판</option>
                                <option>자료실</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">휴대폰번호</div>
                        <div class="y_rg_r">
                            <input type="text" placeholder="예제)01012345678" class="w100_ mfm">
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">이메일</div>
                       <div class="y_rg_r">
                            <input type="text" placeholder="이메일을 입력해 주세요." class="w100_ mfm">
                        </div>
                    </li>
                    <li>
                        <div class="y_rg_l">내용</div>
                        <div class="y_rg_r">
                            <textarea cols="50" rows="10"></textarea>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mp_btom_btn">
            <button type="button">등록하기</button>
        </div>
    </div>   
</div>



<?php include "./lib/footer.php"; ?>
