<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(2)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  거래내역 관리</h1>
    
    <div class="class_list cover_box">
        <h2>거래 완료 리스트 검색</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">결제 수단</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>리스트1</option>
                                    <option value="2">리스트2</option>
                                    <option value="3">리스트3</option>
                                    <option value="3">리스트4</option>
                                    <option value="3">리스트5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">공급자</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>리스트1</option>
                                    <option value="2">리스트2</option>
                                    <option value="3">리스트3</option>
                                    <option value="3">리스트4</option>
                                    <option value="3">리스트5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 번호</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">주문 날짜</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>주문일</option>
                                    <option value="2">입금일</option>
                                    <option value="3">재결제완료일</option>
                                    <option value="3">배송 시작일</option>
                                    <option value="3">배송 완료일</option>
                                    <option value="3">거래 완료일</option>
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
                                <input type="radio" id="man_t1-1" value="" name="man_t1" class="radio_style"><label for="man_t1-1"><span></span> 전체</label>
                                <input type="radio" id="man_t1-2" value="" name="man_t1" class="radio_style"><label for="man_t1-2"><span></span> 회원</label>
                                <input type="radio" id="man_t1-3" value="" name="man_t1" class="radio_style"><label for="man_t1-3"><span></span> 비회원</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">상품명 검색</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">배송 구분</td>
                            <td>
                                <input type="radio" id="man_t2-1" value="" name="man_t2" class="radio_style"><label for="man_t2-1"><span></span> 전체</label>
                                <input type="radio" id="man_t2-2" value="" name="man_t2" class="radio_style"><label for="man_t2-2"><span></span> 국내배송</label>
                                <input type="radio" id="man_t2-3" value="" name="man_t2" class="radio_style"><label for="man_t2-3"><span></span> 해외배송</label>
                                <input type="radio" id="man_t2-4" value="" name="man_t2" class="radio_style"><label for="man_t2-4"><span></span> 스마트 픽업</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">검색</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>거래 완료 리스트</h2>
        
        <div class="sup_list">
            <p>검색 결과 <span>100건</span>이 검색되었습니다.</p>
        </div>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>
                    금일 : 취소 0건 | 교환 0건 | 반품 0건 | 보류 0건<br>
                    누적 : 취소 0건 | 교환 0건 | 반품 0건 | 보류 0건
                </p>
            </div>
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
                        <th>주문일 / 주문번호</th>
                        <th>주문인</th>
                        <th>택배 / 송장번호</th>
                        <th>상품명 / 옵션</th>
                        <th>수량</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                    
                    <tr>
                        <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td rowspan="3">2019-08-20 14:34:08<br>2019845238567448</td>
                        <td rowspan="3">홍길동</td>
                        <td rowspan="2">CJ대한통운<br>6535423178485214</td>
                        <td>
                            [피토메르] PHYTOMER OLIGOFORCE SERUM PLUS
                        </td>
                        <td rowspan="2">3</td>
                    </tr>
                    <tr>
                        <td>
                            15ml * 1<br>
                            30ml * 2
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            연락처 : 000-000-0000<br>
                            배송지 : 서울특별시 서울구 서울로 서울아파트 A동 B호
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <div class="r_btn_right">
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




<?php include "./lib/footer.php"; ?>