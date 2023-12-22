<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<div class="wrap">
    <div class="con">
        <div class="my_wallet">
            <div class="mw_tit_btn">
                <h2>Transfer</h2>
            </div>
            <div class="transfer_b">
                <div class="transfer_tit">
                    <button type="button">BTC <p>5,000 <b>Coin</b> / 964 <b>point</b> <i class="xi-angle-down"></i> </p></button>
                    <ul>
                        <li><button type="button">BTC <p>5,000 <b>Coin</b> / 964 <b>point</b></p></button></li>
                        <li><button type="button">ENT <p>5,000 <b>Coin</b> / 964 <b>point</b></p></button></li>
                        <li><button type="button">USDT <p>5,000 <b>Coin</b> / 964 <b>point</b></p></button></li>
                        <li><button type="button">USDC <p>5,000 <b>Coin</b> / 964 <b>point</b></p></button></li>
                    </ul>
                </div>
            </div>
            <div class="transfer_exchange">
                <div class="transfer_ex_form">
                    <div class="tef_fir">
                        <div class="teff_fir">
                            <h4>Point</h4>
                            <p>1,000</p>
                        </div>
                        <div class="teff_sec">
                            <div class="tef_fir_change_btn">
                                <span>To</span>
                                <button type="button">
                                    <i class="xi-sync"></i>
                                </button>
                            </div>
                        </div>
                        <div class="teff_thr">
                            <h4>Coin</h4>
                            <p>500</p>
                        </div>
                    </div>
                    <div class="tef_sec">
                        <div class="tefs_fir">
                            <p>Point</p>
                            <input type="text" placeholder="1,000">
                            <button type="button">Max</button>
                        </div>
                        <p><i class="xi-arrow-down"></i></p>
                        <div class="tefs_sec">
                            <p>Coin</p>
                            <input type="text" placeholder="300">
                            <button type="button">Max</button>
                        </div>
                    </div>
                </div>
                <button class="te_exchange_btn" type="button">Exchange</button>
            </div>
        </div>
    </div>
</div>

<?php include "./lib/footer.php"; ?>
