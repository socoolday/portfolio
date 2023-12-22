<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="far fa-star"></i> 내 쇼핑몰 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>기본 정보 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">쇼핑몰 명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="TKmall">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">관리자 명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="홍길동">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상점 아이디</td>
                            <td>
                                tchain
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상점 등급</td>
                            <td>
                                소호몰
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표 휴대전화 번호</td>
                            <td>
                                010-0000-0000 <button class="p_btn btn_default_two r_btn2">대표 인증번호 설정</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기본 제공 도메인</td>
                            <td>
                                tchain.cafe24.com
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상점 대표 도메인</td>
                            <td>
                                tkmall.shop <button class="p_btn btn_default_two r_btn2">대표 도메인 변경</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>쇼핑몰 사업자 정보 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">사업자 등록번호</td>
                            <td>
                                <input type="text" class="r_reg_text" value="000-000-00000">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상호 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="(주)쇼핑몰">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표자 명</td>
                            <td>
                                <input type="text" class="r_reg_text" value="홍길동">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">업태</td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">종목</td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">사업장 주소 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>국가선택</option>
                                    <option value="2">가나</option>
                                    <option value="2">대한민국</option>
                                    <option value="2">일본</option>
                                    <option value="2">중국</option>
                                </select>
                                <button class="p_btn btn_default_two r_btn2">주소검색</button><br>
                                <input type="text" class="r_supp_text set_in1" value=""><br>
                                <input type="text" class="r_supp_text set_in1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표 전화 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="0000-0000">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표 팩스 </td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표 이메일 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="admin@admin.com">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">쇼핑몰 주소 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="http://admin.co.kr">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">통신판매업 신고</td>
                            <td>
                                <input type="radio" id="set1-1" value="" name="set1" class="radio_style" checked><label for="set1-1"><span></span> 신고함</label>
                                <input type="radio" id="set1-2" value="" name="set1" class="radio_style"><label for="set1-2"><span></span> 신고안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">통신판매신고 번호</td>
                            <td>
                                <input type="text" class="r_reg_text" value="제 2018-서울XX-0000호">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>회사소개 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">회사소개</td>
                            <td>
                                <textarea class="set_txta"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회사약도</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div><br>
                                권장 이미지 000X000 / 1M 이하 / gif, png, jpg(jpeg)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>고객센터 정보 안내 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">상담/주문 전화 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="0000-0000">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상담/주문 이메일 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="admin@admin.com">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">팩스번호</td>
                            <td>
                                <input type="text" class="r_reg_text" value="0000-0000">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">SMS 수신번호</td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">CS 운영시간</td>
                            <td>
                                <textarea class="set_txta"></textarea>
                                <p class="set_t1">[ <span>83</span> / 250 ]</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>개인정보보호 책임자 안내 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">개인정보보호 책임자 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="홍길동">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">책임자 지위</td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">책임자 부서</td>
                            <td>
                                <input type="text" class="r_reg_text" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">책임자 연락처 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="0000-0000">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">책임자 이메일 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text" value="admin@damin.com">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>서비스 문의 안내 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">모바일 표시 여부</td>
                            <td>
                                <input type="radio" id="set2-1" value="" name="set2" class="radio_style" checked><label for="set2-1"><span></span> 표시</label>
                                <input type="radio" id="set2-2" value="" name="set2" class="radio_style"><label for="set2-2"><span></span> 표시안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">서비스 문의안내 내용</td>
                            <td>
                                <textarea class="set_txta"></textarea>
                                <p class="set_t1">[ <span>0</span> / 1000 ]</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <button class="p_btn btn_default_two btn_center btn_ma">저장하기</button>
</div>




<?php include "./lib/footer.php"; ?>