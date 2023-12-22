<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box boa_qa">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 자주 묻는 질문 관리</h1>
    
    <div class="input_form_2 cover_box">
    <h2>Q&amp;A 정보 등록</h2>
       
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">FAQ분류</td>
                            <td>
                                <div class="pay_order">
                                    <button type="button"><i class="fas fa-chevron-up"></i></button>
                                    <button type="button"><i class="fas fa-chevron-down"></i></button>
                                    <ul>
                                        <li>운영관리</li>
                                        <li>결제관련</li>
                                        <li>운영관리</li>
                                        <li>결제관련</li>
                                    </ul>
                                </div>
                                분류명 <input type="text" class="fa_input" placeholder="">
                                <button class="p_btn btn_default_two r_btn2">등록</button>
                                <button class="p_btn btn_default_two r_btn2">수정</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">질문(Q)</td>
                            <td>
                                <textarea class="fa_j_txt" placeholder="질문을 입력해주세요."></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">답변(A)</td>
                            <td>
                                <textarea class="fa_j_txt" placeholder="답변을 입력해주세요."></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">이미지 첨부</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                                <p class="tb_in_j_txt">jpg, png, gif만 등록 가능</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">등록하기</button>
    </div>
    <div class="input_form_2 cover_box">
        <h2>Q&amp;A 리스트</h2>
        
        <div class="sup_list">
            <p>전체 게시글 총 <span>100건</span></p>
        </div>
        
        <div class="r_mem_sear">
            <select name="" id="" class="fa_sel">
                <option value="1" selected>전체보기</option>
                <option value="1">전체보기</option>
                <option value="1">전체보기</option>
                <option value="1">전체보기</option>
                <option value="1">전체보기</option>
            </select>
            <input type="text" class="r_reg_text3" placeholder="검색어를 입력해주세요."> 
            <button class="p_btn r_btn_two btn_default_two"><i class="fas fa-search"></i> Search</button>
        </div>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">
                <div class="fib_tit_b">
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
                            <th>분류</th>
                            <th>내용</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="2">운영관리</td>
                            <td>
                                <p class="boa_qat1">Q</p>
                                <p class="boa_qat2">보유하고 있는 적립금을 한번에 사용이 가능한가요?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="boa_qat1">A</p>
                                <p class="boa_qat2">적립금은 결제 금액의 30% 이하로만 사용이 가능합니다. <br>일부 브랜드의 경우 브랜드 정책에 의해 사용이 불가할 수 있습니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="2">결제관리</td>
                            <td>
                                <p class="boa_qat1">Q</p>
                                <p class="boa_qat2">품절된 상품을 구매할 수 있나요?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="boa_qat1">A</p>
                                <p class="boa_qat2">품절 상태에서는 구매하실 수 없으며, 해당 상품이 입고된 이후에 구매 가능합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="2">운영관리</td>
                            <td>
                                <p class="boa_qat1">Q</p>
                                <p class="boa_qat2">보유하고 있는 적립금을 한번에 사용이 가능한가요?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="boa_qat1">A</p>
                                <p class="boa_qat2">적립금은 결제 금액의 30% 이하로만 사용이 가능합니다. <br>일부 브랜드의 경우 브랜드 정책에 의해 사용이 불가할 수 있습니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td rowspan="2">결제관리</td>
                            <td>
                                <p class="boa_qat1">Q</p>
                                <p class="boa_qat2">품절된 상품을 구매할 수 있나요?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="boa_qat1">A</p>
                                <p class="boa_qat2">품절 상태에서는 구매하실 수 없으며, 해당 상품이 입고된 이후에 구매 가능합니다.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="r_btn_box j_btn_box">
            <button class="p_btn r_btn_two btn_default_two r_btn2">수정</button>
            <button class="p_btn r_btn_two btn_default_one">삭제</button>
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