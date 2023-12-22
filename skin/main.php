<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>

<!--팝업창:s-->
<!--
<div id="popup_layer">
    <div class="popup_box">
        팝업 컨텐츠 영역
        <div class="popup_cont">
            <h2>오늘의 이벤트</h2>
            <div class="pop_contents">
                asdf
            </div>
        </div>
        팝업 버튼 영역
        <div class="popup_btn">
            하루동안 보지않기
            <a id="chk_today" href="javascript:closeToday();" class="close_day">오늘하루 보지 않기</a>
            7일간 보지않기
             <a id="chk_today" href="javascript:closeToday();" class="close_day">일주일간 보지 않기</a>
            <a href="javascript:closePop();">닫기</a>
        </div>
    </div>
</div>
-->
<!--팝업창:e-->

<!--skin visual_banner:s-->
<div class="vi_ban">
    <div class="visual_ban">
        <div>
            <a href="./detail.php"><img src="./images/vi_banner_1.png" alt="" class="pc"></a>
            <a href="./detail.php"><img src="./images/vi_banner_1_mb.png" alt="" class="mb"></a>
        </div>
        <div>
            <a href="./detail.php"><img src="./images/vi_banner_1.png" alt="" class="pc"></a>
            <a href="./detail.php"><img src="./images/vi_banner_1_mb.png" alt="" class="mb"></a>
        </div>
        <div>
            <a href="./detail.php"><img src="./images/vi_banner_1.png" alt="" class="pc"></a>
            <a href="./detail.php"><img src="./images/vi_banner_1_mb.png" alt="" class="mb"></a>
        </div>
    </div>
    <div class="banner_btn">
        <button type="button" class="vi_prev_btn rol_btn"><i class="xi-angle-left-thin"></i></button>
        <button type="button" class="vi_next_btn rol_btn"><i class="xi-angle-right-thin"></i></button>
    </div>
</div>
<div class="vbb_cover">
    <div class="shop_con">
        <div class="vb_banner">
            <div class="vbb_1">
                <div>
                    <a href="./detail.php"><img src="./images/vbb_1.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_2.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_3.png" alt="" ></a>
                </div>
            </div>
            <div class="vbb_2">
                <div>
                    <a href="./detail.php"><img src="./images/vbb_2.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_1.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_3.png" alt="" ></a>
                </div>
            </div>
            <div class="vbb_3">
                <div>
                    <a href="./detail.php"><img src="./images/vbb_3.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_2.png" alt="" ></a>
                </div>
                <div>
                    <a href="./detail.php"><img src="./images/vbb_1.png" alt="" ></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--skin visual_banner:e-->

