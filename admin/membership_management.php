<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 등급별 회원 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>등급별 회원 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">등급 선택</td>
                            <td>
                                <input type="radio" id="mem_m1-1" value="" name="mem_m1" class="radio_style"><label for="mem_m1-1"><span></span> 레귤러</label>
                                <input type="radio" id="mem_m1-2" value="" name="mem_m1" class="radio_style"><label for="mem_m1-2"><span></span> 프리미엄</label>
                                <input type="radio" id="mem_m1-3" value="" name="mem_m1" class="radio_style"><label for="mem_m1-3"><span></span> VIP</label>
                                <input type="radio" id="mem_m1-4" value="" name="mem_m1" class="radio_style"><label for="mem_m1-4"><span></span> VVIP</label>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="fa_tit">성별</td>
                            <td>
                                <input type="radio" id="mem_m2-1" value="" name="mem_m2" class="radio_style"><label for="mem_m2-1"><span></span> 전체</label>
                                <input type="radio" id="mem_m2-2" value="" name="mem_m2" class="radio_style"><label for="mem_m2-2"><span></span> 남성</label>
                                <input type="radio" id="mem_m2-3" value="" name="mem_m2" class="radio_style"><label for="mem_m2-3"><span></span> 여성</label>
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
                            <td class="fa_tit">회원 생년월일</td>
                            <td>
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="r_reg_text">년 <input type="text" class="r_reg_text">월 <input type="text" class="r_reg_text">일
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">지역</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>시도</option>
                                    <option value="2">서울특별시</option>
                                    <option value="3">부산광역시</option>
                                    <option value="3">대구광역시</option>
                                    <option value="3">인천광역시</option>
                                    <option value="3">광주광역시</option>
                                    <option value="3">대전광역시</option>
                                    <option value="3">울산광역시</option>
                                    <option value="3">세종특별자치시</option>
                                    <option value="3">경기도</option>
                                    <option value="3">강원도</option>
                                    <option value="3">충청북도</option>
                                    <option value="3">충청남도</option>
                                    <option value="3">전라북도</option>
                                    <option value="3">전라남도</option>
                                    <option value="3">경상북도</option>
                                    <option value="3">경상남도</option>
                                    <option value="3">제주특별자치도</option>
                                </select>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>시군구</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">이메일 수신 여부</td>
                            <td>
                                <input type="radio" id="mem_m3-1" value="" name="mem_m3" class="radio_style"><label for="mem_m3-1"><span></span> 전체</label>
                                <input type="radio" id="mem_m3-2" value="" name="mem_m3" class="radio_style"><label for="mem_m3-2"><span></span> 수신함</label>
                                <input type="radio" id="mem_m3-3" value="" name="mem_m3" class="radio_style"><label for="mem_m3-3"><span></span> 수신 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">SNS 수신 여부</td>
                            <td>
                                <input type="radio" id="mem_m4-1" value="" name="mem_m4" class="radio_style"><label for="mem_m4-1"><span></span> 전체</label>
                                <input type="radio" id="mem_m4-2" value="" name="mem_m4" class="radio_style"><label for="mem_m4-2"><span></span> 수신함</label>
                                <input type="radio" id="mem_m4-3" value="" name="mem_m4" class="radio_style"><label for="mem_m4-3"><span></span> 수신 안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>등급별 회원 리스트</h2>
        
        <div class="form_ad">
            <div class="r_mem_sear">
                <p>결과 내 재검색</p>
                <input type="text" class="r_reg_text3"> 
                <button class="p_btn btn_default_search r_btn2"><i class="fas fa-search"></i> Search</button>
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
                    <button class="p_btn r_btn_two j_btn btn_default_two">등급 해제</button>
                </div>
                <div class="r_btn_right">
                    <button class="p_btn r_btn_two btn_default_two r_btn2">수정</button>
                    <button class="p_btn r_btn_two btn_default_one">삭제</button>
                </div>
            </div>
            <div class="pagenation_b r_pagenat">
                <div class="page_n_1">
                    <ul>
                        <li><a href=""><i class="fas fa-angle-doub`le-left"></i></a></li>
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