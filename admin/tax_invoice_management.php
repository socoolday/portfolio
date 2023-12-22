<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box r_tax">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 세금 계산서 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>세금 계산서란?</h2>
        <div class="r_pay-tbox">
            <p>
                사업자가 물품 등을 판매할 시 구매자로부터 부가가치세를 징수하였다는 사실을 증명하기 위해 작성하는 문서입니다. 이는 공급자(판매자)에게 매출세액 증빙자료로 활용되며, 공급받는 자(구매자)에게는 매입세액을 계산할 때 증빙자료로 활용됩니다.
            </p>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>세금 계산서 발행 통계</h2>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b"> 
                
                <table class="table">
                    <tr>
                        <td class="tax_t_top">종류</td>
                        <td class="tax_t_top">발행 수</td>
                        <td class="tax_t_top">공급가액</td>
                        <td class="tax_t_top">업체 수</td>
                        <td class="tax_t_top">세액</td>
                        <td class="tax_t_top">총액</td>
                        <td class="tax_t_top">미처리</td>
                        <td>0건</td>
                    </tr>
                    <tr class="tax_t_bot">
                        <td rowspan="3">일반세금계산서</td>
                        <td rowspan="3">2</td>
                        <td rowspan="3">0원</td>
                        <td rowspan="3">4</td>
                        <td rowspan="3">0원</td>
                        <td rowspan="3">0원</td>
                    </tr>
                    <tr>
                        <td class="tax_t_top">미발행</td>
                        <td>0건</td>
                    </tr>
                    <tr>
                        <td class="tax_t_top">발행 완료</td>
                        <td>0건</td>
                    </tr>
                </table>                
            </div>
        </div>
    </div>
    
    <div class="class_list cover_box">
        <h2>세금 계산서 발행 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">발행 기능 설정</td>
                            <td>
                                <input type="radio" id="tax1-1" value="" name="tax1" class="radio_style"><label for="tax1-1"><span></span> 일반</label>
                                <input type="radio" id="tax1-2" value="" name="tax1" class="radio_style"><label for="tax1-2"><span></span> 전자</label>
                                <input type="radio" id="tax1-3" value="" name="tax1" class="radio_style"><label for="tax1-3"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발행 방법</td>
                            <td>
                                <input type="radio" id="tax2-1" value="" name="tax2" class="radio_style"><label for="tax2-1"><span></span> 결제 완료</label>
                                <input type="radio" id="tax2-2" value="" name="tax2" class="radio_style"><label for="tax2-2"><span></span> 배송 완료</label>
                                <input type="radio" id="tax2-3" value="" name="tax2" class="radio_style"><label for="tax2-3"><span></span> 주문 완료</label>
                                <input type="radio" id="tax2-4" value="" name="tax2" class="radio_style"><label for="taxr2-4"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">공급가액 계산 시 소수점 이하 처리 기준</td>
                            <td>
                                <input type="radio" id="tax3-1" value="" name="tax3" class="radio_style"><label for="tax3-1"><span></span> 소수점 이하 절사</label>
                                <input type="radio" id="tax3-2" value="" name="tax3" class="radio_style"><label for="tax3-2"><span></span> 소수점 한자리 반올림</label>
                                <input type="radio" id="tax3-3" value="" name="tax3" class="radio_style"><label for="tax3-3"><span></span> 소수점 이하 올림</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">보기 설정</td>
                            <td>
                                <input type="radio" id="tax4-1" value="" name="tax4" class="radio_style"><label for="tax4-1"><span></span> 인쇄 버튼 노출</label>
                                <input type="radio" id="tax4-2" value="" name="tax4" class="radio_style"><label for="tax4-2"><span></span> 인쇄 버튼 미노출</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">신청 기한</td>
                            <td>
                                <input type="radio" id="tax5-1" value="" name="tax5" class="radio_style"><label for="tax5-1"><span></span> 입금일 기준 익월 10일까지</label>
                                <input type="radio" id="tax5-2" value="" name="tax5" class="radio_style"><label for="tax5-2"><span></span> 제한 없음</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">인감 이미지</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일선택</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>세금 계산서 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">발행 유형</td>
                            <td>
                                <input type="radio" id="tax6-1" value="" name="tax6" class="radio_style"><label for="tax6-1"><span></span> 전체</label>
                                <input type="radio" id="tax6-2" value="" name="tax6" class="radio_style"><label for="tax6-2"><span></span> 일반 세금 계산서</label>
                                <input type="radio" id="tax6-3" value="" name="tax6" class="radio_style"><label for="tax6-3"><span></span> 전자 세금 계산서</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발행일</td>
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
                            <td class="fa_tit">상호</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업자 등록번호</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발행 상태</td>
                            <td>
                                <input type="radio" id="tax7-1" value="" name="tax7" class="radio_style"><label for="tax7-1"><span></span> 전체</label>
                                <input type="radio" id="tax7-2" value="" name="tax7" class="radio_style"><label for="tax7-2"><span></span> 발행요청</label>
                                <input type="radio" id="tax7-3" value="" name="tax7" class="radio_style"><label for="tax7-3"><span></span> 접수완료</label>
                                <input type="radio" id="tax7-4" value="" name="tax7" class="radio_style"><label for="tax7-4"><span></span> 발행완료</label>
                                <input type="radio" id="tax7-5" value="" name="tax7" class="radio_style"><label for="tax7-5"><span></span> 발행취소</label>
                                <input type="radio" id="tax7-6" value="" name="tax7" class="radio_style"><label for="tax7-6"><span></span> 발행거부</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>세금 계산서 리스트</h2>
        
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        
        <div class="r_list_box">
            <p>검색 결과 총 발행 금액 : <span>456,654,000</span> 원</p>
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
                            <td>발행번호</td>
                            <td>발행일</td>
                            <td>세금등급</td>
                            <td>공급가액</td>
                            <td>세액</td>
                            <td>상호</td>
                            <td>사업자번호</td>
                            <td>신청일</td>
                            <td>처리일</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10" class="tax_t_2">데이터가 없습니다.</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box j_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two j_btn btn_default_two">발행 내역 다운로드</button>
            </div>
            <div class="r_btn_right">
                <button class="p_btn r_btn_two btn_default_two r_btn2" data-toggle="modal" data-target="#myModal">발행하기</button>
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



