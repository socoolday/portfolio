<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_class r_inv">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  상품 재고 관리</h1>
    
    <div class="class_box">
        <div class="cover_box">
            <div class="btn_group">
                <button class="p_btn btn_default_two r_class_btn1">열기</button>
            </div>

            <div class="class_list_ibox">
                <ul class="class_list1">
                    <li>
                        <h3><i class="fas fa-folder"></i> 카테고리1</h3>
                        <ul class="class_list2">
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-1</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-2</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-3</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-4</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-5</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-6</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-7</a></li>
                            <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-8</a></li>
                        </ul>
                    </li>
                    <li>
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
                        </ul>
                    </li>
                    <li>
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
    </div>
    
    <div class="class_list">
        <div class="cover_box">
            <h2>상품 재고 리스트 검색</h2>
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                           <tr>
                                <td class="fa_tit">분류 선택</td>
                                <td>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>대분류</option>
                                        <option value="2">카테고리2</option>
                                        <option value="3">카테고리3</option>
                                        <option value="3">카테고리4</option>
                                    </select>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>2차 분류</option>
                                        <option value="2">카테고리2</option>
                                        <option value="3">카테고리3</option>
                                        <option value="3">카테고리4</option>
                                    </select>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>3차 분류</option>
                                        <option value="2">카테고리2</option>
                                        <option value="3">카테고리3</option>
                                        <option value="3">카테고리4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">정렬방식</td>
                                <td>
                                    <input type="radio" id="inv1-1" value="" name="inv1" class="radio_style"><label for="inv1-1"><span></span> 상품명</label>
                                    <input type="radio" id="inv1-2" value="" name="inv1" class="radio_style"><label for="inv1-2"><span></span> 상품코드</label>
                                    <input type="radio" id="inv1-3" value="" name="inv1" class="radio_style"><label for="inv1-3"><span></span> 등록일</label>
                                    <input type="radio" id="inv1-4" value="" name="inv1" class="radio_style"><label for="inv1-4"><span></span> 오름차순</label>
                                    <input type="radio" id="inv1-5" value="" name="inv1" class="radio_style"><label for="inv1-5"><span></span> 내림차순</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">재고 상태</td>
                                <td>
                                    <input type="radio" id="inv2-1" value="" name="inv2" class="radio_style"><label for="inv2-1"><span></span> 전체</label>
                                    <input type="radio" id="inv2-2" value="" name="inv2" class="radio_style"><label for="inv2-2"><span></span> 품절</label>
                                    <input type="radio" id="inv2-3" value="" name="inv2" class="radio_style"><label for="inv2-3"><span></span> 부족</label>
                                    <input type="radio" id="inv2-4" value="" name="inv2" class="radio_style"><label for="inv2-4"><span></span> 무제한</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">검색어 입력</td>
                                <td>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>상품명</option>
                                        <option value="2">카테고리2</option>
                                        <option value="3">카테고리3</option>
                                        <option value="3">카테고리4</option>
                                    </select>
                                    <input type="text" class="r_reg_text">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
        </div>

        <div class="cover_box">       
            <div class="inv_box">
                일반 상품 <i class="fas fa-chevron-right"></i> 스킨케어 <i class="fas fa-chevron-right"></i> 스킨/로션
            </div>
        </div>

        <div class="cover_box">
            <h2>상품 재고 리스트</h2>

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
                                <td>번호</td>
                                <td>상품코드</td>
                                <td>상품명</td>
                                <td>판매가</td>
                                <td>재고</td>
                                <td>상태</td>
                                <td>수정</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[샤프란] 코튼앤크림 섬유유연제 리필 130ml 10개 set</td>
                                <td>9,810</td>
                                <td>무제한</td>
                                <td>판매중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[세이프] 100% 베이킹소다 2kg 구연산/과탄산소다 + 테크 900ml</td>
                                <td>4,500</td>
                                <td><span class="inv_t1">품절</span></td>
                                <td>판매 중지</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[자연퐁] 식기 세척기 전용 액체 세제 1kg X 2개 + 테크 세탁 세제 1L</td>
                                <td>9,810</td>
                                <td><span class="inv_t2">부족</span></td>
                                <td>판매 중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[샤프란] 코튼앤크림 섬유유연제 리필 130ml 10개 set</td>
                                <td>9,810</td>
                                <td>무제한</td>
                                <td>판매중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[세이프] 100% 베이킹소다 2kg 구연산/과탄산소다 + 테크 900ml</td>
                                <td>4,500</td>
                                <td><span class="inv_t1">품절</span></td>
                                <td>판매 중지</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[자연퐁] 식기 세척기 전용 액체 세제 1kg X 2개 + 테크 세탁 세제 1L</td>
                                <td>9,810</td>
                                <td><span class="inv_t2">부족</span></td>
                                <td>판매 중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[세이프] 100% 베이킹소다 2kg 구연산/과탄산소다 + 테크 900ml</td>
                                <td>4,500</td>
                                <td><span class="inv_t1">품절</span></td>
                                <td>판매 중지</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[자연퐁] 식기 세척기 전용 액체 세제 1kg X 2개 + 테크 세탁 세제 1L</td>
                                <td>9,810</td>
                                <td><span class="inv_t2">부족</span></td>
                                <td>판매 중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[세이프] 100% 베이킹소다 2kg 구연산/과탄산소다 + 테크 900ml</td>
                                <td>4,500</td>
                                <td><span class="inv_t1">품절</span></td>
                                <td>판매 중지</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>ABDFDS34672DSF</td>
                                <td>[자연퐁] 식기 세척기 전용 액체 세제 1kg X 2개 + 테크 세탁 세제 1L</td>
                                <td>9,810</td>
                                <td><span class="inv_t2">부족</span></td>
                                <td>판매 중</td>
                                <td>
                                    <button class="p_btn btn_default_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
                                    <button class="p_btn btn_default_one r_btn_two">삭제</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
            </div>

            <div class="r_btn_box">
                <button class="p_btn btn_default_two r_btn_two r_btn3" data-toggle="modal" data-target="#myModal">수정</button>
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
</div>

<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">상품재고 리스트 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>재고관리 설정</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">상품코드 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">상품명 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">판매가 </td>
                                    <td><input type="text" class="r_supp_text"></td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">재고관리</td>
                                    <td>
                                        <input type="radio" id="tax8-1" value="" name="tax8" class="radio_style"><label for="tax8-1"><span></span> 무제한</label>
                                        <input type="radio" id="tax8-2" value="" name="tax8" class="radio_style"><label for="tax8-2"><span></span> 품절</label>
                                        <input type="radio" id="tax8-3" value="" name="tax8" class="radio_style"><label for="tax8-3"><span></span> 부족</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">판매상태</td>
                                    <td>
                                        <input type="radio" id="tax9-1" value="" name="tax9" class="radio_style"><label for="tax9-1"><span></span> 판매중</label>
                                        <input type="radio" id="tax9-2" value="" name="tax9" class="radio_style"><label for="tax9-2"><span></span> 판매중지</label>
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