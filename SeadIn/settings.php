<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>


<div class="wrap">
    <div class="page_title">
        <h2>Settings</h2>
    </div>
    <div class="page_nav">
        <div class="con">
            <ul>
                <li>
                    <a href="./index.php"><img src="./images/home_icon_sm.png" alt="">Home</a>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">내정보</option>
                        <option value="">Feed</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="con">
        <div class="settings_li">
            <div class="profile_img">
                <img src="./images/img_1.jpg" alt="">
            </div>
            <div class="settings_list">
                <div class="settings_list_lk">
                    <a href="./profile_settings.php">
                        <p>Profile in use</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./basic_setting.php">
                        <p>Basic Setting</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./meeting_request.php">
                        <p>Requested to participate</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./my_article.php">
                        <p>My writing</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./survey_status.php">
                        <p>Survey Status</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./program_info.php">
                        <p>Program information</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
                <div class="settings_list_lk">
                    <a href="./delete_account.php">
                        <p>Delete account</p>
                        <p><img src="./images/nxt_btn2.png" alt=""></p>
                    </a>
                </div>
            </div>
        </div>
        <button type="button" class="log_out"><span>LOG OUT</span></button>
    </div>
</div>







<?php include "./lib/footer.php"; ?>