<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<div class="wrap">
    <div class="con">
        <div class="my_wallet">
            <div class="mw_tit_btn">
                <h2>withdraw BCH</h2>
            </div>
            <div class="mw_with_form">
                <ul>
                    <li>
                        <p>Address</p>
                        <div class="mw_input_btn">
                            <input type="text" placeholder="Long press to paste">
                            <button type="button"><img src="./images/qr_sm_code.png" alt=""></button>
                        </div>
                    </li>
                    <li>
                        <p>Network</p>
                        <div class="mw_btn">
                            <button type="button"><span>Automatically match the network</span> <i class="xi-angle-right"></i></button>
                        </div>
                    </li>
                    <li>
                        <p>Amount</p>
                        <div class="mw_input_btn">
                            <input type="text" placeholder="BCH">
                            <button type="button">Max</button>
                        </div>
                        <span>Available 0.02980203 BCH</span>
                    </li>
                </ul>
            </div>
            <h3 class="tip_tit">Tips</h3>
            <div class="mw_de_way_bottom">
                <ul>
                    <li>
                        <p>24h withrawal limit</p>
                        <span>8,000,000/8,000,000BUSD</span>
                    </li>
                    <li>
                        <p>Withdraw to Binance addresses</p>
                        <button type="button">Refund Fee <i class="xi-angle-right"></i></button>
                    </li>
                    <li>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    </li>
                </ul>
            </div>
            <div class="mw_de_wallet">
                <div class="mdw_icon">
                    <img src="./images/wallet_icon.png" alt="">
                </div>
                <div class="mdw_txt">
                    <p>Receive amount</p>
                    <h3>0.00 <span>BCH</span></h3>
                    <p>Network fee 0.00 BCH</p>
                </div>
            </div>
            <div class="mwdw_btn">
                <button type="button">Withdrawal</button>
            </div>
        </div>
    </div>
</div>

<?php include "./lib/footer.php"; ?>
