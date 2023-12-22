<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="far fa-star"></i> 비밀번호 변경</h1>
    
    <div class="input_form_2 cover_box">
        <h2>보안 인증하기</h2>
        <div class="r_pay-tbox">
            <p>
                <span>접속하신 페이지는 본인 확인이 필요한 페이지입니다.</span><br>
                관리자 페이지의 2단계 보안접속 서비스로 여러분의 쇼핑몰을 안전하게 지켜 드리겠습니다.<br>
                본인 확인 서비스는 본인 확인이 완료된 사용자만이 이용 가능합니다.
            </p>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>정보 입력하기</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">인증수단</td>
                            <td>
                                <input type="radio" id="res_s1-1" value="" name="res_s1" class="radio_style" checked><label for="res_s1-1"><span></span> 휴대전화 인증</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">휴대전화 번호</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">010-****-0000</option>
                                </select>
                                <button class="p_btn btn_default_two r_btn2">인증번호 요청</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">인증번호 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button class="p_btn btn_default_two btn_center btn_ma" onclick="location.href='password_change2.php' ">인증하기</button>
    <!-- 인증이 완료되면 password_change2 페이지로 이동 -->
    
</div>




<?php include "./lib/footer.php"; ?>