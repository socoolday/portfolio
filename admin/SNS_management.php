<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(5)").show()
    })
</script>


<div class="con_box r_auto">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  SNS 관리</h1>

    <div class="auto_left">
        <div class="class_list cover_box">
            <h2>SNS 연동 설정</h2>
            
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="fa_tit">트위터</td>
                                <td>
                                    <input type="radio" id="sns_ma1-1" value="" name="sns_ma1" class="radio_style"><label for="sns_ma1-1"><span></span> 사용함</label>
                                    <input type="radio" id="sns_ma1-2" value="" name="sns_ma1" class="radio_style"><label for="sns_ma1-2"><span></span> 사용 안함</label>
                                    <br>
                                    ID : <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">페이스북</td>
                                <td>
                                    <input type="radio" id="sns_ma2-1" value="" name="sns_ma2" class="radio_style"><label for="sns_ma2-1"><span></span> 사용함</label>
                                    <input type="radio" id="sns_ma2-2" value="" name="sns_ma2" class="radio_style"><label for="sns_ma2-2"><span></span> 사용 안함</label>
                                    <br>
                                    ID : <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">인스타그램</td>
                                <td>
                                    <input type="radio" id="sns_ma3-1" value="" name="sns_ma3" class="radio_style"><label for="sns_ma3-1"><span></span> 사용함</label>
                                    <input type="radio" id="sns_ma3-2" value="" name="sns_ma3" class="radio_style"><label for="sns_ma3-2"><span></span> 사용 안함</label>
                                    <br>
                                    ID : <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">카카오</td>
                                <td>
                                    REST API Key <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">네이버</td>
                                <td>
                                    <input type="radio" id="sns_ma4-1" value="" name="sns_ma4" class="radio_style"><label for="sns_ma4-1"><span></span> 사용함</label>
                                    <input type="radio" id="sns_ma4-2" value="" name="sns_ma4" class="radio_style"><label for="sns_ma4-2"><span></span> 사용 안함</label>
                                    <br>
                                    ID : <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
        
        <div class="class_list cover_box">
            <h2>SNS 상세 설정</h2>
            
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="fa_tit">SNS 사용 여부</td>
                                <td>
                                    <input type="radio" id="sns_ma5-1" value="" name="sns_ma5" class="radio_style"><label for="sns_ma5-1"><span></span> 사용함</label>
                                    <input type="radio" id="sns_ma5-2" value="" name="sns_ma5" class="radio_style"><label for="sns_ma5-2"><span></span> 사용 안함</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">제목 (쇼핑몰 상세페이지에 들어가는 표시 제목)</td>
                                <td>
                                    <input type="text" class="fa_input" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">SNS 유형</td>
                                <td>
                                    <div class="sns_ma_slist">
                                        <p>트위터</p> 
                                        <input type="radio" id="sns_ma6-1" value="" name="sns_ma6" class="radio_style"><label for="sns_ma6-1"><span></span> 사용함</label>
                                        <input type="radio" id="sns_ma6-2" value="" name="sns_ma6" class="radio_style"><label for="sns_ma6-2"><span></span> 사용안함</label>
                                    </div>
                                    <div class="sns_ma_slist">
                                        <p>페이스북</p> 
                                        <input type="radio" id="sns_ma7-1" value="" name="sns_ma7" class="radio_style"><label for="sns_ma7-1"><span></span> 사용함</label>
                                        <input type="radio" id="sns_ma7-2" value="" name="sns_ma7" class="radio_style"><label for="sns_ma7-2"><span></span> 사용안함</label>
                                    </div>
                                    <div class="sns_ma_slist">
                                        <p>인스타그램</p> 
                                        <input type="radio" id="sns_ma8-1" value="" name="sns_ma8" class="radio_style"><label for="sns_ma8-1"><span></span> 사용함</label>
                                        <input type="radio" id="sns_ma8-2" value="" name="sns_ma8" class="radio_style"><label for="sns_ma8-2"><span></span> 사용안함</label>
                                    </div>
                                    <div class="sns_ma_slist">
                                        <p>카카오 플러스 친구</p> 
                                        <input type="radio" id="sns_ma9-1" value="" name="sns_ma9" class="radio_style"><label for="sns_ma9-1"><span></span> 사용함</label>
                                        <input type="radio" id="sns_ma9-2" value="" name="sns_ma9" class="radio_style"><label for="sns_ma9-2"><span></span> 사용안함</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit" rowspan="5">이미지 편집</td>
                                <td>
                                    <span class="ret_t1">jpg, png, gif만 가능</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    트위터<br>
                                    <div class="file_box">
                                        <label for="file">권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    페이스북<br>
                                    <div class="file_box">
                                        <label for="file">권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    인스타그램<br>
                                    <div class="file_box">
                                        <label for="file">권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    카카오 플러스친구(상세 이미지 최대 5장)<br>
                                    <div class="file_box">
                                        <label for="file">메인이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                    <div class="file_box">
                                        <label for="file">상세이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                    <div class="file_box">
                                        <label for="file">상세이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                    <div class="file_box">
                                        <label for="file">상세이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                    <div class="file_box">
                                        <label for="file">상세이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                    <div class="file_box">
                                        <label for="file">상세이미지 권장사이즈<br>(1024X1024)</label>
                                        <input type="file" id="file">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <button class="p_btn btn_default_two btn_center pro_btn2">확인</button>
    </div>
    
    <div class="auto_right sns_maright">
        <div class="class_list cover_box">
            <h2>미리보기</h2>
            
            <ul>
                <li>트위터</li>
                <li class="active">페이스북</li>
                <li>인스타그램</li>
            </ul>
            <button class="p_btn btn_default_two btn_center sns_btn1">Facebook에 공유하기</button>
            <div class="auto_text">
                <!--페이스북 (글 올릴 때) 화면-->
            </div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>