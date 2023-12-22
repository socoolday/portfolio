<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="sub_title">
        <h2>페이 <span><img src="./images/right_r_blue.png" alt=""></span> 코인</h2>
        <button type="button">충전 가이드</button>
    </div>
    <div class="ha_list">
        <ul>
            <li class="bg_blue_1">
                <p class="ha_s_txt">코인<br><span>2,950.00 <b>$</b></span></p>
                <div class="hal_txt_b">
                    <img src="./images/icon_24.png" alt="">
                </div>
            </li>
            <li class="bg_blue_4">
                <p class="ha_s_txt">전환 예정 코인<br><span>2,950 <b>TK</b></span></p>
                <div class="hal_txt_b">
                    <img src="./images/icon_24.png" alt="">
                </div>
            </li>
        </ul>
        <div class="ha_btm_txt_sm">
            <p>1 TK <span><img src="./images/right_r_sm.png" alt=""></span> $1</p>
            <p>2022.08.07 기준</p>
        </div>
    </div>
    <div class="input_group">
        <div class="input_g_list">
            <ul class="one_line">
                <li>
                    <div class="igl_tit">
                        <p>전환 신청 페이</p>
                    </div>
                    <div class="igl_input">
                        <input type="text" placeholder="금액입력">
                        <span>$</span>
                    </div>
                </li>
                <li>
                    <div class="igl_tit">
                        <p>전환금액</p>
                    </div>
                    <div class="igl_input">
                        <input type="text" placeholder="금액입력">
                        <span>TK</span>
                    </div>
                    <div class="olb_txt">
                        <p>충전 수수료 5%</p><span>5 <b>$</b></span>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="input_btn">
            <button type="button" class="bg_blue_1" onclick="location.href='./exchange_2.php'">전환하기</button>
        </div>
    </div>




<?php include "./lib/footer.php"; ?>