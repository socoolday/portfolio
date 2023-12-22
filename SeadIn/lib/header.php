<div class="header">
    <div class="head_cover">
        <div class="mb_ham mb">
            <button type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="logo">
            <a href="./index.php"><img src="./images/logo_bl.png" alt=""></a>
        </div>
        <div class="menu">
            <div class="tit_con">
                <ul class="m_fix">
                    <li>
                        <a href="./index.php" class="active"><img src="./images/icon_1.png" alt=""><span>Home</span></a>
                    </li>
                    <li>
                        <a href="./feed.php"><img src="./images/icon_2.png" alt=""><span>Feed</span></a>
                    </li>
                    <li class="mb">
                        <a href="./notice.php"><img src="./images/icon_5.png" alt=""><span>Notifications</span></a>
                    </li>
                    <li>
                        <a href="./moim.php"><img src="./images/icon_3.png" alt=""><span>Moim</span></a>
                    </li>
                </ul>
                <div class="tit_search">
                    <select name="" id="">
                        <option value="">Meeting</option>
                        <option value="">Member</option>
                        <option value="">post</option>
                        <option value="">Vod</option>
                    </select>
                    <input type="text" placeholder="">
                    <button type="button" class="search_btn pc" ><i class="xi-search"></i></button>
                    <button type="button" class="search_btn mb" data-bs-toggle="modal" data-bs-target=".search_modal"><i class="xi-search"></i></button>
                </div>
                <div class="my_p">
                    <a><img src="./images/icon_4.png" alt=""> <span>My Page</span></a>
                    <ul>
                        <li>
                            <a href="./settings.php"><i class="xi-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="./profile_settings.php"><i class="xi-user-o"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="./notice.php"><i class="xi-mail-o"></i> My Post</a>
                        </li>
                        <li>
                            <a href="./survey_status.php"><i class="xi-list-number"></i> My Survey</a>
                        </li>
                        <li>
                            <a href=""><i class="xi-help-o"></i> Help &amp; Terms</a>
                        </li>
                        <li>
                            <a href=""><i class="xi-log-out"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="m_menu">
            <div class="mem_info">
                <div class="mi_photo">
                    <img src="./images/mem_in_photo_f.png" alt="">
                    <img src="./images/img_2.jpg" class="real_img" alt="">
                </div>
                <div class="mi_name">
                    <p>Mr. Park</p>
                </div>
            </div>
            <div class="m_gnb">
                <ul>
                    <li>
                        <a href="./index.php"><img src="./images/icon_1.png" alt=""> Home</a>
                    </li>
                    <li>
                        <a href="./feed.php"><img src="./images/icon_2.png" alt=""> Feed</a>
                    </li>
                    <li>
                        <a href="./notifi.php"><img src="./images/icon_5.png" alt=""> Notifications</a>
                    </li>
                    <li>
                        <a href="./moim.php"><img src="./images/icon_3.png" alt=""> Moim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--검색모달:s-->
<div class="modal fade search_modal" tabindex="-1" aria-labelledby="search_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="search_mod_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="search_mod_form">
                    <div class="search_mod_input">
                        <div class="smi_select">
                            <select name="" id="">
                                <option value="">Meeting</option>
                                <option value="">Member</option>
                                <option value="">post</option>
                                <option value="">Vod</option>
                            </select>
                        </div>
                        <div class="smi_input">
                            <input type="text">
                        </div>
                    </div>
                    <div class="modal_search_btn">
                        <button type="button"><i class="xi-search"></i> Search</button>
                    </div>
                    <div class="prd_bst_keyword">
                        <h2>Keywords Top 10</h2>
                        <ul>
                            <li><a href=""><span>1.</span> Golf</a></li>
                            <li><a href=""><span>2.</span> Surfing</a></li>
                            <li><a href=""><span>3.</span> Soccer</a></li>
                            <li><a href=""><span>4.</span> Snow Board</a></li>
                            <li><a href=""><span>5.</span> Chess</a></li>
                            <li><a href=""><span>6.</span> Swimming</a></li>
                            <li><a href=""><span>7.</span> Pc Game</a></li>
                            <li><a href=""><span>8.</span> Scuba Diving</a></li>
                            <li><a href=""><span>9.</span> Yoga</a></li>
                            <li><a href=""><span>10.</span> Bicycle</a></li>
                        </ul>
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
<!--검색모달:e-->
<button type="button" class="top_btn"><i class="xi-arrow-top" onclick="$('html,body').stop().animate({scrollTop:0}, 1000);"></i><span>top</span></button>