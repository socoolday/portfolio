<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="sub_title">
        <h2> TK-PAY 충전하기</h2>
    </div>
    <div class="tk_p_charging">
        <div class="tpc_box">
            <div class="tpcb_form">
                <label>
                    <input type="radio" name="radio"/>
                    <span>1,000.00 THB</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>2,000.00 THB</span>
                </label>
                <label>
                    <input type="radio" name="radio"/>
                    <span>2,000.00 THB</span>
                </label>
            </div>
            <div class="pay_list_group">
                <div class="plg_b">
                    <h2>계좌정보</h2>
                    <ul>
                        <li>
                            <p>TK-PAY</p><span>0000-000-0000-0000</span>
                        </li>
                    </ul>
                </div>
                <div class="input_g_list" style="margin-top:2rem;">
                    <ul class="one_line">
                        <li>
                            <div class="igl_tit">
                                <p>입금자명</p>
                            </div>
                            <div class="igl_input">
                                <input type="text" placeholder="이름입력" style="text-align:left; flex-basis:100%;">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="input_btn">
                    <button type="button" class="bg_blue_1">입금하기</button>
                </div>
            </div>
        </div>
    </div>
<style>

.tk_p_charging{padding:1rem;}
.tpcb_form{display: flex; flex-wrap: wrap; flex-direction: column;}
.tpcb_form label {display: flex;cursor: pointer; font-weight: 500; position: relative; overflow: hidden; margin-bottom: 2rem; flex-basis: 100%;}
.tpcb_form label input {position: absolute; left: -9999px;}
.tpcb_form label input:checked + span {background-color: #3658c9; color:#fff;}
.tpcb_form label input:checked + span:before {box-shadow: inset 0 0 0 1.5rem #00005c;}
.tpcb_form label span {display: flex; align-items: center; padding: 3rem; flex-basis: 100%; border-radius: 2rem; transition: 0.25s ease; font-size:3.4rem; background-color:#f2f2f2;}
.tpcb_form label span:hover {background-color: #d6d6e5;}
.tpcb_form label span:before {display: flex; flex-shrink: 0; content: ""; background-color: #fff; width: 1.5em; height: 1.5em; border-radius: 50%; margin-right: 0.375em; transition: 0.25s ease; box-shadow: inset 0 0 0 0.125em #00005c;} 
    
</style>






<?php include "./lib/footer.php"; ?>