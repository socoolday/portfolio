<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 회원 등급 관리</h1>
    
    <div class="cover_box">
        <h2>회원등급 기본 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">       
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                회원가입 시 회원 등급을
                                <select name="" id="" class="fa_sel">
                                    <option value="1">일반회원</option>
                                    <option value="2">프리미엄</option>
                                </select>
                                (으)로 설정합니다.
                                <button class="p_btn r_btn_two btn_default_two r_btn2">저장</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <div class="class_list cover_box">
        <h2>회원 등급 리스트</h2>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">       
                <table class="table">
                    <thead>
                        <tr>
                            <th><label><input type="checkbox" value="" class="check_style"></label></th>
                            <th>회원등급</th>
                            <th>혜택 조건</th>
                            <th>구매 적립</th>
                            <th>모바일 구매 추가 적립</th>
                            <th>구매 할인</th>
                            <th>모바일 구매 추가 할인</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>VVIP++</td>
                            <td>모든 결제</td>
                            <td>
                                주문 기간 : 30일<br>
                                주문 금액 : 6,000,000원 이상 구매 시<br>
                                20% 적립
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>VVIP</td>
                            <td>모든 결제</td>
                            <td>
                                주문 기간 : 30일<br>
                                주문 금액 : 6,000,000원 이상 구매 시<br>
                                20% 적립
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>VIP</td>
                            <td>모든 결제</td>
                            <td>
                                주문 기간 : 30일<br>
                                주문 금액 : 1,000,000원 이상 구매 시<br>
                                10% 적립
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>  
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>프리미엄</td>
                            <td>모든 결제</td>
                            <td>
                                주문 기간 : 30일<br>
                                주문 금액 : 300,000원 이상 구매 시<br>
                                5% 적립
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>  
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td>일반회원</td>
                            <td>모든 결제</td>
                            <td>
                                기본 1% 적립
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>      
                    </tbody>
                </table>
            </div>
            <div class="r_btn_box">
                <button class="p_btn r_btn_two btn_default_two r_btn2" data-toggle="modal" data-target="#myModal">추가</button>
                <button class="p_btn r_btn_two btn_default_two r_btn2" data-toggle="modal" data-target="#myModal2">수정</button>
                <button class="p_btn r_btn_two btn_default_one">삭제</button>
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
<div class="modal fade r_mem" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">회원 등급 추가하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="fa_tit">등급 명 <span class="ret_t1">(필수)</span></td>
                                <td>
                                    <input type="text" class="r_reg_text">
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">등급 설명 <span class="ret_t1">(필수)</span></td>
                                <td>
                                    <input type="text" class="r_reg_text">
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">혜택 결제조건</td>
                                <td>
                                    <input type="radio" id="mem_l1-1" value="" name="mem_l1" class="radio_style"><label for="mem_l1-1"><span></span> 모든 결제 수단</label>
                                    <input type="radio" id="mem_l1-2" value="" name="mem_l1" class="radio_style"><label for="mem_l1-2"><span></span> 현금 결제</label>
                                    <input type="radio" id="mem_l1-3" value="" name="mem_l1" class="radio_style"><label for="mem_l1-3"><span></span> 카드 결제</label>
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit" rowspan="2">결제 조건에 따른 혜택</td>
                                <td>
                                    <label><input type="checkbox" value="" class="check_style"> 추가 적립</label>
                                    <label><input type="checkbox" value="" class="check_style"> 추가 할인</label>
                                    <label><input type="checkbox" value="" class="check_style"> 구매 불가 등급</label>
                                    <label><input type="checkbox" value="" class="check_style"> 등급만 생성</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>
                                            <p>주문 기간</p> 
                                            <div class="mem_box">
                                                <input type="radio" id="mem_l2-1" value="" name="mem_l2" class="radio_style"><label for="mem_l2-1"><span></span> 전체</label><br>
                                                <input type="radio" id="mem_l2-2" value="" name="mem_l2" class="radio_style"><label for="mem_l2-2"><span></span> 최근</label> <input type="text" class="r_reg_text">일<br>
                                                <input type="radio" id="mem_l2-3" value="" name="mem_l2" class="radio_style"><label for="mem_l2-3"><span></span> 고정</label><br> 
                                                <input type="text" class="r_reg_text4">부터 ~ <input type="text" class="r_reg_text4">까지
                                            </div>
                                        </li>
                                        <li>
                                            <p>주문 금액</p> 
                                            <div class="mem_box">
                                                <input type="text" class="r_reg_text">원 이상
                                            </div>
                                        </li>
                                        <li>
                                            <p>주문 건수</p> 
                                            <div class="mem_box">
                                                <input type="text" class="r_reg_text">건 이상
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">자동 등록 혜택</td>
                                <td>
                                    적립금 지급 : 해당 등급에 적립금 <input type="text" class="r_reg_text">원 지급<br>
                                    쿠폰 지급 : 해당 등급에 쿠폰 
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>쿠폰1</option>
                                        <option value="1">쿠폰2</option>
                                    </select> 지급
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">회원 생년월일</td>
                                <td>
                                    <div class="form_day_sel">
                                        <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                        <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <br>
                                    <input type="text" class="r_reg_text5">년 
                                    <input type="text" class="r_reg_text5">월 
                                    <input type="text" class="r_reg_text5">일
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">등급 이미지</td>
                                <td>
                                    <div class="file_box2">
                                        <label for="file">파일 선택</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">모바일 구매 추가 할인 설정</td>
                                <td>
                                    <input type="text" class="r_reg_text">원 이상 구매 시 <input type="text" class="r_reg_text">
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>%</option>
                                        <option value="1">원</option>
                                    </select> 추가 할인 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">추가하기</button>
        </div>
    </div>

    </div>
