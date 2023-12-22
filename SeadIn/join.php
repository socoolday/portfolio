<?php include "./lib/meta.php"; ?>

    <style>
        body{padding-bottom: 0;}
    </style>
    <div class="sign_form">
        <div class="sign_form_l">
            <div class="sfl_cover">
                <img src="./images/sign_up_logo.png" alt="">
                <p>Meet various people in <span>SeeD in</span></p>
                <h2>Happy meeting<br/>with various people</h2>
                <div class="sfbimg">
                    <img src="./images/sign_up_icon.png" alt="">
                </div>
            </div>
        </div>
        <div class="sign_form_r">
            <div class="sfr_cover">
                <h2>Sing Up</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Sign_up_mem" type="button" role="tab" aria-controls="home" aria-selected="true">Member</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Educator</button>
                    </li>
                </ul>
                <div class="tab-content sign_up_form_de" id="myTabContent">
                    <div class="tab-pane fade show active" id="Sign_up_mem" role="tabpanel" aria-labelledby="home-tab">
                        <ul>
                            <li>
                                <p>Profile picture *</p>
                                <div class="sfr_input_b long_btn_img">
                                    <span><img src="./images/icon_14.png" alt=""></span>
                                    <button type="button">Add Photo</button>
                                </div>
                            </li>
                            <li>
                                <p>id *</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your User Id...">
                                </div>
                            </li>
                            <li>
                                <p>password *</p>
                                <div class="sfr_input_b">
                                    <input type="password" placeholder="At least 8 letters and numbers">
                                </div>
                                <div class="sfr_input_b">
                                    <input type="password" placeholder="Re-enter password">
                                </div>
                            </li>
                            <li>
                                <p>nickname *</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your Nick Name">
                                </div>
                            </li>
                            <li>
                                <p class="uncolor">name</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your Name">
                                </div>
                            </li>
                            <li>
                                <p>birthday *</p>
                                <div class="sfr_input_b birth">
                                    <input type="date" id="date" max="2077-06-20"  min="1900-01-01" value="2022-11-09">
                                </div>
                            </li>
                            <li>
                                <p>gender *</p>
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
                            </li>
                        </ul>
                        <div class="sf_bt_btn">
                            <button type="button">Sign Up</button>
                            <button type="button" class="btn_gray" onclick="location.href='./login.php'">Login</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul>
                            <li>
                                <p>Profile picture *</p>
                                <div class="sfr_input_b long_btn_img">
                                    <span><img src="./images/icon_14.png" alt=""></span>
                                    <button type="button">Add Photo</button>
                                </div>
                            </li>
                            <li>
                                <p>id *</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your User Id...">
                                </div>
                            </li>
                            <li>
                                <p>password *</p>
                                <div class="sfr_input_b">
                                    <input type="password" placeholder="At least 8 letters and numbers">
                                </div>
                                <div class="sfr_input_b">
                                    <input type="password" placeholder="Re-enter password">
                                </div>
                            </li>
                            <li>
                                <p>nickname *</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your Nick Name">
                                </div>
                            </li>
                            <li>
                                <p class="uncolor">name</p>
                                <div class="sfr_input_b">
                                    <input type="text" placeholder="Enter Your Name">
                                </div>
                            </li>
                            <li>
                                <p>birthday *</p>
                                <div class="sfr_input_b birth">
                                    <input type="date" id="date" max="2077-06-20"  min="1900-01-01" value="2022-11-09">
                                </div>
                            </li>
                            <li>
                                <p>gender *</p>
                                <div class="sfr_input_b btn_group">
                                    <button type="button" class="selectd">male</button>
                                    <button type="button">female</button>
                                </div>
                            </li>
                        </ul>
                        <div class="sf_bt_btn">
                            <button type="button">Sign Up</button>
                            <button type="button" class="btn_gray" onclick="location.href='./login.php'">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>