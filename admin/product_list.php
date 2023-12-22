<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_prod">
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  상품 목록</h1>
    
    <div class="input_form_2 cover_box">
        <h2>전체 상품 리스트 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">상품 등록 기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">어제</button>
                                <button type="button" class="p_btn btn_default_third">오늘</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">한달</button>
                                <button type="button" class="p_btn btn_default_third">전체</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 상태</td>
                            <td>
                                <input type="radio" id="pro_l1-1" value="" name="pro_l1" class="radio_style"><label for="pro_l1-1"><span></span> 전체</label>
                                <input type="radio" id="pro_l1-2" value="" name="pro_l1" class="radio_style"><label for="pro_l1-2"><span></span> 진열</label>
                                <input type="radio" id="pro_l1-3" value="" name="pro_l1" class="radio_style"><label for="pro_l1-3"><span></span> 미진열</label>
                                <input type="radio" id="pro_l1-4" value="" name="pro_l1" class="radio_style"><label for="pro_l1-4"><span></span> 품절</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">분류 선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>카테고리1</option>
                                    <option value="2">카테고리2</option>
                                    <option value="3">카테고리3</option>
                                    <option value="3">카테고리4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">정렬 순서</td>
                            <td>
                                <input type="radio" id="pro_l2-1" value="" name="pro_l2" class="radio_style"><label for="pro_l2-1"><span></span> 전체</label>
                                <input type="radio" id="pro_l2-2" value="" name="pro_l2" class="radio_style"><label for="pro_l2-2"><span></span> 등록일 순</label>
                                <input type="radio" id="pro_l2-3" value="" name="pro_l2" class="radio_style"><label for="pro_l2-3"><span></span> 수정일 순</label>
                                <input type="radio" id="pro_l2-4" value="" name="pro_l2" class="radio_style"><label for="pro_l2-4"><span></span> 상품명 순</label>
                                <input type="radio" id="pro_l2-5" value="" name="pro_l2" class="radio_style"><label for="pro_l2-5"><span></span> 판매가 순</label>
                                <input type="radio" id="pro_l2-6" value="" name="pro_l2" class="radio_style"><label for="pro_l2-6"><span></span> 주문율 순</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">공급자 선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>공급자 선택</option>
                                    <option value="2">공급자1</option>
                                    <option value="2">공급자2</option>
                                    <option value="2">공급자3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">품절 상품 검색</td>
                            <td>
                                <input type="radio" id="pro_l3-1" value="" name="pro_l3" class="radio_style"><label for="pro_l3-1"><span></span> 전체</label>
                                <input type="radio" id="pro_l3-2" value="" name="pro_l3" class="radio_style"><label for="pro_l3-2"><span></span> 품절</label>
                                <input type="radio" id="pro_l3-3" value="" name="pro_l3" class="radio_style"><label for="pro_l3-3"><span></span> 재고 있음</label>
                                <input type="radio" id="pro_l3-4" value="" name="pro_l3" class="radio_style"><label for="pro_l3-4"><span></span> 재고 상품 (수량 제한, 무제한 제외)</label>
                                <input type="radio" id="pro_l3-5" value="" name="pro_l3" class="radio_style"><label for="pro_l3-5"><span></span> 무제한</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 검색</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>상품명</option>
                                    <option value="2">상품코드</option>
                                    <option value="3">상품번호</option>
                                    <option value="3">바코드</option>
                                    <option value="3">모델명</option>
                                    <option value="3">사입명</option>
                                    <option value="3">브랜드명</option>
                                    <option value="3">제조사명</option>
                                    <option value="3">원산지</option>
                                    <option value="3">키워드</option>
                                </select>
                                
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="board_1 cover_box">
        <h2>전체 상품 리스트</h2>
        
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
                            <td>썸네일</td>
                            <td>상품번호</td>
                            <td>상품명</td>
                            <td>분류</td>
                            <td>가격</td>
                            <td>수량</td>
                            <td>공급처</td>
                            <td>등록일</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="3"><img src="../../images/prd_img.png" alt=""></td>
                            <td rowspan="3">1234567890</td>
                            <td>로즈몽 주얼리 RC0010A 귀걸이</td>
                            <td rowspan="3">스킨케어 > 스킨/로션</td>
                            <td rowspan="3">31,754</td>
                            <td rowspan="3">무제한</td>
                            <td rowspan="3">로즈몽</td>
                            <td rowspan="3">2019-01-01</td>
                        </tr>
                        <tr>
                            <td class="prod_td1">옵션</td>
                        </tr>
                        <tr>
                            <td class="prod_td2">
                                14K<br>
                                18K<br>
                                24K
                            </td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>덱케 아코디언 핸드백</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>190,647</td>
                            <td>6,764</td>
                            <td>DECKE</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>조르지오 아르마니 파운데이션</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>69,836</td>
                            <td>품절</td>
                            <td>Giorgio armani</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>덱케 아코디언 핸드백</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>190,647</td>
                            <td>6,764</td>
                            <td>DECKE</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>조르지오 아르마니 파운데이션</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>69,836</td>
                            <td>품절</td>
                            <td>Giorgio armani</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="3"><img src="../../images/prd_img.png" alt=""></td>
                            <td rowspan="3">1234567890</td>
                            <td>[메트로시티] 19FW신상 + 베스트 100위! 특가전</td>
                            <td rowspan="3">스킨케어 > 스킨/로션</td>
                            <td rowspan="3">51,670~</td>
                            <td rowspan="3">무제한</td>
                            <td rowspan="3">METROCITY MILANO</td>
                            <td rowspan="3">2019-01-01</td>
                        </tr>
                        <tr>
                            <td class="prod_td1">옵션</td>
                        </tr>
                        <tr>
                            <td class="prod_td2">
                                도트 겸 숄더백 M191MF1971Z<br>
                                숄더 겸 크로스백 M192MQ1090Z<br>
                                미니크로스 겸 숄더백 M192MQ3070Z<br>
                                반지갑 M31WF842Z<br>
                                중지갑 M82WF541A<br>
                                반지갑 M81WF992B<br>
                                카드지갑 M192WO1382F
                            </td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>덱케 아코디언 핸드백</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>190,647</td>
                            <td>6,764</td>
                            <td>DECKE</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>조르지오 아르마니 파운데이션</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>69,836</td>
                            <td>품절</td>
                            <td>Giorgio armani</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>덱케 아코디언 핸드백</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>190,647</td>
                            <td>6,764</td>
                            <td>DECKE</td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td><img src="../../images/prd_img.png" alt=""></td>
                            <td>1234567890</td>
                            <td>조르지오 아르마니 파운데이션</td>
                            <td>스킨케어 > 스킨/로션</td>
                            <td>69,836</td>
                            <td>품절</td>
                            <td>Giorgio armani</td>
                            <td>2019-01-01</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two btn_default_two">상품분류 진열</button>
                <button class="p_btn r_btn_two btn_default_two">진열 여부</button>
                <button class="p_btn r_btn_two btn_default_two">수정일 변경</button>
                <button class="p_btn r_btn_two btn_default_two">품절 처리</button>
            </div>
            <div class="r_btn_right">
                <button class="p_btn r_btn_two btn_default_two" onclick="location.href='/page/product/product_registration.php' ">등록</button>
                <button class="p_btn r_btn_two btn_default_two" onclick="location.href='/page/product/product_registration.php' ">수정</button>
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