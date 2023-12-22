<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>
<div class="con_box">
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 자주 쓰는 댓글 관리</h1>
    <div class="input_form_2 cover_box">
    <h2>댓글 리스트 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">어제</button>
                                <button type="button" class="p_btn btn_default_third">당일</button>
                                <button type="button" class="p_btn btn_default_third">일주일</button>
                                <button type="button" class="p_btn btn_default_third">한달</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        <tr>
                            <td class="fa_tit">검색어 입력</td>
                            <td>
                                <input type="text" class="r_supp_text" placeholder="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
        <div class="input_form_2 cover_box">
        <h2>댓글 리스트</h2>
        <div class="sup_list">
            <p>전체 댓글 총 <span>100건</span></p>
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
                            <th>번호</th>
                            <th>내용</th>
                            <th>작성일</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>10</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>09</td>
                            <td>안녕하세요^^, 고객님. 쇼핑몰입니다.<br/>저희 쇼핑몰을 많이 이용해주셔서 감사합니다.<br/>안전하고 빠르게 배송해드리도록 하겠습니다. <br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>08</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>07</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>06</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>05</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>04</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>03</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>02</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>01</td>
                            <td>안녕하세요,<br/>고객님.문의하신 해당 상품은 현재 출고 처리가 완료되어 저희 측에서 배송지 변경은 불가능하십니다.<br/>해당 택배사의 담당 기사님께 직접 문의드려야 할 것 같습니다.<br/>감사합니다.</td>
                            <td>2019.04.19<br/><span>12:53:23</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="r_btn_box">
            <div class="r_btn_left">
                <button class="p_btn r_btn_two btn_default_two">댓글 등록하기</button>
            </div>
            <div class="r_btn_right2">
                <button class="p_btn r_btn_two btn_default_two" data-toggle="modal" data-target="#myModal">수정</button>
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



<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">자주 쓰는 댓글 관리 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">내용</td>
                                    <td><textarea class="con_texta"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">수정하기</button>
        </div>
    </div>

    </div>
</div>



<?php include "./lib/footer.php"; ?>