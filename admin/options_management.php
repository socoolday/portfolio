<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<script>
    $(document).ready(function(){
        $(".sub_l_cate_group>li:eq(1)").show()
    })
</script>


<div class="con_box r_class">
   
    <h1 class="con_tit_name"><i class="fas fa-grip-vertical"></i>  옵션 설정하기</h1>
    
    <div class="class_box cover_box">
        <div class="btn_group">
            <button class="p_btn btn_default_two r_class_btn1">대분류 만들기</button>
            <button class="p_btn btn_default_one r_class_btn2">삭제</button>
            <button class="p_btn btn_default_two r_class_btn3">저장</button>
        </div>
        <div class="class_list_btn2">
            <button type="button"><i class="fas fa-door-open"></i></button>
            <button type="button"><i class="fas fa-arrow-up"></i></button>
            <button type="button"><i class="fas fa-arrow-down"></i></button>
            <button type="button"><i class="far fa-save"></i></button>
        </div>
        
        <div class="class_list_ibox">
            <ul class="class_list1">
                <li>
                    <h3><i class="fas fa-folder"></i> 카테고리1</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-2</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-3</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-4</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-5</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-6</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-7</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리1-8</a></li>
                    </ul>
                </li>
                <li>
                    <h3><i class="far fa-folder"></i> 카테고리2</h3>
                </li>
                <li>
                    <h3><i class="far fa-folder"></i> 카테고리3</h3>
                </li>
                <li>
                    <h3><i class="fas fa-folder"></i> 카테고리4</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리4-2</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="on"><i class="fas fa-folder-open"></i> 카테고리5</h3>
                    <ul class="class_list2">
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-1</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-2</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-3</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-4</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-5</a></li>
                        <li><a href=""><i class="fas fa-ellipsis-h"></i> 카테고리5-6</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="class_list cover_box">
        <h2>옵션 설정하기</h2>
        
        <div class="opt_box">
            <div class="opt_i">
                <div class="opt_left">선택분류</div>
                <div class="opt_right">카테고리 5 <i class="fas fa-chevron-right"></i> 카테고리 5-1</div>
            </div>
        </div>
        
        <div class="form_ad">
            <div class="table-responsive">          
                <table class="table">
                    <tbody>
                       <tr>
                            <td class="fa_tit opt_text1">티플레이트 스프링 블로썸 티컵 세트</td>
                            <td>
                                <div class="opt_list">
                                    <p>옵션 1) 스프링 블로썸 티컵 4set / 136574A654</p>
                                    <div class="opt_btn">
                                        <!-- 수정하기(추가하기 팝업) 누르면 텍스트가 input창으로 바뀐다. (옵션값 입력창 + 가격 입력창)-->
                                        <button class="p_btn btn_default_one">수정</button> 
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                                <div class="opt_list">
                                    <p>옵션 2) 스프링 블로썸 티컵 2set / 136574A654</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one">수정</button>
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit opt_text1">티플레이트 스프링 블로썸 티컵 세트</td>
                            <td>
                                <div class="opt_list">
                                    <p>옵션없음</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one" data-toggle="modal" data-target="#myModal">추가하기</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fa_tit opt_text1">디올 코스메틱 단독 세트 BEST</td>
                            <td>
                                <div class="opt_list">
                                    <p>옵션 1) [디올] 립 글로우 세트 (+미니 맥시마이저) / 41800</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one">수정</button>
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                                <div class="opt_list">
                                    <p>옵션 2) [디올] 미스 디올 블루밍 부케 100ml 세트 (+블루밍 부케 디스커버리 킷) / 169100</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one">수정</button>
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                                <div class="opt_list">
                                    <p>옵션 3) [디올] 포에버 매트 파운데이션 세트 (+포에버 쿠션 샘플) / 73150</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one">수정</button>
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                                <div class="opt_list">
                                    <p>옵션 4) [디올] 미스 디올 블루밍 부케 100ml 세트 (+조이 바디로션 20ml &amp; EDP 5ml) / 169100</p>
                                    <div class="opt_btn">
                                        <button class="p_btn btn_default_one">수정</button>
                                        <button class="p_btn btn_default_two">삭제</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <button class="p_btn btn_default_two btn_center btn_ma r_btn3">확인</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade r_tax" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">옵션 설정하기 추가하기</h4>
        </div>
        
        <div class="modal-body">
            <div class="class_list cover_box">
                <h2>기본정보 입력</h2>

                <div class="form_ad">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <!-- 옵션코드 자동생성 -->
                                    <td class="fa_tit">옵션코드</td>
                                    <td>
                                        <input type="text" class="r_reg_text"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">옵션 사용 여부</td>
                                    <td>
                                        <input type="radio" id="regi11-1" value="" name="pro_regi11" class="radio_style"><label for="regi11-1"><span></span> 사용함</label>
                                        <input type="radio" id="regi11-2" value="" name="pro_regi11" class="radio_style"><label for="regi11-2"><span></span> 사용 안함</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">옵션 수량</td>
                                    <td>
                                        <input type="text" class="r_reg_text">개 
                                        <button class="p_btn btn_default_one">추가</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit">옵션 설정</td>
                                    <td>
                                        <div class="table-responsive form_info_b"> 
                                            <table class="table r_rtable">
                                                <thead>
                                                    <tr>
                                                        <td>순서</td>
                                                        <td>옵션 명 / 옵션 값</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="r_reg_text" placeholder="예시) 선택1"></td>
                                                        <td>
                                                            <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 옐로우">
                                                            <div class="regi_opt">
                                                                <input type="text" class="r_reg_text">원
                                                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                                                <button class="p_btn btn_default_one">삭제</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="r_reg_text" placeholder="예시) 선택2"></td>
                                                        <td>
                                                            <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 그린">
                                                            <div class="regi_opt">
                                                                <input type="text" class="r_reg_text">원
                                                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                                                <button class="p_btn btn_default_one">삭제</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fa_tit" rowspan="2">추가 구성 상품 설정</td>
                                    <td>
                                        <input type="radio" id="regi12-1" value="" name="pro_regi12" class="radio_style"><label for="regi12-1"><span></span> 사용함</label>
                                        <input type="radio" id="regi12-2" value="" name="pro_regi12" class="radio_style"><label for="regi12-2"><span></span> 사용 안함</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-responsive form_info_b"> 
                                            <table class="table r_rtable">
                                                <thead>
                                                    <tr>
                                                        <td>순서</td>
                                                        <td>옵션 명 / 옵션 값</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="r_reg_text" placeholder="예시) 선택1"></td>
                                                        <td>
                                                            <input type="text" class="r_reg_text2" placeholder="예시) [티플레이트] 블루 플라워 티 세트 옐로우">
                                                            <div class="regi_opt">
                                                                <input type="text" class="r_reg_text">원
                                                                <button class="p_btn btn_default_two r_btn2">추가</button>
                                                                <button class="p_btn btn_default_one">삭제</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">확인</button>
        </div>
    </div>

    </div>
</div>



<?php include "./lib/footer.php"; ?>