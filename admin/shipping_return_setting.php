<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 배송/반품 설정</h1>
    
    <div class="input_form_2 cover_box r_ret">
        <h2>기본 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배송방법 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">택배</option>
                                    <option value="2">빠른등기</option>
                                    <option value="3">직접배송</option>
                                    <option value="4">화물배송</option>
                                    <option value="5">퀵배송</option>
                                    <option value="6">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">국내/해외 설정</td>
                            <td>
                                <input type="radio" id="ship_re1-1" value="" name="ship_re1" class="radio_style"><label for="ship_re1-1"><span></span> 국내배송</label>
                                <input type="radio" id="ship_re1-2" value="" name="ship_re1" class="radio_style"><label for="ship_re1-2"><span></span> 해외배송</label>
                                <input type="radio" id="ship_re1-3" value="" name="ship_re1" class="radio_style"><label for="ship_re1-3"><span></span> 국내/해외배송</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송지역</td>
                            <td><input type="text" class="fa_input" placeholder="전국지역"> 에 배송가능 </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송기간 <span class="ret_t1">(필수)</span></td>
                            <td>최대 <input type="text" class="fa_input"> 일 소요</td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송비</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">무료</option>
                                    <option value="2">고정 배송비</option>
                                    <option value="2">구매 금액별 차등 배송료</option>
                                    <option value="2">구매 금액에 따른 부과</option>
                                </select>
                                
                                <div class="table-responsive in-table r_ship_list">          
                                    <table class="table">
                                        <tbody>
                                             <!-- select박스에서 고정 배송비 선택 시 하단 tr(고정 배송비) 나타나게. -->
                                            <tr>
                                                <td class="fa_tit">고정 배송비</td>
                                                <td>
                                                    <div class="ret_deli1">
                                                        배송비 설정 <input type="text">원
                                                    </div>
                                                    <div class="ret_deli1">
                                                        선결제 설정 <input type="radio" id="ship_re2-1" value="" name="ship_re2" class="radio_style"><label for="ship_re2-1"><span></span> 국내배송</label>
                                                        <input type="radio" id="ship_re2-2" value="" name="ship_re2" class="radio_style"><label for="ship_re2-2"><span></span> 국내배송</label>
                                                        <input type="radio" id="ship_re2-3" value="" name="ship_re2" class="radio_style"><label for="ship_re2-3"><span></span> 국내배송</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- select박스에서 구매 금액별 차등 배송료 선택 시 하단 tr(구매 금액별 차등) 나타나게. -->
                                            <tr>
                                                <td class="fa_tit">구매 금액별 차등</td>
                                                <td>
                                                    <div class="ret_deli1">
                                                        배송비 설정 <input type="text"> 원 이상 <input type="text"> 원 미만일 때 배송비 <input type="text"> 원 부과
                                                    </div>
                                                    <div class="ret_deli1">
                                                        선결제 설정 <input type="radio" id="ship_re3-1" value="" name="ship_re3" class="radio_style"><label for="ship_re3-1"><span></span> 착불</label>
                                                        <input type="radio" id="ship_re3-2" value="" name="ship_re3" class="radio_style"><label for="ship_re3-2"><span></span> 선결제</label>
                                                        <input type="radio" id="ship_re3-3" value="" name="ship_re3" class="radio_style"><label for="ship_re3-3"><span></span> 착불+선결제</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- select박스에서 구매 금액에 따른 부과 선택 시 하단 tr(구매 금액) 나타나게. -->
                                            <tr>
                                                <td class="fa_tit">구매 금액</td>
                                                <td>
                                                    <div class="ret_deli1">
                                                        배송비 설정 <input type="text"> 원 미만일 때 배송비 <input type="text"> 원 부과
                                                    </div>
                                                    <div class="ret_deli1">
                                                        선결제 설정 <input type="radio" id="ship_re4-1" value="" name="ship_re4" class="radio_style"><label for="ship_re4-1"><span></span> 착불</label>
                                                        <input type="radio" id="ship_re4-2" value="" name="ship_re4" class="radio_style"><label for="ship_re4-2"><span></span> 선결제</label>
                                                        <input type="radio" id="ship_re4-3" value="" name="ship_re4" class="radio_style"><label for="ship_re4-3"><span></span> 착불+선결제</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
        <h2>배송 추가 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배송추가 설명</td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10">ex) 산간벽지나 도서지방은 별도의 추가금액을 지불하셔야 하는 경우가 있습니다.</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
        <h2>취소·교환·반품 신청 시 배송비안내 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">취소/교환/접수 신청 시 배송비 안내 설명</td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10">ex) 취소/교환/반품하시는 상품 및 신청사유에 따라 배송비 환불 또는 추가 배송비가 발생할 수 있습니다. 배송비는 쇼핑몰 정책에 따라 책정됩니다.</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="input_form_2 cover_box">
        <h2>반품 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">반품 주소지 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="fa_input" placeholder="우편번호">
                                <select name="" id="" class="fa_sel">
                                    <option value="1">한국</option>
                                    <option value="2">미국</option>
                                    <option value="3">중국</option>
                                    <option value="4">일본</option>
                                    <option value="5">기타</option>
                                </select>
                                <button type="button" class="p_btn btn_default_third">주소검색</button><br/>
                                <input type="text" class="fa_input w100_" placeholder=""><br/>
                                <input type="text" class="fa_input w100_" placeholder="상세 주소">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">공급사별 반품 주소지 설정</td>
                            <td>
                                <input type="radio" id="ship_re5-1" value="" name="ship_re5" class="radio_style"><label for="ship_re5-1"><span></span> 사용함</label>
                                <input type="radio" id="ship_re5-2" value="" name="ship_re5" class="radio_style"><label for="ship_re5-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button class="p_btn btn_default_two btn_center">저장하기</button>

</div>
<?php include "./lib/footer.php"; ?>