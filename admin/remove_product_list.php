<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  삭제 상품 목록</h1>
    
    <div class="input_form_2 cover_box">
        <h2>상품 리스트 검색</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">분류 선택</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>대분류</option>
                                    <option value="2">분류미지정상품</option>
                                    <option value="3">스킨케어</option>
                                    <option value="3">여행</option>
                                </select>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>중분류</option>
                                    <option value="2">분류미지정상품</option>
                                    <option value="3">스킨케어</option>
                                    <option value="3">여행</option>
                                </select>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>소분류</option>
                                    <option value="2">분류미지정상품</option>
                                    <option value="3">스킨케어</option>
                                    <option value="3">여행</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">삭제기간</td>
                            <td>
                                <button type="button" class="p_btn btn_default_third active">어제</button>
                                <button type="button" class="p_btn btn_default_third">오늘</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">한달</button>
                                <button type="button" class="p_btn btn_default_third">전체</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품검색</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>상품명</option>
                                    <option value="2">상품코드</option>
                                    <option value="3">상품번호</option>
                                    <option value="3">바코드</option>
                                    <option value="3">모델명</option>
                                    <option value="3">사입명</option>
                                    <option value="3">브랜드명</option>
                                    <option value="3">제조사명</option>
                                    <option value="3">원산지</option>
                                    <option value="3">키워드</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">검색</button>
    </div>
    
    <div class="board_1 cover_box">
        <h2>상품 리스트</h2>
        
        <div class="table_list">
            <ul>
                <li>검색결과 : <span>30</span> 건</li>
                <li>전체상품 : <span>50</span> 건</li>
            </ul>
            <div class="pro_list_btn">
                <button type="button">엑셀 다운로드</button>
                <div class="list_select">
                    <select>
                        <option selected>10개</option>
                        <option>30개</option>
                        <option>50개</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="table-responsive pro_table">          
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>번호</th>
                        <th>입점업체</th>
                        <th colspan="2">상품명</th>
                        <th>판매가격</th>
                        <th>수량</th>
                        <th>상태</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>10</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>09</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>08</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>07</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>06</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>05</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>04</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>03</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>02</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>01</td>
                        <td>HongG1</td>
                        <td><a href=""><img src="../../images/prd_img.png" alt=""></a></td>
                        <td class="pro_td1">
                            <div class="list_t_box">
                                <input type="text" value="표고버섯 500g" class="pro_txt1">
                                <div class="list_t_box2">
                                    <p><span>상품번호 :</span> 400</p>
                                    <p><span>상품코드 :</span> NB3490590530000A</p>
                                    <p><span>상품분류 :</span> 파프리카/가지/오이</p>
                                    <p><span>상품그룹 :</span> 신상품(N)</p>
                                </div>
                            </div>
                        </td>
                        <td class="pro_td2"><input type="text" value="9,454" class="pro_txt2"></td>
                        <td>2,728</td>
                        <td>판매중</td>
                        <td>
                            <button type="button" class="pro_btn">등록</button>
                            <button type="button" class="pro_btn">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="pagenation_b" >
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




<?php include "./lib/footer.php"; ?>