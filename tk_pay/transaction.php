<?php include "./lib/meta.php"; ?>
<?php include "./lib/sub_head.php"; ?>

    <div class="sub_title">
        <h2>거래내역 조회</h2>
        <button type="button">가이드</button>
    </div>
    <div class="select_input_form">
        <div class="sif_b">
            <div class="period_sel">
                <ul>
                    <li>
                        <input type="radio" checked="checked" id="one_day" name="period">
                        <label for="one_day">당일</label>
                    </li>
                    <li>
                        <input type="radio" name="period" id="one_week">
                        <label for="one_week">1주일</label>
                    </li>
                    <li>
                        <input type="radio" name="period" id="one_month">
                        <label for="one_month">1개월</label>
                    </li>
                    <li>
                        <input type="radio" name="period" id="three_year">
                        <label for="three_year">3개월</label>
                    </li>
                </ul>
            </div>
            <div class="dtd_sel">
                <ul>
                    <li>
                        <input type="text" placeholder="2018.11.28">
                        <button type="button"><img src="./images/icon_21.png" alt=""></button>
                    </li>
                    <li>
                        <input type="text" placeholder="2018.11.28">
                        <button type="button"><img src="./images/icon_21.png" alt=""></button>
                    </li>
                </ul>
                <p>* 최대 조회 기간은 7일 입니다.</p>
            </div>
            <div class="pay_p_sel">
                <ul>
                    <li>
                        <select name="" id="">
                            <option value="">결제수단</option>
                            <option value="">결제수단1</option>
                            <option value="">결제수단2</option>
                            <option value="">결제수단3</option>
                            <option value="">결제수단4</option>
                        </select>
                    </li>
                    <li>
                        <select name="" id="">
                            <option value="">결제상태</option>
                            <option value="">결제수단1</option>
                            <option value="">결제수단2</option>
                            <option value="">결제수단3</option>
                            <option value="">결제수단4</option>
                        </select>
                    </li>
                    <li>
                        <input type="text" placeholder="승인번호">
                    </li>
                    <li>
                        <select name="" id="">
                            <option value="">단말기번호</option>
                            <option value="">결제수단1</option>
                            <option value="">결제수단2</option>
                            <option value="">결제수단3</option>
                            <option value="">결제수단4</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <div class="input_btn">
            <button type="button" class="bg_blue_1"><img src="./images/icon_22.png" alt="">조회</button>
        </div>
    </div>
    <div class="pay_detail">
        <div class="pd_tit">
            <h2>4건</h2>
            <p>총 166,249원</p>
        </div>
        <div class="pd_table">
            <ul>
                <li>
                    <a href="">
                        <div class="pdt_l">
                            <h3><img src="./images/logo.png" alt="">TK페이</h3>
                            <p>승인  ｜ 2022.08.08 ｜ 19:00:24</p>
                        </div>
                        <div class="pdt_r">
                            <p>99,504원<img src="./images/right_r.png" alt=""></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="pdt_l">
                            <h3><img src="./images/logo.png" alt="">TK페이</h3>
                            <p>승인  ｜ 2022.08.08 ｜ 19:00:24</p>
                        </div>
                        <div class="pdt_r">
                            <p>99,504원<img src="./images/right_r.png" alt=""></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="pdt_l">
                            <h3><img src="./images/logo.png" alt="">TK페이</h3>
                            <p>승인  ｜ 2022.08.08 ｜ 19:00:24</p>
                        </div>
                        <div class="pdt_r">
                            <p>99,504원<img src="./images/right_r.png" alt=""></p>
                        </div>
                    </a>
                </li>
            </ul>
            
        </div>
        
    </div>
    
    







<?php include "./lib/footer.php"; ?>