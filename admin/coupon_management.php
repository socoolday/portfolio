<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 쿠폰 관리하기</h1>
    
    <div class="input_form_2 cover_box">
        <h2>쿠폰 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간 검색</td>
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
                            <td class="fa_tit">쿠폰 명</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰 혜택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">할인금액</option>
                                    <option value="3">할인율</option>
                                    <option value="4">적립금액</option>
                                    <option value="5">적립률</option>
                                    <option value="6">무료배송</option>
                                    <option value="7">즉시 적립</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발급 유형</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">대상자 지정</option>
                                    <option value="3">조건부</option>
                                    <option value="4">고객 직접 다운로드</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적용 범위</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 주문서</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 상품</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>쿠폰 내역 리스트</h2>
        
        <div class="sup_list">
            <p>쿠폰 총 <span>100건</span></p>
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
                            <th><label><input type="checkbox" value="" class="check_style"></label></th>
                            <th>쿠폰 명</th>
                            <th>혜택</th>
                            <th>사용기간</th>
                            <th>발급 유형</th>
                            <th>발급</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>앱 다운로드 쿠폰</td>
                            <td>3,000원 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>전체</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>코스메틱 구매 시 할인 쿠폰</td>
                            <td>10% 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>대상자 지정</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>앱 다운로드 쿠폰</td>
                            <td>3,000원 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>전체</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>코스메틱 구매 시 할인 쿠폰</td>
                            <td>10% 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>대상자 지정</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>앱 다운로드 쿠폰</td>
                            <td>3,000원 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>전체</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>코스메틱 구매 시 할인 쿠폰</td>
                            <td>10% 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>대상자 지정</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>앱 다운로드 쿠폰</td>
                            <td>3,000원 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>전체</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>코스메틱 구매 시 할인 쿠폰</td>
                            <td>10% 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>대상자 지정</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>앱 다운로드 쿠폰</td>
                            <td>3,000원 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>전체</td>
                            <td>발급</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>코스메틱 구매 시 할인 쿠폰</td>
                            <td>10% 할인</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>대상자 지정</td>
                            <td>발급</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="r_btn_box">
            <div class="r_btn_right2">
                <button class="p_btn r_btn_two btn_default_two">등록하기</button>
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
            </div>
        </div>
        <div class="page_n_1 r_pagenat">
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




<?php include "./lib/footer.php"; ?>