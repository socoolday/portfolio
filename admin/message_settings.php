<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(3)").show()
    })
</script>


<div class="con_box r_mes">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 메시지 설정</h1>
    
    <div class="input_form_2 cover_box">
        <h2>SMS 발신자 정보 입력</h2>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="fa_tit">발신자 명</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">회신 연락처</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">수신거부 연락처 (수신자 부담 전화번호)</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">운영자 연락처</td>
                            <td>
                                <input type="text" class="r_reg_text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
    
    <div class="class_list cover_box">
        <h2>SMS 발송하기 - 자동 발송 설정</h2>
        
        <div class="form_ad">
            <div class="table-responsive form_info_b">      
                <table class="table r_man_table">
                    <thead>
                        <tr>
                            <th><label><input type="checkbox" value="" class="check_style"></label> 사용 여부</th>
                            <th colspan="3">발송 상황</th>
                            <th>회원</th>
                            <th>운영자</th>
                            <th>공급사</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="3">수신거부 회원 발송 설정</td>
                            <td colspan="3">
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 상품주문 안내</label>
                                <label><input type="checkbox" value="" class="check_style"> 송장번호 안내</label>
                                <label><input type="checkbox" value="" class="check_style"> 배송 안내</label>
                                <label><input type="checkbox" value="" class="check_style"> 입금 안내</label>
                                <label><input type="checkbox" value="" class="check_style"> 품절, 재고 안내</label>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="3">가입 메시지</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] 홍길동 님의 회원가입을 축하 드립니다!</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] 홍길동 님의 회원가입을 축하 드립니다!</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] 홍길동 님의 회원가입을 축하 드립니다!</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="3">주문 관련</td>
                            <td>주문완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>주문취소</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>상품발송</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="3">결제 관련</td>
                            <td>입금안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>결제완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>미입금 취소 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="10"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="10">상품관련</td>
                            <td>상품 준비 중 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 상품이 준비 중입니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 상품이 준비 중입니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 상품이 준비 중입니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>반품 신청</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>반품 접수</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 접수 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 접수 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 신청이 접수 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>반품 수거 완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 수거 완료하였습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 수거 완료하였습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품 수거 완료하였습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>반품 완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품이 완료되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품이 완료되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 반품이 완료되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>교환 신청</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 신청이 접수되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 신청이 접수되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 신청이 접수되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>교환 접수</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 접수되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 접수되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 접수되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>교환 완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환이 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>교환 수거 완료</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 수거가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 수거가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 교환 수거가 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>수령 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 3일 후 수령받으실 수 있습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 3일 후 수령받으실 수 있습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 3일 후 수령받으실 수 있습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="4"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="4">결제 취소 관련</td>
                            <td>카드 부분 취소</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 입금이 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>결제 취소</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 결제가 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>환불 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>환불 관련 (예치금, 적립금)</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 취소 되었습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="3">계정 관련</td>
                            <td>비밀번호 찾기</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>아이디 찾기</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>인증 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="3"><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2" rowspan="3">혜택 관련</td>
                            <td>쿠폰 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>적립금 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>예치금 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><label><input type="checkbox" value="" class="check_style"></label></td>
                            <td colspan="2">게시판 관련</td>
                            <td>1:1 문의 답변 안내</td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                            <td>
                                <textarea class="mes_texta">[쇼핑몰] [스마트 에코 베이직 플러스 팩트…외 3건] 0원 주문 완료 되었습니다.</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        <button class="p_btn btn_default_two btn_center btn_ma r_btn2">확인</button>
    </div>

</div>




<?php include "./lib/footer.php"; ?>