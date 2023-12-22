<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">

<h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 메일 발송 내역</h1>

    <div class="input_form_2 cover_box">
        <h2>메일 발송 내역 검색</h2>
        
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
                            <td class="fa_tit">회원 선택</td>
                            <td>
                                <input type="radio" id="send_m1-1" value="" name="send_m1" class="radio_style"><label for="send_m1-1"><span></span> 전체</label>
                                <input type="radio" id="send_m1-2" value="" name="send_m1" class="radio_style"><label for="send_m1-2"><span></span> 회원</label>
                                <input type="radio" id="send_m1-3" value="" name="send_m1" class="radio_style"><label for="send_m1-3"><span></span> 운영자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발송 유형</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 광고</label>
                                <label><input type="checkbox" value="" class="check_style"> 공지</label>
                                <label><input type="checkbox" value="" class="check_style"> 안내</label>
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
        <h2>메일 발송 내역 리스트</h2>
        
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
                        <th>회원 구분</th>
                        <th>그룹 명</th>
                        <th>발송일</th>
                        <th>발송 유형</th>
                        <th>이메일 제목</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td>특별 관리 대상</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">고객님들께만 알려드리는 쇼핑몰 8월 할인 혜택!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td></td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">000님의 생일을 축하합니다! 쇼핑몰이 드리는 특별 할인쿠폰 도착!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>운영자</td>
                        <td>운영자 모임</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>안내</td>
                        <td><a href="" class="r_a1">쇼핑몰 운영 관리자 페이지 안내</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td>특별 관리 대상</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">고객님들께만 알려드리는 쇼핑몰 8월 할인 혜택!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td></td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">000님의 생일을 축하합니다! 쇼핑몰이 드리는 특별 할인쿠폰 도착!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td>특별 관리 대상</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">고객님들께만 알려드리는 쇼핑몰 8월 할인 혜택!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td></td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">000님의 생일을 축하합니다! 쇼핑몰이 드리는 특별 할인쿠폰 도착!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>운영자</td>
                        <td>운영자 모임</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>안내</td>
                        <td><a href="" class="r_a1">쇼핑몰 운영 관리자 페이지 안내</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td>특별 관리 대상</td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">고객님들께만 알려드리는 쇼핑몰 8월 할인 혜택!</a></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>전체</td>
                        <td></td>
                        <td>2019-01-01 12:34:12</td>
                        <td>광고</td>
                        <td><a href="" class="r_a1">000님의 생일을 축하합니다! 쇼핑몰이 드리는 특별 할인쿠폰 도착!</a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            
            <div class="r_btn_box">
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