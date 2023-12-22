<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 쿠폰 등록하기</h1>
    
    <div class="input_form_2 cover_box">
        <h2>쿠폰 기본 설정</h2>
       
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">쿠폰 사용 여부<span class="ret_t1"> (필수)</span></td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 사용</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰 사용 제한</td>
                            
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">주문서+상품별</option>
                                    <option value="2">주문서</option>
                                    <option value="3">상품별</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 동시 사용</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 사용제한</label>
                                <label><input type="checkbox" value="" class="check_style"> 사용가능</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">할인 동시 사용</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">쿠폰+회원등급</option>
                                    <option value="2">쿠폰</option>
                                    <option value="3">회원등급</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품/주문서 동시사용</td>
                            <td>
                                <input type="radio" id="sel_3" value="" name="sel_2" class="radio_style"><label for="sel_3"><span></span> 사용</label>
                                <input type="radio" id="sel_4" value="" name="sel_2" class="radio_style"><label for="sel_4"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" >쿠폰 복원 설정</td>
                            <td>
                                <p class="tb_in_j_txt">전체 취소/반품/교환 시</p>
                                <input type="radio" id="sel_5" value="" name="sel_3" class="radio_style"><label for="sel_5"><span></span> 취소 시 입금 전 (자동 복원 / 복원 안함 / 복원 여부 확인)</label>
                                <input type="radio" id="sel_6" value="" name="sel_3" class="radio_style"><label for="sel_6"><span></span> 취소 시 입금 후 (자동 복원 / 복원 안함 / 복원 여부 확인)</label>
                                <input type="radio" id="sel_7" value="" name="sel_3" class="radio_style"><label for="sel_7"><span></span> 반품 시 (자동 복원 / 복원 안함 / 복원 여부 확인)</label>
                                <input type="radio" id="sel_8" value="" name="sel_3" class="radio_style"><label for="sel_8"><span></span> 교환 시 (자동 복원 / 복원 안함 / 복원 여부 확인)</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit j_b0"></td>
                            <td>
                                <p class="tb_in_j_txt">부분 취소/반품/교환 시</p>
                                <input type="radio" id="sel_9" value="" name="sel_4" class="radio_style"><label for="sel_9"><span></span> 자동 복원</label>
                                <input type="radio" id="sel_10" value="" name="sel_4" class="radio_style"><label for="sel_10"><span></span> 복원 안함</label>
                                <input type="radio" id="sel_11" value="" name="sel_4" class="radio_style"><label for="sel_11"><span></span> 복원 여부 확인</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사용 제한</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 상품 당 상품 쿠폰</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 개
                                <label><input type="checkbox" value="" class="check_style"> 1회 주문 당 주문서 쿠폰 </label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 개
                                <label><input type="checkbox" value="" class="check_style"> 주문건 당 (주문서+상품쿠폰) </label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 개
                                <label><input type="checkbox" value="" class="check_style"> 1회 주문 당 상품 쿠폰 </label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 개
                                <label><input type="checkbox" value="" class="check_style"> 일간 (주문서+상품쿠폰) </label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 개
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
    <h2>쿠폰 상세 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">쿠폰 명<span class="ret_t1"> (필수)</span></td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰 설명</td>
                            <td>
                                <input type="text" class="fa_input w100_" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기간 선택</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">어제</button>
                                <button type="button" class="p_btn btn_default_third">당일</button>
                                <button type="button" class="p_btn btn_default_third">일주일</button>
                                <button type="button" class="p_btn btn_default_third">한달</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰혜택</td>
                            <td>
                                <input type="radio" id="sel_12" value="" name="sel_5" class="radio_style"><label for="sel_12"><span></span> 전체</label>
                                <input type="radio" id="sel_13" value="" name="sel_5" class="radio_style"><label for="sel_13"><span></span> 할인금액</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 원
                                <input type="radio" id="sel_14" value="" name="sel_5" class="radio_style"><label for="sel_14"><span></span> 할인율</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> % / 
                                최대금액 <input type="text" class="fa_input j_w60" placeholder="0"> 원
                                <input type="radio" id="sel_15" value="" name="sel_5" class="radio_style"><label for="sel_15"><span></span> 적립금액</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 원
                                <input type="radio" id="sel_16" value="" name="sel_5" class="radio_style"><label for="sel_16"><span></span> 적립률</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> % / 
                                최대금액 <input type="text" class="fa_input j_w60" placeholder="0"> 원
                                <input type="radio" id="sel_17" value="" name="sel_5" class="radio_style"><label for="sel_17"><span></span> 무료배송 포함</label>
                                <input type="radio" id="sel_18" value="" name="sel_5" class="radio_style"><label for="sel_18"><span></span> 무료배송 미포함</label>
                                <input type="radio" id="sel_19" value="" name="sel_5" class="radio_style"><label for="sel_19"><span></span> 해외 무료배송 포함</label>
                                <input type="radio" id="sel_20" value="" name="sel_5" class="radio_style"><label for="sel_20"><span></span> 해외 무료배송 미포함</label>
                                <input type="radio" id="sel_21" value="" name="sel_5" class="radio_style"><label for="sel_21"><span></span> 즉시 적립</label>
                                <input type="text" class="fa_input j_w60" placeholder="0"> 원
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 구분</td>
                            <td>
                                <input type="radio" id="sel_22" value="" name="sel_6" class="radio_style"><label for="sel_22"><span></span> 전체</label>
                                <input type="radio" id="sel_23" value="" name="sel_6" class="radio_style"><label for="sel_23"><span></span> 회원</label>
                                <input type="radio" id="sel_24" value="" name="sel_6" class="radio_style"><label for="sel_24"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <!-- 지정 시점 선택시 cou_reg_box 나타나게 -->
                        <tr>
                            <td class="fa_tit">발급 시점</td>
                            <td>
                                <input type="radio" id="sel_25" value="" name="sel_7" class="radio_style"><label for="sel_25"><span></span> 즉시</label>
                                <input type="radio" id="sel_26" value="" name="sel_7" class="radio_style"><label for="sel_26"><span></span> 지정 시점</label>
                                
                                <div class="cou_reg_box r_none">
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">2019</option>
                                        <option value="2">2018</option>
                                        <option value="3">2017</option>
                                        <option value="3">2016</option>
                                        <option value="3">2015</option>
                                        <option value="3">2014</option>
                                        <option value="3">2013</option>
                                        <option value="3">2012</option>
                                        <option value="3">2011</option>
                                        <option value="3">2010</option>
                                    </select> 년
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                        <option value="3">6</option>
                                        <option value="3">7</option>
                                        <option value="3">8</option>
                                        <option value="3">9</option>
                                        <option value="3">10</option>
                                        <option value="3">11</option>
                                        <option value="3">12</option>
                                    </select> 월
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                        <option value="3">6</option>
                                        <option value="3">7</option>
                                        <option value="3">8</option>
                                        <option value="3">9</option>
                                        <option value="3">10</option>
                                        <option value="3">11</option>
                                        <option value="3">12</option>
                                    </select> 일
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                        <option value="3">6</option>
                                        <option value="3">7</option>
                                        <option value="3">8</option>
                                        <option value="3">9</option>
                                        <option value="3">10</option>
                                        <option value="3">11</option>
                                        <option value="3">12</option>
                                    </select> 시
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                        <option value="3">6</option>
                                        <option value="3">7</option>
                                        <option value="3">8</option>
                                        <option value="3">9</option>
                                        <option value="3">10</option>
                                        <option value="3">11</option>
                                        <option value="3">12</option>
                                    </select> 분
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="j_btn_group">
        <button class="p_btn btn_default_two">확인</button>
        <button class="p_btn btn_default_one">취소</button>
    </div>
</div>




<?php include "./lib/footer.php"; ?>