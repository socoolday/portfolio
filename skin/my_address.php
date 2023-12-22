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
            <h2>배송지 정보</h2>
            <div class="pay_order">
                <div class="order_l">
                    <strong>주문 고객 정보</strong>
                    <div class="order_tb">
                        <div class="od_tb_l">이름</div>
                        <div class="od_tb_r">
                            <p>홍길동</p>
                        </div>
                    </div>
                    <div class="order_tb">
                        <div class="od_tb_l">연락처</div>
                        <div class="od_tb_r num">
                            <p>010-****-0000</p>
                        </div>
                    </div>
                    <div class="order_tb">
                        <div class="od_tb_l">이메일</div>
                        <div class="od_tb_r">
                            <p>main_****@mail.com</p>
                        </div>
                    </div>
                    <select>
                        <option>배송 시 요청사항 (선택사항)</option>
                        <option>배송 전 전화주세요</option>
                        <option>경비실에 맡겨주세요</option>
                        <option>배송 시 요청사항 (선택사항)</option>
                    </select>
                </div>
                <div class="order_r">
                    <div class="order_r_tit">
                        <strong>배송지 정보</strong>
                        <button class="btn" data-bs-toggle="modal" data-bs-target=".change_address">새로운 배송지 추가하기</button>
                    </div>
                    <article class="active">
                        <div class="article_order_info">
                            <div class="rec">기본배송지</div>
                            <div class="name">홍길동</div>
                            <div class="num">01011112222</div>
                        </div>
                        <div class="ad">&#40;10000&#41; 서울특별시 서울구 서울동 000번지 서울아파트 000동 0000호</div>
                    </article>
                    <article>
                        <div class="article_order_info">
                            <div class="rec">회사</div>
                            <div class="name">홍길동</div>
                            <div class="num">01011112222</div>
                        </div>

                        <div class="ad">&#40;10000&#41; 서울특별시 서울구 서울동 000번지 서울아파트 000동 0000호</div>
                    </article>
                </div>
            </div>
            <button type="button" class="login_btn">수정하기</button>
        </div>
    </div>
</div>
    <!-- 배송지 추가 팝업 -->
    <div class="modal fade change_address my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">신규배송지 추가</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="address_add">
                        <ul>
                            <li>
                                <p>배송지명</p>
                                <div class="adadd_input">
                                    <input type="text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <p>수령인</p>
                                <div class="adadd_input">
                                    <input type="text" placeholder="배송지 수령인">
                                </div>
                            </li>
                            <li>
                                <p>주소</p>
                                <div class="adadd_input">
                                    <div class="address_search">
                                        <input type="text">
                                        <button type="button">주소검색</button>
                                    </div>
                                    <input type="text" placeholder="">
                                    <input type="text" placeholder="상세주소">
                                </div>
                            </li>
                            <li>
                                <p>연락처</p>
                                <div class="adadd_input">
                                    <input type="text" placeholder="배송지 수령인">
                                </div>
                            </li>
                            <li>
                                <p>비상연락처</p>
                                <div class="adadd_input">
                                    <input type="text" placeholder="배송지 수령인">
                                </div>
                            </li>
                            <li>
                                <p>기본배송지로 설정</p>
                                <div class="adadd_input">
                                    <input type="checkbox" name="add_import">
                                    <label for="add_import">기본배송지로 설정하기</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore">추가하기</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //배송지 추가 팝업 -->
<?php include "./lib/footer.php"; ?>