</div>
<div class="modal fade r_mem" id="myModal2" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">회원 등급 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="fa_tit">등급 명 <span class="ret_t1">(필수)</span></td>
                                <td>
                                    <input type="text" class="r_reg_text">
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">등급 설명 <span class="ret_t1">(필수)</span></td>
                                <td>
                                    <input type="text" class="r_reg_text">
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">혜택 결제조건</td>
                                <td>
                                    <input type="radio" id="mem_l1-1" value="" name="mem_l1" class="radio_style"><label for="mem_l1-1"><span></span> 모든 결제 수단</label>
                                    <input type="radio" id="mem_l1-2" value="" name="mem_l1" class="radio_style"><label for="mem_l1-2"><span></span> 현금 결제</label>
                                    <input type="radio" id="mem_l1-3" value="" name="mem_l1" class="radio_style"><label for="mem_l1-3"><span></span> 카드 결제</label>
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit" rowspan="2">결제 조건에 따른 혜택</td>
                                <td>
                                    <label><input type="checkbox" value="" class="check_style"> 추가 적립</label>
                                    <label><input type="checkbox" value="" class="check_style"> 추가 할인</label>
                                    <label><input type="checkbox" value="" class="check_style"> 구매 불가 등급</label>
                                    <label><input type="checkbox" value="" class="check_style"> 등급만 생성</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>
                                            <p>주문 기간</p> 
                                            <div class="mem_box">
                                                <input type="radio" id="mem_l2-1" value="" name="mem_l2" class="radio_style"><label for="mem_l2-1"><span></span> 전체</label><br>
                                                <input type="radio" id="mem_l2-2" value="" name="mem_l2" class="radio_style"><label for="mem_l2-2"><span></span> 최근</label> <input type="text" class="r_reg_text">일<br>
                                                <input type="radio" id="mem_l2-3" value="" name="mem_l2" class="radio_style"><label for="mem_l2-3"><span></span> 고정</label><br> 
                                                <input type="text" class="r_reg_text4">부터 ~ <input type="text" class="r_reg_text4">까지
                                            </div>
                                        </li>
                                        <li>
                                            <p>주문 금액</p> 
                                            <div class="mem_box">
                                                <input type="text" class="r_reg_text">원 이상
                                            </div>
                                        </li>
                                        <li>
                                            <p>주문 건수</p> 
                                            <div class="mem_box">
                                                <input type="text" class="r_reg_text">건 이상
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">자동 등록 혜택</td>
                                <td>
                                    적립금 지급 : 해당 등급에 적립금 <input type="text" class="r_reg_text">원 지급<br>
                                    쿠폰 지급 : 해당 등급에 쿠폰 
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>쿠폰1</option>
                                        <option value="1">쿠폰2</option>
                                    </select> 지급
                                </td>
                            </tr>

                            <tr>
                                <td class="fa_tit">회원 생년월일</td>
                                <td>
                                    <div class="form_day_sel">
                                        <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                        <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <br>
                                    <input type="text" class="r_reg_text5">년 
                                    <input type="text" class="r_reg_text5">월 
                                    <input type="text" class="r_reg_text5">일
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">등급 이미지</td>
                                <td>
                                    <div class="file_box2">
                                        <label for="file">파일 선택</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">모바일 구매 추가 할인 설정</td>
                                <td>
                                    <input type="text" class="r_reg_text">원 이상 구매 시 <input type="text" class="r_reg_text">
                                    <select name="" id="" class="fa_sel">
                                        <option value="1" selected>%</option>
                                        <option value="1">원</option>
                                    </select> 추가 할인 
                                </td>
                            </tr>
                        </tbody>
                    </table>
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