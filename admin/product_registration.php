<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_regi">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  상품 등록</h1>
    
    <div class="pro_regis cover_box">
        <h2>제품 분류 선택</h2>
        <div class="regis_category">
            <div class="regis_cate_box">
                <ul>
                    <li><a href="" class="on">스킨케어</a></li>
                    <li><a href="">패션뷰티</a></li>
                    <li><a href="">여행/레저</a></li>
                    <li><a href="">유아동</a></li>
                    <li><a href="">패션잡화</a></li>
                </ul>
            </div>
            <div class="regis_cate_box">
                <ul>
                    <li><a href="">스킨케어</a></li>
                    <li><a href="">패션뷰티</a></li>
                    <li><a href="">여행/레저</a></li>
                    <li><a href="" class="on">유아동</a></li>
                    <li><a href="">패션잡화</a></li>
                </ul>
            </div>
            <div class="regis_cate_box">
                <p>분류가 없습니다.</p>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>상품 정보 입력하기 - 기본 정보 입력</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">분류 <span class="ret_t1">(필수)</span></td>
                            <td>
                                스킨케어 <i class="fas fa-chevron-right"></i> 유아동
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품코드 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="radio" id="regi1-1" value="" name="pro_regi1" class="radio_style"><label for="regi1-1"><span></span> 자동입력</label>
                                <input type="radio" id="regi1-2" value="" name="pro_regi1" class="radio_style"><label for="regi1-2"><span></span> 수동입력</label> <input type="text" class="r_reg_text" disabled>
                                <button class="p_btn btn_default_one">상품코드 중복체크</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="3">가격설정 <span class="ret_t1">(필수)</span></td>
                            <td>
                                판매가격 <input type="text" class="r_reg_text"> <span class="ret_t1">*쇼핑몰에서 판매할 가격</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                정상가 <input type="text" class="r_reg_text"> <span class="ret_t1">*시중에 판매되고 있는 가격</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                할인가 <input type="text" class="r_reg_text"> <span class="ret_t1">*구매자가 결제할 가격</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">공급자</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>공급자</option>
                                    <option value="2">선택1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">재고 설정</td>
                            <td>
                                <input type="radio" id="regi2-1" value="" name="pro_regi2" class="radio_style"><label for="regi2-1"><span></span> 무제한</label>
                                <input type="radio" id="regi2-2" value="" name="pro_regi2" class="radio_style"><label for="regi2-2"><span></span> 수량</label> <input type="text" class="r_reg_text">개
                                <input type="radio" id="regi2-3" value="" name="pro_regi2" class="radio_style"><label for="regi2-3"><span></span> 품절</label>
                                
                                <!-- 라디오 버튼 수량 체크 시 하단 div 나타나게. -->
                                <div class="prod_rbox">
                                    - 최소 주문 한도 <input type="text" class="r_reg_text">개 이상, 최대 주문한도 무제한<br>
                                    - 수량 <input type="text" class="r_reg_text">개 이하
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품태그 (검색어)</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 등록일</td>
                            <td>
                                <input type="radio" id="regi3-1" value="" name="pro_regi3" class="radio_style"><label for="regi3-1"><span></span> 자동입력</label>
                                <input type="radio" id="regi3-2" value="" name="pro_regi3" class="radio_style"><label for="regi3-2"><span></span> 수동입력</label> <input type="text" class="r_reg_text" disabled>년 <input type="text" class="r_reg_text" disabled>월 <input type="text" class="r_reg_text" disabled>일
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">모델명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">생산국</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">제조사</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">브랜드</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">스마트 픽업 여부</td>
                            <td>
                                <input type="radio" id="regi4-1" value="" name="pro_regi4" class="radio_style"><label for="regi4-1"><span></span> 가능</label>
                                <input type="radio" id="regi4-2" value="" name="pro_regi4" class="radio_style"><label for="regi4-2"><span></span> 불가능</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">포인트</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쿠폰 지급</td>
                            <td>
                                <input type="radio" id="regi5-1" value="" name="pro_regi5" class="radio_style"><label for="regi5-1"><span></span> 지급 안 함</label>
                                <input type="radio" id="regi5-2" value="" name="pro_regi5" class="radio_style"><label for="regi5-2"><span></span> 다운로드</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송비</td>
                            <td>
                                <input type="radio" id="regi6-1" value="" name="pro_regi6" class="radio_style"><label for="regi6-1"><span></span> 기본 배송비</label>
                                <input type="radio" id="regi6-2" value="" name="pro_regi6" class="radio_style"><label for="regi6-2"><span></span> 무료배송</label>
                                <input type="radio" id="regi6-3" value="" name="pro_regi6" class="radio_style"><label for="regi6-3"><span></span> 착불</label>
                                <input type="radio" id="regi6-4" value="" name="pro_regi6" class="radio_style"><label for="regi6-4"><span></span> 직접입력</label> <input type="text" class="r_reg_text" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송여부</td>
                            <td>
                                <input type="radio" id="regi7-1" value="" name="pro_regi7" class="radio_style"><label for="regi7-1"><span></span> 해외겸용</label>
                                <input type="radio" id="regi7-2" value="" name="pro_regi7" class="radio_style"><label for="regi7-2"><span></span> 국내/해외 배송상품</label>
                                <input type="radio" id="regi7-3" value="" name="pro_regi7" class="radio_style"><label for="regi7-3"><span></span> 국내 배송 전용</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>상품 정보 입력하기 - 상세 정보 입력</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">상품정보 고시</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>상품 종류를 선택해주세요.</option>
                                    <option value="2">패션잡화</option>
                                    <option value="2">신발</option>
                                    <option value="2">가방</option>
                                    <option value="2">침구류/커튼</option>
                                    <option value="2">가구류</option>
                                    <option value="2">가전제품</option>
                                </select>
                                
                                <textarea class="p_regi_texta" placeholder="용량/중량, 제품 주요 사양, 사용기한 또는 개봉 후 사용기간, 사용법, 제조자 및 제조판매업자, 제조국, 주요성분, 기능성 화장품 심사필 유무, 주의사항, 소비자상담 전화번호"></textarea>
                                
                                <span class="ret_t1">* 상품정보 등록 시 한가지라도 작성하지 않으실 경우 해당 항목은 등록되지 않습니다.</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">남은 수량</td>
                            <td>
                                <input type="radio" id="regi8-1" value="" name="pro_regi8" class="radio_style"><label for="regi8-1"><span></span> 일시품절</label>
                                <input type="radio" id="regi8-2" value="" name="pro_regi8" class="radio_style"><label for="regi8-2"><span></span> 무제한</label>
                                <input type="radio" id="regi8-3" value="" name="pro_regi8" class="radio_style"><label for="regi8-3"><span></span> 남은 수량</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">판매 가능 여부</td>
                            <td>
                                <input type="radio" id="regi9-1" value="" name="pro_regi9" class="radio_style"><label for="regi9-1"><span></span> 가능</label>
                                <input type="radio" id="regi9-2" value="" name="pro_regi9" class="radio_style"><label for="regi9-2"><span></span> 불가능</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 노출 여부</td>
                            <td>
                                <input type="radio" id="regi10-1" value="" name="pro_regi10" class="radio_style"><label for="regi10-1"><span></span> 노출</label>
                                <input type="radio" id="regi10-2" value="" name="pro_regi10" class="radio_style"><label for="regi10-2"><span></span> 노출 안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>상품 정보 입력하기 - 옵션 정보 입력</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">옵션 사용 여부</td>
                            <td>
                                <input type="radio" id="regi11-1" value="" name="pro_regi11" class="radio_style"><label for="regi11-1"><span></span> 사용함</label>
                                <input type="radio" id="regi11-2" value="" name="pro_regi11" class="radio_style"><label for="regi11-2"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">옵션 수량</td>
                            <td>
                                <input type="text" class="r_reg_text">개 
                                <button class="p_btn btn_default_one">추가</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">옵션 설정</td>
                            <td>
                                <div class="table-responsive form_info_b"> 
                                    <table class="table r_rtable">
                                        <thead>
                                            <tr>
                                                <td>순서</td>
                                                <td>옵션 명 / 옵션 값</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="r_reg_text" placeholder="예시) 선택1"></td>
                                                <td>
                                                    <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 옐로우">
                                                    <div class="regi_opt">
                                                        <input type="text" class="r_reg_text">원
                                                        <button class="p_btn btn_default_two r_btn2">추가</button>
                                                        <button class="p_btn btn_default_one">삭제</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="r_reg_text" placeholder="예시) 선택2"></td>
                                                <td>
                                                    <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 그린">
                                                    <div class="regi_opt">
                                                        <input type="text" class="r_reg_text">원
                                                        <button class="p_btn btn_default_two r_btn2">추가</button>
                                                        <button class="p_btn btn_default_one">삭제</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">추가 구성 상품 설정</td>
                            <td>
                                <input type="radio" id="regi12-1" value="" name="pro_regi12" class="radio_style"><label for="regi12-1"><span></span> 사용함</label>
                                <input type="radio" id="regi12-2" value="" name="pro_regi12" class="radio_style"><label for="regi12-2"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table-responsive form_info_b"> 
                                    <table class="table r_rtable">
                                        <thead>
                                            <tr>
                                                <td>순서</td>
                                                <td>옵션 명 / 옵션 값</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="r_reg_text" placeholder="예시) 선택1"></td>
                                                <td>
                                                    <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 옐로우">
                                                    <div class="regi_opt">
                                                        <input type="text" class="r_reg_text">원
                                                        <button class="p_btn btn_default_two r_btn2">추가</button>
                                                        <button class="p_btn btn_default_one">삭제</button>
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
        <h2>상품 이미지 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">상품 리스트 노출 배너</td>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(500X500)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(700X700)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상세페이지 썸네일 배너</td>
                            <td>
                                <span class="ret_t1">*최대 4개까지 등록 가능</span><br>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(500X500)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(700X700)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 상세 페이지</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                                <span class="ret_t1">*가로 1200X세로 제한 없음.</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">상품 동영상 등록</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="r_supp_text" placeholder="동영상 주소 입력">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 상세 페이지 직접 입력</td>
                            <td>
                                <textarea class="r_sim_texta"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>상품 아이콘 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간 선택</td>
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
                            <td class="fa_tit">아이콘 선택</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon1">HIT</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon2">HOT</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon3">NEW</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon4">SALE</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon5">인기상품</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon6">사은품</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon7">BEST</div></label>
                                <label><input type="checkbox" value="" class="check_style"> <div class="regi_icon8">GOOD</div></label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<div class="r_sim_btn">
    <button class="p_btn btn_default_two btn_center btn_ma">등록하기</button>
    <button class="p_btn btn_default_two btn_center btn_ma">상품목록</button>
    <button class="p_btn btn_default_one btn_center btn_ma">미리보기</button>
</div>




<?php include "./lib/footer.php"; ?>