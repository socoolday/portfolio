<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_class">
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  분류 관리</h1>
    
    <div class="class_box cover_box">
        <div class="btn_group">
            <button class="p_btn btn_default_two r_class_btn1">대분류 만들기</button>
            <button class="p_btn btn_default_one r_class_btn2">삭제</button>
            <button class="p_btn btn_default_two r_class_btn3">저장</button>
        </div>
        <div class="class_list_btn2">
            <button type="button"><i class="fas fa-door-open"></i></button>
            <button type="button"><i class="fas fa-arrow-up"></i></button>
            <button type="button"><i class="fas fa-arrow-down"></i></button>
            <button type="button"><i class="far fa-save"></i></button>
        </div>
        
        <div class="class_list_ibox">
            <ul class="class_list1">
                <li>
                    <!-- 카테고리 아래 하위 메뉴 존재할 경우 채워진 아이콘 -->
                    <h3><i class="fas fa-folder"></i> 카테고리1</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-2</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-3</a></li>
                    </ul>
                </li>
                <li>
                    <!-- 카테고리 아래 하위 메뉴가 없을 경우 빈 아이콘 -->
                    <h3><i class="far fa-folder"></i> 카테고리2</h3>
                </li>
                <li>
                    <h3><i class="far fa-folder"></i> 카테고리3</h3>
                </li>
                <li>
                    <h3><i class="fas fa-folder"></i> 카테고리4</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-2</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-3</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-4</a></li>
                    </ul>
                </li>
                <li>
                    <!-- 카테고리 클릭했을 때 (아이콘&텍스트 변화) -->
                    <h3 class="on"><i class="fas fa-folder-open"></i> 카테고리5</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-2</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-3</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-4</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-5</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-6</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="class_list cover_box">
        <h2>분류 설정하기</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">분류 코드</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">분류(카테고리) 위치</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>카테고리1</option>
                                    <option value="2">카테고리2</option>
                                    <option value="3">카테고리3</option>
                                    <option value="3">카테고리4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">분류 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">숨김 여부</td>
                            <td>
                                <input type="radio" id="cla_m1-1" value="" name="cla_m1" class="radio_style"><label for="cla_m1-1"><span></span> 이 상품 카테고리 숨기기</label>
                                <input type="radio" id="cla_m1-2" value="" name="cla_m1" class="radio_style"><label for="cla_m1-2"><span></span> 보이기</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">접근권한 회원 등급</td>
                            <td>
                                <input type="radio" id="cla_m2-1" value="" name="cla_m2" class="radio_style"><label for="class2-1"><span></span> 모든 사람 접근 가능</label>
                                <input type="radio" id="cla_m2-2" value="" name="cla_m2" class="radio_style"><label for="class2-2"><span></span> 쇼핑몰 회원만 접근 가능</label>
                                <input type="radio" id="cla_m2-3" value="" name="cla_m2" class="radio_style"><label for="class2-3"><span></span> 입점사 회원만 접근 가능</label>
                                <input type="radio" id="cla_m2-4" value="" name="cla_m2" class="radio_style"><label for="class2-4"><span></span> 관리자 이상만 접근 가능</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                접근 제한 안내 메시지 <input type="text" class="r_supp_text" placeholder="ex) 회원만 접근 가능한 카테고리입니다. 로그인 페이지로 이동하시겠습니까?">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">분류(카테고리) 옵션</td>
                            <td>
                                <ul class="class_li1">
                                    <li>
                                        <p>사은품</p> 
                                        <input type="radio" id="class3-1" value="" name="class3" class="radio_style">
                                        <label for="class3-1"><span></span> 적용가능</label>
                                        <input type="radio" id="class3-2" value="" name="class3" class="radio_style">
                                        <label for="class3-2"><span></span> 불가능</label>
                                    </li>
                                    <li>
                                        <p>쿠폰</p>
                                        <input type="radio" id="class4-1" value="" name="class4" class="radio_style">
                                        <label for="class4-1"><span></span> 적용가능</label>
                                        <input type="radio" id="class4-2" value="" name="class4" class="radio_style">
                                        <label for="class4-2"><span></span> 불가능</label>
                                    </li>
                                    <li>
                                        <p>교환 및 환불</p>
                                        <input type="radio" id="class5-1" value="" name="class5" class="radio_style">
                                        <label for="class5-1"><span></span> 적용가능</label>
                                        <input type="radio" id="class5-2" value="" name="class5" class="radio_style">
                                        <label for="class5-2"><span></span> 불가능</label> 
                                    </li>
                                    <li>
                                        <p>적립금</p>
                                        <input type="radio" id="class6-1" value="" name="class6" class="radio_style">
                                        <label for="class6-1"><span></span> 적용가능</label>
                                        <input type="radio" id="class6-2" value="" name="class6" class="radio_style">
                                        <label for="class6-2"><span></span> 불가능</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">입점사별 추가 노출 설정</td>
                            <td>
                                <input type="radio" id="cla_m3-1" value="" name="cla_m3" class="radio_style"><label for="cla_m3-1"><span></span> 모든 입점사 일괄 사용</label>
                                <input type="radio" id="cla_m3-2" value="" name="cla_m3" class="radio_style"><label for="cla_m3-2"><span></span> 모든 입점사 일괄 미사용</label>
                                <input type="radio" id="cla_m3-3" value="" name="cla_m3" class="radio_style"><label for="cla_m3-3"><span></span> 일부 입점사만</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">링크 정보</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
</div>



<?php include "./lib/footer.php"; ?>