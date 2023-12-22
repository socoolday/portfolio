<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(6)").show()
    })
</script>


<div class="con_box">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  파비콘 관리</h1>
    
    <div class="input_form_2 cover_box">
        <h2>파비콘 설정</h2>
       
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">아이콘 등록</td>
                            <td>
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                                확장자 png, 권장 사이즈 1024X1024
                                <div class="fav_img">이미지<br> 미리보기</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <button class="p_btn btn_default_two btn_center pro_btn2">확인</button>
    
</div>