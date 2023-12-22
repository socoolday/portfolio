<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 기획전 등록하기</h1>
    
    <div class="input_form_2 cover_box">
    <h2>기본 정보</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit j_w220">기획전 / 프로모션 이름<span class="ret_t1"> (필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">진행 여부</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 진행</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 진행안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">유형</td>
                            <td>
                                <input type="radio" id="sel_3" value="" name="sel_2" class="radio_style"><label for="sel_3"><span></span> 기간 할인</label>
                                <input type="radio" id="sel_4" value="" name="sel_2" class="radio_style"><label for="sel_4"><span></span> 재구매 할인</label>
                                <input type="radio" id="sel_5" value="" name="sel_2" class="radio_style"><label for="sel_5"><span></span> 대량 구매 할인</label>
                                <input type="radio" id="sel_6" value="" name="sel_2" class="radio_style"><label for="sel_6"><span></span> 할인 회원</label>
                                <input type="radio" id="sel_7" value="" name="sel_2" class="radio_style"><label for="sel_7"><span></span> 신규상품 할인</label>
                                <input type="radio" id="sel_8" value="" name="sel_2" class="radio_style"><label for="sel_8"><span></span> 무료배송 할인</label>
                                <input type="radio" id="sel_9" value="" name="sel_2" class="radio_style"><label for="sel_9"><span></span> 기타</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!--  각 유형 선택 시 나타나게. -->
            <div class="table-responsive r_none">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit j_w220">신규 상품 할인</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">상품등록일</option>
                                    <option value="2">상품 최종 수정일</option>
                                    <option value="3">상품 최종 진열일</option>
                                </select>
                                로 부터 
                                <select name="" id="" class="fa_sel">
                                    <option value="1">24시간</option>
                                    <option value="2">1일</option>
                                    <option value="3">3일</option>
                                    <option value="4">7일</option>
                                    <option value="5">15일</option>
                                    <option value="6">30일</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">구매 수량</td>
                            <td>
                                동일한
                                <input type="radio" id="sel_10" value="" name="sel_3" class="radio_style"><label for="sel_10"><span></span> 상품</label>
                                <input type="radio" id="sel_11" value="" name="sel_3" class="radio_style"><label for="sel_11"><span></span> 품목</label>
                                을
                                <input type="text" class="fa_input" placeholder="0"> 개 이상 ~
                                <input type="text" class="fa_input" placeholder="0"> 개 미만 구매
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">구매 횟수<span class="ret_t1"> (필수)</span></td>
                            <td>
                                동일한
                                <input type="radio" id="sel_12" value="" name="sel_4" class="radio_style"><label for="sel_12"><span></span> 상품</label>
                                <input type="radio" id="sel_13" value="" name="sel_4" class="radio_style"><label for="sel_13"><span></span> 품목</label>
                                을
                                <input type="text" class="fa_input" placeholder="0"> 회 구매
                            </td>
                        </tr>
                        <!-- 기간 사용함 선택시 아래에 div가나와야함-->
                        <tr>
                            <td class="fa_tit">무료 배송 할인</td>
                            <td>
                                <input type="radio" id="sel_14" value="" name="sel_5" class="radio_style"><label for="sel_14"><span></span> 기간 사용함</label>
                                <input type="radio" id="sel_15" value="" name="sel_5" class="radio_style"><label for="sel_15"><span></span> 기간 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기간 사용 선택 시</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">3일</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">1개월</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <div class="input_form_2 cover_box">
    <h2>상세 정보</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <!-- 기간 사용함 선택시 아래에 div가나와야함-->
                        <tr>
                            <td class="fa_tit j_w220">기간 할인</td>
                            <td>
                                <input type="radio" id="sel_16" value="" name="sel_6" class="radio_style"><label for="sel_16"><span></span> 기간 사용함</label>
                                <input type="radio" id="sel_17" value="" name="sel_6" class="radio_style"><label for="sel_17"><span></span> 기간 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기간 사용 선택 시</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">3일</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">1개월</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">참여 대상</td>
                            <td>
                                <input type="radio" id="sel_18" value="" name="sel_7" class="radio_style"><label for="sel_18"><span></span> 회원+비회원</label>
                                <input type="radio" id="sel_19" value="" name="sel_7" class="radio_style"><label for="sel_19"><span></span> 회원</label>
                                <input type="radio" id="sel_20" value="" name="sel_7" class="radio_style"><label for="sel_20"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">참여 대상</td>
                            <td>
                                <input type="radio" id="sel_21" value="" name="sel_8" class="radio_style"><label for="sel_21"><span></span> 전체상품</label>
                                <!-- (특정상품 /제외상품 선택 시) 상품추가 버튼 -> 상품검색 창-->
                                <input type="radio" id="sel_22" value="" name="sel_8" class="radio_style"><label for="sel_22"><span></span> 특정상품</label>
                                <!-- (특정상품 /제외상품 선택 시) 상품추가 버튼 -> 상품검색 창-->
                                <input type="radio" id="sel_23" value="" name="sel_8" class="radio_style"><label for="sel_23"><span></span> 제외상품</label>
                                <!-- 상품분류 선택 시) 카테고리 분류 창 출력-->
                                <input type="radio" id="sel_24" value="" name="sel_8" class="radio_style"><label for="sel_24"><span></span> 상품분류</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
    <h2>혜택 정보</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit j_w220">지역별 배송비 포함 여부<span class="ret_t1"> (필수)</span></td>
                            <td>
                                <input type="radio" id="sel_25" value="" name="sel_9" class="radio_style"><label for="sel_25"><span></span> 포함</label>
                                <input type="radio" id="sel_26" value="" name="sel_9" class="radio_style"><label for="sel_26"><span></span> 미포함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰 사용 범위</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 사용제한</label>
                                <label><input type="checkbox" value="" class="check_style"> 사용가능</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사은품 제공 여부</td>
                            <td>
                                <input type="radio" id="sel_27" value="" name="sel_10" class="radio_style"><label for="sel_27"><span></span> 제공</label>
                                <input type="radio" id="sel_28" value="" name="sel_10" class="radio_style"><label for="sel_28"><span></span> 제공안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사은품 제공 결제 수단</td>
                            <td>
                                <input type="radio" id="sel_29" value="" name="sel_11" class="radio_style"><label for="sel_29"><span></span> 모든 결제</label>
                                <input type="radio" id="sel_30" value="" name="sel_11" class="radio_style"><label for="sel_30"><span></span> 무통장 입금</label>
                                <input type="radio" id="sel_31" value="" name="sel_11" class="radio_style"><label for="sel_31"><span></span> 카드 결제</label>
                                <input type="radio" id="sel_32" value="" name="sel_11" class="radio_style"><label for="sel_32"><span></span> 페이 결제</label>
                                <input type="radio" id="sel_33" value="" name="sel_11" class="radio_style"><label for="sel_33"><span></span> 무통장 입금을 제외한 모든 결제</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 전액 결제 시 사은품 제공 여부</td>
                            <td>
                                <input type="radio" id="sel_34" value="" name="sel_12" class="radio_style"><label for="sel_34"><span></span> 제공</label>
                                <input type="radio" id="sel_35" value="" name="sel_12" class="radio_style"><label for="sel_35"><span></span> 제공안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사은품 제공 방식</td>
                            <td>
                                <input type="radio" id="sel_36" value="" name="sel_13" class="radio_style"><label for="sel_36"><span></span> 총 주문금액 (할인 미적용 금액)</label>
                                <input type="radio" id="sel_37" value="" name="sel_13" class="radio_style"><label for="sel_37"><span></span> 실 결제금액 (쿠폰, 적립금 등 할인 수단이 포함된 할인액)</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송비 포함 여부</td>
                            <td>
                                <input type="radio" id="sel_38" value="" name="sel_14" class="radio_style"><label for="sel_38"><span></span> 배송비 포함</label>
                                <input type="radio" id="sel_39" value="" name="sel_14" class="radio_style"><label for="sel_39"><span></span> 배송비 미포함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사은품 품절 표시 여부</td>
                            <td>
                                <input type="radio" id="sel_40" value="" name="sel_15" class="radio_style"><label for="sel_40"><span></span> 표시 , 선택불가</label>
                                <input type="radio" id="sel_41" value="" name="sel_15" class="radio_style"><label for="sel_41"><span></span> 미표시</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">지급 형태</td>
                            <td>
                                <input type="radio" id="sel_42" value="" name="sel_16" class="radio_style"><label for="sel_42"><span></span> 원하는 것 선택 가능</label>
                                <input type="radio" id="sel_43" value="" name="sel_16" class="radio_style"><label for="sel_43"><span></span> 자동 지급</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">선택 단계</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 주문서 조회 시</label>
                                <label><input type="checkbox" value="" class="check_style"> 주문완료 조회 시</label>
                                <label><input type="checkbox" value="" class="check_style"> 주문 상세화면 조회 시</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">지급 수량</td>
                            <td>
                                <input type="radio" id="sel_44" value="" name="sel_17" class="radio_style"><label for="sel_44"><span></span> 1개</label>
                                <input type="radio" id="sel_45" value="" name="sel_17" class="radio_style"><label for="sel_45"><span></span> 구매 수량에 따라</label>
                            </td> 
                        </tr>
                        <tr>
                            <td class="fa_tit">사은품 상품 후기 작성 여부</td>
                            <td>
                                <input type="radio" id="sel_46" value="" name="sel_18" class="radio_style"><label for="sel_46"><span></span> 가능</label>
                                <input type="radio" id="sel_47" value="" name="sel_18" class="radio_style"><label for="sel_47"><span></span> 불가능</label>
                            </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
    <h2>이미지 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit j_w220">이미지 사용 여부</td>
                            <td>
                                <input type="radio" id="sel_48" value="" name="sel_19" class="radio_style"><label for="sel_48"><span></span> 사용</label>
                                <input type="radio" id="sel_49" value="" name="sel_19" class="radio_style"><label for="sel_49"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">리스트 썸네일 이미지</td>
                            <td>
                                <p class="tb_in_j_txt">jpg, png, gif만 등록 가능</p>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(1920X400)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(1920X400)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상세 페이지 이미지</td>
                            <td>
                                <p class="tb_in_j_txt">jpg, png, gif만 등록 가능</p>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(1920X @ )</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(1920X @ )</label>
                                    <input type="file" id="file">
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