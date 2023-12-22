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
                <h2>Member Login</h2>
                <div class="sign_up_form_de">
                    <ul>
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
                        </li>
                    </ul>
                    <div class="sf_bt_btn">
                        <button type="button">Login</button>
                        <button type="button" class="btn_gray" onclick="location.href='./join.php'">Sign Up</button>
                    </div>
                    <div class="login_bottom_txt">
                        <p>Check out our various meetings </p>
                        <button type="button" onclick="location.href='./index.php'">go to see</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>