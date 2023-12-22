<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="sub_title">
        <h2>QR 결제</h2>
        <button type="button">QR가이드</button>
    </div>
    <div class="input_group">
        <div class="pay_list_group">
            <div class="plg_b">
                <h2>결제내역</h2>
                <ul>
                    <li>
                        <p>주문금액</p><span>150,000<b>원</b></span>
                    </li>
                    <li>
                        <p>페이결제</p><span>100,000<b>원</b></span>
                    </li>
                    <li>
                        <p>포인트사용</p><span>50,000<b>원</b></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="input_btn">
            <button type="button" class="bg_blue_1"><img src="./images/icon_6.png" alt="">거래내역 보기</button>
            <button type="button" class="bg_blue_1" onclick="location.href='./receipt.php'"><img src="./images/icon_7.png" alt="">영수증 보기</button>
        </div>
    </div>







<?php include "./lib/footer.php"; ?>