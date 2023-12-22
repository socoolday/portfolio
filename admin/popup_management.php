<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(6)").show()
    })
</script>


<div class="con_box pop_man">
    
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  팝업 설정</h1>
    
    <div class="pop_left">
        <div class="class_list cover_box">
            <h2>이미지 미리보기</h2>
            
            <!--  에디터  -->
            <textarea class="pop_texta">여름 휴가 필수 아이템 / 선글라스 추천
내 얼굴에 맞는 찰떡같은 선글라스를 찾아보세요!
       
HOT
SUMMER
VACATION
       
#여름 #휴가 #패션 #필수 아이템
#얼굴형 #선글라스 #멋짐 뿜뿜
            </textarea>
        </div>
    </div>
    
    <div class="pop_right">
        <div class="class_list cover_box">
            <h2>팝업 설정</h2>
            
            <div class="form_ad">
                <div class="table-responsive">          
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="fa_tit">팝업 이름</td>
                                <td>
                                    <input type="text" class="fa_input" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit" rowspan="2">디자인 선택</td>
                                <td>
                                    <input type="radio" id="sns_ma2-1" value="" name="sns_ma2" class="radio_style"><label for="sns_ma2-1"><span></span> 기본 제공 이미지</label>
                                    <input type="radio" id="sns_ma2-2" value="" name="sns_ma2" class="radio_style"><label for="sns_ma2-2"><span></span> 직접 등록</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pop_image_b">
                                        <div class="autoplay">
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                          <div class="pop_id"><img src="../../images/prd_img.png" alt=""></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">이벤트 시작일</td>
                                <td>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">2020</option>
                                        <option value="2">2019</option>
                                        <option value="2">2018</option>
                                    </select> 년
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 월
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 일
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 시
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 분
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">이벤트 마감일</td>
                                <td>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">2020</option>
                                        <option value="2">2019</option>
                                        <option value="2">2018</option>
                                    </select> 년
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 월
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 일
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 시
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 분
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 노출일</td>
                                <td>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">요일선택</option>
                                        <option value="1">월</option>
                                        <option value="2">화</option>
                                        <option value="2">수</option>
                                        <option value="2">목</option>
                                        <option value="2">금</option>
                                        <option value="2">토</option>
                                        <option value="2">일</option>
                                    </select>
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 시
                                    <select name="" id="" class="fa_sel">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        <option value="2">6</option>
                                        <option value="2">7</option>
                                        <option value="2">8</option>
                                        <option value="2">9</option>
                                        <option value="2">10</option>
                                        <option value="2">11</option>
                                        <option value="2">12</option>
                                    </select> 분
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 크기</td>
                                <td>
                                    가로 <input type="text" class="fa_input" placeholder="" value=""> X 세로 <input type="text" class="fa_input" placeholder="" value=""><br>
                                    기본단위 픽셀(pixel)
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 위치</td>
                                <td>
                                    X축으로 <input type="text" class="fa_input" placeholder="" value=""> Y축으로 <input type="text" class="fa_input" placeholder="" value=""><br>
                                    기본단위 픽셀(pixel)
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 스크롤 바</td>
                                <td>
                                    <input type="radio" id="pop1-1" value="" name="pop1" class="radio_style"><label for="pop1-1"><span></span> 있음</label>
                                    <input type="radio" id="pop1-2" value="" name="pop1" class="radio_style"><label for="pop1-2"><span></span> 없음</label>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 이동 여부</td>
                                <td>
                                    <input type="radio" id="pop2-1" value="" name="pop2" class="radio_style"><label for="pop2-1"><span></span> 가능</label>
                                    <input type="radio" id="pop2-2" value="" name="pop2" class="radio_style"><label for="pop2-2"><span></span> 고정</label>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 자동 사라짐</td>
                                <td>
                                    <input type="radio" id="pop3-1" value="" name="pop3" class="radio_style"><label for="pop3-1"><span></span> 사용</label>
                                    <input type="radio" id="pop3-2" value="" name="pop3" class="radio_style"><label for="pop3-2"><span></span> 사용안함</label><br>
                                    <br>
                                    <input type="text" class="fa_input" placeholder="" value=""> 초 후 자동으로 사라짐
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업 투명도</td>
                                <td>
                                    <input type="radio" id="pop4-1" value="" name="pop4" class="radio_style"><label for="pop4-1"><span></span> 사용</label>
                                    <input type="radio" id="pop4-2" value="" name="pop4" class="radio_style"><label for="pop4-2"><span></span> 사용안함</label><br>
                                    <br>
                                    투명도 : <input type="text" class="fa_input" placeholder="" value=""> %
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">팝업창 표시</td>
                                <td>
                                    <input type="radio" id="pop5-1" value="" name="pop5" class="radio_style"><label for="pop5-1"><span></span> 오늘은 그만 보기</label>
                                    <input type="radio" id="pop5-2" value="" name="pop5" class="radio_style"><label for="pop5-2"><span></span> 다시 열리지 않음</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">내용 입력</td>
                                <td>
                                    <textarea class="pop_texta2"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">이미지 등록</td>
                                <td>
                                    <div class="file_box2">
                                        <label for="file">파일 선택</label>
                                        <input type="file" id="file">
                                    </div>
                                    권장 사이즈 : 가로 400, 세로 최대 3000
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">이미지 링크</td>
                                <td>
                                    <input type="text" class="r_supp_text" placeholder="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_tit">이미지 링크 속성</td>
                                <td>
                                    <input type="radio" id="pop6-1" value="" name="pop6" class="radio_style"><label for="pop6-1"><span></span> 새 창에서</label>
                                    <input type="radio" id="pop6-2" value="" name="pop6" class="radio_style"><label for="pop6-2"><span></span> 열린 창에서</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
    </div>
    
    <div class="j_btn_group r_w100">
        <button class="p_btn btn_default_two">확인</button>
        <button class="p_btn btn_default_one">취소</button>
    </div>
    
</div>




<?php include "./lib/footer.php"; ?>