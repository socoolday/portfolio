<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>

    <div class="cont_title">주문완료</div>
    <div class="shop_con">
        <div class="member_box">
            <div class="member_top pay_top">
                <ul>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 01</span><br>장바구니</p>
                    </li>
                    <li>
                        <div class="mem_t_c"></div>
                        <p><span>STEP 02</span><br>주문결제</p>
                    </li>
                    <li>
                        <div class="mem_t_c active"></div>
                        <p><span>STEP 03</span><br>주문완료</p>
                    </li>
                </ul>
            </div>
            <div class="order_complet_b">
                <div class="member_comtbox">
                    <div class="ocb_txt">
                        <h1>고객님의 주문이 완료 되었습니다.</h1>
                        <p>주문번호: <span>261056456012308</span></p>
                        <p>주문일자: <span>2021-05-06 24:24:24</span></p>
                        <p>주문내역 및 배송에 관한 안내는 <button type="button" onclick="location.href='./my_order.php'"><span>주문조회</span></button>를 통하여 확인 가능합니다.</p>
                    </div>
                    <ul>
                        <li><button type="button">주문상세보기</button></li>
                        <li><button type="button">계속쇼핑하기</button></li>
                    </ul>
                    <div class="ocb_order_info">
                        <div class="ocboi_fir">
                            <h4>배송정보</h4>
                            <div class="ocboif_con">
                                <p>받는분 <span>와이지앤 / 010-0123-5678</span></p>
                                <p>배송지 <span>서울특별시 금천구 가산동 IT캐슬2차 11층</span></p>
                            </div>
                        </div>
                        <div class="ocboi_sec">
                            <h4>결제금액</h4>
                            <p>72,400</p>
                        </div>
                        <div class="ocboi_third">
                            <h4>결제수단</h4>
                            <div class="ocboit">
                                <p>포인트<span> 724</span></p>
                                <p>카드결제(기업은행)<span>71,676</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .foot_sns{display: none;}
</style>

<?php include "./lib/footer.php"; ?>