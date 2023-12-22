<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box bol_bor">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 게시판 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>게시판 리스트</h2>
        
        <div class="sup_list">
            <p>게시판 총 <span>100건</span></p>
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
                            <th>게시판</th>
                            <th>권한</th>
                            <th>읽기권한</th>
                            <th>새 글/전체 글</th>
                            <th>댓글권한</th>
                            <th>표시</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>09</td>
                            <td>상품</td>
                            <td><a href="" class="bor_t1">Q&amp;A</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>0/0</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>08</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>07</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>06</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_unanswered">미표시</td>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>05</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_unanswered">미표시</td>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>04</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>03</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_answered">표시</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>02</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_unanswered">미표시</td>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>01</td>
                            <td>운영</td>
                            <td><a href="" class="bor_t1">공지사항 게시판</a></td>
                            <td>관리자</td>
                            <td>비회원</td>
                            <td>23/1,001</td>
                            <td>회원</td>
                            <td class="j_tp_unanswered">미표시</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="r_btn_box">
            <div class="r_btn_left">
               <!--게시판 추가 시 게시판 생성 페이지로 이동, 해당 게시판 제목 누를 시 생성 페이지가 새창으로 나오게끔-->
                <button class="p_btn r_btn_two btn_default_two">게시판 추가</button>
            </div>
            <div class="r_btn_right">
                <button class="p_btn r_btn_two btn_default_two">수정</button>
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
            </div>
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
    
    <!-- 수정하기 버튼 클릭 시 하단 div 보여지게. -->
    <div class="input_form_2 cover_box r_none">
        <h2>게시판 수정하기</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">게시판 이름</td>
                            <td>
                                <input type="text" class="fa_input w100_" placeholder=""><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">게시판 유형</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">운영</option>
                                    <option value="2">상품</option>
                                    <option value="3">디자인</option>
                                    <option value="4">운영</option>
                                    <option value="5">상품</option>
                                    <option value="6">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">권한 설정</td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 관리자</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 운영자</label>
                                <input type="radio" id="sel_4" value="" name="sel_1" class="radio_style"><label for="sel_4"><span></span> 회원</label>
                                <input type="radio" id="sel_5" value="" name="sel_1" class="radio_style"><label for="sel_5"><span></span> 비회원</label>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">읽기 권한 설정</td>
                            <td>
                                <input type="radio" id="sel_6" value="" name="sel_2" class="radio_style"><label for="sel_6"><span></span> 전체</label>
                                <input type="radio" id="sel_7" value="" name="sel_2" class="radio_style"><label for="sel_7"><span></span> 관리자</label>
                                <input type="radio" id="sel_8" value="" name="sel_2" class="radio_style"><label for="sel_8"><span></span> 운영자</label>
                                <input type="radio" id="sel_9" value="" name="sel_2" class="radio_style"><label for="sel_9"><span></span> 회원</label>
                                <input type="radio" id="sel_10" value="" name="sel_2" class="radio_style"><label for="sel_10"><span></span> 비회원</label>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">댓글 쓰기 권한 설정</td>
                            <td>
                                <input type="radio" id="sel_11" value="" name="sel_3" class="radio_style"><label for="sel_11"><span></span> 전체</label>
                                <input type="radio" id="sel_12" value="" name="sel_3" class="radio_style"><label for="sel_12"><span></span> 관리자</label>
                                <input type="radio" id="sel_13" value="" name="sel_3" class="radio_style"><label for="sel_13"><span></span> 운영자</label>
                                <input type="radio" id="sel_14" value="" name="sel_3" class="radio_style"><label for="sel_14"><span></span> 회원</label>
                                <input type="radio" id="sel_15" value="" name="sel_3" class="radio_style"><label for="sel_15"><span></span> 비회원</label>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">표시 여부</td>
                            <td>
                                <input type="radio" id="sel_16" value="" name="sel_4" class="radio_style"><label for="sel_16"><span></span> 표시</label>
                                <input type="radio" id="sel_17" value="" name="sel_4" class="radio_style"><label for="sel_17"><span></span> 표시 안함</label>
                            </td>
                        </tr>   
                        <tr>
                            <td class="fa_tit">기능 설정</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 카테고리</label>
                                <label><input type="checkbox" value="" class="check_style"> 파일첨부</label>
                                <label><input type="checkbox" value="" class="check_style"> 댓글 기능</label>
                                <label><input type="checkbox" value="" class="check_style"> 비밀글 가능</label>
                                <label><input type="checkbox" value="" class="check_style"> 새 글 아이콘</label>
                                <label><input type="checkbox" value="" class="check_style"> 제목 길이 제한</label>
                                <label><input type="checkbox" value="" class="check_style"> 좋아요 기능</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">본문 입력</td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10" placeholder="*욕설, 비방, 비난 등의 단어 혹은 문장을 등록할 시 해당 단어의 사용이 제한됩니다. 단어와 단어 사이는 슬래시 ‘/’ 로 구분.
                                "></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="j_btn_group">
            <button class="p_btn btn_default_two">수정하기</button>
            <button class="p_btn btn_default_one">취소</button>
        </div>
    </div>
    
</div>



<?php include "./lib/footer.php"; ?>