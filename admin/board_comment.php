<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 댓글 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>댓글 리스트 검색</h2>
       
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">댓글 등록일</td>
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
                            <td class="fa_tit">게시판 선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대댓글 여부</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 있음</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 없음</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="fa_input w100_" placeholder=""><br>
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
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>댓글 리스트</h2>
        
        <div class="sup_list">
            <p>전체 댓글 총 <span>100건</span></p>
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
                            <th>번호</th>
                            <th>유형</th>
                            <th>내용</th>
                            <th>작성자</th>
                            <th>작성일</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>공지사항</td>
                            <td>제 00회 룰렛 돌리기 이벤트 당첨자 발표 안내</td>
                            <td>쇼핑몰</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>9</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>8</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>7</td>
                            <td>공지사항</td>
                            <td>제 00회 룰렛 돌리기 이벤트 당첨자 발표 안내</td>
                            <td>쇼핑몰</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>6</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>5</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>4</td>
                            <td>공지사항</td>
                            <td>제 00회 룰렛 돌리기 이벤트 당첨자 발표 안내</td>
                            <td>쇼핑몰</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>3</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>2</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>1</td>
                            <td>1:1문의</td>
                            <td>제가 물건을 샀는데요!</td>
                            <td>데일리</td>
                            <td>2019-11-07</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="r_btn_box">
            <button class="p_btn r_btn_two btn_default_two">수정</button>
            <button class="p_btn r_btn_two btn_default_one">삭제</button>
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