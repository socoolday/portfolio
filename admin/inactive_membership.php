<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 휴면 회원 관리</h1>

    <div class="input_form_2 cover_box">
        <h2>휴면 회원 내역 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">휴면 처리일</td>
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
                                <input type="radio" id="ina_m1-1" value="" name="ina_m1" class="radio_style"><label for="ina_m1-1"><span></span> 전체</label>
                                <input type="radio" id="ina_m1-2" value="" name="ina_m1" class="radio_style"><label for="ina_m1-2"><span></span> 일반</label>
                                <input type="radio" id="ina_m1-3" value="" name="ina_m1" class="radio_style"><label for="ina_m1-3"><span></span> 사업자</label>
                                <input type="radio" id="ina_m1-4" value="" name="ina_m1" class="radio_style"><label for="ina_m1-4"><span></span> 14세 미만</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">이름</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">아이디</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">연락처</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">이메일</td>
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
        <h2>휴면 회원 리스트</h2>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>총 회원 수 : <span>00</span> 명 | 검색 결과 <span>100 건</span>이 검색되었습니다.</p>
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
                </div>       
                <table class="table">
                <thead>
                    <tr>
                        <th><label><input type="checkbox" value="" class="check_style"></label></th>
                        <th>이름</th>
                        <th>아이디</th>
                        <th>휴면 처리일</th>
                        <th>이메일</th>
                        <th>연락처</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>hhonglie@naver.com</td>
                        <td>000-000-0000</td>
                        <td><button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <button class="p_btn r_btn_two btn_default_two r_btn2">휴면해제</button>
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
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

</div>




<?php include "./lib/footer.php"; ?>