<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(7)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  월간 매출</h1>
    
    <div class="input_form_2 cover_box">
        <h2>매출 검색</h2>
       
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">이번 달</button>
                                <button type="button" class="p_btn btn_default_third">한달 전</button>
                                <button type="button" class="p_btn btn_default_third">두달 전</button>
                                <button type="button" class="p_btn btn_default_third">세달 전</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기준 일자</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 주문일</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 입금일</label>
                                <input type="radio" id="sel_4" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 배송일</label>
                                <input type="radio" id="sel_5" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 배송 완료일</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 기준</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 미입금</label>
                                <label><input type="checkbox" value="" class="check_style"> 입금완료</label>
                                <label><input type="checkbox" value="" class="check_style"> 상품 준비 중</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송 중</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송 완료</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">결제 수단</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 신용카드</label>
                                <label><input type="checkbox" value="" class="check_style"> 무통장 입금</label>
                                <label><input type="checkbox" value="" class="check_style"> 가상계좌</label>
                                <label><input type="checkbox" value="" class="check_style"> 휴대폰</label>
                                <label><input type="checkbox" value="" class="check_style"> 현금</label><br>
                                페이 (<label><input type="checkbox" value="" class="check_style"> 카카오페이</label> 
                                <label><input type="checkbox" value="" class="check_style"> Paypal</label>
                                <label><input type="checkbox" value="" class="check_style"> Wechat</label>
                                <label><input type="checkbox" value="" class="check_style"> 토스</label>
                                <label><input type="checkbox" value="" class="check_style"> Smile pay</label>
                                <label><input type="checkbox" value="" class="check_style"> Lpay</label>
                                )
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    
    <div class="input_form_2 cover_box">
        <h2>2019년 0개월 차 매출</h2>
        
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
                            <th rowspan="2" class="tod_th1">구분</th>
                            <th colspan="2" class="tod_th1">주문</th>
                            <th colspan="2" class="tod_th1">미입금</th>
                            <th colspan="7" class="tod_th1">결제</th>
                            <th colspan="2">취소</th>
                            <th rowspan="2"  class="tod_th2">반품/교환</th>
                        </tr>
                        <tr>
                            <th>건수</th>
                            <th class="tod_th1">주문금액</th>
                            <th>건수</th>
                            <th class="tod_th1">주문금액</th>
                            <th>배송비</th>
                            <th>할인가</th>
                            <th>쿠폰</th>
                            <th>적립금</th>
                            <th>예치금</th>
                            <th>부분취소</th>
                            <th class="tod_th1">실결제금액</th>
                            <th>입금전취소</th>
                            <th>배송전취소</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tod_td1">PC</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="tod_td1">모바일</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="tod_td1">앱</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="tod_tr1">
                            <td>합계</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <div class="chart_form cover_box">
        <h2>2019년 0개월 차 매출 - 그래프</h2>
        <div class="chart_f_b">
            <!--div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div-->
            <div id="chartContainer_line" style="height: 500px; width: 100%; margin: 0px auto;"></div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>