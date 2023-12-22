<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box r_ship_w">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  배송 리스트</h1>
    
    <div class="class_list cover_box">
        <h2>배송 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">배송 상태</td>
                            <td>
                                <input type="radio" id="ship_w1-1" value="" name="ship_w1" class="radio_style"><label for="ship_w1-1"><span></span> 전체</label>
                                <input type="radio" id="ship_w1-2" value="" name="ship_w1" class="radio_style"><label for="ship_w1-2"><span></span> 배송 준비 중</label>
                                <input type="radio" id="ship_w1-3" value="" name="ship_w1" class="radio_style"><label for="ship_wt1-3"><span></span> 배송 중</label>
                                <input type="radio" id="ship_w1-4" value="" name="ship_w1" class="radio_style"><label for="ship_w1-4"><span></span> 배송 완료</label>
                            </td>
                        </tr>
                       <tr>
                            <td class="fa_tit">주문</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문번호</option>
                                    <option value="2">주문자 명</option>
                                    <option value="3">주문자 ID</option>
                                    <option value="3">입금자 명</option>
                                    <option value="3">수령인 명</option>
                                    <option value="3">상품명</option>
                                    <option value="3">상품 번호</option>
                                    <option value="3">상품코드</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 날짜</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문일</option>
                                    <option value="2">입금일</option>
                                    <option value="3">배송완료일</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 구분</td>
                            <td>
                                <input type="radio" id="ship_w2-1" value="" name="ship_w2" class="radio_style"><label for="ship_w2-1"><span></span> 전체</label>
                                <input type="radio" id="ship_w2-2" value="" name="ship_w2" class="radio_style"><label for="ship_w2-2"><span></span> 회원</label>
                                <input type="radio" id="ship_w2-3" value="" name="ship_w2" class="radio_style"><label for="ship_w2-3"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송 구분</td>
                            <td>
                                <input type="radio" id="ship_w3-1" value="" name="ship_w3" class="radio_style"><label for="ship_w3-1"><span></span> 전체</label>
                                <input type="radio" id="ship_w3-2" value="" name="ship_w3" class="radio_style"><label for="ship_w3-2"><span></span> 국내배송</label>
                                <input type="radio" id="ship_w3-3" value="" name="ship_w3" class="radio_style"><label for="ship_w3-3"><span></span> 해외배송</label>
                                <input type="radio" id="ship_w3-4" value="" name="ship_w3" class="radio_style"><label for="ship_w3-4"><span></span> 픽업</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송 업체</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>CJ대한통운</option>
                                    <option value="2">현대택배</option>
                                    <option value="3">우체국 택배</option>
                                    <option value="3">한진택배</option>
                                    <option value="3">로젠택배</option>
                                    <option value="3">KGB택배</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송지 주소</td>
                            <td>
                                <input type="radio" id="ship_w4-1" value="" name="ship_w4" class="radio_style"><label for="ship_w4-1"><span></span> 도로명 주소</label>
                                <input type="radio" id="ship_w4-2" value="" name="ship_w4" class="radio_style"><label for="ship_w4-2"><span></span> 지번 주소</label>
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
        <h2>배송 리스트</h2>
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content j_btn_box">
                    <ul class="nav j_nav-pills2">
                        <li class="active"><a data-toggle="pill" href="#tabca">전체</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">배송 준비 중</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcc">배송 중</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcd">배송 완료</a></li>
                    </ul>
                    <div id="tabca" class="tab-pane fade active in">
                        <div class="r_list_box">
                            <p>입금 완료 결제 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
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
                                    <th>주문일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>수량</th>
                                    <th>주문금액</th>
                                    <th>택배 / 송장번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">10</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">09</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">5</td>
                                    <td rowspan="5">123,856</td>
                                    <td rowspan="5">우체국 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 소울 파리 4인조 티 세트
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 프린세스 라인 허브 티<br>
                                        옵션 : 잉글리시 블랙퍼스트, 캐모마일 화이트 스노우, 옐로우 블로썸
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 홈 엘레먼트 커피&amp;티 세트<br>
                                        옵션 : 화이트 플라워, 블루 플라워
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>로젠 택배<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">07</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">06</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">05</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">04</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">03</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">02</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">01</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송지연 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">상품 준비중 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송중 처리</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송완료 처리</button>
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
                    <div id="tabcb" class="tab-pane fade">
                        <div class="r_list_box">
                            <p>입금 완료 결제 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
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
                                    <th>주문일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>수량</th>
                                    <th>주문금액</th>
                                    <th>택배 / 송장번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">10</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">09</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">5</td>
                                    <td rowspan="5">123,856</td>
                                    <td rowspan="5">우체국 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 소울 파리 4인조 티 세트
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 프린세스 라인 허브 티<br>
                                        옵션 : 잉글리시 블랙퍼스트, 캐모마일 화이트 스노우, 옐로우 블로썸
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 홈 엘레먼트 커피&amp;티 세트<br>
                                        옵션 : 화이트 플라워, 블루 플라워
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>로젠 택배<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">07</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">06</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">05</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">04</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">03</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">02</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">01</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송지연 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">상품 준비중 SMS 발송</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송중 처리</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송완료 처리</button>
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
                    <div id="tabcc" class="tab-pane fade">
                        <div class="r_list_box">
                            <p>입금 완료 결제 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
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
                                    <th>주문일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>수량</th>
                                    <th>주문금액</th>
                                    <th>택배 / 송장번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">10</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">09</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">5</td>
                                    <td rowspan="5">123,856</td>
                                    <td rowspan="5">우체국 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 소울 파리 4인조 티 세트
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 프린세스 라인 허브 티<br>
                                        옵션 : 잉글리시 블랙퍼스트, 캐모마일 화이트 스노우, 옐로우 블로썸
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 홈 엘레먼트 커피&amp;티 세트<br>
                                        옵션 : 화이트 플라워, 블루 플라워
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>로젠 택배<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">07</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">06</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">05</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">04</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">03</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">02</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">01</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_left">
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송중 처리</button>
                                <button class="p_btn r_btn_two j_btn btn_default_two">배송완료 처리</button>
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
                    <div id="tabcd" class="tab-pane fade">
                        <div class="r_list_box">
                            <p>입금 완료 결제 금액 : <span>456,654,000</span> 원</p>
                        </div>
                        <div class="table-responsive form_info_b">
                            <div class="fib_tit_b">
                                <button type="button" class="p_btn btn_default_third">엑셀 다운로드</button>
                                <button type="button" class="p_btn btn_default_third">인쇄</button>
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
                                    <th>주문일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>수량</th>
                                    <th>주문금액</th>
                                    <th>택배 / 송장번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">10</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">09</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">5</td>
                                    <td rowspan="5">123,856</td>
                                    <td rowspan="5">우체국 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 소울 파리 4인조 티 세트
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 프린세스 라인 허브 티<br>
                                        옵션 : 잉글리시 블랙퍼스트, 캐모마일 화이트 스노우, 옐로우 블로썸
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 홈 엘레먼트 커피&amp;티 세트<br>
                                        옵션 : 화이트 플라워, 블루 플라워
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>로젠 택배<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">07</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">06</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">123,856</td>
                                    <td rowspan="2">현대 택배<br>8923509823563324</td>
                                </tr>
                                <tr>
                                    <td>
                                        [티플레이트] 티플레이트 미로틱 티컵 세트<br>
                                        옵션 : 브라운, 블루, 레드
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">05</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">04</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">03</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">02</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">01</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>1</td>
                                    <td>123,856</td>
                                    <td>CJ대한통운<br>6535423178485214</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="r_btn_box j_btn_box">
                            <div class="r_btn_right2">
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
            </div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>