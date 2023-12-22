<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>


<div class="wrap">
    <div class="page_title">
        <h2>Writing</h2>
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
        <div class="settings_li profile_settings_li">
            <div class="settings_list">
                <div class="blur_box_li">
                    <div class="list_search_bar_list list_search_bar_list_pc">
                        <div class="search_bar_list_img">
                            <img src="./images/img_1.jpg" alt=""/>
                        </div>
                        <p>Kim Sohui</p>
                        <div class="change_bt">
                            <button type="button" class="img_upload_box">
                                <p>change</p><img src="./images/inf.png" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="list_search_bar_list list_search_bar_list_m">
                        <div class="profile_settings_img_box">
                            <div class="search_bar_list_img">
                                <img src="./images/img_1.jpg" alt=""/>
                            </div>
                            <p>Kim Sohui</p>
                        </div>
                        <div class="change_bt">
                            <button type="button" class="img_upload_box">
                                <p>change</p><img src="./images/inf.png" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="to_make_quiz">
                        <ul>
                            <li class="profile_settings_li">
                                <p>Profile picture</p>
                                <div class="img_file_box">
                                    <div>
                                        <button type="button" class="file_upload_box">
                                            <img src="./images/writing.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="profile_settings_li">
                                <div>
                                    <p>Nickname</p>
                                    <input type="text" placeholder="Millennium Baby">
                                </div>
                            </li>
                            <li class="profile_settings_li">
                                <div class="my_info">
                                    <p>My Info</p>
                                    <div class="my_info_box">
                                        <ul>
                                            <li>
                                                <div class="my_info_box_li gender_info_box">
                                                    <p>Gender</p>
                                                    <div class="gender_box">
                                                        <div class="obj_test">
                                                            <label class="test_obj">
                                                                <input type="radio" name="gender" value="man">
                                                                <span>Man</span>
                                                            </label>
                                                        </div>
                                                        <div class="obj_test">
                                                            <label class="test_obj">
                                                                <input type="radio" name="gender" value="woman">
                                                                <span>Woman</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my_info_box_li birthday_info_box">
                                                    <p>Birthday</p>
                                                    <input type="date" placeholder="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my_info_box_li phone_numbe_input">
                                                    <p>Phone number</p>
                                                    <input type="tel">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>      
                    </div>
                    <div class="blur_box_button">
                        <button type="button" class="blur_box_button_con button_con_y">
                        Produce</button>
                        <button type="button" class="blur_box_button_con button_con_g">
                        cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include "./lib/footer.php"; ?>