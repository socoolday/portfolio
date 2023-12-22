<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(6)").show()
    })
</script>


<div class="con_box">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  카테고리 배너</h1>
    
    <div class="input_form_2 cover_box">
        <h2>카테고리 내부 배너 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">배너 명</td>
                            <td>
                                카테고리 배너
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
                                카테고리 명 : <input type="text" class="fa_input" placeholder="">
                                <br>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">태블릿<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                <button class="p_btn btn_default_one">삭제</button>
                                <br><br>
                                <input type="radio" id="main_de3-1" value="" name="main_de3" class="radio_style"><label for="main_de3-1"><span></span> 사용함</label>
                                <input type="radio" id="main_de3-2" value="" name="main_de3" class="radio_style"><label for="main_de3-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                카테고리 명 : <input type="text" class="fa_input" placeholder="">
                                <br>
                                <div class="file_box">
                                    <label for="file">PC<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">태블릿<br>(1920X600)</label>
                                    <input type="file" id="file">
                                </div>
                                <div class="file_box">
                                    <label for="file">모바일<br>(1920X600)</label>
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
        </div>
        
    </div>
    
    <button class="p_btn btn_default_two btn_center pro_btn2">확인</button>

</div>




<?php include "./lib/footer.php"; ?>