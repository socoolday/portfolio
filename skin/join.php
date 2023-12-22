<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>

<div class="shop_con">
    <div class="join">
        <div class="cont_title">회원가입</div>
        <div class="member_box">
            <div class="member_top">
                <ul id="nav-tab" role="tablist" class="nav nav-pills nav-fill">
                    <li >
                        <div class="mem_t_c active" id="step1-tab" data-bs-toggle="tab" href="#step1"></div>
                        <p><span>STEP 01</span><br>약관동의</p>
                    </li>
                    <li id="step2-tab">
                        <div class="mem_t_c" data-bs-toggle="tab" href="#step2"></div>
                        <p><span>STEP 02</span><br>본인인증</p>
                    </li>
                    <li id="step3-tab">
                        <div class="mem_t_c" data-bs-toggle="tab" href="#step3"></div>
                        <p><span>STEP 03</span><br>정보입력</p>
                    </li>
                    <li id="step4-tab">
                        <div class="mem_t_c"  data-bs-toggle="tab" href="#step4"></div>
                        <p><span>STEP 04</span><br>가입완료</p>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="step1" class="tab-pane fade show active">
                    <div class="member_all_agree">
                <div class="member_a_check"> 
                    <input type="checkbox" id="mem_a_chk"> 
                    <label for="mem_a_chk">
                        <p>이용약관, 개인정보 수집 및 이용, 위치정보 이용약관(선택), 프로모션 안내 메일 수신(선택)에 모두 동의합니다.</p>
                    </label> 
                </div>
            </div>
                    <div class="member_c_box">
                <div class="member_a_check"> 
                    <input type="checkbox" id="mem_c_chk"> 
                    <label for="mem_c_chk"><p class="mem_p1">이용약관 동의 (필수)</label> 
                </div>
                <div class="member_tbox">
                    <p>
                        <span>제 1 조 (목적)</span><br>
                        본 약관은 ㈜티몰이 운영하는 온라인 쇼핑몰 (이하 “티몰”이라 한다)에서 제공하는 서비스(이하 “서비스”라 한다)를 
                        이용함에 있어 티몰 이용자의 권리, 의무 및 책임사항을 규정하여 고객 권익을 보호함을 목적으로 합니다.<br><br><br>

                        <span>제 2 조 (정의)</span><br>
                        본 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br><br>

                        ① "티몰"이란 회사가 재화 또는 용역을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여, 재화 또는 
                        용역을 거래할 수 있도록 설정한 가상의 영업장을 말하며 아울러 티몰을 운영하는 회사의 의미로도 사용합니다.<br>
                        ② "티몰"이란 회사가 재화 또는 용역을 이용자에게 제공하기 위하여 운영하는 오프라인 영업장을 말합니다.<br>
                        ③ "이용자"란 "티몰"에 접속하여 이 약관에 따라 " 티몰 "이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br>
                    </p>
                </div>
            </div>
                    <div class="member_c_box">
                <div class="member_a_check"> 
                    <input type="checkbox" id="mem_i_chk"> 
                    <label for="mem_i_chk"><p class="mem_p1">개인정보 수집 및 이용에 대한 안내 (필수)</label> 
                </div>
                <div class="member_tbox">
                    <p>
                        <span>수집항목</span><br>
                        1. 정회원 : 회원 ID, 비밀번호, ipin, 성명, 성별, 생년월일, 전자우편주소, 이동전화번호, 쿠키정보, 신용카드 정보, 계좌번호, 포인트 거래정보, 소셜네트워크서비스를 통해 가입한 경우 회원 ID 및 비밀번호를 수집하지 않음.<br>
                        2. 비회원 물품 구매 시 : 생년월일, 전자우편주소, 이동전화번호, 쿠키정보, 신용카드 정보, 계좌번호, 포인트 거래정보<br><br><br>

                        <span>쿠키 수집 항목별 보유 기간</span><br>
                        1. 오늘의 특가 포커스 이동 - 10초<br>
                        2. 암호화된 ID, 자동로그인용 키 값, 현재 앱버전 정보(안드로이드), 최신 앱 버전정보(안드로이드), 앱 설치된 휴대전화번호(안드로이드), 모바일 OS명(안드로이드), 모바일 디바이스 모델(안드로이드), 사용자 접속환경(안드로이드),
                        로그수집용 key/태그(안드로이드) - 20분<br>
                        3. 로그인 여부 - 1일<br>
                        4. 오늘 본 상품 - 1주일 <br>
                        5. 현재 앱 버전 정보(iOS), 최신 앱 버전정보(iOS), 모바일OS명(iOS), 사용자 접속 환경(iOS) - 1개월<br>
                        6. 최근 검색어, 상품 검색 조건 값 - 1년<br>
                    </p>
                </div>
            </div>
                    <div class="member_c_box">
                <div class="member_a_check"> 
                    <input type="checkbox" id="mem_p_chk"> 
                    <label for="mem_p_chk"><p class="mem_p1">위치정보 이용약관에 대한 안내 (선택)</label> 
                </div>
                <div class="member_tbox">
                    <p>
                        <span>제 1 조 (목적)</span><br>
                        본 약관은 주식회사 티몰(이하 "회사")의 위치정보사업 및 회사가 제공하는 위치기반서비스(이하 "서비스")의 이용과  관련하여 회사와 서비스 이용자(본 약관에 동의하여 서비스를 이용하는 자, 이하 "회원")간의 권리, 의무 기타 필요한 제반사항을 규정함을 목적으로 합니다.<br><br><br>

                        <span>제 2조 (이용약관의 효력 및 변경)</span><br>
                        1. 본 약관은 서비스를 신청하는 개인위치정보주체가 본 약관에 동의 함으로써 효력이 발생합니다.<br>
                        2. 본 약관의 내용은 온라인상의 서비스 홈페이지, 모바일 앱 등 회사가 고객에게 제공하는 매체(이하 "홈페이지 등"이라 합니다)에 게시하거나 기타의 방법으로 고객에게 공시하고, 회원이 홈페이지 등에서 본 약관의 "동의하기" 버튼을 
                        클릭하였을 경우 본 약관의 내용을 모두 읽고 이를 충분히 이해하였으며, 그 적용에 동의한 것으로 봅니다.<br>
                        3.  회사는 필요에 따라 본 약관을 변경할 수 있으며, 약관을 변경할 경우에는 기존약관과 변경약관 및 변경약관의 
                        적용일자와 변경사유를 명시하여 제2항과 같은 방법으로 그 적용일자 10일 전부터 공지합니다. 다만, 변경 내용이 회원에게 불리한 경우에는 그 적용일자 30일 전부터 공지하며, 회원의 등록된 전자우편 주소로 이메일(E-mail)을 통해 개별 통지합니다. 단, 회원이 연락처를 기재하지 않았거나, 변경 후 수정하지 않아 개별 통지가 어려우면 본 항의 공지로써 개별 통지한 것으로 간주합니다.<br>
                    </p>
                </div>
            </div>
                    <div class="member_c_box">
                <div class="member_a_check"> 
                    <input type="checkbox" id="mem_e_chk"> 
                    <label for="mem_e_chk"><p class="mem_p1">이벤트 등 프로모션 알림 메일 수신 (선택)</label> 
                </div>
            </div>
                    <div class="member_btn_box">
                        <button type="button" class="member_b_dag">비동의</button>
                        <button type="button" class="member_b_ag">동의</button>
                    </div>
                </div>
                <div id="step2" class="tab-pane fade">
                    <div class="member_te_box">본인 인증 수단을 선택해주세요.</div>
                    <div class="member_cer_box">
                        <button type="button" class="mem_c_phone">
                            <div class="mem_cer_bbox"><img src="./images/member_phone.png" alt=""></div>
                            <p>
                                <span>휴대폰 인증</span><br>
                                본인 명의의 휴대폰으로<br> 본인임을 확인합니다.
                            </p>
                        </button>
                        <button type="button" class="mem_c_pin">
                            <div class="mem_cer_bbox"><img src="./images/member_ipin.png" alt=""></div>
                            <p>
                                <span>아이핀(i-PIN) 인증</span><br>
                                아이핀(i-PIN) 서비스를 이용하여<br> 본인임을 확인합니다.
                            </p>
                        </button>
                    </div>
                </div>
                <div id="step3" class="tab-pane fade">
                    <div class="member_info">
                        <div class="member_input-table">
                            <div class="member_inputI">
                                <div class="member_inputL">아이디</div>
                                <div class="member_inputR"><input type="text" placeholder="아이디를 입력하세요."></div>
                            </div>
                            <div class="member_inputI">
                                <div class="member_inputL">비밀번호</div>
                                <div class="member_inputR">
                                    <input type="password" placeholder="영문/숫자/특수문자 조합 6~15자">
                                    <p class="member_inputT1">비밀번호를 입력해주세요.</p>
                                </div>
                            </div>
                            <div class="member_inputI member_inborder">
                                <div class="member_inputL">비밀번호 확인</div>
                                <div class="member_inputR">
                                    <input type="password" placeholder="">
                                </div>
                            </div>
                            <div class="member_inputI member_inpt">
                                <div class="member_inputL">성명</div>
                                <div class="member_inputR"><input type="text"></div>
                            </div>
                            <div class="member_inputI">
                                <div class="member_inputL">휴대폰 번호</div>
                                <div class="member_inputR"><input type="text" placeholder="'-'없이 입력"></div>
                            </div>
                            <div class="member_inputI">
                                <div class="member_inputL">생년월일</div>
                                <div class="member_inputR"><input type="text" placeholder="8자리 숫자로 입력 (ex. 20001010)"></div>
                            </div>
                            <div class="member_inputI">
                                <div class="member_inputL">성별</div>
                                <div class="member_inputR">
                                    <div class="radio_box">
                                        <div class="radio_ibox">
                                            <input type="radio" id="mw1" name="rr" />
                                            <label for="mw1"><span></span>남자</label>
                                        </div>
                                        <div class="radio_ibox">
                                            <input type="radio" id="mw2" name="rr" />
                                            <label for="mw2"><span></span>여자</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="login_btn"  onclick="location.href='member_step4.php' ">가입하기</button>
                    </div>
                </div>
                <div id="step4" class="tab-pane fade">
                    <div class="member_complete">
                        <img src="./images/logo.png" alt="">
                        <div class="member_comtbox">
                            <h1>환영합니다!</h1>
                            <p>
                                홍길동 님, 회원가입을 축하합니다.<br>
                                몰의 새로운 아이디는 <span>tmallid</span>입니다.
                            </p>
                        </div>
                        <div class="member_btn_box">
                            <button type="button" class="member_b_ag" onclick="location.href='login.php'" >로그인 하기</button>
                            <button type="button" class="member_b_dag"  onclick="location.href='main.php' ">홈으로 가기</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>


<style>
    .foot_sns{display: none;}
</style>

<?php include "./lib/footer.php"; ?>