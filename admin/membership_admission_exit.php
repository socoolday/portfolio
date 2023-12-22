<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 회원 가입/탈퇴 관리</h1>
    
    <div class="class_list cover_box">
        <h2>회원 가입 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">      
                <table class="table">
                    <thead>
                        <tr>
                            <th>사용 여부</th>
                            <th>항목</th>
                            <th>필수 여부</th>
                            <th>상세 항목</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>아이디</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="2">비밀번호</td>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>
                                한국인터넷진흥원 패스워드 선택 및 이용 가이드에 의거<br>
                                <input type="radio" id="mem_a5-1" value="" name="mem_a5" class="radio_style"><label for="mem_a5-1"><span></span> 영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 10-16자</label>
                                <input type="radio" id="mem_a5-2" value="" name="mem_a5" class="radio_style"><label for="mem_a5-2"><span></span> 영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8-16자</label>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                비밀번호 변경 안내 기간
                                <input type="radio" id="mem_a1-1" value="" name="mem_a1" class="radio_style"><label for="mem_a1-1"><span></span> 사용안함</label>
                                <input type="radio" id="mem_a1-2" value="" name="mem_a1" class="radio_style"><label for="mem_a1-2"><span></span> 90일</label>
                                <input type="radio" id="mem_a1-3" value="" name="mem_a1" class="radio_style"><label for="mem_a1-3"><span></span> 180일</label>
                                <input type="radio" id="mem_a1-4" value="" name="mem_a1" class="radio_style"><label for="mem_a1-4"><span></span> 270일</label>
                                <input type="radio" id="mem_a1-5" value="" name="mem_a1" class="radio_style"><label for="mem_a1-5"><span></span> 365일</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>비밀번호 재확인</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>비밀번호 확인 시 질문/답변</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>이름</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>영문 이름</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>주소</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>   
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>연락처</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>
                                <input type="radio" id="mem_a2-1" value="" name="mem_a2" class="radio_style"><label for="mem_a2-1"><span></span> 회원 인증으로 사용</label>
                                <input type="radio" id="mem_a2-2" value="" name="mem_a2" class="radio_style"><label for="mem_a2-2"><span></span> 회원 인증으로 미사용</label>
                            </td>
                        </tr> 
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>이메일</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>
                                <input type="radio" id="mem_a3-1" value="" name="mem_a3" class="radio_style"><label for="mem_a3-1"><span></span> 회원 인증으로 사용</label>
                                <input type="radio" id="mem_a3-2" value="" name="mem_a3" class="radio_style"><label for="mem_a3-2"><span></span> 회원 인증으로 미사용</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>SMS 수신 동의</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>이메일 수신 동의</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>사업자 회원</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>외국인 회원</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>
                                인증수단 선택<br>
                                <label><input type="checkbox" value="" class="check_style"> 외국인 등록번호</label>
                                <label><input type="checkbox" value="" class="check_style"> 여권</label>
                                <label><input type="checkbox" value="" class="check_style"> 국제운전면허증</label>
                                <label><input type="checkbox" value="" class="check_style"> 국적</label>
                            </td>
                        </tr> 
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>결혼 여부</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>  
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>생년월일</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>성별</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>추천인 ID</td>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
        
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>실명인증 회원 내역 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">가입일</td>
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
                                <input type="radio" id="mem_a4-1" value="" name="mem_a4" class="radio_style"><label for="mem_a4-1"><span></span> 전체</label>
                                <input type="radio" id="mem_a4-2" value="" name="mem_a4" class="radio_style"><label for="mem_a4-2"><span></span> 일반</label>
                                <input type="radio" id="mem_a4-3" value="" name="mem_a4" class="radio_style"><label for="mem_a4-3"><span></span> 사업자</label>
                                <input type="radio" id="mem_a4-4" value="" name="mem_a4" class="radio_style"><label for="mem_a4-4"><span></span> 14세 미만</label>
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
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>회원 리스트</h2>
        
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
                        <th>아이디 / 회원구분</th>
                        <th>연락처</th>
                        <th>가입일</th>
                        <th>인증수단</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>휴대폰</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>이메일</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>미인증</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>미인증</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>미인증</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>휴대폰</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>미인증</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>휴대폰</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>휴대폰</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie / 기업회원</td>
                        <td>000-0000-0000</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>휴대폰</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <button class="p_btn r_btn_two btn_default_two r_btn2">회원인증</button>
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
    
    <div class="input_form_2 cover_box">
        <h2>탈퇴 회원 내역 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간</td>
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
                                <input type="radio" id="mem_a5-1" value="" name="mem_a5" class="radio_style"><label for="mem_a5-1"><span></span> 전체</label>
                                <input type="radio" id="mem_a5-2" value="" name="mem_a5" class="radio_style"><label for="mem_a5-2"><span></span> 일반</label>
                                <input type="radio" id="mem_a5-3" value="" name="mem_a5" class="radio_style"><label for="mem_a5-3"><span></span> 사업자</label>
                                <input type="radio" id="mem_a5-4" value="" name="mem_a5" class="radio_style"><label for="mem_a5-4"><span></span> 14세 미만</label>
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
                            <td class="fa_tit">탈퇴유형</td>
                            <td>
                                <input type="radio" id="mem_a6-1" value="" name="mem_a10" class="radio_style"><label for="mem_a6-1"><span></span> 전체</label>
                                <input type="radio" id="mem_a6-2" value="" name="mem_a10" class="radio_style"><label for="mem_a6-2"><span></span> 일반</label>
                                <input type="radio" id="mem_a6-3" value="" name="mem_a10" class="radio_style"><label for="mem_a6-3"><span></span> 강제</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">탈퇴사유</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>적은 상품 종류</option>
                                    <option value="2">비싼 상품 가격</option>
                                    <option value="3">느린 배송</option>
                                    <option value="3">반품, 교환 불만</option>
                                    <option value="3">고객 응대 서비스 불만족</option>
                                    <option value="3">쇼핑몰 혜택 부족</option>
                                    <option value="3">낮은 이용빈도</option>
                                    <option value="3">개인정보 유출 우려</option>
                                    <option value="3">기타</option>
                                </select>
                                <!-- 기타 선택 시 텍스트박스 활성화 -->
                                <input type="text" class="r_reg_text4" disabled>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>탈퇴 회원 리스트</h2>
        
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
                        <th>구분</th>
                        <th>탈퇴일자</th>
                        <th>탈퇴사유</th>
                        <th>탈퇴상태</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>적은 상품 종류</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>기타 (쇼핑몰 자체가 별로임)</td>
                        <td>탈퇴 보류</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>느린 배송</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>홍길동</td>
                        <td>hhonglie</td>
                        <td>일반탈퇴</td>
                        <td>2019-01-01 12:35:06</td>
                        <td>테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트 테스트</td>
                        <td>탈퇴</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <button class="p_btn r_btn_two btn_default_two r_btn2">탈퇴취소</button>
                <button class="p_btn r_btn_two btn_default_two r_btn2">회원인증</button>
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