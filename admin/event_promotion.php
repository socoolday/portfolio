<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box event_pro">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 이벤트/프로모션</h1>
    
    <div class="cover_box event_box">
        <h2>진행 중인 기획전</h2>
        
        <p>진행 중인 기획전이 없습니다.<br>지금 바로 기획전을 등록해주세요.</p>
        
        <button class="p_btn btn_default_two btn_center pro_btn2" onclick="location.href='registered_exhibition.php' ">기획전 등록하기</button>
    </div>
    
    <div class="cover_box">
        <h2>진행 중인 이벤트</h2>
        
        <div class="event_ing">
            <img src="../../images/prd_img.png" alt="" class="eve_img">
            <div class="event_itxt">
                <h3>라네즈 구매사은 이벤트 (피부관리&amp;특별 사은품 증정)</h3>
                <p>2019. 09. 01 ~ 재고 소진 시까지</p>
            </div>
        </div>
        
        <div class="event_ing">
            <img src="../../images/prd_img.png" alt="" class="eve_img">
            <div class="event_itxt">
                <h3>추석엔 마음을 주세요, 정관장</h3>
                <p>2019. 09. 01 ~ 재고 소진 시까지</p>
            </div>
        </div>
        
        <div class="event_ing">
            <img src="../../images/prd_img.png" alt="" class="eve_img">
            <div class="event_itxt">
                <h3>인싸템 최대 50% 세일!</h3>
                <p>2019. 09. 01 ~ 재고 소진 시까지</p>
            </div>
        </div>
        
        <div class="event_ing">
            <img src="../../images/prd_img.png" alt="" class="eve_img">
            <div class="event_itxt">
                <h3>라네즈 구매사은 이벤트 (피부관리&amp;특별 사은품 증정)</h3>
                <p>2019. 09. 01 ~ 재고 소진 시까지</p>
            </div>
        </div>
        
    </div>
    
    <button class="p_btn btn_default_two btn_center pro_btn2">기획전/이벤트 등록하기</button>
    
    <div class="cover_box event_box">
        <h2>발급 중인 쿠폰 (이벤트 / 프로모션 쿠폰)</h2>
        
        <div class="event_cou">
            <h4>티포인트 통합 회원 인증하면! 적립금, 쿠폰 등 혜택이 빵빵!</h4>
            <p>2019-01-01 ~ 2019-08-31</p>
        </div>
        <div class="event_cou">
            <h4>앱 다운로드 하면 모바일 적립금 3천원</h4>
            <p>2019-01-01 ~ 2019-08-31</p>
        </div>
        <div class="event_cou">
            <h4>친구와 함께하면 쿠폰이 두배, 적립금도 두배!</h4>
            <p>2019-01-01 ~ 2019-08-31</p>
        </div>
    </div>
    <button class="p_btn btn_default_two btn_center pro_btn2" onclick="location.href='coupon_registration.php' ">쿠폰 등록하기</button>
</div>


<?php include "./lib/footer.php"; ?>