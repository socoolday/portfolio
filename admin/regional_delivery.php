<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>


<div class="con_box r_reg">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 지역별 배송비 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>지역별 배송비 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">특수 지역 명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">우편번호 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="radio" id="reg1-1" value="" name="reg1" class="radio_style"><label for="reg1-1"><span></span> 지역등록</label>
                                <input type="radio" id="reg1-2" value="" name="reg1" class="radio_style"><label for="reg1-2"><span></span> 상세 우편번호 등록</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>지역</option>
                                    <option value="2">선택1</option>
                                </select>
                                <input type="text" class="r_reg_text">부터 <input type="text" class="r_reg_text">까지
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">추가 배송비 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_reg_text"> 원
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma">등록</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>지역별 배송비 리스트 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">지역 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">우편번호</td>
                            <td>
                                <input type="text" class="r_reg_text">
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
        <button class="p_btn btn_default_two btn_center btn_ma">검색</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>배송업체 리스트</h2>
        
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
                            <td>지역 명</td>
                            <td>우편번호</td>
                            <td>배송비</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>제주도</td>
                            <td>[00000] 부터 [00000] 까지</td>
                            <td>2,500</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
        
        <div class="r_btn_box">
            <button class="p_btn btn_default_two r_btn_two" data-toggle="modal" data-target="#myModal">수정</button>
            <button class="p_btn btn_default_one r_btn_two">삭제</button>
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

<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">지역별 배송비 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>지역별 배송비 설정</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">특수 지역 명 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit" rowspan="2">우편번호 <span class="ret_t1">(필수)</span></td>
                                    <td>
                                        <input type="radio" id="reg1-1" value="" name="reg1" class="radio_style"><label for="reg1-1"><span></span> 지역등록</label>
                                        <input type="radio" id="reg1-2" value="" name="reg1" class="radio_style"><label for="reg1-2"><span></span> 상세 우편번호 등록</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="" id="" class="fa_sel">
                                            <option value="1" selected>지역</option>
                                            <option value="2">선택1</option>
                                        </select>
                                        <input type="text" class="r_reg_text">부터
                                        <input type="text" class="r_reg_text">까지
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">추가 배송비 <span class="ret_t1">(필수)</span></td>
                                    <td>
                                        <input type="text" class="r_reg_text"> 원
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">확인</button>
        </div>
    </div>

    </div>
</div>


<?php include "./lib/footer.php"; ?>