<!--skin main_prd:s-->
<div class="best_item">
    <div class="shop_con">
        <div class="vi_under_ban">
            <div class="two_slider_fir">
                <div class="tsf_ban">
                    <div>
                        <img src="./images/vbbb_1.png" alt="">
                    </div>
                    <div>
                        <img src="./images/vbbb_1.png" alt="">
                    </div>
                    <div>
                        <img src="./images/vbbb_1.png" alt="">
                    </div>
                </div>
                <div class="control_btn">
                    <button type='button' class='tsf-prev'><i class='xi-angle-left-thin'></i></button>
                    <button type="button" class="vbb_stop"><img src="images/vbb_play.png" alt="" class="stop"/><i class="xi-play play"></i></button>
                    <button type='button' class='tsf-next'><i class='xi-angle-right-thin'></i></button>
                </div>
            </div>
            <div class="two_slider_sec">
                <div class="tsc_ban">
                    <div>
                        <img src="./images/vbbb_2.png" alt="">
                    </div>
                    <div>
                        <img src="./images/vbbb_2.png" alt="">
                    </div>
                    <div>
                        <img src="./images/vbbb_2.png" alt="">
                    </div>
                </div>
                <div class="control_btn">
                    <button type='button' class='tsc-prev'><i class='xi-angle-left-thin'></i></button>
                    <button type="button" class="vbb_stop"><img src="images/vbb_play.png" alt="" class="stop_2" /><i class="xi-play play_1"></i></button>
                    <button type='button' class='tsc-next'><i class='xi-angle-right-thin'></i></button>
                </div>
            </div>
        </div>
        <div class="prd_list">
            <div class="prd_tit">
                <h1><strong>Best Item </strong><span>베스트 상품을 한눈에 볼수 있습니다.</span></h1>
                <a href=""><span>베스트 상품 더보기</span> <i class="xi-plus-square"></i></a>
            </div>
            <ul class="prd_l_style">
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_1.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_2.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                        <div class="soldout_b">Sold Out</div>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a href="" class="prd_name disabled" >Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_3.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_4.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_5.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_6.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_7.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="prd_img">
                        <a href="./detail.php" class="prd_img_clk">
                            <img src="./images/prd_8.png" alt="" class="scale_img">
                        </a>
                        <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                        <span class="sale_per">30%</span>
                    </div>
                    
                    <div class="prd_txt">
                        <a class="brand_name" href="">Brand Name</a>
                        <a class="prd_name" href="">Night Brightening Essence  </a>
                        <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                        <div class="prd_price_cover">
                            <p class="pp_sales">24,000 원</p>
                            <p class="pp_num">24,000 원</p>
                        </div>
                        <div class="prd_even_b">
                            <ul>
                                <li class="peb_txt_sold">Sold Out</li>
                                <li class="peb_txt_sale">Sale</li>
                                <li class="peb_txt_best">Best</li>
                                <li class="peb_txt_hot">Hot</li>
                                <li class="peb_txt_new">New</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="prd_view_more">
                <button type="button">상품 더보기 <i class="xi-plus-thin"></i></button>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="weekly_best">
    <div class="shop_con middle_title">
        <h1><span>W</span>eekly Best</h1>
        <p>금주의 베스트 상품들을 만나보세요.</p>
        <ul class="weekly_prd">
            <li>
                <div class="vbb_3">
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban.png" alt="" class="scale_img"></a></div>
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban.png" alt="" class="scale_img"></a></div>
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban.png" alt="" class="scale_img"></a></div>
                </div>
            </li>
            <li>
                <div class="vbb_3">
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban_2.png" alt="" class="scale_img"></a></div>
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban_2.png" alt="" class="scale_img"></a></div>
                    <div class="wb_ban"><a href=""><img src="./images/midb_ban_2.png" alt="" class="scale_img"></a></div>
                </div>
            </li>
        </ul>
        <ul class="prd_l_style">
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_9.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>
                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_10.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_11.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_12.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_13.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_14.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_15.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_16.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="prd_view_more">
            <button type="button">상품 더보기 <i class="xi-plus-thin"></i></button>
        </div>
    </div>
</div>
<hr>
<div class="new_prd">
    <div class="shop_con">
        <div class="middle_title">
            <h1><span>N</span>ew Product</h1>
            <p>따끈따끈한 신상들을 만나보세요.</p>
        </div>
        <ul class="prd_l_style">
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_17.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>
                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_18.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_19.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_20.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_21.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_22.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_23.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="prd_img">
                    <a href="./detail.php" class="prd_img_clk">
                        <img src="./images/prd_24.png" alt="" class="scale_img">
                    </a>
                    <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                    <span class="sale_per">30%</span>
                </div>

                <div class="prd_txt">
                    <a class="brand_name" href="">Brand Name</a>
                    <a class="prd_name" href="">Night Brightening Essence  </a>
                    <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                    <div class="prd_price_cover">
                        <p class="pp_sales">24,000 원</p>
                        <p class="pp_num">24,000 원</p>
                    </div>
                    <div class="prd_even_b">
                        <ul>
                            <li class="peb_txt_sold">Sold Out</li>
                            <li class="peb_txt_sale">Sale</li>
                            <li class="peb_txt_best">Best</li>
                            <li class="peb_txt_hot">Hot</li>
                            <li class="peb_txt_new">New</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="prd_view_more">
            <button type="button">상품 더보기 <i class="xi-plus-thin"></i></button>
        </div>
    </div>
