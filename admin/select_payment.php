<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(0)").show()
    })
</script>
<div class="con_box">
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 결제 방식 설정</h1>
    <div class="input_form_2 cover_box">
        <h2>통합 전자결제 서비스</h2>
        <div class="r_pay-tbox">
            <p>
                <span>통합 전자결제 서비스, PG</span><br>
                PG란 신용카드, 계좌이체, 휴대폰, 에스크로, 가상계좌 등의 결제수단을 쇼핑몰에서 온라인 거래를 하면서 지원하는 전자결제 서비스입니다. 운영자에게는 편리한 결제 시스템을 제공하고 소비자에게는 안심하고 결제할 수 있는 전자 결제입니다.
            </p>
        </div>
        <button class="p_btn btn_default_two r_sbtn1">PG전자결제 서비스 신청하기</button>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>지원 PG사</h2>
        <div class="r_pay_rbox">
            <ul class="r_pay_img">
                <li><img src="../../images/pay_1-1.png" alt=""></li>
                <li><img src="../../images/pay_1-2.png" alt=""></li>
                <li><img src="../../images/pay_1-3.png" alt=""></li>
                <li><img src="../../images/pay_1-4.png" alt=""></li>
                <li><img src="../../images/pay_1-5.png" alt=""></li>
                <li><img src="../../images/pay_1-6.png" alt=""></li>
                <li><img src="../../images/pay_1-7.png" alt=""></li>
                <li><img src="../../images/pay_1-8.png" alt=""></li>
                <li><img src="../../images/pay_1-9.png" alt=""></li>
            </ul>
            <ul class="r_pay_ex">
                <li><p>진행절차</p></li>
                <li><p><span>01</span><br>PG가입하기</p></li>
                <li><p><span>02</span><br>서류 심사 진행</p></li>
                <li><p><span>03</span><br>결제 연동하기</p></li>
                <li><p><span>04</span><br>PG가입완료</p></li>
            </ul>
        </div>
    </div>
    
    <div class="input_form_2 cover_box">
        <h2>결제 방식 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table r_pay_table1">
                    <tbody>
                        <tr>
                            <td class="fa_tit">결제수단</td>
                            <td colspan="2">
                                <label><input type="checkbox" value="" class="check_style"> 전체</label>
                                <label><input type="checkbox" value="" class="check_style"> 무통장 입금</label>
                                <label><input type="checkbox" value="" class="check_style"> 카드결제</label>
                                <label><input type="checkbox" value="" class="check_style"> 적립금 결제</label>
                                <label><input type="checkbox" value="" class="check_style"> 실시간 계좌이체</label>
                                <label><input type="checkbox" value="" class="check_style"> 가장계좌</label>
                                <label><input type="checkbox" value="" class="check_style"> 휴대폰 결제</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit" rowspan="2">결제수단 표시</td>
                            <td colspan="2">
                                <input type="radio" id="pay1-1" value="" name="pay1" checked="checked" class="radio_style"><label for="pay1-1"><span></span> 텍스트</label>
                                <input type="radio" id="pay1-2" value="" name="pay1" class="radio_style"><label for="pay1-2"><span></span> 로고 이미지</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="r_pay_td1 r_pay_line">
                                <ul class="r_pay_ttext">
                                    <li>
                                        <p>무통장 입금 : </p><input type="text" maxlength="20" value="무통장 입금" class="r_pay_text">
                                    </li>
                                    <li>
                                        <p>실시간 계좌이체 : </p><input type="text" maxlength="20" value="실시간 계좌이체" class="r_pay_text">
                                    </li>
                                    <li>
                                        <p>카드결제 : </p><input type="text" maxlength="20" value="카드결제" class="r_pay_text">
                                    </li>
                                    <li>
                                        <p>가상계좌 : </p><input type="text" maxlength="20" value="가상계좌" class="r_pay_text">
                                    </li>
                                </ul>
                            </td>
                            <td class="r_pay_td1">
                                <p>로고 이미지 타입</p>
                                <ul class="r_pay_logo">
                                    <li>
                                        <input type="radio" id="pay2-1" value="" name="pay2" class="radio_style">
                                        <label for="pay2-1"><span></span> <img src="../../images/pay_1-9.png" alt=""><br>이름</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay2-2" value="" name="pay2" class="radio_style">
                                        <label for="pay2-2"><span></span> <img src="../../images/pay_1-7.png" alt=""><br>아이콘(이미지)+이름</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">결제 시 결제창 사용 여부</td>
                            <td colspan="2">
                                <input type="radio" id="pay3-1" value="" name="pay3" class="radio_style"><label for="pay3-1"><span></span> 사용</label>
                                <input type="radio" id="pay3-2" value="" name="pay3" class="radio_style"><label for="pay3-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">표시순서</td>
                            <td colspan="2">
                                <div class="pay_order">
                                    <button type="button"><i class="fas fa-chevron-up"></i></button>
                                    <button type="button"><i class="fas fa-chevron-down"></i></button>
                                    <ul>
                                        <li>카드 결제</li>
                                        <li>실시간 계좌이체</li>
                                        <li>무통장 입금</li>
                                        <li>가장 계좌</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table r_pay_table1">
                    <tbody>
                        <tr>
                            <td class="fa_tit">PG 결제방식</td>
                            <td colspan="2">
                                <input type="radio" id="pay4-1" value="" name="pay4" class="radio_style"><label for="pay4-1"><span></span> 사용</label>
                                <input type="radio" id="pay4-2" value="" name="pay4" class="radio_style"><label for="pay4-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">PG 사용 시 페이지 하단 안전결제 안내 문구 사용 여부</td>
                            <td colspan="2">
                                <input type="radio" id="pay5-1" value="" name="pay5" class="radio_style"><label for="pay5-1"><span></span> 사용</label>
                                <input type="radio" id="pay5-2" value="" name="pay5" class="radio_style"><label for="pay5-2"><span></span> 사용안함</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table r_pay_table1">
                    <tbody>
                        <tr>
                            <td class="fa_tit">최소 결제 금액 기준</td>
                            <td colspan="2">
                                <input type="radio" id="pay6-1" value="" name="pay6" class="radio_style"><label for="pay6-1"><span></span> 총결제금액</label>
                                <input type="radio" id="pay6-2" value="" name="pay6" class="radio_style"><label for="pay6-2"><span></span> 총결제 금액에서 배송비 제외</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">무통장 최소 결제 가능 금액</td>
                            <td colspan="2">
                                <input type="text" class="pay_text"><p class="pay_text2">원</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">카드 최소 결제 가능 금액</td>
                            <td colspan="2">
                                <input type="text" class="pay_text"><p class="pay_text2">원</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table r_pay_table1">
                    <tbody>
                        <tr>
                            <td class="fa_tit">무통장 입금계좌 목록</td>
                            <td colspan="2">
                                <div class="table-responsive form_info_b"> 
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                                <td>은행명</td>
                                                <td>계좌번호</td>
                                                <td>예금주</td>
                                                <td>사용 여부</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                                <td>기업은행</td>
                                                <td>478-066826-01-011</td>
                                                <td>(주)티월드글로벌</td>
                                                <td>사용중</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                                <td>우리은행</td>
                                                <td>478-066826-01-011</td>
                                                <td>(주)티월드글로벌</td>
                                                <td>사용중</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                                <td>국민은행</td>
                                                <td>478-066826-01-011</td>
                                                <td>(주)티월드글로벌</td>
                                                <td>사용중</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value="" class="check_style"></label></td>
                                                <td>신한은행</td>
                                                <td>478-066826-01-011</td>
                                                <td>(주)티월드글로벌</td>
                                                <td>사용중</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table r_pay_table1">
                    <tbody>
                        <tr>
                            <td class="fa_tit">카드결제 대행사</td>
                            <td colspan="2">
                                dacom
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit">실시간 계좌이체 대행사</td>
                            <td colspan="2">
                                통합 LG DACOM
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