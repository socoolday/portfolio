<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(6)").show()
    })
</script>


<div class="con_box main_des mai_pre">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  이미지 관리(메인 이미지 등록하기)</h1>
    
    <div class="cover_box main_img">
        <h2>이미지 위치</h2>
        
        <div class="mai_left">
                <button type="button" class="mai_side pre_btn">사이드 고정 배너</button>
                <button type="button" class="mai_side pre_btn">사이드 고정 배너</button>
                <button type="button" class="mai_side pre_btn">사이드 고정 배너</button>
                <button type="button" class="mai_side pre_btn">사이드 고정 배너</button>
            </div>
            
            <div class="mai_right">
                <button type="button" class="mai_logo pre_btn">로고</button>
                
                <div class="mai_visu">
                    <button type="button" class="mai_cate pre_btn">카테고리 배너</button>
                    <button type="button" class="mai_roll pre_btn">비주얼 롤링 배너</button>
                </div>
                
                <button type="button" class="mai_longb pre_btn">띠 배너</button>
                
                <button type="button" class="mai_mdpick pre_btn">MD's Pick</button><br>
                <button type="button" class="mai_mdpick pre_btn">MD's Pick</button><br>
                <button type="button" class="mai_mdpick pre_btn">MD's Pick</button><br>
                <button type="button" class="mai_mdpick pre_btn">MD's Pick</button>
                
                <button type="button" class="mai_broll pre_btn">하단부 롤링 배너</button>
                
                <button type="button" class="mai_fologo pre_btn">로고</button>
            </div>
       
        
    </div>
    
    <!-- 이미지 위치 내 버튼 클릭 시 해당 이미지 등록하는 div 나타남. 단, 카테고리 배너는 해당 페이지로 링크. -->
    <div class="cover_box input_form_2 main_reg">
        <h2>이미지 등록하기</h2>
        
        <!-- 로고
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                로고
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="3">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                상단 로고
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                하단 로고
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div-->
        
        <!-- 띠 배너
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                띠 배너
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X200)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div-->
       
        <!-- 비주얼 롤링 배너 -->
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                비주얼 롤링 배너
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능. 최대 10개까지 등록 가능.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                                <br><br>
                                <input type="radio" id="main_de1-1" value="" name="main_de1" class="radio_style"><label for="main_de1-1"><span></span> 사용함</label>
                                <input type="radio" id="main_de1-2" value="" name="main_de1" class="radio_style"><label for="main_de1-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- MD's Pick
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                MD's Pick
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="5">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능. 4가지 고정.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X200)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X200)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X200)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X200)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div-->
        
        <!-- 하단부 롤링 배너
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                하단부 롤링 배너
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능. 최대 10개까지 등록 가능.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X720)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                                <br><br>
                                <input type="radio" id="main_de2-1" value="" name="main_de2" class="radio_style"><label for="main_de2-1"><span></span> 사용함</label>
                                <input type="radio" id="main_de2-2" value="" name="main_de2" class="radio_style"><label for="main_de2-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div-->
        
        <!-- 사이드 고정 배너
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                사이드 고정 배너
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">파일 등록</td>
                            <td>
                                jpg, png, gif 등록 가능. 최대 4개까지 등록 가능.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                                <br><br>
                                <input type="radio" id="main_de3-1" value="" name="main_de3" class="radio_style"><label for="main_de3-1"><span></span> 사용함</label>
                                <input type="radio" id="main_de3-2" value="" name="main_de3" class="radio_style"><label for="main_de3-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div-->
    </div>
    
    <button class="p_btn btn_default_two btn_center pro_btn2">확인</button>
</div>




<?php include "./lib/footer.php"; ?>