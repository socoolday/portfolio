<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 1:1 문의 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>1:1 문의 게시판 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">게시판 사용여부</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 사용</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">비회원 1:1문의 사용여부</td>
                            <td>
                                <input type="radio" id="sel_3" value="" name="sel_2" class="radio_style"><label for="sel_3"><span></span> 사용</label>
                                <input type="radio" id="sel_4" value="" name="sel_2" class="radio_style"><label for="sel_4"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">카테고리 설정</td>
                            <td>
                                <input type="radio" id="sel_5" value="" name="sel_3" class="radio_style"><label for="sel_5"><span></span> 사용</label>
                                <input type="radio" id="sel_6" value="" name="sel_3" class="radio_style"><label for="sel_6"><span></span> 사용안함</label>
                                <p class="tb_in_txt">사용 경우 입력 창 *입력 시 단어 혹은 문장 사이의 구분은 슬래시 ＇/＇로 구분.  (예시 > 상품문의 / 입금확인 / 기타)</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">파일첨부 기능 설정</td>
                            <td>
                                <input type="radio" id="sel_7" value="" name="sel_4" class="radio_style"><label for="sel_7"><span></span> 사용</label>
                                <input type="radio" id="sel_8" value="" name="sel_4" class="radio_style"><label for="sel_8"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">문의 답변 수신 설정</td>
                            <td>
                                <input type="radio" id="sel_9" value="" name="sel_5" class="radio_style"><label for="sel_9"><span></span> 사용</label>
                                <input type="radio" id="sel_10" value="" name="sel_5" class="radio_style"><label for="sel_10"><span></span> 이메일수신</label>
                                <input type="radio" id="sel_11" value="" name="sel_5" class="radio_style"><label for="sel_11"><span></span> 핸드폰수신</label>
                                <input type="radio" id="sel_12" value="" name="sel_5" class="radio_style"><label for="sel_12"><span></span> 사용안함</label>
                            </td>
                        </tr>   
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">설정</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>1:1 문의 게시판 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">게시글 등록일</td>
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
                            <td class="fa_tit">유형(카테고리)선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">답변 여부</td>
                            <td>
                                <input type="radio" id="sel_13" value="" name="sel_6" class="radio_style"><label for="sel_13"><span></span> 전체</label>
                                <input type="radio" id="sel_14" value="" name="sel_6" class="radio_style"><label for="sel_14"><span></span> 답변대기</label>
                                <input type="radio" id="sel_15" value="" name="sel_6" class="radio_style"><label for="sel_15"><span></span> 처리중</label>
                                <input type="radio" id="sel_16" value="" name="sel_6" class="radio_style"><label for="sel_16"><span></span> 답변완료</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 구분</td>
                            <td>
                                <input type="radio" id="sel_17" value="" name="sel_7" class="radio_style"><label for="sel_17"><span></span> 전체</label>
                                <input type="radio" id="sel_18" value="" name="sel_7" class="radio_style"><label for="sel_18"><span></span> 회원</label>
                                <input type="radio" id="sel_19" value="" name="sel_7" class="radio_style"><label for="sel_19"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 명 검색</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">답변자 검색</td>
                            <td>
                                <input type="text" class="fa_input" placeholder=""><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>1:1문의 게시판 리스트</h2>
        <div class="sup_list">
            <p>전체문의 총 <span>100건</span>  ( 답변대기 <span>5</span>개 ｜ 처리중 <span>25</span>개 ｜ 답변완료 <span>50</span>개 ) </p>
        </div>
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content">
                    <ul class="nav j_nav-pills2">
                        <li class="active"><a data-toggle="pill" href="#tabca">전체</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">답변대기</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcc">처리중</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcd">답변완료</a></li>
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
                                    <th>문의유형</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>답변여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_right">
                                <button class="p_btn r_btn_two j_btn btn_default_two" data-toggle="modal" data-target="#myModal">답글작성</button>
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
                                    <th>문의유형</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>답변여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_unanswered">미답변</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_right">
                                <button class="p_btn r_btn_two j_btn btn_default_two" data-toggle="modal" data-target="#myModal">답글작성</button>
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
                    <div id="tabcc" class="tab-pane fade">
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
                                    <th>문의유형</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>답변여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answering">답변보류</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
                            <div class="r_btn_right">
                                <button class="p_btn r_btn_two j_btn btn_default_two" data-toggle="modal" data-target="#myModal">답글작성</button>
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
                    <div id="tabcd" class="tab-pane fade">
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
                                    <th>문의유형</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>답변여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>10</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>09</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>08</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>07</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>06</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>05</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>04</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>03</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>02</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td>01</td>
                                    <td>홍길동<br/><span>(gildongxx10)</span></td>
                                    <td>배송문의</td>
                                    <td>A제품 스킨케어 세트를 샀는데 물건이 잘못 온 거 같아요.</td>
                                    <td>2019.04.19<br/><span>12:53:23</span></td>
                                    <td class="j_tp_answered">답변완료</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box">
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
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">1:1 문의 답글 작성하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>문의 글 보기</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">제목</td>
                                    <td>문의합니다. <div class="con_ma">처리 중</div></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">작성자</td>
                                    <td>홍길동 (text01) <button class="p_btn btn_default_one">적립금 지급</button></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">작성일</td>
                                    <td>2019-01-01 12:34:33</td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">내용</td>
                                    <td>배송지 주소를 잘못 입력했는데 바꾸고 싶어요.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="class_list cover_box">
                <h2>답글 작성하기</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">이름</td>
                                    <td>운영자</td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">비밀번호</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">내용 작성하기</td>
                                    <td><textarea class="con_texta"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">확인</button>
        </div>
    </div>

    </div>
</div>



<?php include "./lib/footer.php"; ?>