<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="sub_title">
        <h2>QR 결제</h2>
        <button type="button">QR가이드</button>
    </div>
    <div class="qr_code_scan">
        <div class="qcs_b">
            <p>SCAN QR CODE</p>
            <img src="./images/qr_code.png" alt="">
            <button type="button"><img src="./images/icon_20.png" alt=""> 새로고침</button>
        </div>
    </div>
    <div class="input_group">
        <div class="input_g_list">
            <ul class="one_line">
                <li>
                    <div class="igl_tit">
                        <p>주문금액</p>
                    </div>
                    <div class="igl_input">
                        <input type="text" placeholder="금액입력">
                        <span>원</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    







<?php include "./lib/footer.php"; ?>