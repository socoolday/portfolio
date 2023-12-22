<?php include "./lib/meta.php"; ?>
   

<div class="wrap">
    <div class="con">
        <div class="sign_form">
            <div class="sign_form_tit">
                <div class="log_back">
                    <button type="button" onclick="location.href='./index.php'"><i class="xi-long-arrow-left"></i></button>
                </div>
                <a href="./index.php"><img src="./images/logo.png" alt=""></a>
                <h2>Sign in</h2>
            </div>
            <div class="sign_form_input">
                <ul>
                    <li>
                        <i class="xi-user"></i>
                        <input type="text" placeholder="Enter your Id">
                    </li>
                    <li>
                        <i class="xi-lock"></i>
                        <input type="password" placeholder="Enter your Password">
                    </li>
                    <li>
                        <button type="button" class="login_btn" onclick="location.href='./index.php'">Login</button>
                    </li>
                </ul>
            </div>
            <div class="sign_form_sns">
                <ul>
                    <li>
                        <a href=""><i class="xi-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="xi-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="xi-google-plus"></i></a>
                    </li>
                </ul>
            </div>
            <div class="sign_form_signup">
                <p>Don't have an account yet?</p>
                <button type="button" onclick="location.href='./sign_up.php'">SIGN UP</button>
            </div>
            
        </div>
    </div>
</div>




<?php include "./lib/footer.php"; ?>