</div>
<div class="btm_banner">
    <div class="shop_con">
        <div class="btm_b_l">
            <div class="vbb_3">
                <a href="">
                    <img src="./images/btm_banner.png" alt="" class="scale_img pc">
                    <img src="./images/btm_banner_mb.png" alt="" class="mb">
                </a>
                <a href="">
                    <img src="./images/btm_banner.png" alt="" class="scale_img pc">
                    <img src="./images/btm_banner_mb.png" alt="" class="mb">
                </a>
                <a href="">
                    <img src="./images/btm_banner.png" alt="" class="scale_img pc">
                    <img src="./images/btm_banner_mb.png" alt="" class="mb">
                </a>
            </div>
        </div>
    </div>
</div>

<!--추천 상품-->
<div class="tab_prd">
    <div class="shop_con">
        <div class="middle_title">
            <h1><span>R</span>ecommend product</h1>
            <p>와이지앤 몰의 추천상품을 만나보세요</p>
        </div>
        <div class="tab_p_cover">
            <div class="tab_p_tit">
                <ul class="nav">
                    <li ><button class="active" data-bs-toggle="pill" data-bs-target=".tab_1_con" type="button" role="tab"><i class="xi-tv"></i><p>가구/인테리어</p></button></li>
                    <li><button data-bs-toggle="pill" data-bs-target=".tab_2_con" type="button" role="tab"><i class="xi-restaurant"></i><p>식품건강</p></button></li>
                    <li><button data-bs-toggle="pill" data-bs-target=".tab_3_con" type="button" role="tab"><i class="xi-devices"></i><p>가전/디지털</p></button></li>
                    <li><button data-bs-toggle="pill" data-bs-target=".tab_4_con" type="button" role="tab"><i class="xi-palette"></i><p>뷰티</p></button></li>
                    <li><button data-bs-toggle="pill" data-bs-target=".tab_5_con" type="button" role="tab"><i class="xi-woman"></i><p>여성의류</p></button></li>
                    <li><button data-bs-toggle="pill" data-bs-target=".tab_6_con" type="button" role="tab"><i class="xi-tags"></i><p>패션잡화</p></button></li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active tab_1_con" role="tabpanel">
                    <ul class="prd_l_style">
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_17.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_18.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_19.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_20.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_21.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_22.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_23.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_24.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
                <div class="tab-pane fade tab_2_con"  role="tabpanel">
                    <ul class="prd_l_style">
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_4.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_2.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_5.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_3.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_2.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_22.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_23.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_1.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="tab-pane fade tab_3_con" role="tabpanel">
                    <ul class="prd_l_style">
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_5.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_7.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_8.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_12.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_14.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_17.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_30.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_13.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="tab-pane fade tab_4_con" role="tabpanel">
                    <ul class="prd_l_style">
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_12.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_15.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_17.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_22.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_24.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_25.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_26.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_27.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="tab-pane fade tab_5_con" role="tabpanel">
                    <ul class="prd_l_style">
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_18.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_19.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_10.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_20.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_21.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_22.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_23.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_24.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="tab-pane fade tab_6_con" role="tabpanel">
                    <ul class="prd_l_style">
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_17.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>
                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_18.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_19.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_20.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_21.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_22.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_23.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li>
                        <div class="prd_img">
                            <a href="./detail.php" class="prd_img_clk">
                                <img src="./images/prd_24.png" alt="" class="scale_img">
                            </a>
                            <button type="button" class="wish_btn"><i class="xi-heart"></i> <span>찜하기</span></button>
                            <span class="sale_per">30%</span>
                        </div>

                        <div class="prd_txt">
                            <a class="brand_name" href="">Brand Name</a>
                            <a class="prd_name" href="">Night Brightening Essence  </a>
                            <p class="prd_info">product infomation text area 상품 소개 텍스트</p>
                            <div class="prd_price_cover">
                                <p class="pp_sales">24,000 원</p>
                                <p class="pp_num">24,000 원</p>
                            </div>
                            <div class="prd_even_b">
                                <ul>
                                    <li class="peb_txt_sold">Sold Out</li>
                                    <li class="peb_txt_sale">Sale</li>
                                    <li class="peb_txt_best">Best</li>
                                    <li class="peb_txt_hot">Hot</li>
                                    <li class="peb_txt_new">New</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--skin main_prd:e-->

<?php include "./lib/footer.php"; ?>