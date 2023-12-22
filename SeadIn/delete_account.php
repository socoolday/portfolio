<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>
<div class="moim_fix_menu">
    <div class="mfm_cover">
        <button type="button" class="mfm_on"><img src="./images/mfm_icon.png" alt=""></button>
        <button type="button" class="mfm_close"><i class="xi-close-circle-o"></i></button>
    </div>
</div>  
<div class="wrap">
    <div class="page_title">
        <h2>Delete account</h2>
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
                        <option value="">계정삭제</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    <div class="con"> 
        <div class="delete_con">
            <div class="feed_con delete_box">
                <div class="delete_img">
                    <img src="./images/delete_account_img.jpg" alt=""/>
                    <p>Delete account</p>
                </div>
                <div class="delete_text">
                    <p>If you delete your account</p>
                    <div class="delete_text_box">
                        <p>- My profile, invitation history,  paid product purchase and downlo  ad history, sticker<br/>

                            - free download history, and meeting account all disappear, and recovery is impossible.<br/>

                            - You will be withdrawn from all meetings and pages you are participating in.
                        </p>
                    </div>
                </div>
                <div class="delete_account_button">
                    <form method="" action="">
                        <label>
                            <input type="checkbox" name="" value="">
                            <p>I agree to account deletion.</p>
                        </label>
                    </form>
                    <div class="delete_account_bt">
                        <button class="orange_button" type="button">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./lib/footer.php"; ?>