<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box r_man_sg">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 발송 그룹 관리</h1>
    
    <div class="class_list cover_box">
        <h2>메일 발송 그룹 리스트</h2>
        
        <div class="form_ad">
            <div class="r_list_box">
                <p>검색 결과 <span>100 건</span>이 검색되었습니다.</p>
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
                <table class="table r_man_table">
                <thead>
                    <tr>
                        <th><label><input type="checkbox" value="" class="check_style"></label></th>
                        <th>그룹 명</th>
                        <th>그룹 회원 수</th>
                        <th>그룹 설명</th>
                        <th>메모</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>상위 1%</td>
                        <td>100</td>
                        <td>구매이력 상위권 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>경기도민</td>
                        <td>695</td>
                        <td>주소지가 경기도민인 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>서울시민</td>
                        <td>435</td>
                        <td>주소지가 서울시민인 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>스페셜 리스트</td>
                        <td>9,541</td>
                        <td>특별 관리 대상</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>상위 1%</td>
                        <td>100</td>
                        <td>구매이력 상위권 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>경기도민</td>
                        <td>695</td>
                        <td>주소지가 경기도민인 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>서울시민</td>
                        <td>435</td>
                        <td>주소지가 서울시민인 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>스페셜 리스트</td>
                        <td>9,541</td>
                        <td>특별 관리 대상</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>서울시민</td>
                        <td>435</td>
                        <td>주소지가 서울시민인 회원들</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" value="" class="check_style"></label></td>
                        <td>스페셜 리스트</td>
                        <td>9,541</td>
                        <td>특별 관리 대상</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="r_btn_box j_btn_box">
                <div class="r_btn_left">
                    <button class="p_btn r_btn_two j_btn btn_default_two" data-toggle="modal" data-target="#myModal">그룹 추가</button>
                </div>
                <div class="r_btn_right">
                    <button class="p_btn r_btn_two btn_default_two r_btn2" data-toggle="modal" data-target="#myModal2">수정</button>
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


<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">그룹 추가하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">그룹 명</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">그룹 설명</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">회원 등급별 설정</td>
                                    <td>
                                        <select name="" id="" class="fa_sel">
                                            <option value="1">전체목록</option>
                                            <option value="2">선택1</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">나이별 설정</td>
                                    <td>
                                        <input type="text" class="r_reg_text">세 ~ <input type="text" class="r_reg_text">세
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">성별 설정</td>
                                    <td>
                                        <input type="radio" id="man_sg1-1" value="" name="man_sg1" class="radio_style"><label for="man_sg1-1"><span></span> 전체</label>
                                        <input type="radio" id="man_sg1-2" value="" name="man_sg1" class="radio_style"><label for="man_sg1-2"><span></span> 남</label>
                                        <input type="radio" id="man_sg1-3" value="" name="man_sg1" class="radio_style"><label for="man_sg1-3"><span></span> 여</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">가입일 (기간) 설정</td>
                                    <td>
                                        <button type="button" class="p_btn btn_default_third active">어제</button>
                                        <button type="button" class="p_btn btn_default_third">당일</button>
                                        <button type="button" class="p_btn btn_default_third">일주일</button>
                                        <button type="button" class="p_btn btn_default_third">한달</button>

                                        <div class="form_day_sel">
                                            <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                            <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">기념일 설정</td>
                                    <td>
                                        <button type="button" class="p_btn btn_default_third active">어제</button>
                                        <button type="button" class="p_btn btn_default_third">당일</button>
                                        <button type="button" class="p_btn btn_default_third">일주일</button>
                                        <button type="button" class="p_btn btn_default_third">한달</button>

                                        <div class="form_day_sel">
                                            <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                            <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">결혼 여부 설정</td>
                                    <td>
                                        <input type="radio" id="man_sg2-1" value="" name="man_sg2" class="radio_style"><label for="man_sg2-1"><span></span> 전체</label>
                                        <input type="radio" id="man_sg2-2" value="" name="man_sg2" class="radio_style"><label for="man_sg2-2"><span></span> 미혼</label>
                                        <input type="radio" id="man_sg2-3" value="" name="man_sg2" class="radio_style"><label for="man_sg2-3"><span></span> 기혼</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">연락처 설정</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">추가하기</button>
        </div>
    </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade r_tax" id="myModal2" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">그룹 수정하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fa_tit">그룹 명</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">그룹 설명</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">회원 등급별 설정</td>
                                    <td>
                                        <select name="" id="" class="fa_sel">
                                            <option value="1">전체목록</option>
                                            <option value="2">선택1</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">나이별 설정</td>
                                    <td>
                                        <input type="text" class="r_reg_text">세 ~ <input type="text" class="r_reg_text">세
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">성별 설정</td>
                                    <td>
                                        <input type="radio" id="man_sg3-1" value="" name="man_sg3" class="radio_style"><label for="man_sg3-1"><span></span> 전체</label>
                                        <input type="radio" id="man_sg3-2" value="" name="man_sg3" class="radio_style"><label for="man_sg3-2"><span></span> 남</label>
                                        <input type="radio" id="man_sg3-3" value="" name="man_sg3" class="radio_style"><label for="man_sg3-3"><span></span> 여</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">가입일 (기간) 설정</td>
                                    <td>
                                        <button type="button" class="p_btn btn_default_third active">어제</button>
                                        <button type="button" class="p_btn btn_default_third">당일</button>
                                        <button type="button" class="p_btn btn_default_third">일주일</button>
                                        <button type="button" class="p_btn btn_default_third">한달</button>

                                        <div class="form_day_sel">
                                            <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                            <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">기념일 설정</td>
                                    <td>
                                        <button type="button" class="p_btn btn_default_third active">어제</button>
                                        <button type="button" class="p_btn btn_default_third">당일</button>
                                        <button type="button" class="p_btn btn_default_third">일주일</button>
                                        <button type="button" class="p_btn btn_default_third">한달</button>

                                        <div class="form_day_sel">
                                            <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                            <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">결혼 여부 설정</td>
                                    <td>
                                        <input type="radio" id="man_sg4-1" value="" name="man_sg4" class="radio_style"><label for="man_sg4-1"><span></span> 전체</label>
                                        <input type="radio" id="man_sg4-2" value="" name="man_sg4" class="radio_style"><label for="man_sg4-2"><span></span> 미혼</label>
                                        <input type="radio" id="man_sg4-3" value="" name="man_sg4" class="radio_style"><label for="man_sg4-3"><span></span> 기혼</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">연락처 설정</td>
                                    <td>
                                        <input type="text" class="r_reg_text">
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