<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="withdrawal_title">
        <h4><span>TK-PAY</span>를 이용해 주셔서 감사합니다.</h4>
        <p>회원탈퇴를 신청하시기 전 탈퇴사유를 확인해주세요.<br/>고객님의 의견을 참고하여 더욱 발전하도록 노력하겠습니다.</p>
    </div>
    <div class="withdrawal">
        <div class="tpc_box">
            <div class="wdrwal_tit">
                <p>탈퇴사유</p>
            </div>
            <div class="tpcb_form">
                <label>
                    <input type="radio" name="radio"/>
                    <span>아이디(이메일)변경을 위해</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>사이트 이용빈도가 낮아서</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>서비스의 접속 장애 및 지연이 자주 발생해서</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>이메일 및 SMS과다 발송</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>개인정보 유출 우려</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>서비스의 접속 장애 및 지연이 자주 발생해서</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>기타</span>
                </label>
                <div class="wdinput_txt">
                    <input type="text" placeholder="탈퇴사유를 작성해 주세요.">
                </div>
            </div>
            <div class="wdrwal_btm_txt">
                <p>탈퇴 시 회원님께서 사용하시던 온라인 서비스를 이용하실 수 없으며 이용자 정보 및 데이터는 모두 삭제됩니다.<br/>사용하고 계신 아이디는 탈퇴할 경우 재사용 및 복구가 불가능하오니 신중하게 선택해주시기 바랍니다.</p>
            </div>
            <div class="wdrwal_btm_check">
                <input type="checkbox" id="mem_withd">
                <label for="mem_withd">안내사항을 모두 확인하였으며 이데 동의합니다.(필수)</label>
            </div>
            <div class="input_btn">
                <button type="button" class="bg_blue_1">회원탈퇴</button>
            </div>
        </div>
    </div>
<style>
    .withdrawal_title{padding: 2rem 1rem; display: flex; flex-direction: column;}
    .withdrawal_title h4{text-align: center; font-size:2.8rem;}
    .withdrawal_title h4 span{color:#3658c9; font-weight: 700;}
    .withdrawal_title p{font-size:2.4rem; line-height: 3.4rem; text-align: center;}
    .withdrawal .tpcb_form{padding: 2rem 3rem;}
    .withdrawal .tpcb_form label span{font-size:2.4rem;}
    .withdrawal .tpcb_form label input:checked + span:before {box-shadow: inset 0 0 0 1rem #00005c;}{font-size:2.4rem;}
    .withdrawal .wdrwal_tit{background-color:#3658c9; font-size:3rem; line-height: 5.4rem; color:#fff; text-align: center;}
    .withdrawal .tpcb_form .wdinput_txt input{line-height: 8rem; height:8rem; font-size:2.8rem; width:100%; padding:0 2rem; border-radius:2rem; border:1px solid #ddd;}
    .wdrwal_btm_txt{padding: 2rem 3rem;}
    .wdrwal_btm_txt p{font-size:2.4rem; line-height: 3.2rem; color:#999;}
    .wdrwal_btm_check{padding: 2rem 3rem; display: flex; align-items: center;}
    .wdrwal_btm_check input{width:2.4rem; height:2.4rem; }
    .wdrwal_btm_check label{font-size:2.3rem; margin-left: 1rem;}
    .wdrwal_btm_btn{text-align: center; }
    .withdrawal .input_btn{padding:2rem 3rem;}
</style>


<?php include "./lib/footer.php"; ?>