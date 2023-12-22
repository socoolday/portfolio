<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box r_auto">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 대량 메일 발송 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>메일 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">발신 전용 발송자 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발신 전용 메일 주소</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>받는 사람 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">받는 사람</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">등급별 회원 선택 (등급별 선택 시)</td>
                            <td>
                                <input type="radio" id="bulk1-1" value="" name="bulk1" class="radio_style"><label for="bulk1-1"><span></span> 등급 선택</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">등급1</option>
                                    <option value="2">등급2</option>
                                </select>
                                
                                <input type="radio" id="bulk1-2" value="" name="bulk1" class="radio_style"><label for="bulk1-2"><span></span> 기념일 발송</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">생일</option>
                                    <option value="2">결혼 기념일</option>
                                </select>
                                
                                <input type="radio" id="bulk1-3" value="" name="bulk1" class="radio_style"><label for="bulk1-3"><span></span> 그룹선택</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">그룹1</option>
                                    <option value="2">그룹2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">메일 수신 여부 회원</td>
                            <td>
                                <input type="radio" id="bulk2-1" value="" name="bulk2" class="radio_style"><label for="bulk2-1"><span></span> 포함</label>
                                <input type="radio" id="bulk2-2" value="" name="bulk2" class="radio_style"><label for="bulk2-2"><span></span> 제외</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>메일 작성하기</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">메일 구분</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">광고</option>
                                    <option value="2">축하</option>
                                    <option value="2">공지</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">메일 제목</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발송 예약</td>
                            <td>
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                
                                <select name="" id="" class="fa_sel">
                                    <option value="1">2019</option>
                                    <option value="2">2020</option>
                                    <option value="2">2021</option>
                                    <option value="2">2022</option>
                                    <option value="2">2023</option>
                                    <option value="2">2024</option>
                                    <option value="2">2025</option>
                                </select>년
                                
                                <select name="" id="" class="fa_sel">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="2">03</option>
                                    <option value="2">04</option>
                                    <option value="2">05</option>
                                    <option value="2">06</option>
                                    <option value="2">07</option>
                                    <option value="2">08</option>
                                    <option value="2">09</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option>
                                </select>월
                                
                                <select name="" id="" class="fa_sel">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="2">03</option>
                                    <option value="2">04</option>
                                    <option value="2">05</option>
                                    <option value="2">06</option>
                                    <option value="2">07</option>
                                    <option value="2">08</option>
                                    <option value="2">09</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option>
                                </select>일
                                
                                <select name="" id="" class="fa_sel">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="2">03</option>
                                    <option value="2">04</option>
                                    <option value="2">05</option>
                                    <option value="2">06</option>
                                    <option value="2">07</option>
                                    <option value="2">08</option>
                                    <option value="2">09</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option>
                                    <option value="2">13</option>
                                </select>시
                                
                                <select name="" id="" class="fa_sel">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="2">03</option>
                                    <option value="2">04</option>
                                    <option value="2">05</option>
                                    <option value="2">06</option>
                                    <option value="2">07</option>
                                    <option value="2">08</option>
                                    <option value="2">09</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option>
                                    <option value="2">13</option>
                                </select>분
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">메일 수신 여부 회원</td>
                            <td>
                                <input type="radio" id="bulk3-1" value="" name="bulk3" class="radio_style"><label for="bulk3-1"><span></span> 포함</label>
                                <input type="radio" id="bulk3-2" value="" name="bulk3" class="radio_style"><label for="bulk3-2"><span></span> 제외</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea class="auto_t_a2"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">파일 첨부</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">수신거부 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <p class="r_auto_t1">
                                    “고객과 함께 하는 쇼핑몰, XX”<br>
                                    본 메일은 정보통신망법률 등 관련 규정에 의거하여 00년 00월 00일 기준으로 메일 수신에 동의하신 고객님을 대상으로 발송되었습니다. 메일 수신을 원하지 않으시면 [수신거부]를 클릭해주세요.<br>
                                    If you don’t want to receive this information again, please click here!<br>
                                    본 메일은 회신되지 않으며 문의 사항은 [고객센터]를 이용해주세요.
                                </p>
                                <p class="r_auto_t2">
                                    Tel 0000-0000 | Fax 0000-0000<br>
                                    ㈜쇼핑몰 12345 서울특별시 서울구 서울동 서울로 서울빌딩 0층 대표이사 홍길동<br>
                                    개인정보보호책임자 홍길동 사업자 등록번호 000-00-0000 통신판매업 신고 제 12345 호<br><br>

                                    Copyright© 쇼핑몰 all rights reserved. Tplate.shop
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="auto_btn_box">
            <button class="p_btn btn_default_two btn_ma r_btn3">메일 보내기</button>
            <button class="p_btn btn_default_one btn_ma">미리보기</button>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>