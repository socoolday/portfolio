<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>

    <div class="cont_title">주문결제</div>
    <div class="shop_con">
        <div class="member_box">
            <div class="member_top pay_top">
                <ul>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 01</span><br>장바구니</p>
                    </li>
                    <li>
                        <div class="mem_t_c active"></div>
                        <p><span>STEP 02</span><br>주문결제</p>
                    </li>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 03</span><br>주문완료</p>
                    </li>
                </ul>
            </div>
            <div class="pay_inner ps2">
                <div class="pay_s shopping_box">
                    <p class="p_txt">배송상품</p>
                    <i class="xi-angle-up"></i>
                </div>
                <div class="pay_s order_list">
                    <div class="sl_img">
                        <img class="p_img" src="./images/p_img01.png" alt="">
                    </div>
                    <div class="sl_info">
                        <div class="sl_txt">
                            <p>[너나들이]</p>
                            <strong>수분촉촉 라이트 모이스처 크림</strong>
                        </div>
                        <div class="sl_num">
                            <span>나이트 크림 대용량 150ml</span>
                            <strong>36,500원</strong>
                        </div>
                    </div>
                </div>
                <div class="pay_s order_list">
                    <div class="sl_img">
                        <img class="p_img" src="./images/main_thum4.png" alt="">
                    </div>
                    <div class="sl_info">
                        <div class="sl_txt">
                            <p>[너나들이]</p>
                            <strong>수분촉촉 라이트 모이스처 크림</strong>
                        </div>
                        <div class="sl_num">
                            <span>나이트 크림 대용량 150ml</span>
                            <strong>36,500원</strong>
                        </div>
                    </div>
                </div>
                <div class="pay_s order_list">
                    <div class="sl_img">
                        <img class="p_img" src="./images/sub_list_img2.png" alt="">
                    </div>
                    <div class="sl_info">
                        <div class="sl_txt">
                            <p>[너나들이]</p>
                            <strong>수분촉촉 라이트 모이스처 크림</strong>
                        </div>
                        <div class="sl_num">
                            <span>나이트 크림 대용량 150ml</span>
                            <strong>36,500원</strong>
                        </div>
                    </div>
                </div>

                <div class="sl_pay_box">
                    <ul>
                        <li>
                            <p>총 주문금액</p>
                            <strong>111,000원</strong>
                        </li>
                        <li>
                            <p>할인금액</p>
                            <strong>9,000원</strong>
                        </li>
                        <li>
                            <p>결제금액</p>
                            <strong>102,000원</strong>
                        </li>
                    </ul>
                </div>

                <div class="pay_cp">
                    <div class="cp_tb">
                        <div class="cp_tb_l"><p>쿠폰</p></div>
                        <div class="cp_tb_r">
                            <button class="btn" data-bs-toggle="modal" data-bs-target=".coupon_modal">할인 쿠폰 선택</button>
                            <span>&#40;사용가능 쿠폰 : 0 / 보유 쿠폰 : 5개&#41;</span>
                        </div>
                    </div>
                    <div class="cp_tb">
                        <div class="cp_tb_l"><p>즉시 사용 적립금</p></div>
                        <div class="cp_tb_r">
                            <label>
                                <input type="radio" name="point" checked>전액 즉시 사용&#40;0원&#41;
                            </label>
                            <label>
                                <input type="radio" name="point">적립&#40;0원&#41;
                            </label>
                        </div>
                    </div>
                    <div class="cp_tb">
                        <div class="cp_tb_l"><p>포인트</p></div>
                        <div class="cp_tb_r">
                            <div>
                                <input type="checkbox">전액사용
                                <input type="text">
                            </div>
                            <span class="min_txt">&#40;사용 가능 포인트 : 120P&#41;</span>
                            <!-- <button class="btn">SMS 인증</button>
                            <ul>
                                <li>사용 조건에 부합하지 않는 선 지급 포인트의 경우 사용에 제한이 있을 수 있습니다.</li>
                                <li>10만 포인트 이상 사용 시 휴대번호 인증이 필요합니다.</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="pay_s shopping_box">
                    <p class="p_txt">주문&#47;배송 정보</p>
                </div>
                <div class="pay_order">
                    <div class="order_l">
                        <strong>주문 고객 정보</strong>
                        <div class="order_tb">
                            <div class="od_tb_l">이름</div>
                            <div class="od_tb_r">
                                <input type="text">
                            </div>
                        </div>
                        <div class="order_tb">
                            <div class="od_tb_l">연락처</div>
                            <div class="od_tb_r num">
                                <input type="text"><span>-</span><input type="text"><span>-</span><input type="text">
                            </div>
                        </div>
                        <div class="order_tb">
                            <div class="od_tb_l">이메일</div>
                            <div class="od_tb_r">
                                <input type="text">
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
                            <button class="btn">새로운 배송지 추가하기</button>
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
                <div class="pay_s shopping_box">
                    <p class="p_txt">결제 수단 선택</p>
                </div>
                <div class="pay_order pay_ch">
                    <div class="radio_box">
                        <div class="radio_ibox">
                            <input type="radio" id="r1" name="rr" />
                            <label for="r1"><span></span>Y-PAY <b>간편한 원클릭 결제</b></label>
                        </div>
                        <div class="radio_ibox bank_sel">
                            <div class="radio_ibox_tit">
                                <input type="radio" id="r2" name="rr" />
                                <label for="r2"><span></span>신용카드 결제</label>
                                <label class="pag"><input type="checkbox"> 선택한 수단을 다음에도 사용</label>
                            </div>
                            <div class="pay_icon">
                                <div class="pi_art active">
                                    <img src="./images/pay01.png" alt="" />
                                    <p>롯데</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay02.png" alt="" />
                                    <p>현대</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay03.png" alt="" />
                                    <p>국민</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay04.png" alt="" />
                                    <p>BC</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay05.png" alt="" />
                                    <p>삼성</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay06.png" alt="" />
                                    <p>신한</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay07.png" alt="" />
                                    <p>신협체크</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay08.png" alt="" />
                                    <p>수협</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay09.png" alt="" />
                                    <p>제주</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay10.png" alt="" />
                                    <p>MG새마을금고</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay11.png" alt="" />
                                    <p>전북</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay12.png" alt="" />
                                    <p>하나</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay13.png" alt="" />
                                    <p>산업카드</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay14.png" alt="" />
                                    <p>NH</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay15.png" alt="" />
                                    <p>씨티</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay16.png" alt="" />
                                    <p>우리</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay17.png" alt="" />
                                    <p>우체국체크</p>
                                </div>
                                <div class="pi_art">
                                    <img src="./images/pay18.png" alt="" />
                                    <p>저축은행체크</p>
                                </div>
                            </div>
                        </div>
                        <div class="radio_ibox">
                            <input type="radio" id="r3" name="rr" />
                            <label for="r3"><span></span>다른 결제수단</label>
                        </div>
                    </div>
                </div>
                <div class="btn_article">
                    <button class="btn a_pink" onclick="location.href='order_complet.php'">결제하기</button>
                </div>
            </div>
        </div>
    </div>
    <!--쿠폰모달:s-->
    <div class="modal fade coupon_modal" tabindex="-1" aria-labelledby="coupon_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>할인 쿠폰 적용</h4>
                    <button type="button" class="coupon_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="tab_p_tit">
                        <ul class="nav">
                            <li ><button class="active" data-bs-toggle="pill" data-bs-target=".tab_1_con" type="button" role="tab"><p>할인쿠폰</p></button></li>
                            <li><button data-bs-toggle="pill" data-bs-target=".tab_2_con" type="button" role="tab"><p>나의쿠폰</p></button></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active tab_1_con" role="tabpanel">
                            <div class="coupon_modal_b">
                                <ul class="cmb_list_cover">
                                    <li>
                                        <h4>상품명111</h4>
                                        <div class="cmb_list_info">
                                            <p class="coupon_count">상품 할인 <span>할인 쿠폰 <b>1</b> 개</span></p>
                                            <p class="cmb_prd_name">9컬러 폴리 릴넨 여름 캐주얼 오버핏 기획 무지 셔츠(선택:딥민트)/1개 <span>30,000원</span></p>
                                            <div class="cmb_li_coupon_select">
                                                <div class="clcs_l">
                                                    <p>상품할인</p>
                                                    <label for="coupon1">
                                                        <input type="radio" name="coupon1">
                                                        <strong>즉시 할인 -9,000원</strong>
                                                    </label>
                                                    <label for="coupon1">
                                                        <input type="radio" name="coupon1">
                                                        <span>적용안함</span>
                                                    </label>
                                                </div>
                                                <div class="clcs_r">
                                                    <p>할인금액</p>
                                                    <strong>9,000원</strong>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <h4>상품명222</h4>
                                        <div class="cmb_list_info">
                                            <p class="coupon_count">상품 할인 <span>할인 쿠폰 <b>1</b> 개</span></p>
                                            <p class="cmb_prd_name">9컬러 폴리 릴넨 여름 캐주얼 오버핏 기획 무지 셔츠(선택:딥민트)/1개 <span>30,000원</span></p>
                                            <div class="cmb_li_coupon_select">
                                                <div class="clcs_l">
                                                    <p>상품할인</p>
                                                    <label for="coupon2">
                                                        <input type="radio" name="coupon2">
                                                        <strong>즉시 할인 -9,000원</strong>
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="coupon2">
                                                        <span>적용안함</span>
                                                    </label>
                                                </div>
                                                <div class="clcs_r">
                                                    <p>할인금액</p>
                                                    <strong>9,000원</strong>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </li>
                                </ul>
                                <div class="coupon_total">
                                    <p>총 할인 금액 <span>-18,000원</span></p>
                                </div>
                            </div>
                            <div class="cmb_btn_group">
                                <button type="button">쿠폰적용</button>
                                <button type="button" data-bs-dismiss="modal">취소</button>
                            </div>
                        </div>
                        <div class="tab-pane fade tab_2_con"  role="tabpanel">
                            <h2>보유쿠폰 <span>(3개)</span></h2>
                            <div class="table-responsive">
                                <table class="table align-middle table-striped">
                                    <thead>
                                        <th>쿠폰번호</th>
                                        <th>발행업체</th>
                                        <th>쿠폰명</th>
                                        <th>할인율/할인액</th>
                                        <th>사용조건</th>
                                        <th>유효기간</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td>202206281388745</td>
                                           <td>쿠폰 이벤트</td>
                                           <td>신규 고객 할인 이벤트</td>
                                           <td>3%</td>
                                           <td>100,000원 이상 구매</td>
                                           <td>2022.06.01 00:00 ~ 2022.06.30 23:59</td>
                                        </tr>
                                        <tr>
                                           <td>202206281388745</td>
                                           <td>쿠폰 이벤트</td>
                                           <td>신규 고객 할인 이벤트</td>
                                           <td>1,000원</td>
                                           <td>10,000원 이상 구매</td>
                                           <td>2022.06.01 00:00 ~ 2022.06.30 23:59</td>
                                        </tr>
                                        <tr>
                                           <td>202206281388745</td>
                                           <td>쿠폰 이벤트</td>
                                           <td>신규 고객 할인 이벤트</td>
                                           <td>500원</td>
                                           <td>5,000원 이상 구매</td>
                                           <td>2022.06.01 00:00 ~ 2022.06.30 23:59</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagenate">
                                <a href="" class="page_ar"><img src="./images/page_l1.png" alt=""></a>
                                <a href="" class="page_ar pa_m1"><img src="./images/page_l2.png" alt=""></a>
                                <a href="" class="active">1</a>
                                <a href="">2</a>
                                <a href="">3</a>
                                <a href="" class="page_del">4</a>
                                <a href="" class="page_del">5</a>
                                <a href="" class="page_del">6</a>
                                <a href="" class="page_del">7</a>
                                <a href="" class="page_del">8</a>
                                <a href="" class="page_del">9</a>
                                <a href="" class="page_del">10</a>
                                <a href="" class="page_ar pa_m2"><img src="./images/page_r2.png" alt=""></a>
                                <a href="" class="page_ar"><img src="./images/page_r1.png" alt=""></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
    <!--
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
    -->
                </div>
            </div>
        </div>
    </div>
    <!--쿠폰모달:e-->

<style>
    .foot_sns{display: none;}
</style>

<?php include "./lib/footer.php"; ?>