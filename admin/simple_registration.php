<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_sim">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 상품 간단 등록</h1>
    
    <div class="input_form_2 cover_box">
        <h2>기본 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">분류 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>대분류</option>
                                    <option value="2">분류1</option>
                                    <option value="2">분류2</option>
                                    <option value="2">분류3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품명 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품코드 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">판매가격 <span class="ret_t1">(필수)</span></td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송비 설정</td>
                            <td>
                                <input type="radio" id="sim1-1" value="" name="sim1" class="radio_style"><label for="sim1-1"><span></span> 전체</label>
                                <input type="radio" id="sim1-2" value="" name="sim1" class="radio_style"><label for="sim1-2"><span></span> 기본배송</label>
                                <input type="radio" id="sim1-3" value="" name="sim1" class="radio_style"><label for="sim1-3"><span></span> 직접입력</label> <input type="text" class="r_reg_text" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 등록일</td>
                            <td>
                                <input type="radio" id="sim2-1" value="" name="sim2" class="radio_style"><label for="sim2-1"><span></span> 전체</label>
                                <input type="radio" id="sim2-2" value="" name="sim2" class="radio_style"><label for="sim2-2"><span></span> 자동입력</label>
                                <input type="radio" id="sim2-3" value="" name="sim2" class="radio_style"><label for="sim2-3"><span></span> 수동입력</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품정보 제공 사용 여부</td>
                            <td>
                                <input type="radio" id="sim3-1" value="" name="sim3" class="radio_style"><label for="sim3-1"><span></span> 사용함</label>
                                <input type="radio" id="sim3-2" value="" name="sim3" class="radio_style"><label for="sim3-2"><span></span> 사용안함</label>
                                
                                <div class="r_sim_list">
                                    <ul class="r_sim_ul1">
                                        <li class="r_sim_ul1_li1">
                                            <h3>대분류</h3>
                                            <ul>
                                                <li>뷰티 <i class="fas fa-chevron-right"></i></li>
                                                <li>패션/잡화 <i class="fas fa-chevron-right"></i></li>
                                                <li>기획전 <i class="fas fa-chevron-right"></i></li>
                                                <li>식품 <i class="fas fa-chevron-right"></i></li>
                                                <li>주방/생활 <i class="fas fa-chevron-right"></i></li>
                                            </ul>
                                        </li>
                                        <li class="r_sim_ul1_li1">
                                            <h3>중분류</h3>
                                            <ul>
                                                <li>뷰티 <i class="fas fa-chevron-right"></i></li>
                                                <li>패션/잡화 <i class="fas fa-chevron-right"></i></li>
                                                <li>기획전 <i class="fas fa-chevron-right"></i></li>
                                                <li>식품 <i class="fas fa-chevron-right"></i></li>
                                                <li>주방/생활 <i class="fas fa-chevron-right"></i></li>
                                            </ul>
                                        </li>
                                        <li class="r_sim_ul1_li1">
                                            <h3>소분류</h3>
                                            <ul>
                                                <li>뷰티 <i class="fas fa-chevron-right"></i></li>
                                                <li>패션/잡화 <i class="fas fa-chevron-right"></i></li>
                                                <li>기획전 <i class="fas fa-chevron-right"></i></li>
                                                <li>식품 <i class="fas fa-chevron-right"></i></li>
                                                <li>주방/생활 <i class="fas fa-chevron-right"></i></li>
                                            </ul>
                                        </li>
                                        <li class="r_sim_ul1_li1">
                                            <h3>상세분류</h3>
                                            <ul>
                                                <li>뷰티 <i class="fas fa-chevron-right"></i></li>
                                                <li>패션/잡화 <i class="fas fa-chevron-right"></i></li>
                                                <li>기획전 <i class="fas fa-chevron-right"></i></li>
                                                <li>식품 <i class="fas fa-chevron-right"></i></li>
                                                <li>주방/생활 <i class="fas fa-chevron-right"></i></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">옵션 사용여부</td>
                            <td>
                                <input type="radio" id="sim4-1" value="" name="sim4" class="radio_style"><label for="sim4-1"><span></span> 사용함</label> <input type="text" class="r_reg_text" disabled>
                                <input type="radio" id="sim5-2" value="" name="sim4" class="radio_style"><label for="sim5-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>상품 이미지 등록</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">상품 리스트 노출 배너</td>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(500X500)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(700X700)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상세페이지 썸네일 배너</td>
                            <td>
                                <span class="ret_t1">*최대 4개까지 등록 가능</span><br>
                                <div class="file_box">
                                    <label for="file">PC 사이즈<br>(500X500)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일 사이즈<br>(700X700)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 상세 페이지</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                                <span class="ret_t1">*가로 1200X세로 제한 없음.</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">상품 동영상 등록</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="r_supp_text" placeholder="동영상 주소 입력">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품 상세 페이지 직접 입력</td>
                            <td>
                                <textarea class="r_sim_texta"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
<div class="r_sim_btn">
    <button class="p_btn btn_default_two btn_center btn_ma">저장하기</button>
    <button class="p_btn btn_default_two btn_center btn_ma">상품목록</button>
    <button class="p_btn btn_default_one btn_center btn_ma">미리보기</button>
</div>




<?php include "./lib/footer.php"; ?>