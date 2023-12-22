<?php include "./lib/meta.php"; ?>
   

<div class="wrap">
    <div class="con">
        <div class="sign_form">
            <div class="sign_form_tit">
                <div class="log_back">
                    <button type="button" onclick="location.href='./login.php'"><i class="xi-long-arrow-left"></i></button>
                </div>
                <a href="./index.php"><img src="./images/logo.png" alt=""></a>
                <h2>Sign up</h2>
            </div>
            <div class="signup_form_input">
                <ul>
                    <li>
                        <p>ID</p>
                        <div class="su_f_b">
                            <input type="text">
                            <button type="button">Check Availabillity</button>
                        </div>
                        <span>Please include at least one lower-case letter and one special character.</span>
                    </li>
                    <li>
                        <p>Password</p>
                        <div class="su_f_b">
                            <input type="password">
                        </div>
                        <span>Please write different characters from your ID (not allowed three or more characters used in your ID)</span>
                    </li>
                    <li>
                        <p>Confirm Password</p>
                        <div class="su_f_b">
                            <input type="password">
                        </div>
                        <span>Please re-enter your password to recheck.</span>
                    </li>
                    <li>
                        <p>Email</p>
                        <div class="su_f_b">
                            <input type="text">
                            <b>@</b>
                            <input type="text">
                            <button type="button">Check Availabillity</button>
                        </div>
                        <span>You will receive an e-mail of 'confirming your account', after you finish this registration form.</span>
                    </li>
                    <li>
                        <p>Email</p>
                        <div class="su_f_b">
                            <select name="" id="">
                                <option value="">12</option>
                                <option value="">12</option>
                                <option value="">12</option>
                                <option value="">12</option>
                                <option value="">12</option>
                            </select>
                        </div>
                        <span>You will receive an e-mail of 'confirming your account', after you finish this registration form.</span>
                    </li>
                    <li>
                        <p>Gender</p>
                        <div class="su_f_b for_gender">
                            <label for="g_male">
                                <input type="radio" name="gender" id="g_male">
                                <span><i class="xi-man"></i> male</span>
                            </label>
                            <label for="g_female">
                                <input type="radio" name="gender" id="g_female">
                                <span><i class="xi-woman"></i> female</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <p>Agreement on Email Recipt</p>
                        <div class="su_f_b">
                            <label for="agree_ck">
                                <input type="checkbox" id="agree_ck">
                                <span>Agree</span>
                            </label>
                        </div>
                        <span>- If you agree, you'll get information on the Sead in Games, and various marketing events on your email.</span>
                        <span>- E-mail about your account and information will be sent to you even though you didn't agree.</span>
                    </li>
                </ul>
            </div>
            <div class="sign_form_signup">
                <button type="button" class="blue_link" onclick="location.href='./index.php'">SIGN UP</button>
            </div>
            
        </div>
    </div>
</div>




<?php include "./lib/footer.php"; ?>