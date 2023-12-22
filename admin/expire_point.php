<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 회원 적립금 소멸</h1>

    <div class="input_form_2 cover_box">
        <h2>소멸 적립금 내역 검색</h2>
        
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
                            <td class="fa_tit">소멸 적립금 검색</td>
                            <td>
                                <input type="text" class="r_reg_text">원 이상
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
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>소멸 적립금 리스트</h2>
        
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
                </div>       
                <table class="table r_man_table">
                <thead>
                    <tr>
                        <th><label><input type="checkbox" value="" class="check_style"></label></th>
                        <th>이름</th>
                        <th>아이디</th>
                        <th>회원등급</th>
                        <th>사용 가능 적립금</th>
                        <th>소멸 적립금</th>
                        <th>소멸 후 사용가능 적립금</th>
                        <th>소멸일자</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>프리미엄</td>
                        <td>3,000</td>
                        <td>1,000</td>
                        <td>500</td>
                        <td>2019-00-00</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <div class="r_btn_left">
                    <button class="p_btn r_btn_two j_btn btn_default_two">적립금 소멸 안내 SMS 발송</button>
                    <button class="p_btn r_btn_two j_btn btn_default_two">적립금 소멸 안내 메일 발송</button>
                </div>
                <div class="r_btn_right">
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


</div>




<?php include "./lib/footer.php"; ?>