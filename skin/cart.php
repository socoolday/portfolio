<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>

    <div class="cont_title">장바구니</div>
    <div class="shop_con">
        <div class="member_box">
            <div class="member_top pay_top">
                <ul>
                    <li>
                        <div class="mem_t_c active"></div>
                        <p><span>STEP 01</span><br>장바구니</p>
                    </li>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 02</span><br>주문결제</p>
                    </li>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 03</span><br>주문완료</p>
                    </li>
                </ul>
            </div>
            <div class="pay_inner">
                <div class="pay_inner_tit">
                    <label><input type="checkbox" class="check"><span>전체선택</span></label>
                    <div class="p_btnBox">
                        <button class="btn">일시품절 상품 전체 삭제</button>
                        <button class="btn">관심상품 바로가기</button>
                        <button class="btn">선택삭제</button>
                    </div>
                </div>
                <div class="pay_s shopping_box">
                    <p class="p_txt">배송상품</p>
                    <i class="xi-angle-up"></i>
                </div>
                <div class="pay_s shopping_list">
                    <div class="sho_li_prd_info">
                        <div class="sh_li_pi_fir">
                            <label><input type="checkbox" class="check middle"></label>
                            <a href="" class="p_img"><img src="./images/p_img01.png" alt=""></a>
                            <div class="sl_txt">
                                <p>[너나들이]</p>
                                <strong>수분촉촉 라이트 모이스처 크림</strong>
                                <span>나이트 크림 대용량 150ml</span>
                                <div class="sl_txt_btn">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target=".change_option">옵션변경</button>
                                    <button class="btn pink"  data-bs-toggle="modal" data-bs-target=".coupon_modal">쿠폰적용</button>
                                </div>
                            </div>
                        </div>
                        <div class="p_btnBox">
                            <button class="btn">바로주문</button>
                            <button class="btn">관심상품</button>
                            <button class="btn">삭제</button>
                        </div>
                    </div>
                    
                    <div class="p_price top">
                        <div class=p_num>
                            <ul>
                                <li><button type="button" class="minys">-</button></li>
                                <li><p class="number">01</p></li>
                                <li><button type="button" class="plus">+</button></li>
                            </ul>
                            <button class="ppn_ch">주문변경</button>
                        </div>
                        <div class="p_num_r">
                            <strong class="won middle">37,000원</strong>
                            <button type="button"><i class="xi-close"></i></button>
                        </div>
                    </div>
                    <div class="p_price bottom">
                        <ul>
                            <li>
                                <p>상품금액</p>
                                <strong class="won">37,000원</strong>
                            </li>
                            <li>
                                <i class="xi-minus"></i>
                            </li>
                            <li>
                                <p>할인금액</p>
                                <strong class="won">3,000원</strong>
                            </li>
                            <li>
                                <i class="xi-plus"></i>
                            </li>
                            <li>
                                <p>배송비</p>
                                <strong class="won">2,500원</strong>
                            </li>
                            <li>
                                <i class="xi-drag-handle"></i>
                            </li>
                            <li>
                                <p>주문금액</p>
                                <strong class="won">36,500원</strong>
                            </li>
                        </ul>
                    </div>
                </div>     
            </div>


            <div class="p_sum">
                <div class="p_sum_b box1">
                    <div class="t1"><p>상품금액</p><strong>111,000원</strong></div>
                    <div class="t2"><p>상품 수</p><span>3개</span></div>
                </div>
                <div class="p_sum_b box2">
                    <div class="t1"><p>예상 할인금액</p><strong>9,000원</strong></div>
                    <div class="t2"><p>할인쿠폰</p><span>10% (-3,000원)</span></div>
                    <div class="t2"><p>추가할인 (포인트적용)</p><span>-2,000원</span></div>
                </div>
                <div class="p_sum_b box3">
                    <div class="t1"><p>배송비</p><strong>2,500원</strong></div>
                </div>
                <div class="p_sum_b box4">
                    <div class="t1"><p>총 결제 예정 금액</p><strong>109,500원</strong></div>
                    <div class="t2"><p>적립 예정 포인트</p><span>1,040 p</span></div>
                </div>
            </div>

            <div class="sec_bottom">
                <div class="sec_b_btng">
                    <p>선택한 상품</p>
                    <button class="btn">일시품절 상품 전체삭제</button>
                    <button class="btn">관심상품 바로가기</button>
                    <button class="btn">선택삭제</button>
                </div>
                <p>
                    &#45; 당시 및 브랜드 정책에 따라 포인트 사용이 제한될 수 있습니다.<br />
                    &#45; 할인 및 쿠폰 적용에 따라 사용가능한 포인트가 달라질 수 있습니다.
                </p>
            </div>

            <div class="btn_box">
                <button class="select_btn" onclick="location.href='./order.php'">선택 상품주문</button>
                <button class="all_btn" onclick="location.href='./order.php'">전체 상품주문</button>
            </div>
        </div>
    </div>

    <!--옵션변경모달:s-->
    <div class="modal fade change_option" tabindex="-1" aria-labelledby="coupon_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>옵션변경</h4>
                    <button type="button" class="coupon_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="change_opt_b">
                        <a href="" class="p_img"><img src="./images/p_img01.png" alt=""></a>
                        <div class="sl_txt">
                            <p>[너나들이]</p>
                            <strong>수분촉촉 라이트 모이스처 크림</strong>
                            <select name="" id="">
                                <option value="">나이트 크림 대용량 100ml</option>
                                <option value="">나이트 크림 대용량 150ml</option>
                                <option value="">나이트 크림 대용량 200ml</option>
                                <option value="">나이트 크림 대용량 250ml</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">옵션변경</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                </div>
            </div>
        </div>
    </div>
    <!--옵션변경모달:e-->
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
                                </ul>
                                <div class="coupon_total">
                                    <p>총 할인 금액 <span>-9,000원</span></p>
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



<?php include "./lib/footer.php"; ?>