<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(4)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 리뷰설정</h1>
    
    <div class="input_form_2 cover_box">
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">리뷰 읽기 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_1" value="" name="sel_1" class="radio_style"><label for="sel_1"><span></span> 전체</label>
                                <input type="radio" id="sel_2" value="" name="sel_1" class="radio_style"><label for="sel_2"><span></span> 회원</label>
                                <input type="radio" id="sel_3" value="" name="sel_1" class="radio_style"><label for="sel_3"><span></span> 비회원</label>
                                <input type="radio" id="sel_4" value="" name="sel_1" class="radio_style"><label for="sel_4"><span></span> 등급별 설정</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">리뷰 작성 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_5" value="" name="sel_2" class="radio_style"><label for="sel_5"><span></span> 전체</label>
                                <input type="radio" id="sel_6" value="" name="sel_2" class="radio_style"><label for="sel_6"><span></span> 회원</label>
                                <input type="radio" id="sel_7" value="" name="sel_2" class="radio_style"><label for="sel_7"><span></span> 비회원</label>
                                <input type="radio" id="sel_8" value="" name="sel_2" class="radio_style"><label for="sel_8"><span></span> 등급별 설정</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit2" colspan="2">작성자 표시 설정</td>
                            <td>
                                <input type="radio" id="sel_9" value="" name="sel_3" class="radio_style"><label for="sel_9"><span></span> 이름</label>
                                <input type="radio" id="sel_10" value="" name="sel_3" class="radio_style"><label for="sel_10"><span></span> 닉네임</label>
                                <input type="radio" id="sel_11" value="" name="sel_3" class="radio_style"><label for="sel_11"><span></span> 아이디</label>
                                <input type="radio" id="sel_12" value="" name="sel_3" class="radio_style"><label for="sel_12"><span></span> 이름+아이디</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">리뷰 수정 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_13" value="" name="sel_4" class="radio_style"><label for="sel_13"><span></span> 작성자</label>
                                <input type="radio" id="sel_14" value="" name="sel_4" class="radio_style"><label for="sel14"><span></span> 관리자</label>
                                <input type="radio" id="sel_15" value="" name="sel_4" class="radio_style"><label for="sel_15"><span></span> 작성자+관리자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">리뷰 삭제 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_16" value="" name="sel_5" class="radio_style"><label for="sel_16"><span></span> 작성자</label>
                                <input type="radio" id="sel_17" value="" name="sel_5" class="radio_style"><label for="sel_17"><span></span> 관리자</label>
                                <input type="radio" id="sel_18" value="" name="sel_5" class="radio_style"><label for="sel_18"><span></span> 작성자+관리자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">댓글 기능</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2" >댓글 작성 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_19" value="" name="sel_6" class="radio_style"><label for="sel_19"><span></span> 전체</label>
                                <input type="radio" id="sel_20" value="" name="sel_6" class="radio_style"><label for="sel_20"><span></span> 회원</label>
                                <input type="radio" id="sel_21" value="" name="sel_6" class="radio_style"><label for="sel_21"><span></span> 비회원</label>
                                <input type="radio" id="sel_22" value="" name="sel_6" class="radio_style"><label for="sel_22"><span></span> 등급별 설정</label>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">전체</option>
                                    <option value="2">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit2" colspan="2">작성자 표시 설정</td>
                            <td>
                                <input type="radio" id="sel_23" value="" name="sel_7" class="radio_style"><label for="sel_23"><span></span> 이름</label>
                                <input type="radio" id="sel_24" value="" name="sel_7" class="radio_style"><label for="sel_24"><span></span> 닉네임</label>
                                <input type="radio" id="sel_25" value="" name="sel_7" class="radio_style"><label for="sel_25"><span></span> 아이디</label>
                                <input type="radio" id="sel_26" value="" name="sel_7" class="radio_style"><label for="sel_26"><span></span> 이름+닉네임</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">댓글 수정 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_27" value="" name="sel_8" class="radio_style"><label for="sel_27"><span></span> 작성자</label>
                                <input type="radio" id="sel_28" value="" name="sel_8" class="radio_style"><label for="sel_28"><span></span> 관리자</label>
                                <input type="radio" id="sel_29" value="" name="sel_8" class="radio_style"><label for="sel_29"><span></span> 작성자+관리자</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">댓글 삭제 권한</td>
                            <td class="fa_tit" colspan="2"></td>
                            <td>
                                <input type="radio" id="sel_30" value="" name="sel_9" class="radio_style"><label for="sel_30"><span></span> 작성자</label>
                                <input type="radio" id="sel_31" value="" name="sel_9" class="radio_style"><label for="sel_31"><span></span> 관리자</label>
                                <input type="radio" id="sel_32" value="" name="sel_9" class="radio_style"><label for="sel_32"><span></span> 작성자+관리자</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">확인</button>
    </div>
</div>




<?php include "./lib/footer.php"; ?>