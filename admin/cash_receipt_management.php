<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 현금 영수증 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>약관</h2>
        <div class="r_pay-tbox r_pay_s">
            <p>
                <span>약관 동의</span><br>
                제 1조 (목적)<br>
                본 약관은 현금영수증사업자인 주식회사 한국사이버결제(이하“KCP”)가 제공하는 현금영수증 서비스를 현금영수증가맹점(이하 “가맹점”)이 이용함에 있어 KCP와 가맹점 간의 권리, 의무 및 책임사항을 규정함을 목적으로 한다.<br><br>

                제 2 조 (현금영수증서비스 이용계약의 성립)<br>
                현금영수증서비스 이용계약은 가맹점이 본 약관에 대하여 동의하고 KCP가 제공하는 현금영수증가맹점 신청양식에 해당정보를 기입한 후 현금영수증서비스 이용신청을 하고, KCP가 이를 승낙함으로써 성립한다.
            </p>
        </div>
        <button class="p_btn btn_default_two r_sbtn1">약관에 동의합니다</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>사업자 정보 등록</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">사업자 등록번호</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업장 명 (상호명)</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업자 대표자 성명</td>
                            <td>
                                <input type="text" class="r_supp_text" value="홍길동" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업장 주소</td>
                            <td>
                                <input type="text" class="r_supp_text" value="서울시 서울구 서울동 111-11" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업자 연락처</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업자 형태</td>
                            <td>
                                <input type="radio" id="cash_r1-1" value="" name="cash_r1" class="radio_style"><label for="cash_r1-1"><span></span> 일반 과세업자</label>
                                <input type="radio" id="cash_r1-2" value="" name="cash_r1" class="radio_style"><label for="cash_r1-2"><span></span> 일반 면세/간이 사업자</label>
                                <input type="radio" id="cash_r1-3" value="" name="cash_r1" class="radio_style"><label for="cash_r1-3"><span></span> 겸영 사업자 (과세+면세 동시취급)</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="class_list cover_box">
        <h2>현금 영수증 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">의무 발행</td>
                            <td>
                                <input type="radio" id="cash_r2-1" value="" name="cash_r2" class="radio_style"><label for="cash_r2-1"><span></span> 사용 안함</label>
                                <input type="radio" id="cash_r2-2" value="" name="cash_r2" class="radio_style"><label for="cash_r2-2"><span></span> 사용함</label>
                                <input type="radio" id="cash_r2-3" value="" name="cash_r2" class="radio_style"><label for="cash_r2-3"><span></span> 조건부 사용</label> <input type="text" class="r_reg_text" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 방법</td>
                            <td>
                                <input type="radio" id="cash_r14-1" value="" name="cash_r14" class="radio_style"><label for="cash_r14-1"><span></span> 입금 확인 시 자동 발급</label>
                                <input type="radio" id="cash_r14-2" value="" name="cash_r14" class="radio_style"><label for="cash_r14-2"><span></span> 배송 완료 시 자동 발급</label>
                                <input type="radio" id="cash_r14-3" value="" name="cash_r14" class="radio_style"><label for="cash_r14-3"><span></span> 수동 발급</label>
                                <input type="radio" id="cash_r14-4" value="" name="cash_r14" class="radio_style"><label for="cash_r14-4"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">자동 발급</td>
                            <td>
                                <input type="text" class="r_reg_text">원 이상 자동발급
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">결제 페이지 발급 신청 버튼 여부</td>
                            <td>
                                <input type="radio" id="cash_r3-1" value="" name="cash_r3" class="radio_style"><label for="cash_r3-1"><span></span> 노출</label>
                                <input type="radio" id="cash_r3-2" value="" name="cash_r3" class="radio_style"><label for="cash_r3-2"><span></span> 미노출</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 정보 (휴대폰 번호)</td>
                            <td>
                                <input type="radio" id="cash_r4-1" value="" name="cash_r4" class="radio_style"><label for="cash_r4-1"><span></span> 노출</label>
                                <input type="radio" id="cash_r4-2" value="" name="cash_r4" class="radio_style"><label for="cash_r4-2"><span></span> 미노출</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>현금 영수증 개별 발급</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">발급 방법</td>
                            <td>
                                <input type="radio" id="cash_r5-1" value="" name="cash_r5" class="radio_style"><label for="cash_r5-1"><span></span> 개별</label>
                                <input type="radio" id="cash_r5-2" value="" name="cash_r5" class="radio_style"><label for="cash_r5-2"><span></span> 일괄(CSV)</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문자 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">이메일 주소</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 가격</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 형태</td>
                            <td>
                                <input type="radio" id="cash_r6-1" value="" name="cash_r6" class="radio_style"><label for="cash_r6-1"><span></span> 개인</label>
                                <input type="radio" id="cash_r6-2" value="" name="cash_r6" class="radio_style"><label for="cash_r6-2"><span></span> 사업자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">연락처</td>
                            <td>
                                <input type="radio" id="cash_r7-1" value="" name="cash_r7" class="radio_style"><label for="cash_r7-1"><span></span> 연락처</label>
                                <input type="radio" id="cash_r7-2" value="" name="cash_r7" class="radio_style"><label for="cash_r7-2"><span></span> 국세청 현금영수증 카드번호</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>현금 영수증 발급/조회 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">처리기준</td>
                            <td>
                                <input type="radio" id="cash_r8-1" value="" name="cash_r8" class="radio_style"><label for="cash_r8-1"><span></span> 전체</label>
                                <input type="radio" id="cash_r8-2" value="" name="cash_r8" class="radio_style"><label for="cash_r8-2"><span></span> 처리일자</label>
                                <input type="radio" id="cash_r8-3" value="" name="cash_r8" class="radio_style"><label for="cash_r8-3"><span></span> 주문일자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third">전체</button>
                                <button type="button" class="p_btn btn_default_third">어제</button>
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">이번 주</button>
                                <button type="button" class="p_btn btn_default_third">이번 달</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">입금여부</td>
                            <td>
                                <input type="radio" id="cash_r9-1" value="" name="cash_r9" class="radio_style"><label for="cash_r9-1"><span></span> 전체</label>
                                <input type="radio" id="cash_r9-2" value="" name="cash_r9" class="radio_style"><label for="cash_r9-2"><span></span> 입금</label>
                                <input type="radio" id="cash_r9-3" value="" name="cash_r9" class="radio_style"><label for="cash_r9-3"><span></span> 미입금</label>
                                <input type="radio" id="cash_r9-4" value="" name="cash_r9" class="radio_style"><label for="cash_r9-4"><span></span> 환불</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 상태</td>
                            <td>
                                <input type="radio" id="cash_r10-1" value="" name="cash_r10" class="radio_style"><label for="cash_r10-1"><span></span> 전체</label>
                                <input type="radio" id="cash_r10-2" value="" name="cash_r10" class="radio_style"><label for="cash_r10-2"><span></span> 상품 준비 중</label>
                                <input type="radio" id="cash_r10-3" value="" name="cash_r10" class="radio_style"><label for="cash_r10-3"><span></span> 배송 중</label>
                                <input type="radio" id="cash_r10-4" value="" name="cash_r10" class="radio_style"><label for="cash_r10-4"><span></span> 배송완료</label>
                                <input type="radio" id="cash_r10-5" value="" name="cash_r10" class="radio_style"><label for="cash_r10-5"><span></span> 교환완료</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">처리 상태</td>
                            <td>
                                <input type="radio" id="cash_r11-1" value="" name="cash_r11" class="radio_style"><label for="cash_r11-1"><span></span> 전체</label>
                                <input type="radio" id="cash_r11-2" value="" name="cash_r11" class="radio_style"><label for="cash_r11-2"><span></span> 발급요청</label>
                                <input type="radio" id="cash_r11-3" value="" name="cash_r11" class="radio_style"><label for="cash_r11-3"><span></span> 발급완료</label>
                                <input type="radio" id="cash_r11-4" value="" name="cash_r11" class="radio_style"><label for="cash_r11-4"><span></span> 발급취소</label>
                                <input type="radio" id="cash_r11-5" value="" name="cash_r11" class="radio_style"><label for="cash_r11-5"><span></span> 재발행</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 형태</td>
                            <td>
                                <input type="radio" id="cash_r12-1" value="" name="cash_r12" class="radio_style"><label for="cash_r12-1"><span></span> 전체</label>
                                <input type="radio" id="cash_r12-2" value="" name="cash_r12" class="radio_style"><label for="cash_r12-2"><span></span> 과세</label>
                                <input type="radio" id="cash_r12-3" value="" name="cash_r12" class="radio_style"><label for="cash_r12-3"><span></span> 면세</label>
                                <input type="radio" id="cash_r12-4" value="" name="cash_r12" class="radio_style"><label for="cash_r12-4"><span></span> 과세 + 면세</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 유형</td>
                            <td>
                                <input type="radio" id="cash_r13-1" value="" name="cash_r13" class="radio_style"><label for="cash_r13-1"><span></span> 주문서 발급</label>
                                <input type="radio" id="cash_r13-2" value="" name="cash_r13" class="radio_style"><label for="cash_r13-2"><span></span> 개별 발급</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>현금 영수증 발급 / 조회 리스트</h2>
        
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">
                <div class="fib_tit_b">
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
                            <td>신청일자</td>
                            <td>처리일자</td>
                            <td>주문인</td>
                            <td>금액</td>
                            <td>발급형태</td>
                            <td>처리상태</td>
                            <td>발급유형</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2019-08-20 14:34:08</td>
                            <td>2019-08-20 14:34:08</td>
                            <td>홍길동(회원)<br>000-0000-0000</td>
                            <td>123,456</td>
                            <td>과세</td>
                            <td>발급완료</td>
                            <td>주문서</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box">
            <button class="p_btn btn_default_one r_btn_two">삭제</button>
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