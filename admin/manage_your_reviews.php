<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 리뷰 글 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>리뷰 글 내역 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">리뷰 글 등록일</td>
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
                            <td class="fa_tit">상품검색</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">대분류</option>
                                    <option value="2">선택1</option>
                                </select>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">2차분류</option>
                                    <option value="2">선택1</option>
                                </select>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">3차분류</option>
                                    <option value="2">선택1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">평점</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>☆</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                                <input type="radio" id="sel_4" value="" name="sel_1" class="radio_style"><label for="sel_4"><span></span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                                <input type="radio" id="sel_5" value="" name="sel_1" class="radio_style"><label for="sel_5"><span></span> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 구분</td>
                            <td>
                                <input type="radio" id="sel_6" value="" name="sel_2" class="radio_style"><label for="sel_6"><span></span> 전체</label>
                                <input type="radio" id="sel_7" value="" name="sel_2" class="radio_style"><label for="sel_7"><span></span> 회원</label>
                                <input type="radio" id="sel_8" value="" name="sel_2" class="radio_style"><label for="sel_8"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사진 첨부</td>
                            <td>
                                <input type="radio" id="sel_11" value="" name="sel_3" class="radio_style"><label for="sel_11"><span></span> 전체</label>
                                <input type="radio" id="sel_12" value="" name="sel_3" class="radio_style"><label for="sel_12"><span></span> 포함</label>
                                <input type="radio" id="sel_13" value="" name="sel_3" class="radio_style"><label for="sel_13"><span></span> 미포함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 지급 여부</td>
                            <td>
                                <input type="radio" id="sel_16" value="" name="sel_4" class="radio_style"><label for="sel_16"><span></span> 전체</label>
                                <input type="radio" id="sel_17" value="" name="sel_4" class="radio_style"><label for="sel_17"><span></span> 지급 예정</label>
                                <input type="radio" id="sel_18" value="" name="sel_4" class="radio_style"><label for="sel_18"><span></span> 지급 완료</label>
                            </td>
                        </tr>   
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="r_supp_text" placeholder="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>리뷰 글 내역</h2>
        <div class="sup_list">
            <p>전체 리뷰 글 총 <span>100건</span></p>
        </div>
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content">
                    <ul class="nav j_nav-pills">
                        <li class="active"><a data-toggle="pill" href="#tabca">리뷰 글 리스트</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">삭제한 리뷰 글</a></li>
                    </ul>
                    <div id="tabca" class="tab-pane fade active in">
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
                                    <th>번호</th>
                                    <th>작성자</th>
                                    <th>상품정보</th>
                                    <th>내용</th>
                                    <th>작성일</th>
                                    <th>평점</th>
                                    <th>지급여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">적립금 지급하기</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn r_btn_two j_btn btn_default_two">이동</button>
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
                    <div id="tabcb" class="tab-pane fade">
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
                                    <th>번호</th>
                                    <th>작성자</th>
                                    <th>상품정보</th>
                                    <th>내용</th>
                                    <th>작성일</th>
                                    <th>평점</th>
                                    <th>지급여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_unanswered">지급예정</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td class="jtp_q"><a href=""><img src="../../images/prd_img.png" alt=""> 스마트 에코 베이…</a></td>
                                    <td class="jtp_q"><a href="">와, 저 파데 유목민이었는데 이번에 인생파데 찾은 것 같아요! 이…</a></td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
                                    <td class="j_tp_answering">지급완료</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn btn_default_two r_btn2">복원하기</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn btn_default_one">전체삭제</button>
                                <button class="p_btn btn_default_one">영구삭제</button>
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
        </div>
    </div>
    
    
<!--  적립금 지급하기 버튼 클릭 시 하단 div 나타나게  -->
    <div class="input_form_2 cover_box r_none">
        <h2>적립금 지급하기</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">적용대상<span class="ret_t1">(필수)</span></td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 게시물 작성자</label>
                                <label><input type="checkbox" value="" class="check_style"> 댓글 작성자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">증감 여부</td>
                            <td>
                                <input type="radio" id="sel_19" value="" name="sel_5" class="radio_style"><label for="sel_19"><span></span> 적립금 증가</label>
                                <input type="radio" id="sel_20" value="" name="sel_5" class="radio_style"><label for="sel_20"><span></span> 적립금 차감</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">내용</td>
                            <td>
                                <input type="text" class="fa_input w100_" placeholder=""><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="j_btn_group">
        <button class="p_btn btn_default_two">확인</button>
        <button class="p_btn btn_default_one">취소</button>
        </div>
    </div>
</div>




<?php include "./lib/footer.php"; ?>