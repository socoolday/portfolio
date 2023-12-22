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
                    <div class="tpcb_form">
                        <label>
                            <input type="radio" name="radio">
                            <p>BTC <span>5,000 <b>Coin</b> / 964 <b>point</b></span></p>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <p>ENT <span>5,000 <b>Coin</b> / 964 <b>point</b></span></p>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <p>USDT <span>5,000 <b>Coin</b> / 964 <b>point</b></span></p>
                        </label>
                        <label>
                            <input type="radio" name="radio">
                            <p>USDC <span>5,000 <b>Coin</b> / 964 <b>point</b></span></p>
                        </label>
                    </div>
                    <!-- <button type="button">BTC <p>5,000 <b>Coin</b> / 964 <b>point</b> <i class="xi-angle-down"></i> </p></button> -->
                </div>
            </div>
            <div class="transfer_exchange">
                <div class="transfer_ex_form">
                    <div class="tef_fir">
                        <div class="teff_fir">
                            <h4>Point</h4>
                            <input type="text" name="" value="1,000">
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
                            <input type="text" name="" value="500">
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
