<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 예치금 설정</h1>
    
    <div class="input_form_2 cover_box">
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">적립금 지급 시점 설정</td>
                            <td>
                                <input type="radio" id="dep_s1-1" value="" name="dep_s1" class="radio_style"><label for="dep_s1-1"><span></span> 사용함</label>
                                <input type="radio" id="dep_s1-2" value="" name="dep_s1" class="radio_style"><label for="dep_s1-2"><span></span> 사용 안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 명칭</td>
                            <td>
                                <input type="text" class="fa_input" placeholder="통페이">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 표시 방식</td>
                            <td>
                                <input type="text" class="fa_input" placeholder="Tong">
                                <p class="tb_in_txt">[Tong]는 기본 명칭이며 수정 시 새로운 명칭을 입력 하시면 됩니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립금 절사</td>
                            <td>
                                적립금을 %단위로 입력하는 경우에 
                                <select name="" id="" class="fa_sel">
                                    <option value="1">없음</option>
                                    <option value="2">1</option>
                                    <option value="3">100</option>
                                    <option value="3">1000</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <button class="p_btn btn_default_two btn_center">저장하기</button>
</div>

<?php include "./lib/footer.php"; ?>