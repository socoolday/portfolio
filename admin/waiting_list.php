<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box r_wait">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  입금 대기 리스트</h1>
    
    <div class="class_list cover_box">
        <h2>입금 대기 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">주문</td>
                            <td>
                                <input type="radio" id="wait1-1" value="" name="wait1" class="radio_style"><label for="wait1-1"><span></span> 주문번호</label>
                                <input type="radio" id="wait1-2" value="" name="wait1" class="radio_style"><label for="wait1-2"><span></span> 주문자 명</label>
                                <input type="radio" id="wait1-3" value="" name="wait1" class="radio_style"><label for="wait1-3"><span></span> 주문자 연락처</label>
                                <input type="radio" id="wait1-4" value="" name="wait1" class="radio_style"><label for="wait1-4"><span></span> 수령인 명</label>
                                <input type="radio" id="wait1-5" value="" name="wait1" class="radio_style"><label for="wait1-5"><span></span> 수령인 연락처</label>
                                <input type="radio" id="wait1-6" value="" name="wait1" class="radio_style"><label for="wait1-6"><span></span> 입금자 명</label>
                                <input type="radio" id="wait1-7" value="" name="wait1" class="radio_style"><label for="inv1-5"><span></span> 아이디</label>
                                <input type="radio" id="wait1-7" value="" name="wait1" class="radio_style"><label for="inv1-5"><span></span> 송장번호</label>
                                <input type="radio" id="wait1-8" value="" name="wait1" class="radio_style"><label for="wait1-8"><span></span> 상품명</label>
                                <input type="radio" id="wait1-9" value="" name="wait1" class="radio_style"><label for="wait1-9"><span></span> 상품 입점사 명</label>
                                <input type="radio" id="wait1-10" value="" name="wait1" class="radio_style"><label for="wait1-10"><span></span> 상품코드</label>
                                <input type="radio" id="wait1-11" value="" name="wait1" class="radio_style"><label for="wait1-11"><span></span> 주문금액</label>
                            </td>
                        </tr>
                       <tr>
                            <td class="fa_tit">주문 날짜</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문일</option>
                                    <option value="2">입금일</option>
                                    <option value="3">배송완료일</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">결제 수단</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>전체</option>
                                    <option value="2">무통장입금</option>
                                    <option value="3">무통장 + 적립금</option>
                                    <option value="3">무통장 + 적립금 + 예치금</option>
                                    <option value="3">신용카드</option>
                                    <option value="3">신용카드 + 적립금</option>
                                    <option value="3">신용카드 + 예치금</option>
                                    <option value="3">신용카드 + 적립금 + 예치금</option>
                                    <option value="3">간편결제</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 구분</td>
                            <td>
                                <input type="radio" id="wait2-1" value="" name="wait2" class="radio_style"><label for="wait2-1"><span></span> 전체</label>
                                <input type="radio" id="wait2-2" value="" name="wait2" class="radio_style"><label for="wait2-2"><span></span> 회원</label>
                                <input type="radio" id="wait2-3" value="" name="wait2" class="radio_style"><label for="wait2-3"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 디바이스</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> PC</label>
                                <label><input type="checkbox" value="" class="check_style"> 모바일</label>
                                <label><input type="checkbox" value="" class="check_style"> 태블릿</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송지 주소</td>
                            <td>
                                <input type="radio" id="wait3-1" value="" name="wait3" class="radio_style"><label for="wait3-1"><span></span> 도로명 주소</label>
                                <input type="radio" id="wait3-2" value="" name="wait3" class="radio_style"><label for="wait3-2"><span></span> 지번 주소</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송 구분</td>
                            <td>
                                <input type="radio" id="wait4-1" value="" name="wait4" class="radio_style"><label for="wait4-1"><span></span> 전체</label>
                                <input type="radio" id="wait4-2" value="" name="wait4" class="radio_style"><label for="wait4-2"><span></span> 국내배송</label>
                                <input type="radio" id="wait4-3" value="" name="wait4" class="radio_style"><label for="wait4-3"><span></span> 해외배송</label>
                                <input type="radio" id="wait4-4" value="" name="wait4" class="radio_style"><label for="wait4-4"><span></span> 픽업</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>입금 대기 리스트</h2>
        <div class="sup_list">
            <p>게시글 총 <span>100건</span></p>
        </div>
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content j_btn_box">
                    <ul class="nav j_nav-pills">
                        <li class="active"><a data-toggle="pill" href="#tabca">입금 대기</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">입금 완료</a></li>
                    </ul>
                    <div id="tabca" class="tab-pane fade active in">
                        <div class="r_list_box">
                            <p>입금 대기 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
                                <select name="" id="" class="fa_sel r_select">
                                    <option value="1">10개</option>
                                    <option value="2">30개</option>
                                    <option value="3">50개</option>
                                    <option value="3">100개</option>
                                </select>
                            </div>       
                            <table class="table">
                            <thead>
                                <tr>
                                    <th><label><input type="checkbox" value="" class="check_style"></label></th>
                                    <th>번호</th>
                                    <th>주문일</th>
                                    <th>상품명</th>
                                    <th>주문번호</th>
                                    <th>주문인</th>
                                    <th>결제수단</th>
                                    <th>결제금액</th>
                                    <th>입금은행</th>
                                    <th>입금상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[티플레이트] 화이트 블로썸… 외 3개</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[입생로랑] 올아워 쿠션 파운데이션</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>기업은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[입생로랑] 베르니 아 레브르 워터 스테인</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>우리은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[라우쉬] 콜츠푸트 안티-댄드러프 샴푸… 외 2개</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>신한은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[어반디케이] 네이키드 팔레트 2, 3, 체리, 히트 세트 (멀티 아이섀도우 브러쉬 증정)</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>가상계좌</td>
                                    <td>123,856</td>
                                    <td>하나은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[러브캣비쥬(주얼리)] 화이트스톤 미니멀 14k 귀걸이 BIFED022CY4P00</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장/쿠폰</td>
                                    <td>123,856</td>
                                    <td>농협</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[스와로브스키(주얼리)] Grapefruit Hexagon 이어링 5385441</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[어반디케이] 네이키드 팔레트 2, 3, 체리, 히트 세트 (멀티 아이섀도우 브러쉬 증정)</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>가상계좌</td>
                                    <td>123,856</td>
                                    <td>하나은행</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[러브캣비쥬(주얼리)] 화이트스톤 미니멀 14k 귀걸이 BIFED022CY4P00</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장/쿠폰</td>
                                    <td>123,856</td>
                                    <td>농협</td>
                                    <td>입금대기</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[스와로브스키(주얼리)] Grapefruit Hexagon 이어링 5385441</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금대기</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송지연 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">상품 준비중 SMS 발송</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn r_btn_two j_btn btn_default_two">입금확인</button>
                                <button class="p_btn r_btn_two btn_default_one">삭제</button>
                            </div>
                        </div>
                        <div class="pagenation_b r_pagenat">
                            <div class="page_n_1">
                                <ul>
                                    <li><a href=""><i class="fas fa-angle-double-left"></i></a></li>
                                    <li><a href=""><i class="fas fa-chevron-left"></i></a></li>
                                    <li><a href="" class="active">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5</a></li>
                                    <li><a href="">6</a></li>
                                    <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tabcb" class="tab-pane fade">
                        <div class="r_list_box">
                            <p>입금 완료 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
                                <select name="" id="" class="fa_sel r_select">
                                    <option value="1">10개</option>
                                    <option value="2">30개</option>
                                    <option value="3">50개</option>
                                    <option value="3">100개</option>
                                </select>
                            </div>       
                            <table class="table">
                            <thead>
                                <tr>
                                    <th><label><input type="checkbox" value="" class="check_style"></label></th>
                                    <th>번호</th>
                                    <th>주문일</th>
                                    <th>상품명</th>
                                    <th>주문번호</th>
                                    <th>주문인</th>
                                    <th>결제수단</th>
                                    <th>결제금액</th>
                                    <th>입금은행</th>
                                    <th>입금상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[티플레이트] 화이트 블로썸… 외 3개</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[입생로랑] 올아워 쿠션 파운데이션</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>기업은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[입생로랑] 베르니 아 레브르 워터 스테인</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>우리은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[라우쉬] 콜츠푸트 안티-댄드러프 샴푸… 외 2개</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장</td>
                                    <td>123,856</td>
                                    <td>신한은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[어반디케이] 네이키드 팔레트 2, 3, 체리, 히트 세트 (멀티 아이섀도우 브러쉬 증정)</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>가상계좌</td>
                                    <td>123,856</td>
                                    <td>하나은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[러브캣비쥬(주얼리)] 화이트스톤 미니멀 14k 귀걸이 BIFED022CY4P00</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장/쿠폰</td>
                                    <td>123,856</td>
                                    <td>농협</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[스와로브스키(주얼리)] Grapefruit Hexagon 이어링 5385441</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[어반디케이] 네이키드 팔레트 2, 3, 체리, 히트 세트 (멀티 아이섀도우 브러쉬 증정)</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>가상계좌</td>
                                    <td>123,856</td>
                                    <td>하나은행</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[러브캣비쥬(주얼리)] 화이트스톤 미니멀 14k 귀걸이 BIFED022CY4P00</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무통장/쿠폰</td>
                                    <td>123,856</td>
                                    <td>농협</td>
                                    <td>입금완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>2019-08-20 14:34:08</td>
                                    <td>[스와로브스키(주얼리)] Grapefruit Hexagon 이어링 5385441</td>
                                    <td>201908014684651457</td>
                                    <td>홍길동(회원)<br>010-0000-0000</td>
                                    <td>무</td>
                                    <td>123,856</td>
                                    <td>국민은행</td>
                                    <td>입금완료</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송지연 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">상품 준비중 SMS 발송</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn r_btn_two btn_default_one">삭제</button>
                            </div>
                        </div>
                        <div class="pagenation_b r_pagenat">
                            <div class="page_n_1">
                                <ul>
                                    <li><a href=""><i class="fas fa-angle-double-left"></i></a></li>
                                    <li><a href=""><i class="fas fa-chevron-left"></i></a></li>
                                    <li><a href="" class="active">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5</a></li>
                                    <li><a href="">6</a></li>
                                    <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>