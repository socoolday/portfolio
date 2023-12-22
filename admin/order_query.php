<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  전체 주문 조회</h1>

    <div class="r_list_box r_list_box2">
        <p>미입금 : <span>0</span> / 입금완료 : <span>0</span> / 상품준비중 : <span>0</span> / 배송중 : <span>0</span> / 배송완료 : <span>0</span></p>
    </div>
    
    <div class="class_list cover_box">
        <h2>전체 주문 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">주문</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문번호</option>
                                    <option value="2">주문자 명</option>
                                    <option value="3">주문자 연락처</option>
                                    <option value="3">수령인 명</option>
                                    <option value="3">수령인 연락처</option>
                                    <option value="3">입금자 명</option>
                                    <option value="3">아이디</option>
                                    <option value="3">송장번호</option>
                                    <option value="3">상품명</option>
                                    <option value="3">상품 입점사 명</option>
                                    <option value="3">상품코드</option>
                                    <option value="3">주문금액</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 처리 단계</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 입금대기</label>
                                <label><input type="checkbox" value="" class="check_style"> 입금완료</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송준비</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송 중</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송 완료</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 상태</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 취소</label>
                                <label><input type="checkbox" value="" class="check_style"> 환불</label>
                                <label><input type="checkbox" value="" class="check_style"> 반품</label>
                                <label><input type="checkbox" value="" class="check_style"> 교환</label>
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
                            <td class="fa_tit">결제수단</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>전체</option>
                                    <option value="2">무통장입금</option>
                                    <option value="3">무통장 + 적립금</option>
                                    <option value="3">무통장 + 예치금</option>
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
                                <input type="radio" id="ord_q1-1" value="" name="ord_q1" class="radio_style"><label for="ord_q1-1"><span></span> 전체</label>
                                <input type="radio" id="ord_q1-2" value="" name="ord_q1" class="radio_style"><label for="ord_q1-2"><span></span> 회원</label>
                                <input type="radio" id="ord_q1-3" value="" name="ord_q1" class="radio_style"><label for="ord_q1-3"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 디바이스</td>
                            <td>
                                <input type="radio" id="ord_q2-1" value="" name="ord_q2" class="radio_style"><label for="ord_q2-1"><span></span> PC</label>
                                <input type="radio" id="ord_q2-2" value="" name="ord_q2" class="radio_style"><label for="ord_q2-2"><span></span> 모바일</label>
                                <input type="radio" id="ord_q2-3" value="" name="ord_q2" class="radio_style"><label for="ord_q2-3"><span></span> 태블릿</label>
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
        <h2>배송업체 리스트</h2>
        
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>총 주문 금액 : <span>10,433,404</span> 원 (실 결제금액 : <span>3,543,324</span> 원 / 재 결제 대기 금액 : <span>352,654</span> 원)</p>
            </div>
            
            <div class="table-responsive form_info_b">
                <div class="fib_tit_b">
                    <button type="button" class="p_btn btn_default_third">인쇄</button>
                    <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
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
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>번호</td>
                            <td>주문일</td>
                            <td>상품명</td>
                            <td>주문번호</td>
                            <td>주문인</td>
                            <td>결제수단</td>
                            <td>결제금액</td>
                            <td>주문단계</td>
                            <td>취소여부</td>
                            <td>디바이스</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>입금대기</td>
                            <td></td>
                            <td>PC</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>취소</td>
                            <td>모바일</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>교환</td>
                            <td>PC</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>반품완료</td>
                            <td>태블릿</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>환불요청</td>
                            <td>모바일</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>환불</td>
                            <td>PC</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td></td>
                            <td>모바일</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td></td>
                            <td>PC</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td>반품완료</td>
                            <td>태블릿</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>티플레이트 화이트 블로썸… 외 3개</td>
                            <td>2019080146046574</td>
                            <td>홍길동(비회원)<br>010-0000-0000</td>
                            <td>무통장</td>
                            <td>123,874</td>
                            <td>결제완료</td>
                            <td></td>
                            <td>모바일</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box j_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two j_btn btn_default_two">배송지연 SMS 발송</button>
                <button class="p_btn r_btn_two j_btn btn_default_two">상품 준비중 SMS 발송</button>
            </div>
            <div class="r_btn_right">
                <button class="p_btn r_btn_two btn_default_two r_btn2">수정</button>
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




<?php include "./lib/footer.php"; ?>