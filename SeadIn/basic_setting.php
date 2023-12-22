<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>


<div class="wrap">
    <div class="page_title">
        <h2>Basic Settings</h2>
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
                <li>
                    <select name="" id="">
                        <option value="">기본 설정</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="con">
        <div class="settings_li">
            <div class="settings_list">
                <div class="basic_setting_list">
                    <div class="basic_settings_title">
                        <p>Basic Setting</p>
                    </div>
                    <div class="basic_settings_box">
                        <div class="basic_settings">
                            <p>Allow notifications</p>
                            <div class="settings_ladio">
                                <input type="checkbox" name="toggle1" id="toggle1" value="1">
                                <label for="toggle1"></label>
                            </div>
                        </div>
                        <div class="basic_settings">
                            <p>Allow meeting invitations</p>
                            <div class="settings_ladio">
                                <input type="checkbox" name="toggle2" id="toggle2" value="2">
                                <label for="toggle2"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include "./lib/footer.php"; ?>