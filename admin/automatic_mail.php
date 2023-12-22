<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box r_auto">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 자동 메일 발송 설정</h1>
    
    <div class="auto_left">
        <div class="class_list cover_box">
            <h2>메일 발송 내역 리스트</h2>

            <div class="form_ad">
                <div class="table-responsive form_info_b">      
                    <table class="table r_man_table">
                        <thead>
                            <tr>
                                <th>내용 항목</th>
                                <th>회원</th>
                                <th>운영자</th>
                                <th>공급사</th>
                                <th>수정</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>신규 가입</td>
                                <td>
                                    <input type="radio" id="a_mem1-1" value="" name="a_mem1" class="radio_style"><label for="a_mem1-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem1-2" value="" name="a_mem1" class="radio_style"><label for="a_mem1-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys1-1" value="" name="a_sys1" class="radio_style"><label for="a_sys1-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys1-2" value="" name="a_sys1" class="radio_style"><label for="a_sys1-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup1-1" value="" name="a_sup1" class="radio_style"><label for="a_sup1-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup1-2" value="" name="a_sup1" class="radio_style"><label for="a_sup1-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>아이디/비밀번호 안내</td>
                                <td>
                                    <input type="radio" id="a_mem2-1" value="" name="a_mem2" class="radio_style"><label for="a_mem2-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem2-2" value="" name="a_mem2" class="radio_style"><label for="a_mem2-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys2-1" value="" name="a_sys2" class="radio_style"><label for="a_sys2-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys2-2" value="" name="a_sys2" class="radio_style"><label for="a_sys2-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup2-1" value="" name="a_sup2" class="radio_style"><label for="a_sup2-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup2-2" value="" name="a_sup2" class="radio_style"><label for="a_sup2-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>회원 인증확인</td>
                                <td>
                                    <input type="radio" id="a_mem3-1" value="" name="a_mem3" class="radio_style"><label for="a_mem3-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem3-2" value="" name="a_mem3" class="radio_style"><label for="a_mem3-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys3-1" value="" name="a_sys3" class="radio_style"><label for="a_sys3-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys3-2" value="" name="a_sys3" class="radio_style"><label for="a_sys3-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup3-1" value="" name="a_sup3" class="radio_style"><label for="a_sup3-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup3-2" value="" name="a_sup3" class="radio_style"><label for="a_sup3-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>주문 내역 확인</td>
                                <td>
                                    <input type="radio" id="a_mem4-1" value="" name="a_mem4" class="radio_style"><label for="a_mem4-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem4-2" value="" name="a_mem4" class="radio_style"><label for="a_mem4-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys4-1" value="" name="a_sys4" class="radio_style"><label for="a_sys4-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys4-2" value="" name="a_sys4" class="radio_style"><label for="a_sys4-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup4-1" value="" name="a_sup4" class="radio_style"><label for="a_sup4-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup4-2" value="" name="a_sup4" class="radio_style"><label for="a_sup4-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>결제 확인 안내</td>
                                <td>
                                    <input type="radio" id="a_mem5-1" value="" name="a_mem5" class="radio_style"><label for="a_mem5-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem5-2" value="" name="a_mem5" class="radio_style"><label for="a_mem5-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys5-1" value="" name="a_sys5" class="radio_style"><label for="a_sys5-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys5-2" value="" name="a_sys5" class="radio_style"><label for="a_sys5-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup5-1" value="" name="a_sup5" class="radio_style"><label for="a_sup5-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup5-2" value="" name="a_sup5" class="radio_style"><label for="a_sup5-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>배송 완료 안내</td>
                                <td>
                                    <input type="radio" id="a_mem6-1" value="" name="a_mem6" class="radio_style"><label for="a_mem6-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem6-2" value="" name="a_mem6" class="radio_style"><label for="a_mem6-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys6-1" value="" name="a_sys6" class="radio_style"><label for="a_sys6-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys6-2" value="" name="a_sys6" class="radio_style"><label for="a_sys6-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup6-1" value="" name="a_sup6" class="radio_style"><label for="a_sup6-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup6-2" value="" name="a_sup6" class="radio_style"><label for="a_sup6-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>결제 확인 안내</td>
                                <td>
                                    <input type="radio" id="a_mem7-1" value="" name="a_mem7" class="radio_style"><label for="a_mem7-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem7-2" value="" name="a_mem7" class="radio_style"><label for="a_mem7-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys7-1" value="" name="a_sys7" class="radio_style"><label for="a_sys7-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys7-2" value="" name="a_sys7" class="radio_style"><label for="a_sys7-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup7-1" value="" name="a_sup7" class="radio_style"><label for="a_sup7-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup7-2" value="" name="a_sup7" class="radio_style"><label for="a_sup7-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>배송 완료 안내</td>
                                <td>
                                    <input type="radio" id="a_mem8-1" value="" name="a_mem8" class="radio_style"><label for="a_mem8-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem8-2" value="" name="a_mem8" class="radio_style"><label for="a_mem8-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys8-1" value="" name="a_sys8" class="radio_style"><label for="a_sys8-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys8-2" value="" name="a_sys8" class="radio_style"><label for="a_sys8-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup8-1" value="" name="a_sup8" class="radio_style"><label for="a_sup8-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup8-2" value="" name="a_sup8" class="radio_style"><label for="a_sup8-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>취소/교환/반품 안내</td>
                                <td>
                                    <input type="radio" id="a_mem9-1" value="" name="a_mem9" class="radio_style"><label for="a_mem9-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem9-2" value="" name="a_mem9" class="radio_style"><label for="a_mem9-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys9-1" value="" name="a_sys9" class="radio_style"><label for="a_sys9-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys9-2" value="" name="a_sys9" class="radio_style"><label for="a_sys9-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup9-1" value="" name="a_sup9" class="radio_style"><label for="a_sup9-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup9-2" value="" name="a_sup9" class="radio_style"><label for="a_sup9-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>환불 안내</td>
                                <td>
                                    <input type="radio" id="a_mem10-1" value="" name="a_mem10" class="radio_style"><label for="a_mem10-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem10-2" value="" name="a_mem10" class="radio_style"><label for="a_mem10-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys10-1" value="" name="a_sys10" class="radio_style"><label for="a_sys10-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys10-2" value="" name="a_sys10" class="radio_style"><label for="a_sys10-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup10-1" value="" name="a_sup10" class="radio_style"><label for="a_sup10-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup10-2" value="" name="a_sup10" class="radio_style"><label for="a_sup10-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>1:1 문의 답변 안내</td>
                                <td>
                                    <input type="radio" id="a_mem11-1" value="" name="a_mem11" class="radio_style"><label for="a_mem11-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem11-2" value="" name="a_mem11" class="radio_style"><label for="a_mem11-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys11-1" value="" name="a_sys11" class="radio_style"><label for="a_sys11-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys11-2" value="" name="a_sys11" class="radio_style"><label for="a_sys11-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup11-1" value="" name="a_sup11" class="radio_style"><label for="a_sup11-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup11-2" value="" name="a_sup11" class="radio_style"><label for="a_sup11-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>비회원 결제 안내</td>
                                <td>
                                    <input type="radio" id="a_mem12-1" value="" name="a_mem12" class="radio_style"><label for="a_mem12-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem12-2" value="" name="a_mem12" class="radio_style"><label for="a_mem12-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys12-1" value="" name="a_sys12" class="radio_style"><label for="a_sys12-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys12-2" value="" name="a_sys12" class="radio_style"><label for="a_sys12-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup12-1" value="" name="a_sup12" class="radio_style"><label for="a_sup12-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup12-2" value="" name="a_sup12" class="radio_style"><label for="a_sup12-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>휴면 회원 안내</td>
                                <td>
                                    <input type="radio" id="a_mem13-1" value="" name="a_mem13" class="radio_style"><label for="a_mem13-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem13-2" value="" name="a_mem13" class="radio_style"><label for="a_mem13-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys13-1" value="" name="a_sys13" class="radio_style"><label for="a_sys13-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys13-2" value="" name="a_sys13" class="radio_style"><label for="a_sys13-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup13-1" value="" name="a_sup13" class="radio_style"><label for="a_sup13-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup13-2" value="" name="a_sup13" class="radio_style"><label for="a_sup13-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>적립금 소멸 안내</td>
                                <td>
                                    <input type="radio" id="a_mem14-1" value="" name="a_mem14" class="radio_style"><label for="a_mem14-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem14-2" value="" name="a_mem14" class="radio_style"><label for="a_mem14-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys14-1" value="" name="a_sys14" class="radio_style"><label for="a_sys14-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys14-2" value="" name="a_sys14" class="radio_style"><label for="a_sys14-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup14-1" value="" name="a_sup14" class="radio_style"><label for="a_sup14-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup14-2" value="" name="a_sup14" class="radio_style"><label for="a_sup14-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>회원가입 정보 인증</td>
                                <td>
                                    <input type="radio" id="a_mem15-1" value="" name="a_mem15" class="radio_style"><label for="a_mem15-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem15-2" value="" name="a_mem15" class="radio_style"><label for="a_mem15-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys15-1" value="" name="a_sys15" class="radio_style"><label for="a_sys15-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys15-2" value="" name="a_sys15" class="radio_style"><label for="a_sys15-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup15-1" value="" name="a_sup15" class="radio_style"><label for="a_sup15-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup15-2" value="" name="a_sup15" class="radio_style"><label for="a_sup15-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>본인 확인 인증 안내</td>
                                <td>
                                    <input type="radio" id="a_mem16-1" value="" name="a_mem16" class="radio_style"><label for="a_mem16-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem16-2" value="" name="a_mem16" class="radio_style"><label for="a_mem16-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys16-1" value="" name="a_sys16" class="radio_style"><label for="a_sys16-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys16-2" value="" name="a_sys16" class="radio_style"><label for="a_sys16-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup16-1" value="" name="a_sup16" class="radio_style"><label for="a_sup16-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup16-2" value="" name="a_sup16" class="radio_style"><label for="a_sup16-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                            
                            <tr>
                                <td>생일 쿠폰 발급 안내</td>
                                <td>
                                    <input type="radio" id="a_mem17-1" value="" name="a_mem17" class="radio_style"><label for="a_mem17-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_mem17-2" value="" name="a_mem17" class="radio_style"><label for="a_mem17-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sys17-1" value="" name="a_sys17" class="radio_style"><label for="a_sys17-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sys17-2" value="" name="a_sys17" class="radio_style"><label for="a_sys17-2"><span></span> 사용 안함</label>
                                </td>
                                <td>
                                    <input type="radio" id="a_sup17-1" value="" name="a_sup17" class="radio_style"><label for="a_sup17-1"><span></span> 사용함</label>
                                    <input type="radio" id="a_sup17-2" value="" name="a_sup17" class="radio_style"><label for="a_sup17-2"><span></span> 사용 안함</label>
                                </td>
                                <td><button class="p_btn btn_default_two r_btn2">수정</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    
    <div class="auto_right">
        <div class="class_list cover_box">
            <h2>수정하기</h2>
            
            <ul>
                <li class="active">회원</li>
                <li>운영자</li>
                <li>공급사</li>
            </ul>
            
            <div class="auto_text">
                <!-- 에디터 -->
                <input type="text" class="r_supp_text" placeholder="메일 제목을 입력해주세요.">
                <textarea class="auto_t_a">
                
함께하는 쇼핑, 고객님께서 기분 좋은 쇼핑을 하실 수 있도록 최선을 다하겠습니다.
회원가입을 축하합니다! 

환영합니다!
               
홍길동(hongiile) 님의 회원가입을 축하 드립니다.
앞으로도 많은 관심 부탁 드립니다.

[쇼핑하러 가기]
               
ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
               
Tel 0000-0000
Fax 0000-0000
12345 서울특별시 서울구 서울동 서울로 서울빌딩 0층
대표이사 홍길동
개인정보보호책임자 홍길동
사업자 등록번호 000-00-0000
통신판매업 신고 제 12345 호
               
Copytightⓒ 쇼핑몰 all rights reserved. Tplate.shop
                </textarea>
            </div>
            <div class="auto_btn">
                <button class="p_btn btn_default_two r_btn2">수정</button>
                <button class="p_btn btn_default_one">미리보기</button>
            </div>
        </div>
    </div>

</div>




<?php include "./lib/footer.php"; ?>