<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box r_ship_w">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  반품 관리</h1>
    
    <div class="class_list cover_box">
        <h2>반품 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
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
                                
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">3일</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">1개월</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">기간</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문일</option>
                                    <option value="2">입금일</option>
                                    <option value="3">배송완료일</option>
                                </select>
                                
                                <button type="button" class="p_btn btn_default_third active">오늘</button>
                                <button type="button" class="p_btn btn_default_third">3일</button>
                                <button type="button" class="p_btn btn_default_third">7일</button>
                                <button type="button" class="p_btn btn_default_third">1개월</button>
                                
                                <div class="form_day_sel">
                                    <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                    <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 구분</td>
                            <td>
                                <input type="radio" id="rel_m1-1" value="" name="rel_m1" class="radio_style"><label for="rel_m1-1"><span></span> 전체</label>
                                <input type="radio" id="rel_m1-2" value="" name="rel_m1" class="radio_style"><label for="rel_m1-2"><span></span> 회원</label>
                                <input type="radio" id="rel_m1-3" value="" name="rel_m1" class="radio_style"><label for="rel_m1-3"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">반품 처리 유형</td>
                            <td>
                                <input type="radio" id="rel_m2-1" value="" name="rel_m2" class="radio_style"><label for="rel_m2-1"><span></span> 전체</label>
                                <input type="radio" id="rel_m2-2" value="" name="rel_m2" class="radio_style"><label for="rel_m2-2"><span></span> 반품신청</label>
                                <input type="radio" id="rel_m2-3" value="" name="rel_m2" class="radio_style"><label for="rel_m2-3"><span></span> 반품접수</label>
                                <input type="radio" id="rel_m2-4" value="" name="rel_m2" class="radio_style"><label for="rel_m2-4"><span></span> 반품 처리 중</label>
                                <input type="radio" id="rel_m2-5" value="" name="rel_m2" class="radio_style"><label for="rel_m2-5"><span></span> 반품완료</label>
                                <input type="radio" id="rel_m2-6" value="" name="rel_m2" class="radio_style"><label for="rel_m2-6"><span></span> 반품보류</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">반품 수거 업체</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>CJ대한통운</option>
                                    <option value="2">우체국 택배</option>
                                    <option value="3">롯데택배</option>
                                    <option value="3">로젠택배</option>
                                    <option value="3">현대택배</option>
                                </select>
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
        <h2>반품 리스트</h2>
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        <div class="form_ad">
            <div class="tab_style_3">
                <div class="tab-content j_btn_box">
                    <ul class="nav j_nav-pills3">
                        <li class="active"><a data-toggle="pill" href="#tabca">전체</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcb">반품 신청</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcc">반품 접수</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcd">반품 처리중</a></li>
                        <li class=""><a data-toggle="pill" href="#tabce">반품 완료</a></li>
                        <li class=""><a data-toggle="pill" href="#tabcf">반품 보류</a></li>
                    </ul>
                    <div id="tabca" class="tab-pane fade active in">
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품접수</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리 중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품신청</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품신청</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품신청</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품신청</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품신청</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품신청</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품접수</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품접수</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품접수</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품접수</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품 처리중</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품 처리중</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품 처리중</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품 처리중</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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
                    <div id="tabce" class="tab-pane fade">
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품완료</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품완료</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품완료</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품완료</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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
                    <div id="tabcf" class="tab-pane fade">
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
                                    <th>주문일</th>
                                    <th>반품 신청일</th>
                                    <th>주문인</th>
                                    <th>상품명 / 옵션</th>
                                    <th>주문번호</th>
                                    <th>반품처리</th>
                                    <th>수거처리</th>
                                    <th>배송업체</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="6"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">2019-08-20 14:34:08</td>
                                    <td rowspan="6">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="5">2019845238567448</td>
                                    <td rowspan="5">반품보류</td>
                                    <td rowspan="5">수거완료</td>
                                    <td rowspan="5">현대택배</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품보류</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">2019-08-20 14:34:08</td>
                                    <td rowspan="3">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td rowspan="2">2019845238567448</td>
                                    <td rowspan="2">반품보류</td>
                                    <td rowspan="2">수거 준비중</td>
                                    <td rowspan="2">CJ대한통운</td>
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
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        연락처 : 000-000-0000<br>
                                        배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td rowspan="2"><label><input type="checkbox" value="" class="check_style"></label></td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">2019-08-20 14:34:08</td>
                                    <td rowspan="2">홍길동(회원)<br>010-0000-0000</td>
                                    <td>
                                        [티플레이트] 티플레이트 화이트 블로썸 티 세트<br>
                                        옵션 : 옐로우
                                    </td>
                                    <td>2019845238567448</td>
                                    <td>반품보류</td>
                                    <td>수거 준비중</td>
                                    <td>CJ대한통운</td>
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
                            <div class="r_btn_box">
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 완료 처리</button>
                                <button class="p_btn btn_default_two r_btn_two r_btn2">반품 보류</button>
                                <button class="p_btn btn_default_one r_btn_two">삭제</button>
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