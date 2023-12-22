<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>
<?php include "./lib/page_category.php"; ?>

<div class="shop_con">
    <div class="sub_order_box">
        <div class="sub_order_title">
            <h1>주문 현황 <span>(현재 진행 중인 건수가 표시됩니다.)</span></h1>
        </div>
        <div class="order_list_cover">
            <div class="ol_art">
                <img src="./images/order_icon01.png" alt="" />
                <span>주문접수</span>
                <strong class="txt_col">1</strong>
            </div>
            <div class="ol_art">
                <img src="./images/order_icon02.png" alt="" />
                <span>상품 준비 중</span>
                <strong>0</strong>
            </div>
            <div class="ol_art">
                <img src="./images/order_icon03.png" alt="" />
                <span>배송중</span>
                <strong>0</strong>
            </div>
            <div class="ol_art">
                <img src="./images/order_icon04.png" alt="" />
                <span>배송완료</span>
                <strong>0</strong>
            </div>
        </div>
    </div>
    <div class="sub_order_box">
        <div class="sub_order_title">
            <h1>최근 주문 내역 <span>1개월</span></h1>
            <div class="sub_order_Bbox">
                <button type="button">지난 주문내역 더보기<i class="xi-angle-right-min"></i></button>
                <button type="button">영수증/계산서 조회</button>
                <div class="sub_order_select">
                    <select>
                        <option selected>최근 주문내역 (10건)</option>
                        <option>1개월 내</option>
                        <option>3개월 내</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="sub_deli_date">
            <div class="sub_deli_dbox">
                <div class="sub_deli_dbi">
                    <p>기간별 조회</p>
                    <div class="sub_d_Bbox">
                        <button type="button" class="active">최근 15일</button>
                        <button type="button">1개월</button>
                        <button type="button">3개월</button>
                        <button type="button">6개월</button>
                        <button type="button">기간설정</button>
                    </div>
                    <div class="sub_d_dbox">
                        <div class="sub_d_di">
                            <input type="text" value="2019-00-00">
                            <button type="button"><img src="./images/sub_my_calendar.png" alt=""></button>
                        </div>
                        <p>~</p>
                        <div class="sub_d_di">
                            <input type="text" value="2019-00-00">
                            <button type="button"><img src="./images/sub_my_calendar.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //sub_deli_date -->

        <div class="sub_order_table">
            <div class="sub_order_itable">
                <div class="sub_order_Tlist">
                    <div class="sub_order_Tdate">2019-03-15</div>
                    <div class="sub_order_Tnum">주문번호 2019031510438580</div>
                    <div class="sub_order_Tlink"><button type="button" data-bs-toggle="modal" data-bs-target=".order_detail">주문 상세 확인하기<i class="xi-angle-right-min"></i></button></div>
                </div>
                <div class="sub_order_Blist">
                    <div class="sub_order_Binfo">
                        <div class="sub_or_img">
                            <img src="./images/sub_order1.png" alt="">
                        </div>
                        <div class="sub_order_Btbox">
                            <p class="sub_or_Bt1">베리떼</p>
                            <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                            <p class="sub_or_Bt3">내용량 150ml</p>
                            <p class="sub_or_Bt4">50,120원 / 1개</p>
                        </div>
                    </div>
                    <div class="sub_order_Bdeli">
                        <h1>배송시작</h1>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".trackingNum">배송추적</button>
                    </div>
                    <div class="sub_order_Bident">
                        <button type="button" class="sub_or_btn1">수취확인</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".takeBack">반품신청</button>
                        <button type="button">교환신청</button>
                    </div>
                </div>
            </div>
        </div><!-- //sub_order_table -->
        <div class="sub_order_table">
            <div class="sub_order_itable">
                <div class="sub_order_Tlist">
                    <div class="sub_order_Tdate">2019-03-15</div>
                    <div class="sub_order_Tnum">주문번호 2019031510438580</div>
                    <div class="sub_order_Tlink"><button type="button">주문 상세 확인하기<i class="xi-angle-right-min"></i></button></div>
                </div>
                <div class="sub_order_Blist">
                    <div class="sub_order_Binfo">
                        <div class="sub_or_img">
                            <img src="./images/sub_order1.png" alt="">
                        </div>
                        <div class="sub_order_Btbox">
                            <p class="sub_or_Bt1">베리떼</p>
                            <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                            <p class="sub_or_Bt3">내용량 150ml</p>
                            <p class="sub_or_Bt4">50,120원 / 1개</p>
                        </div>
                    </div>
                    <div class="sub_order_Bdeli">
                        <h1>배송완료대기</h1>
                        <button type="button" data-toggle="modal" data-target=".trackingNum">배송추적</button>
                    </div>
                    <div class="sub_order_Bident">
                        <button type="button" class="sub_or_btn1">수취확인</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".takeBack">반품신청</button>
                        <button type="button">교환신청</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".commentPro">상품평쓰기</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".noRecive">미수령신고</button>
                    </div>
                </div>
                <div class="sub_order_Blist sub_or_border">
                    <div class="sub_order_Binfo">
                        <div class="sub_or_img">
                            <img src="./images/sub_order1.png" alt="">
                        </div>
                        <div class="sub_order_Btbox">
                            <p class="sub_or_Bt1">베리떼</p>
                            <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                            <p class="sub_or_Bt3">내용량 150ml</p>
                            <p class="sub_or_Bt4">50,120원 / 1개</p>
                        </div>
                    </div>
                    <div class="sub_order_Bdeli">
                        <h1>배송완료대기</h1>
                        <button type="button" data-toggle="modal" data-target=".trackingNum">배송추적</button>
                    </div>
                    <div class="sub_order_Bident">
                        <button type="button" class="sub_or_btn1">수취확인</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".takeBack">반품신청</button>
                        <button type="button">교환신청</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".commentPro">상품평쓰기</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target=".noRecive">미수령신고</button>
                    </div>
                </div>
            </div>
        </div><!-- //sub_order_table -->
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
    <!-- 배송조회 팝업 -->
    <div class="modal fade trackingNum my_modal" role="dialog">
        <div class="modal-dialog" >

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">배송조회</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <h1>기본정보</h1>
                    <div class="modal_trackingNum">
                        <div class="modal_trackN-info">
                            <div class="modal_trackN-img"><img src="./images/sub_order1.png" alt=""></div>
                            <div class="modal_trackN-tbox">
                                <p class="modal_trackN-t1">라플레이스</p>
                                <p class="modal_trackN-t2">윈터 에디션 나이트 크림</p>
                                <p class="modal_trackN-t3">대용량 150ml</p>
                                <p class="modal_trackN-t4">50,120원 / 1개</p>
                            </div>
                        </div>

                        <div class="modal_trackN-info2">
                            <div class="modal_trackN-iiner">
                                <div class="modal_trackN-info21">송장번호</div>
                                <div class="modal_trackN-info22">2019045879658453</div>
                                <div class="modal_trackN-info21">택배사</div>
                                <div class="modal_trackN-info22">CJ대한통운 (1588-5353)</div>
                            </div>
                            <div class="modal_trackN-iiner">
                                <div class="modal_trackN-info21">사업소</div>
                                <div class="modal_trackN-info22 trackN_line">서울특별시 서울 (000-0000-0000)</div>
                                <div class="modal_trackN-info21 trackN_500">택배기사 연락처</div>
                                <div class="modal_trackN-info22">000-0000-0000</div>
                            </div>
                            <div class="modal_trackN-iiner">
                                <div class="modal_trackN-info21">배송지</div>
                                <div class="modal_trackN-info23">서울특별시 서울로 서울아파트 000번지 000-000</div>
                            </div>
                        </div>

                        <h1>진행상태</h1>
                        <div class="modal_table_responsive">
                            <div class="modal_trackN-ing">
                                <div class="modal_trackN-i">
                                    <div class="modal_trackN-cap">
                                        <div class="modal_trackN-c1">처리일시</div>
                                        <div class="modal_trackN-c1">배송상태</div>
                                        <div class="modal_trackN-c1">배송상세</div>
                                        <div class="modal_trackN-c1">위치</div>
                                        <div class="modal_trackN-c1">연락처</div>
                                    </div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><p>배송완료</p></div>
                                    <div class="modal_trackN-c2"><p>배달완료</p></div>
                                    <div class="modal_trackN-c2"><p>서울특별시</p></div>
                                    <div class="modal_trackN-c2"><p>기사님 01000000000<br>사업소 00000000000</p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><p>택배기사 출발</p></div>
                                    <div class="modal_trackN-c2"><p>배달출발<br>(예정시간 : 14-16시)</p></div>
                                    <div class="modal_trackN-c2"><p>서울특별시</p></div>
                                    <div class="modal_trackN-c2"><p>기사님 01000000000<br>사업소 00000000000</p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><p>상품 이동중</p></div>
                                    <div class="modal_trackN-c2"><p>간선하차</div>
                                    <div class="modal_trackN-c2"><p>서울특별시</p></div>
                                    <div class="modal_trackN-c2"><p></p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">처리일시 </span> <p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상태 </span> <p>상품 이동중</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상세 </span> <p>간선하차</div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">위치 </span> <p>서울특별시</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">연락처 </span><p></p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">처리일시 </span> <p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상태 </span> <p>상품 이동중</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상세 </span> <p>행낭포장</div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">위치 </span> <p>동서울</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">연락처 </span><p></p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">처리일시 </span> <p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상태 </span> <p>상품 이동중</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상세 </span> <p>간선하차</div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">위치 </span> <p>동서울</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">연락처 </span><p></p></div>
                                </div>
                                <div class="modal_trackN-i2">
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">처리일시 </span> <p>2019-03-15 15:25:23</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상태 </span> <p>상품 배송 접수</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">배송상세 </span> <p>집화처리</div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">위치 </span> <p>여수룬(집화)</p></div>
                                    <div class="modal_trackN-c2"><span class="mo_trackNt">연락처 </span><p>사업소 00000000000</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //배송조회 팝업 -->

    <!-- 상품평 쓰기 팝업 -->
    <div class="modal fade commentPro my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">상품평 쓰기</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="modal_commentPro">
                        <div class="modal_comenP_box">
                            <div class="modal_comenP-img"><img src="./images/sub_order1.png" alt=""></div>
                            <div class="modal_comenP-tbox">
                                <p class="modal_comenP-t1">라플레이스</p>
                                <p class="modal_comenP-t2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                                <p class="modal_comenP-t3">대용량 150ml</p>
                            </div>
                        </div>

                        <div class="modal_comenP_table">
                            <div class="modal_coment_star">
                                <div class="mcs_tit">별점</div>
                                <div id="full-stars-example-two">
                                    <div class="rating-group">
                                        <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star xi-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star xi-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star xi-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star xi-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star xi-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                    </div>
                                </div>
                            </div>
                            <div class="modal_comenP_it">
                                <div class="modal_comenp_itT">항목평가</div>
                            </div>
                            <div class="modal_comenP_select">
                                <div class="modal_comenp_itL2">
                                    <h3>디자인</h3>
                                    <div class="radio_box">
                                        <div class="radio_ibox">
                                            <input type="radio" id="d1" name="rr" />
                                            <label for="d1"><span></span>아주 마음에 들어요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="d2" name="rr" />
                                            <label for="d2"><span></span>보통이에요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="d3" name="rr" />
                                            <label for="d3"><span></span>예상보다 별로예요</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_comenp_itL2">
                                    <h3>사이즈</h3>
                                    <div class="radio_box">
                                        <div class="radio_ibox">
                                            <input type="radio" id="s1" name="dd" />
                                            <label for="s1"><span></span>정사이즈예요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="s2" name="dd" />
                                            <label for="s2"><span></span>예상보다 커요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="s3" name="dd" />
                                            <label for="s3"><span></span>예상보다 작아요</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_comenp_itL2 modal_co_nline">
                                    <h3>색상</h3>
                                    <div class="radio_box">
                                        <div class="radio_ibox">
                                            <input type="radio" id="co1" name="ff" />
                                            <label for="co1"><span></span>화면과 같아요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="co2" name="ff" />
                                            <label for="co2"><span></span>화면보다 밝아요</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="co3" name="ff" />
                                            <label for="co3"><span></span>화면보다 어두워요</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal_comenP_it">
                                <div class="modal_comenp_itT">상세평가</div>
                            </div>
                            <div class="modal_comenP_it">
                                <div class="modal_comenp_itL">
                                    <div class="modal_file"><label for="mo_file"><i class="xi-plus-thin"></i></label><input type="file" id="mo_file"></div>
                                    <div class="modal_file"><label for="mo_file"><i class="xi-plus-thin"></i></label><input type="file" id="mo_file"></div>
                                    <div class="modal_file"><label for="mo_file"><i class="xi-plus-thin"></i></label><input type="file" id="mo_file"></div>
                                    <div class="modal_file"><label for="mo_file"><i class="xi-plus-thin"></i></label><input type="file" id="mo_file"></div>
                                    <p class="mo_coP1">사진은 최대 500KB 이하의 JPG, JPEG, PNG 파일만 첨부 가능합니다.</p>
                                    <textarea class="mo_comenP_texta" placeholder="자세히 작성할수록 상품평 랭킹 점수가 올라갑니다."></textarea>
                                    <p class="mo_coP2"><span>0</span>/4000 bytes (한글 2000자)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore modal_comenP_btn1" data-dismiss="modal">올리기</button>
                    <button type="button" class="btn btn-default mo_btn_nore modal_comenP_btn2" data-toggle="modal" data-target=".trackingNum">다시작성</button>
                </div>
            </div>

        </div>
    </div>
    <!-- //상품평 쓰기 팝업 -->

    <!-- 반품 요청 1 팝업 -->
    <div class="modal fade takeBack my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">반품요청하기</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="modal_takeBack">
                        <h1>주문한 상품 선택 <span>2019. 03. 15</span></h1>
                        <p class="mo_noR2">
                            - 상품이 배송 전일 경우 취소신청을 하실 수 있습니다.<br>
                            - 이미 상품을 수령하신 경우, 반품 신청을 해주시기 바랍니다.<br>
                            - 반품, 교환 신청은 배송 완료일로부터 7일 이내까지 가능합니다. 
                        </p>

                        <div class="sub_order_box">
                            <div class="sub_order_table">
                                <div class="sub_order_itable">
                                    <div class="check_l_ibox">
                                        <input type="checkbox" id="ex_chk"> <label for="ex_chk">주문번호 2019031510438580</label>
                                    </div>
                                    <div class="sub_order_Blist">
                                        <div class="sub_order_Binfo">
                                            <div class="sub_or_img">
                                                <img src="./images/sub_order1.png" alt="">
                                            </div>
                                            <div class="sub_order_Btbox">
                                                <p class="sub_or_Bt1">베리떼</p>
                                                <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                                                <p class="sub_or_Bt3">내용량 150ml</p>
                                                <p class="sub_or_Bt4">50,120원 / 1개</p>
                                            </div>
                                        </div>
                                        <div class="sub_order_Bdeli">
                                            <h1>배송완료</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //sub_order_table -->
                        </div><!-- //sub_order_box -->

                        <div class="sub_order_box">
                            <div class="sub_order_table">
                                <div class="sub_order_itable">
                                    <div class="check_l_ibox">
                                        <input type="checkbox" id="ex_chk"> <label for="ex_chk">주문번호 2019031510438580</label>
                                    </div>
                                    <div class="sub_order_Blist">
                                        <div class="sub_order_Binfo">
                                            <div class="sub_or_img">
                                                <img src="./images/sub_order1.png" alt="">
                                            </div>
                                            <div class="sub_order_Btbox">
                                                <p class="sub_or_Bt1">베리떼</p>
                                                <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                                                <p class="sub_or_Bt3">내용량 150ml</p>
                                                <p class="sub_or_Bt4">50,120원 / 1개</p>
                                            </div>
                                        </div>
                                        <div class="sub_order_Bdeli">
                                            <h1>반품신청</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //sub_order_table -->
                        </div><!-- //sub_order_box -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore" data-dismiss="modal">반품신청</button>
                </div>
            </div>

        </div>
    </div>
    <!-- //반품 요청 1 팝업 -->
    
    <!-- 주문상세 팝업 -->
    <div class="modal fade order_detail my_modal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">주문상세정보</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><img src="./images/pop1.png" alt=""></button>
                </div>
                <div class="modal-body">
                    <div class="modal_takeBack">
                        <h1>주문한 상품 선택 <span>2019. 03. 15</span></h1>
                        <p class="mo_noR2">
                            - 상품이 배송 전일 경우 취소신청을 하실 수 있습니다.<br>
                            - 이미 상품을 수령하신 경우, 반품 신청을 해주시기 바랍니다.<br>
                            - 반품, 교환 신청은 배송 완료일로부터 7일 이내까지 가능합니다. 
                        </p>

                        <div class="sub_order_box">
                            <div class="sub_order_table">
                                <div class="sub_order_itable">
                                    <div class="check_l_ibox">
                                        <input type="checkbox" id="ex_chk"> <label for="ex_chk">주문번호 2019031510438580</label>
                                    </div>
                                    <div class="sub_order_Blist">
                                        <div class="sub_order_Binfo">
                                            <div class="sub_or_img">
                                                <img src="./images/sub_order1.png" alt="">
                                            </div>
                                            <div class="sub_order_Btbox">
                                                <p class="sub_or_Bt1">베리떼</p>
                                                <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                                                <p class="sub_or_Bt3">내용량 150ml</p>
                                                <p class="sub_or_Bt4">50,120원 / 1개</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="sub_order_Binfo">
                                            <div class="sub_or_img">
                                                <img src="./images/sub_order1.png" alt="">
                                            </div>
                                            <div class="sub_order_Btbox">
                                                <p class="sub_or_Bt1">베리떼</p>
                                                <p class="sub_or_Bt2">[신일][스탠드2대]2019 NEW 신일 에어 서큘레이터 화이트1+1(SIF-PC50KMC)+보관파우치</p>
                                                <p class="sub_or_Bt3">내용량 150ml</p>
                                                <p class="sub_or_Bt4">50,120원 / 1개</p>
                                            </div>
                                        </div>
                                        <div class="sub_order_Bdeli">
                                            <h1>배송완료</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //sub_order_table -->
                            <div class="order_price_detail">
                                <h2>주문/결제 정보</h2>
                                <div class="opd_price">
                                    <ul>
                                        <li>
                                            <p>상품금액 <span>15,000 원</span></p>
                                        </li>
                                        <li>
                                            <p>배송비 <span>+ 3,000 원</span></p>
                                        </li>
                                        <li>
                                            <p>쿠폰할인 <span>- 5,000 원</span></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="opd_pay_method">
                                    <div class="opdpm_txt">
                                        <div class="opdpm_txt_price">
                                            <p>카드결제 <span>13,000 원</span></p>
                                        </div>
                                        <div class="opdpm_info">
                                            <h4>카드정보</h4> 
                                            <p>신용카드 <span>비씨(0000-****-****-****) 2개월 할부</span></p>
                                            <p>(2022.07.24 07:24)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opdp_total">
                                    <ul>
                                        <li>
                                            <p>주문금액</p>
                                            <span>13,000</span>
                                        </li>
                                        <li>
                                            <p>신용카드</p>
                                            <span>13,000</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="order_adress_detail">
                                <h2>배송지 정보</h2>
                                <ul>
                                    <li>
                                        <p>수령인</p>
                                        <span>홍길동</span>
                                    </li>
                                    <li>
                                        <p>연락처</p>
                                        <span>010-0000-0000</span>
                                    </li>
                                    <li>
                                        <p>배송지</p>
                                        <div class="oad_txt">
                                            <p>01234</p>
                                            <p>서울시 가나구 다라동 12-34 (가나동, 다라건물)</p>
                                            <p>24층</p>
                                        </div>
                                    </li>
                                    <li>
                                        <p>수령인</p>
                                        <span>홍길동</span>
                                    </li>
                                </ul>
                                <h2>주문자 정보</h2>
                                <ul>
                                    <li>
                                        <p>주문자명</p>
                                        <span>홍길동</span>
                                    </li>
                                    <li>
                                        <p>연락처</p>
                                        <span>010-0000-0000</span>
                                    </li>
                                    <li>
                                        <p>이메일</p>
                                        <span>hong****@naver.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- //sub_order_box -->


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mo_btn_nore" data-dismiss="modal">닫기</button>
                </div>
            </div>

        </div>
    </div>
    <!-- //주문상세 팝업 -->
</div>
    


<?php include "./lib/footer.php"; ?>