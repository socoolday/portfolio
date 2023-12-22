<div class="header">
    <div class="head_cover">
        <div class="ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo">
            <a href="./index.php"><img src="./images/logo.png" alt=""></a>
        </div>
        <div class="tit_btn">
            <button type="button" data-bs-toggle="modal" data-bs-target=".search_modal"><i class="xi-search"></i></button>
            <button type="button" class="my_info_btn"><i class="xi-user-o"></i><i class="xi-close"></i></button>
        </div>
        <div class="gnb">
            <div class="gnb_cover">
                <ul>
                    <li>
                        <a href=""><i class="xi-home-o"></i> Home</a>
                    </li>
                    <li>
                        <a href="./rank.php"><i class="xi-chart-line"></i> Rank</a>
                        <ul class="rank_gnb">
                            <li>
                                <a href="">BTC</a>
                            </li>
                            <li>
                                <a href="">ETH</a>
                            </li>
                            <li>
                                <a href="">USDT</a>
                            </li>
                            <li>
                                <a href="">USDC</a>
                            </li>
                            <li>
                                <a href="">BNB</a>
                            </li>
                            <li>
                                <a href="">XRP</a>
                            </li>
                            <li>
                                <a href="">DOGE</a>
                            </li>
                            <li>
                                <a href="">DOT</a>
                            </li>
                            <li>
                                <a href="">SOL</a>
                            </li>
                            <li>
                                <a href="">TRX</a>
                            </li>
                            <li>
                                <a href="">NEW</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./board.php"><i class="xi-dashboard-o"></i> Board</a>
                        <ul class="board_gnb">
                            <li>
                                <a href=""><i class="xi-volume-down"></i> Notice</a>
                            </li>
                            <li>
                                <a href=""><i class="xi-gamepad"></i> Gaming</a>
                            </li>
                            <li>
                                <a href=""><i class="xi-lock-rotation"></i> Crypto</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a ><i class="xi-globus"></i> language</a>
                        <ul class="board_gnb">
                            <li>
                                <a href=""><img src="./images/flag_kr.png" alt="">Korea</a>
                            </li>
                            <li>
                                <a href=""><img src="./images/flag_us.png" alt="">Us English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="my_info_b">
            <div class="mib_cover">
                <div class="mi_info">
                    <button type="button">
                        <span><img src="./images/sm_4_img.png" alt=""></span>
                        <p>Name</p>
                    </button>
                    <button type=""><i class="xi-bell-o"></i></button>
                </div>
                <div class="mii_login">
                    <button type="button">Logout</button>
                </div>
                <div class="mii_unlog_txt">
                    <p>You are not logged in</p>
                </div>
                <div class="mii_logout">
                    <button type="button" onclick="location.href='./login.php'">Login</button>
                </div>
                <div class="mi_gnb">
                    <ul>
                        <li><a href="./my_wallet.php"><i class="xi-wallet"></i> My Wallet</a></li>
                        <li><a href="./myinfo.php"><i class="xi-user-o"></i> My Info</a></li>
                        <li><a href="./my_referral.php"><i class="xi-users-o"></i> My Referral</a></li>
                        <li><a href=""><i class="xi-cog"></i> Setting</a></li>
                    </ul>
                </div>
                <div class="mi_rank">
                    <h2>My Rank</h2>
                    <div class="mi_rank_li">
                        <ul>
                            <li>
                                <a href="" class="mir_coin">BTC</a>
                                <a href="" class="mir_gn"><p>Game Name</p> <span>Game Rank</span></a>
                            </li>
                            <li>
                                <a href="" class="mir_coin">BTC</a>
                                <a href="" class="mir_gn"><p>Game Name</p> <span>Game Rank</span></a>
                            </li>
                            <li>
                                <a href="" class="mir_coin">BTC</a>
                                <a href="" class="mir_gn"><p>Game Name</p> <span>Game Rank</span></a>
                            </li>
                            <li>
                                <a href="" class="mir_coin">BTC</a>
                                <a href="" class="mir_gn"><p>Game Name</p> <span>Game Rank</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mi_favo_game">
                    <h2>My Favorite Game</h2>
                    <ul>
                        <li>
                            <a href=""><img src="./images/b_img_1.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="./images/b_img_2.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade search_modal" tabindex="-1" aria-labelledby="search_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Search</h2>
                <button type="button" class="search_mod_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="search_mod_form">
                    <div class="search_mod_input">
                        <div class="smi_select">
                            <select name="" id="">
                                <option value="">All</option>
                                <option value="">Game Name1</option>
                                <option value="">Game Name2</option>
                                <option value="">Game Name3</option>
                            </select>
                        </div>
                        <div class="smi_input">
                            <input type="text">
                        </div>
                        <button type="button"><i class="xi-search"></i></button>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
<!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
-->
            </div>
        </div>
    </div>
</div>