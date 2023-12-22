<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 회원 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>회원 정보 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">회원검색</td>
                            <td>
                                <input type="radio" id="vie1-1" value="" name="vie1" class="radio_style"><label for="vie1-1"><span></span> 아이디</label>
                                <input type="radio" id="vie1-2" value="" name="vie1" class="radio_style"><label for="vie1-2"><span></span> 회원 명</label>
                                <input type="radio" id="vie1-3" value="" name="vie1" class="radio_style"><label for="vie1-3"><span></span> 이메일</label>
                                <input type="radio" id="vie1-4" value="" name="vie1" class="radio_style"><label for="vie1-4"><span></span> 연락처</label>
                                <input type="radio" id="vie1-5" value="" name="vie1" class="radio_style"><label for="vie1-5"><span></span> 생년월일</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원등급</td>
                            <td>
                                <input type="radio" id="vie2-1" value="" name="vie2" class="radio_style"><label for="vie2-1"><span></span> 레귤러</label>
                                <input type="radio" id="vie2-2" value="" name="vie2" class="radio_style"><label for="vie2-2"><span></span> 프리미엄</label>
                                <input type="radio" id="vie2-3" value="" name="vie2" class="radio_style"><label for="vie2-3"><span></span> VIP</label>
                                <input type="radio" id="vie2-4" value="" name="vie2" class="radio_style"><label for="vie2-4"><span></span> VVIP</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원유형</td>
                            <td>
                                <input type="radio" id="vie3-1" value="" name="vie3" class="radio_style"><label for="vie3-1"><span></span> 전체</label>
                                <input type="radio" id="vie3-2" value="" name="vie3" class="radio_style"><label for="vie3-2"><span></span> 최우수 회원</label>
                                <input type="radio" id="vie3-3" value="" name="vie3" class="radio_style"><label for="vie3-3"><span></span> 우수 회원</label>
                                <input type="radio" id="vie3-4" value="" name="vie3" class="radio_style"><label for="vie3-4"><span></span> 일반 회원</label>
                                <input type="radio" id="vie3-5" value="" name="vie3" class="radio_style"><label for="vie3-5"><span></span> 주의 회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">가입일 검색</td>
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
                            <td class="fa_tit">나이</td>
                            <td>
                                <input type="text" class="r_reg_text">세 ~ <input type="text" class="r_reg_text">세
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">성별</td>
                            <td>
                                <input type="radio" id="vie4-1" value="" name="vie4" class="radio_style"><label for="vie4-1"><span></span> 전체</label>
                                <input type="radio" id="vie4-2" value="" name="vie4" class="radio_style"><label for="vie4-2"><span></span> 남성</label>
                                <input type="radio" id="vie4-3" value="" name="vie4" class="radio_style"><label for="vie4-3"><span></span> 여성</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">구매금액 / 건수</td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 총 주문 금액</label>
                                <label><input type="checkbox" value="" class="check_style"> 실 결제 금액</label>
                                <label><input type="checkbox" value="" class="check_style"> 주문 건수</label>
                                <label><input type="checkbox" value="" class="check_style"> 실 주문 건수</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문일 / 결제 완료일</td>
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
                            <td class="fa_tit">주문상품</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">접속일</td>
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
                            <td class="fa_tit">이메일 수신 여부</td>
                            <td>
                                <input type="radio" id="vie5-1" value="" name="vie5" class="radio_style"><label for="vie5-1"><span></span> 전체</label>
                                <input type="radio" id="vie5-2" value="" name="vie5" class="radio_style"><label for="vie5-2"><span></span> 수신함</label>
                                <input type="radio" id="vie5-3" value="" name="vie5" class="radio_style"><label for="vie5-3"><span></span> 수신 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">SNS 수신 여부</td>
                            <td>
                                <input type="radio" id="vie6-1" value="" name="vie6" class="radio_style"><label for="vie6-1"><span></span> 전체</label>
                                <input type="radio" id="vie6-2" value="" name="vie6" class="radio_style"><label for="vie6-2"><span></span> 수신함</label>
                                <input type="radio" id="vie6-3" value="" name="vie6" class="radio_style"><label for="vie6-3"><span></span> 수신 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">연락처</td>
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
        <h2>회원 정보 리스트</h2>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>총 회원 수 : <span>00</span> 명 | 차단 0 명 | 탈퇴 0 명 | 휴면 0 명</p>
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
                        <th>아이디 / 회원구분</th>
                        <th>연락처</th>
                        <th>가입일 / 최종 접속일</th>
                        <th>회원등급</th>
                        <th>수신동의 여부</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td>접근차단</td>
                    </tr> 
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>김길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>VVIP++</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn btn_default_third">mail</button>
                            <button class="p_btn btn_default_third">SMS</button>
                        </td>
                        <td>불량회원</td>
                    </tr>  
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>나길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>프리미엄 회원</td>
                        <td>
                            <button class="p_btn btn_default_third">메모</button>
                            <button class="p_btn btn_default_third">mail</button>
                            <button class="p_btn btn_default_third">SMS</button>
                        </td>
                        <td>휴면회원</td>
                    </tr> 
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>남길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>라길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>마길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>박길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>반길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>방길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr> 
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>안길동</td>
                        <td>hhonglie / 개인회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06<br>2019-12-12 06:34:23</td>
                        <td>일반회원</td>
                        <td>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">메모</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">mail</button>
                            <button class="p_btn r_btn_two btn_default_two r_btn2">SMS</button>
                        </td>
                        <td></td>
                    </tr>                    
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <div class="r_btn_left">
                    <button class="p_btn r_btn_two j_btn btn_default_two">메일 보내기</button>
                    <button class="p_btn r_btn_two j_btn btn_default_two">SMS 보내기</button>
                    <button class="p_btn r_btn_two j_btn btn_default_two">회원 추가하기</button>
                </div>
                <div class="r_btn_right">
                    <button class="p_btn r_btn_two btn_default_two r_btn2">수정</button>
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
    
    
    <!-- 수정 버튼 클릭 시 하단 div 나타나게 -->
    
    <div class="input_form_2 cover_box">
        <h2>간단 수정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table r_vie_table">
                    <tr>
                        <td>
                            상태 수정 
                            <select name="" id="" class="fa_sel">
                                <option value="1" selected>사용중</option>
                                <option value="2">대기중</option>
                                <option value="3">휴면</option>
                                <option value="3">중지</option>
                            </select>
                        </td>
                        <td>
                            등급 설정 
                            <select name="" id="" class="fa_sel">
                                <option value="1" selected>일반</option>
                                <option value="2">프리미엄</option>
                                <option value="3">VIP</option>
                                <option value="3">VVIP</option>
                                <option value="3">VVIP++</option>
                            </select>
                        </td>
                        <td>
                            정보 변경 
                            <select name="" id="" class="fa_sel">
                                <option value="1" selected>전화번호</option>
                                <option value="2">이메일</option>
                                <option value="3">주소</option>
                            </select>
                            <input type="text" class="r_reg_text">
                        </td>
                        <td>
                            <button class="p_btn btn_default_two btn_center r_btn2">변경하기</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</div>




<?php include "./lib/footer.php"; ?>