<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">세금 계산서 발행</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>신청자 정보 (공급받는 자)</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">신청자 명 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">신청자 연락처 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">신청자 이메일 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">사업장 소재지</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">업태</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">종목</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">품목, 공급가</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="class_list cover_box">
                <h2>사업자 정보 (공급자)</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">사업자 등록번호 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">상호 (법인 명) <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">대표자 명 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">사업장 주소</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">업태</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">종목</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="class_list cover_box">
                <h2>기타 정보</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">발행 시점 일자</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">부가세</td>
                                    <td>
                                        <input type="radio" id="tax8-1" value="" name="tax8" class="radio_style"><label for="tax8-1"><span></span> 없음</label>
                                        <input type="radio" id="tax8-2" value="" name="tax8" class="radio_style"><label for="tax8-2"><span></span> 별도</label>
                                        <input type="radio" id="tax8-3" value="" name="tax8" class="radio_style"><label for="tax8-3"><span></span> 포함</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">수금</td>
                                    <td>
                                        <input type="radio" id="tax9-1" value="" name="tax9" class="radio_style"><label for="tax9-1"><span></span> 청구</label>
                                        <input type="radio" id="tax9-2" value="" name="tax9" class="radio_style"><label for="tax9-2"><span></span> 영수</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">상품정보</td>
                                    <td>
                                        <div class="form_ad">
                                            <div class="table-responsive form_info_b">
                                                <table class="table">
                                                    <tr>
                                                        <td class="tax_t_top">상품명</td>
                                                        <td>테스트 테스트 테스트 테스트</td>
                                                        <td rowspan="2">
                                                            <button class="p_btn btn_default_two btn_center r_btn2">추가</button>
                                                            <button class="p_btn btn_default_one btn_center">삭제</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tax_t_top">상품가</td>
                                                        <td></td>
                                                    </tr>
                                                </table>                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">발행하기</button>
        </div>
    </div>

    </div>
</div>



<?php include "./lib/footer.php"; ?>