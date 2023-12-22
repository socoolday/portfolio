<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>





<div class="con_box r_supp">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 배송 업체 (연동) 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>배송업체 연동하기</h2>
        <div class="r_pay-tbox">
            <p>
                <span>배송업체 연동?</span><br>
                관리자 페이지에서 배송 관련 주문을 해당 택배사의 시스템과 연동하여 쉽고 빠르게 처리할 수 있는 시스템입니다. 택배연동 서비스를 통해 추가된 배송 업체는 삭제할 수 없습니다.
            </p>
        </div>
        <button class="p_btn btn_default_two r_sbtn1">배송업체 연동 신청하기</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>기본 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">업체 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">연락처</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma">저장하기</button>
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
                            <td>국내/해외</td>
                            <td>업체 명</td>
                            <td>연락처</td>
                            <td>이메일</td>
                            <td>기본 배송비</td>
                            <td>연동 상태</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내/해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>연동</td>
                        </tr>
                         <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내/해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>연동</td>
                        </tr>
                         <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>비연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내/해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>연동</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>국내/해외</td>
                            <td>자체배송</td>
                            <td>0000-0000</td>
                            <td>tongtwg@gmail.com</td>
                            <td>0</td>
                            <td>연동</td>
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
            <h4 class="modal-title">배송업체 리스트 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>기본 정보 설정</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">배송업체 명 <span class="ret_t1">(필수)</span></td>
                                    <td>
                                        <select name="" id="" class="fa_sel">
                                            <option value="1">전체목록</option>
                                            <option value="2">선택1</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">대표 연락처 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">보조 연락처 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit"> 이메일 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">기본 배송비 <span class="ret_t1">(필수)</span></td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">홈페이지 주소</td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">배송업체 배송비 설정</td>
                                    <td>
                                        <input type="radio" id="tax8-1" value="" name="tax8" class="radio_style"><label for="tax8-1"><span></span> 설정함</label>
                                        <input type="radio" id="tax8-2" value="" name="tax8" class="radio_style"><label for="tax8-2"><span></span> 설정 안함</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">연동설정</td>
                                    <td>
                                        <input type="radio" id="tax9-1" value="" name="tax9" class="radio_style"><label for="tax9-1"><span></span> 연동</label>
                                        <input type="radio" id="tax9-2" value="" name="tax9" class="radio_style"><label for="tax9-2"><span></span> 비연동</label>
                                    </td>
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