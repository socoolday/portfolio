<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>


<div class="con_box">
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 공급사별 배송비 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>공급사별 배송비 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">공급사 선택 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송업체 명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>배송업체 리스트</option>
                                    <option value="2">선택1</option>
                                    <option value="2">선택2</option>
                                    <option value="2">선택3</option>
                                    <option value="2">선택4</option>
                                    <option value="2">선택5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">대표 연락처</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송비 <span class="ret_t1">(필수)</span></td>
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
        <h2>공급사별 배송비 리스트 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">공급사 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송업체 명</td>
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
        <h2>공급사별 배송비 리스트</h2>
        
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
                            <td>공급사 명</td>
                            <td>배송업체 명</td>
                            <td>연락처</td>
                            <td>배송비</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>티플레이트</td>
                            <td>CJ대한통운</td>
                            <td>0000-0000</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
         
        <div class="r_btn_box">
            <button class="p_btn btn_default_two r_btn_two" >등록</button>
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
            <h4 class="modal-title">공급사별 배송비 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>공급사별 배송비 설정</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">공급사 선택 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">배송업체 명 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">대표 연락처 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">배송비 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
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