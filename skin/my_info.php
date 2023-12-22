<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>
<?php include "./lib/page_category.php"; ?>


<div class="shop_con">
    <div class="my_info_b">
        <div class="sub_my_top">
            <div class="sub_my_name">
                <h1><p>Family</p><span>홍길동</span> 님, 반갑습니다.</h1>
            </div>

            <div class="sub_my_bottom">
                <div class="sub_my_member">
                    <div class="sub_my_membership">
                        <div class="sub_my_membox">
                            <img src="./images/members_f.png" alt="">
                        </div>
                        <p>티몰 멤버십<br>Family</p>
                    </div>
                </div>

                <div class="sub_my_info">
                    <ul>
                        <li><img src="./images/sub_my_money.png" alt=""><p>적립금<span><br>54,000원</span></p></li>
                        <li><img src="./images/sub_my_point.png" alt=""><p>포인트<span><br>200p</span></p></li>
                        <li><img src="./images/sub_my_coupon.png" alt=""><p>쿠폰<span><br>6장</span></p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="member_info">
            <h2>회원정보</h2>
            <div class="member_input-table">
                <div class="member_inputI">
                    <div class="member_inputL">아이디</div>
                    <div class="member_inputR"><p>honggildong</p></div>
                </div>
                <div class="member_inputI">
                    <div class="member_inputL">비밀번호</div>
                    <div class="member_inputR">
                        <button type="button" data-bs-toggle="modal" data-bs-target=".change_password">변경하기</button>
                    </div>
                </div>
                <div class="member_inputI member_inpt">
                    <div class="member_inputL">성명</div>
                    <div class="member_inputR"><p>홍길동</p></div>
                </div>
                <div class="member_inputI">
                    <div class="member_inputL">휴대폰 번호</div>
                    <div class="member_inputR"><p>010-****-1234</p> <button type="button">변경하기</button></div>
                </div>
                <div class="member_inputI">
                    <div class="member_inputL">생년월일</div>
                    <div class="member_inputR"><p>****년 **월 **일</p></div>
                </div>
                <div class="member_inputI">
                    <div class="member_inputL">이메일주소</div>
                    <div class="member_inputR"><p>main_****@mail.com</p> <button type="button" data-bs-toggle="modal" data-bs-target=".change_email">변경하기</button></div>
                </div>
<!--
                <div class="member_inputI">
                    <div class="member_inputL">성별</div>
                    <div class="member_inputR">
                        <div class="radio_box">
                            <div class="radio_ibox">
                                <input type="radio" id="mw1" name="rr">
                                <label for="mw1"><span></span>남자</label>
                            </div>
                            <div class="radio_ibox">
                                <input type="radio" id="mw2" name="rr">
                                <label for="mw2"><span></span>여자</label>
                            </div>
                        </div>
                    </div>
                </div>
-->
            </div>
            <button type="button" class="login_btn">수정하기</button>
        </div>
    </div>
</div>
    <!-- 비밀번호 변경 팝업 -->
    <div class="modal fade change_password my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">비밀번호 변경</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="address_add">
                        <ul>
                            <li>
                                <p>기존비밀번호</p>
                                <div class="adadd_input">
                                    <input type="password" placeholder="기존비밀번호">
                                </div>
                            </li>
                            <li>
                                <p>신규 비밀번호</p>
                                <div class="adadd_input">
                                    <input type="password" placeholder="영문/숫자/특수문자 조합 6~15자">
                                </div>
                            </li>
                            <li>
                                <p>신규 비밀번호 확인</p>
                                <div class="adadd_input">
                                    <input type="password" placeholder="신규 비밀번호 확인">
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore">변경하기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //비밀번호 변경 팝업 -->

    <!-- 이메일 변경 팝업 -->
    <div class="modal fade change_email my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">이메일 변경</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="address_add">
                        <ul>
                            <li>
                                <p>신규 이메일 입력</p>
                                <div class="adadd_input">
                                    <input type="text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <p>비밀번호 입력</p>
                                <div class="adadd_input">
                                    <input type="password" placeholder="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore">변경하기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //이메일 변경 팝업 -->
<?php include "./lib/footer.php"; ?>