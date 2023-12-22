<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box r_tax">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 견적서 관리</h1>
    
    <div class="class_list cover_box">
        <h2>견적서 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">3일</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">1개월</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>                       
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>견적서 리스트</h2>
        
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
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
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>견적일자</td>
                            <td>신청자 명</td>
                            <td>상품명</td>
                            <td>상품 개수</td>
                            <td>이메일 요청</td>
                            <td>PDF 요청</td>
                            <td>총 합계</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="tax_t_2">데이터가 없습니다.</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box j_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two j_btn btn_default_two">견적서 내역 다운로드</button>
            </div>
            <div class="r_btn_right">
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
            </div>
        </div>

        <div class="pagenation_b r_pagenat">
            <div class="page_n_1">
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

</div>




<?php include "./lib/footer.php"; ?>