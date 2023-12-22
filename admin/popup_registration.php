<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(6)").show()
    })
</script>


<div class="con_box pop_man">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  팝업 관리</h1>
    
    
    
    <div class="input_form_2 cover_box">
        <h2>팝업 리스트</h2>
        
        <div class="sup_list">
            <p>전체 팝업 목록 총 <span>100건</span></p>
        </div>
        
         <div class="form_ad">
            <div class="table-responsive form_info_b">
                <div class="fib_tit_b">
                    <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                    <select name="" id="" class="fa_sel r_select">
                        <option value="1">10개</option>
                        <option value="2">30개</option>
                        <option value="3">50개</option>
                        <option value="3">100개</option>
                    </select>
                </div>  
                <table class="table">
                    <thead>
                        <tr>
                            <th><label><input type="checkbox" value="" class="check_style"></label></th>
                            <th>쇼핑몰 명</th>
                            <th>팝업 명</th>
                            <th>상태</th>
                            <th>기간</th>
                            <th>등록일</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>앱 첫 구매 이벤트</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>아리따움몰 한정 기획 세트 33% OFF + 사은품</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티몰</td>
                            <td>구매사은 이벤트</td>
                            <td>종료</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>앱 첫 구매 이벤트</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>아리따움몰 한정 기획 세트 33% OFF + 사은품</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티몰</td>
                            <td>구매사은 이벤트</td>
                            <td>종료</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>앱 첫 구매 이벤트</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>아리따움몰 한정 기획 세트 33% OFF + 사은품</td>
                            <td>진행중</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티몰</td>
                            <td>구매사은 이벤트</td>
                            <td>종료</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티몰</td>
                            <td>구매사은 이벤트</td>
                            <td>종료</td>
                            <td>2019-01-01 00:00:00 ~ 2019-01-15 00:00:00</td>
                            <td>2019-11-07</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="r_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two btn_default_two">등록하기</button>
            </div>
            <div class="r_btn_right2">
                <button class="p_btn r_btn_two btn_default_two">수정</button>
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
            </div>
        </div>
        <div class="page_n_1 r_pagenat">
            <ul>
                <li><a href=""><i class="fas fa-angle-double-left"></i></a></li>
                <li><a href=""><i class="fas fa-chevron-left"></i></a></li>
                <li><a href="" class="active">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>


</div>




<?php include "./lib/footer.php"; ?>