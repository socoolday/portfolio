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
        <div class="settings_li">
            <div class="settings_list">
                <div class="blur_box_li">
                    <div class="list_search_bar_list">
                        <div class="search_bar_list_ip">
                            <div class="search_bar_list_img">
                                <img src="./images/img_1.jpg" alt=""/>
                            </div>
                        <p>Kim Sohui</p>
                        </div>
                        <div class="go_back_img">
                            <a href="">
                                <img src="./images/nxt_btn2.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="writing_content_box">
                        <div class="writing_textarea">
                            <textarea name="content"></textarea>
                        </div>
                        <div class="writing_content_img">
                           <div class="writing_img_bt">
                                <button type="button" class="writing_img_button">
                                    <img src="./images/writing.png" alt="">
                                </button>
                           </div>
                        </div>
                    </div>
                    <div class="to_make_quiz">
                        <input id="check-btn" type="checkbox" />
                        <label for="check-btn" class="to_make_quiz_bt"><i class="xi-plus-min"></i>Create a poll or quiz</label>
                        <div class="to_make_list">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Post</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Comment</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <ul>
                                        <li class="make_quiz_li make_quiz_title">
                                            <p>title</p>
                                            <input type="text" placeholder="Please enter a title...">
                                        </li>
                                        <li class="make_quiz_li make_quiz_date">
                                            <div class="date_list date_list_first">
                                                <p>start date</p>
                                                <input class="date_list_first" type="date" placeholder="">
                                            </div>
                                            <div class="date_list">
                                                <p>end date</p>
                                                <input type="date" placeholder="">
                                            </div>
                                        </li>
                                        <li class="make_quiz_li make_quiz_content">
                                            <p>contents</p>
                                            <input type="text" placeholder="Please fill in your survey...">
                                        </li>
                                        <li class="make_quiz_li make_quiz_answer">
                                            <p>answer</p>
                                            <div class="answer_box">
                                                <input type="text" placeholder="Answer1">
                                                <input type="text" placeholder="Answer 2">
                                                <div class="answer_box_bt">
                                                    <button type="button" class="button_con_y"><i class="xi-plus-min"></i></button>
                                                    <button type="button" class="button_con_g"><i class="xi-minus-min"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="to_make_quiz_bt_box">
                                        <label for="check-btn" class="to_make_quiz_bt"><i class="xi-plus-min"></i>Create a poll or quiz</label>
                                        <label for="check-btn" class="to_make_quiz_bt close_quiz_bt"><i class="xi-close-min"></i>Cancel the survey</label>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <ul>
                                        <li class="make_quiz_li make_quiz_title">
                                            <p>title</p>
                                            <input type="text" placeholder="Please enter a title...">
                                        </li>
                                        <li class="make_quiz_li make_quiz_date">
                                            <div class="date_list">
                                                <p>start date</p>
                                                <input type="date" placeholder="">
                                            </div>
                                            <div class="date_list">
                                                <p>end date</p>
                                                <input type="date" placeholder="">
                                            </div>
                                        </li>
                                        <li class="make_quiz_li make_quiz_content">
                                            <p>contents</p>
                                            <input type="text" placeholder="Please fill in your survey...">
                                        </li>
                                        <li class="make_quiz_li make_quiz_answer">
                                            <p>answer</p>
                                            <div class="answer_box">
                                                <input type="text" placeholder="Answer 1">
                                                <input type="text" placeholder="Answer 2">
                                                <div class="answer_box_bt">
                                                    <button type="button" class="button_con_y"><i class="xi-plus-min"></i></button>
                                                    <button type="button" class="button_con_g"><i class="xi-minus-min"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="to_make_quiz_bt_box">
                                        <label for="check-btn" class="to_make_quiz_bt"><i class="xi-plus-min"></i>Create a poll or quiz</label>
                                        <label for="check-btn" class="to_make_quiz_bt close_quiz_bt"><i class="xi-close-min"></i>Cancel the survey</label>
                                    </div>
                                </div>
                            </div>
                        </div>    
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