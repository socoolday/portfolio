<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>

<div class="moim_fix_menu">
    <div class="mfm_cover">
        <button type="button" class="mfm_on"><img src="./images/mfm_icon.png" alt=""></button>
        <div class="mfm_ml">
            <ul>
                <li>
                    <a href=""><img src="./images/icon_6.png" alt="">Member</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_7.png" alt="">Video Chat</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_8.png" alt="">Chat room</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_9.png" alt="">Post</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_10.png" alt="">VOD</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_11.png" alt="">Survey</a>
                </li>
                <li>
                    <a href=""><img src="./images/icon_12.png" alt="">Settings</a>
                </li>
            </ul>
            <button type="button" class="mfm_close"><i class="xi-close-circle-o"></i></button>
        </div>
        
    </div>
</div>

<div class="chatting_room">
    <div class="wrap">
        <div class="page_title page_title_pc">
            <h2>Chatting</h2>
        </div>
<!--
        <div class="page_nav">
            <div class="con">
                <ul>
                    <li>
                        <a href="./index.php"><img src="./images/home_icon_sm.png" alt="">Home</a>
                    </li>
                    <li>
                        <select name="" id="">
                            <option value="">채팅</option>
                        </select>
                    </li>
                    <li>
                        <select name="" id="">
                            <option value="">채팅목록</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
-->
        <div class="con"> 
            <div class="chat_room">
                <div class="chat_member chat_member_pc">
                    <div class="chat_backwards">
                        <a href="./chatting.php"><img src="./images/prv_btn2.png" alt=""></a>
                    </div>
                    <div class="chat_member_box">
                        <div class="chat_member_img">
                            <img src="./images/fp1_p_2.png" alt="">
                        </div>
                        <p class="chat_member_name">Baek Seunghwan</p>
                        <div class="participant">
                            <i class="xi-user-o"></i>
                            <p>2</p>
                        </div>
                    </div>
                </div>
                <div class="chat_contents">
                    <div class="chat_opponent_all">
                        <div class="chat_opponent">
                            <div class="chat_opponent_img chat_profile">
                                <img src="./images/fp1_p_2.png" alt="">
                            </div>
                            <div class="opponent_contents_box">
                                <div class="contents_box_time">
                                    <p>Today at 5:30 PM</p>
                                </div>
                                <div class="chat_opponent_contents chat_contents_box">
                                    <p>Hi! How was your weekend scuba diving?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat_my_all">
                        <div class="chat_my">
                            <div class="my_contents_box">
                                <div class="contents_box_time">
                                    <p>Today at 5:30 PM</p>
                                </div>
                                <div class="chat_my_contents chat_contents_box">
                                    <p>It was so much fun!<br>I'll send you a picture I took over the weekend</p>
                                </div>
                            </div>
                            <div class="chat_my_img  chat_profile">
                                <img src="./images/img_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="chat_my">
                            <div class="my_contents_box">
                                <div class="chat_img">
                                    <button type="button" class="chat_img_bt"><img src="./images/ct_img1.jpg" alt=""></button>
                                </div>
                            </div>
                            <div class="chat_my_img  chat_profile">
                                <img src="./images/img_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="chat_opponent_all">
                        <div class="chat_opponent">
                            <div class="chat_opponent_img chat_profile">
                                <img src="./images/fp1_p_2.png" alt="">
                            </div>
                            <div class="opponent_contents_box">
                                <div class="contents_box_time">
                                    <p>Today at 5:30 PM</p>
                                </div>
                                <div class="chat_opponent_contents chat_contents_box">
                                    <p>Wow what a perfect picture!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat_opponent_all">
                        <div class="chat_opponent">
                            <div class="chat_opponent_img chat_profile">
                                <img src="./images/fp1_p_2.png" alt="">
                            </div>
                            <div class="opponent_contents_box">
                                <div class="contents_box_time">
                                    <p>Today at 5:31 PM</p>
                                </div>
                                <div class="chat_opponent_contents chat_contents_box">
                                    <p>I am also planning to go there this weekend!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat_time">
                        <p>March 13, 2022 at 10:53 am</p>
                    </div>
                    <div class="chat_my_all">
                        <div class="chat_my">
                            <div class="my_contents_box">
                                <div class="contents_box_time">
                                    <p>Today at 5:30 PM</p>
                                </div>
                                <div class="chat_my_contents chat_contents_box">
                                    <p>Be sure to visit! it was such a fun day :)</p>
                                </div>
                            </div>
                            <div class="chat_my_img  chat_profile">
                                <img src="./images/img_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat_bottom">
                    <div class="chat_input_box">
                        <div class="img_upload">
                            <button type="button" class="chat_img_upload" ><img src="./images/img_bt.png" alt=""></button>
                        </div>
                        <div class="chat_input">
                            <input type="text" placeholder="">
                            <button type="button" class="chat_input_bt" ><img src="./images/send.png" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="chat_bottom_m">
                    <div class="chat_input_box">
                        <div class="img_upload">
                            <button type="button" class="chat_img_upload" ><img src="./images/img_bt.png" alt=""></button>
                        </div>
                        <div class="chat_input">
                            <input type="text" placeholder="">
                            <button type="button" class="chat_input_bt" ><img src="./images/send.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include "./lib/footer.php"; ?>