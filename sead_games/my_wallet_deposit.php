<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<div class="wrap">
    <div class="con">
        <div class="my_wallet">
            <div class="mw_tit_btn">
                <h2>Coin List</h2>
            </div>
            <div class="mw_assets">
                <div class="mw_ass_search">
                    <input type="text" placeholder="Enter coin name">
                    <button type="button"><i class="xi-search"></i></button>
                </div>
                <ul>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a data-bs-toggle="modal" data-bs-target=".deposit_network">
                            <div class="mws_c_tag">
                                <span>BTN</span>
                                <div class="mct_txt">
                                    <h4>Bitcoin Cash</h4>
                                    <p>BCH</p>
                                </div>
                            </div>
                            <div class="mws_coin_point">
                                <p>28,300<span>Coin</span></p>
                                <p>333 <span>Point</span></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--my photo edit-->
<div class="modal fade deposit_network" tabindex="-1" aria-labelledby="search_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Choose Network</h2>
                <button type="button" class="search_mod_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
            </div>
            <div class="modal-body">
                <ul class="de_net_li">
                    <li>
                        <button type="button" onclick="location.href='./my_wallet_deposit_coin.php'"><p>BEP20</p><span>(BNB Smart Chain)</span></button>
                    </li>
                    <li>
                        <button type="button"><p>BEP2</p><span>(BNB Beacon Chain)</span></button>
                    </li>
                    <li>
                        <button type="button"><p>Bitcoin Cash</p></button>
                    </li>
                    <li>
                        <button type="button"><p>Ethereum </p><span>(ERC20)</span></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php include "./lib/footer.php"; ?>
