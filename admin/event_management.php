<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 이벤트 관리하기</h1>
    
    <div class="input_form_2 cover_box">
        <h2>이벤트 리스트 검색</h2>
        
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
                            <td class="fa_tit">진행 상태</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 대기</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 진행중</label>
                                <input type="radio" id="sel_4" value="" name="sel_1" class="radio_style"><label for="sel_4"><span></span> 진행안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">유형 선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">기간 할인</option>
                                    <option value="2">재구매 할인</option>
                                    <option value="3">대량 구매 할인</option>
                                    <option value="4">할인 회원</option>
                                    <option value="5">신규상품 할인</option>
                                    <option value="6">무료배송 할인</option>
                                    <option value="7">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">혜택 명</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 검색</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">분류 검색</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">의류</option>
                                    <option value="3">가전</option>
                                    <option value="4">미용</option>
                                    <option value="5">도서</option>
                                    <option value="6">기획전</option>
                                    <option value="7">기타</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>이벤트 리스트</h2>
        
        <div class="sup_list">
            <p>게시글 총 <span>100건</span></p>
        </div>
        
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content">
                   
                    <ul class="nav j_nav-pills">
                        <li class="active"><a data-toggle="pill" href="#tabca">진행 중 이벤트 (000)</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">종료된 이벤트 (000)</a></li>
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
                                    <th>쇼핑몰</th>
                                    <th>상태</th>
                                    <th>구분</th>
                                    <th>혜택유형</th>
                                    <th>혜택 명</th>
                                    <th>시작일</th>
                                    <th>종료일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                 <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_unanswered">진행중</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">이벤트 보러가기</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn r_btn_two j_btn btn_default_two">등록하기</button>
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
                                    <th>쇼핑몰</th>
                                    <th>상태</th>
                                    <th>구분</th>
                                    <th>혜택유형</th>
                                    <th>혜택 명</th>
                                    <th>시작일</th>
                                    <th>종료일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                 <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티플레이트</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>증정</td>
                                    <td>사은품 증정</td>
                                    <td class="jtp_q"><a href="">라네즈 구매 사은 이벤트</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>티몰</td>
                                    <td class="j_tp_answering">진행안함</td>
                                    <td>할인</td>
                                    <td>기간 할인</td>
                                    <td class="jtp_q"><a href="">앱 다운로드 시 쿠폰 3천원 증정</a></td>
                                    <td>2019.11.12<br/><span>12:53:23</span></td>
                                    <td>2019.11.22<br/><span>12:53:23</span></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        
                        <div class="r_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn2 btn_default_two">복원하기</button>
                            </div>
                            <div class="r_btn_right2">
                                <button class="p_btn r_btn_two btn_default_one">전체삭제</button>
                                <button class="p_btn r_btn_two btn_default_one">영구삭제</button>
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
</div>





<?php include "./lib/footer.php"; ?>