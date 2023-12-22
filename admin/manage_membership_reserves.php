<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 회원 적립금 관리</h1>

    <div class="input_form_2 cover_box">
        <h2>회원 적립금 내역 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
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
                            <td class="fa_tit">구분</td>
                            <td>
                                <input type="radio" id="man_mr1-1" value="" name="man_mr1" class="radio_style"><label for="man_mr1-1"><span></span> 전체</label>
                                <input type="radio" id="man_mr1-2" value="" name="man_mr1" class="radio_style"><label for="man_mr1-2"><span></span> 사용내역</label>
                                <input type="radio" id="man_mr1-3" value="" name="man_mr1" class="radio_style"><label for="man_mr1-3"><span></span> 지급내역</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원등급</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>회원 적립금 리스트</h2>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>검색 결과 <span>100 건</span>이 검색되었습니다.</p>
            </div>
            <div class="table-responsive form_info_b">
                <div class="fib_tit_b">
                    <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                    <select name="" id="" class="fa_sel r_select">
                        <option value="1">10개</option>
                        <option value="2">30개</option>
                        <option value="3">50개</option>
                        <option value="3">100개</option>
                    </select>
                    <select name="" id="" class="fa_sel r_select r_man">
                        <option value="1">적립금 유형</option>
                        <option value="2">유형1</option>
                        <option value="3">유형2</option>
                        <option value="3">유형3</option>
                    </select>
                </div>       
                <table class="table r_man_table">
                <thead>
                    <tr>
                        <th rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></th>
                        <th rowspan="2">이름</th>
                        <th rowspan="2">아이디</th>
                        <th rowspan="2">일자</th>
                        <th rowspan="2">회원등급</th>
                        <th colspan="3">적립금</th>
                        <th rowspan="2">내용</th>
                    </tr>
                    <tr>
                        <th>증가</th>
                        <th>차감</th>
                        <th>잔액</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>주문 취소 환불</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>신규 가입 부여</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>앱 설치</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>주문 취소 환불</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>프리미엄</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>신규 가입 부여</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td>2,000</td>
                        <td></td>
                        <td>135,874</td>
                        <td>앱 설치</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td>5,000</td>
                        <td></td>
                        <td></td>
                        <td>주문 취소 환불</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td>100,000</td>
                        <td></td>
                        <td></td>
                        <td>신규 가입 부여</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td>10,000</td>
                        <td></td>
                        <td></td>
                        <td>앱 설치</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td></td>
                        <td></td>
                        <td>-5,000</td>
                        <td></td>
                        <td>미사용</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <div class="r_btn_left">
                    <button class="p_btn r_btn_two j_btn btn_default_two" onclick="location.href='../shop/reserve_setting.php'">적립금 설정하기</button>
                </div>
                <div class="r_btn_right">
                    <button class="p_btn r_btn_two btn_default_two r_btn2">적립금 일괄 조정</button>
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
    
    <!-- 적립금 일괄 조정 버튼 클릭 시 하단 div 나타나게. -->
    
    <div class="input_form_2 cover_box r_man_box">
        <h2>적립금 일괄 조정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">엑셀 업로드</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 첨부</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 설정</td>
                            <td>
                                <ul>
                                    <li>
                                        <button class="p_btn btn_default_two r_btn2"><i class="fas fa-plus"></i></button> 금액 :
                                    </li>
                                    <li>
                                        <button class="p_btn btn_default_two r_btn2"><i class="fas fa-minus"></i></button> 금액 :
                                    </li>
                                </ul>
                                <div class="r_man_btn">
                                    <button class="p_btn r_btn_two btn_default_two r_btn2">추가</button>
                                    <button class="p_btn r_btn_two btn_default_one">삭제</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>