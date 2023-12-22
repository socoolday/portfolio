<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<div class="con_box pas_ch2">
    
    <h1 class="con_tit_name"><i class="far fa-star"></i> 비밀번호 변경</h1>
        
    <div class="input_form_2 cover_box">
        <h2>비밀번호 변경하기</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">변경사항 선택 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <label><input type="checkbox" value="" class="check_style"> 전체변경</label>
                                <label><input type="checkbox" value="" class="check_style"> 관리자</label>
                                <label><input type="checkbox" value="" class="check_style"> FTP / 파일링크</label>
                                <label><input type="checkbox" value="" class="check_style"> 이미지 호스팅</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">변경상점 아이디</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상점 비밀번호 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">새 비밀번호 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text"> <p class="pass_c1">암호 보안수준 : 낮음</p><br>
                                영문 대소문자/숫자/특수문자 중 두가지 이상 조합으로 8~16자리 입력.
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">새 비밀번호 확인<span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button class="p_btn btn_default_two btn_center btn_ma">변경하기</button>
    
    
</div>




<?php include "./lib/footer.php"; ?>