<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_mass">

    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i> 상품 대량 등록</h1>
    
    <div class="input_form_2 cover_box">
        <h2>기본 설정</h2>
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="r_mass_ltd">
                                1. 엑셀 양식 다운로드<br>
                                (엑셀 파일을 다운받아 예제와 같이 상품 정보를 작성합니다.)
                            </td>
                            <td class="r_mass_rtd">
                                <button class="p_btn btn_default_one">양식 다운로드</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="r_mass_ltd">
                                2.작성 완료한 파일 업로드
                            </td>
                            <td class="r_mass_rtd">
                                <div class="file_box2">
                                    <label for="file">파일 선택</label>
                                    <input type="file" id="file">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="r_mass_ltd">
                                3. 처리 및 일괄 등록
                            </td>
                            <td class="r_mass_rtd">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mass_tbox">
            <h4>대량 등록 사용자 매뉴얼</h4>
            
            <ul>
                <li>
                    <h3>- 상품정보 대량 등록</h3>
                    <p>
                        상품 등록 시 각 상품별로 등록하는 것이 아닌 다수의 상품을 엑셀(CSV) 파일로 작성하여 등록하는 기능입니다. 한 개의 파일로 등록 가능한 상품의 개수는 최대 100개입니다.
                    </p>
                </li>
                <li>
                    <h3>- 엑셀파일 작성 예시</h3>
                    <p>
                        상품명 : 티플레이트 리페어 블루 스프라이트 플랫<br>
                        판매가 : 456780<br>
                        할인가 : 564131 ( 29% )<br>
                        제조사 : 티플레이트<br>
                        원산지 : 대한민국<br>
                        모델명 : TP-34AB<br>
                        브랜드 : 티플레이트<br>
                        출시일 : 20190000<br>
                        진열코드 : N459054390<br>
                        적립금 : 26000<br>
                        적립률 : 10%<br>
                        재고 : 45 (제한이 없을 경우 무제한으로 입력)<br>
                        <span>옵션 1 ) 블루 스프라이트 티컵</span><br>
                        <span>옵션 1) 가격 135700</span>
                        상품진열 여부 : Y (Y 진열, N 대기)<br>
                        상품 썸네일 이미지 : (PC)http://naver.com , (모바일)<br>
                        상품 상세페이지 이미지 :<br>
                        상품 동영상 :<br>
                        상품고시정보 : 화장품 (정제수, 에탄올……………) 
                    </p>
                </li>
            </ul>
        </div>
        
    </div>

</div>

<div class="r_sim_btn">
    <button class="p_btn btn_default_two btn_center btn_ma">등록하기</button>
    <button class="p_btn btn_default_two btn_center btn_ma">상품목록</button>
</div>




<?php include "./lib/footer.php"; ?>