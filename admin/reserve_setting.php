<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>


<div class="con_box">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 적립금 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>기본설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">제목</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">지급 시점</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">지급 내용</td>
                            <td>
                                <input type="text" class="r_supp_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">실행 여부</td>
                            <td>
                                <input type="radio" id="res_s1-1" value="" name="res_s1" class="radio_style"><label for="res_s1-1"><span></span> 사용</label>
                                <input type="radio" id="res_s1-2" value="" name="res_s1" class="radio_style"><label for="res_s1-2"><span></span> 중지</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">적립 조건</td>
                            <td>
                                <select name="" id="" class="fa_sel">
                                    <option value="1">게시물 등록</option>
                                    <option value="2">댓글 등록</option>
                                    <option value="3">답변 등록</option>
                                    <option value="3">회원가입</option>
                                    <option value="3">로그인</option>
                                </select>
                                
                                <!-- 게시물 등록 선택 시 하단 div 나오게. -->
                                <div class="r_res_list">
                                    <label><input type="checkbox" value="" class="check_style"> 게시판 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 관심상품</label>
                                    <label><input type="checkbox" value="" class="check_style"> 가입현황</label>
                                    <label><input type="checkbox" value="" class="check_style"> 갤러리형 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 로그인 기록</label>
                                    <label><input type="checkbox" value="" class="check_style"> 공지사항</label>
                                    <label><input type="checkbox" value="" class="check_style"> 동영상 형 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 메모 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 링크형 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 댓글 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 방문 로그</label>
                                    <label><input type="checkbox" value="" class="check_style"> 그룹 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 반복 설정</label>
                                    <label><input type="checkbox" value="" class="check_style"> 보관 쪽지함</label>
                                    <label><input type="checkbox" value="" class="check_style"> 보낸 쪽지함</label>
                                    <label><input type="checkbox" value="" class="check_style"> 방문 순위</label>
                                    <label><input type="checkbox" value="" class="check_style"> 그룹 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 베스트 상품</label>
                                    <label><input type="checkbox" value="" class="check_style"> 상품 문의</label>
                                    <label><input type="checkbox" value="" class="check_style"> 일반형 게시판</label>
                                    <label><input type="checkbox" value="" class="check_style"> 수신거부 로그</label>
                                    <label><input type="checkbox" value="" class="check_style"> 상품 문의</label>
                                    <label><input type="checkbox" value="" class="check_style"> 판매 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 상품 후기</label>
                                    <label><input type="checkbox" value="" class="check_style"> 자동 메일</label>
                                    <label><input type="checkbox" value="" class="check_style"> 재고 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 장바구니</label>
                                    <label><input type="checkbox" value="" class="check_style"> 설정 관리</label>
                                    <label><input type="checkbox" value="" class="check_style"> 팝업 관리</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    
    <button class="p_btn btn_default_two btn_center">설정하기</button>
    
</div>


<?php include "./lib/footer.php"; ?>