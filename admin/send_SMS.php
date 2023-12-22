<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box r_class">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  SMS 발송</h1>
    
    <div class="class_box cover_box">
        <h2>SMS 직접 발송 - 발송 대상</h2>
        
        <textarea class="r_send_sta">테스트1
나무
나무가 춤을 추면
바람이 불고
나무가 잠잠하면
바람도 자오</textarea>
       
        <div class="r_send_s1">
            <label><input type="checkbox" value="" class="check_style"> 광고성 정보</label>
        </div>
        <div class="r_send_s1">
            <label><input type="checkbox" value="" class="check_style"> 무료 수신거부</label>
        </div>
        <div class="r_send_s2">
            <p>[ 00 / 1000byte ]</p>
        </div>
        <div class="r_send_s2">
            <button class="p_btn btn_default_third">특수문자</button>
            <button class="p_btn btn_default_third">이모티콘</button>
            <button class="p_btn btn_default_third">이미지</button>
        </div>
        
        <button class="p_btn btn_default_two r_btn2 r_sbtn1">발송하기</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>발송 설정하기</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit">발송 설정</td>
                            <td>
                                <input type="radio" id="send_s1-1" value="" name="send_s1" class="radio_style"><label for="send_s1-1"><span></span> 즉시 발송</label>
                                <input type="radio" id="send_s1-2" value="" name="send_s1" class="radio_style"><label for="send_s1-2"><span></span> 예약 발송</label>
                                
                                <!-- 예약발송 클릭 시 아래 div 나타나게. -->
                                <div class="s_sbox r_send_s">
                                    <button type="button" class="p_btn btn_default_third active">오늘</button>
                                    <button type="button" class="p_btn btn_default_third">3일</button>
                                    <button type="button" class="p_btn btn_default_third">7일</button>
                                    <button type="button" class="p_btn btn_default_third">1개월</button>

                                    <div class="form_day_sel">
                                        <span><input type="text" id="datepicker1"><i class="far fa-calendar-alt"></i></span> ~
                                        <span><input type="text" id="datepicker2"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 검색</td>
                            <td>
                                <input type="radio" id="send_s2-1" value="" name="send_s2" class="radio_style"><label for="send_s2-1"><span></span> 전체</label>
                                <input type="radio" id="send_s2-2" value="" name="send_s2" class="radio_style"><label for="send_s2-2"><span></span> 특정 회원 검색</label> <input type="text" class="r_reg_text" disabled> 
                                <input type="radio" id="send_s2-3" value="" name="send_s2" class="radio_style"><label for="send_s2-3"><span></span> 그룹별</label>
                                <input type="radio" id="send_s2-4" value="" name="send_s2" class="radio_style"><label for="send_s2-4"><span></span> 등급별</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회원 등급</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1" selected>등급1</option>
                                    <option value="2">등급2</option>
                                    <option value="3">등급3</option>
                                    <option value="3">등급4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">발신자 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">수신거부 회원 설정</td>
                            <td>
                                <input type="radio" id="send_s3-1" value="" name="send_s3" class="radio_style"><label for="send_s3-1"><span></span> 수신거부 회원 포함</label>
                                <input type="radio" id="send_s3-2" value="" name="send_s3" class="radio_style"><label for="send_s3-2"><span></span> 수신거부 회원 제외</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="r_send_sg">
            <h1>작성 가이드</h1>
            
            <dl>
                <dt>광고성 정보</dt>
                <dd>- 메시지 앞에 [광고] 문구가 표시됩니다.</dd>
                <dd>- 메시지 뒤에 [무료 수신거부] 정보가 표시됩니다.</dd>
                <dd>- '광고성 정보'에 체크할 시 SMS 수신을 허용한 회원에게만 발송됩니다.</dd>
            </dl>
            
            <dl>
                <dt>특수문자 / 이모티콘 / 이미지</dt>
                <dd>- 각 버튼 클릭 시 메시지 내용에 바로 입력이 됩니다.</dd>
                <dd>- 각 메시지들은 기본으로 제공하는 특수 문자만 이용이 가능하며 그 외의 문자 입력 시 내용이 잘려서 발송될 수 있습니다.</dd>
            </dl>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>