<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>
<?php include "./lib/page_category.php"; ?>


    <div class="shop_con notice_con">
    	<div class="tb_top">
    		<div class="nt_form">
				<select class="select_st">
					<option>일주일</option>
					<option>한달</option>
					<option>일년</option>
				</select>
				<select class="select_st">
					<option>제목</option>
					<option>내용</option>
					<option>글쓴이</option>
				</select>
				<input type="text" class="noticle_search" placeholder="검색어를 입력하세요.">
				<button type="button"><i class="xi-search"></i>검색</button>
			</div>
			<button type="button" class="btn_st btn_s" onclick="location.href='notice_write.php'"><i class="xi-border-color"></i> 글쓰기</button>
    	</div>
    	<div class="notice_table_box">
    		<table class="table_list">
				<thead>
					<tr>
						<th>번호</th>
						<th class="text_l">제목</th>
						<th>작성자</th>
						<th>작성일</th>
						<th>조회수</th>
					</tr>
				</thead>
				<tbody>
					<tr class="tl_fixed" onclick="location.href='notice_detail.php'">
						<td>7</td>
						<td class="text_l"><span>HOT</span> 상단에 고정되는 주요 공지입니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr class="tl_fixed" onclick="location.href='notice_detail.php'">
						<td>6</td>
						<td class="text_l"><span>HOT</span> 상단에 고정되는 주요 공지입니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr onclick="location.href='notice_detail.php'">
						<td>5</td>
						<td class="text_l">본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr onclick="location.href='notice_detail.php'">
						<td>4</td>
						<td class="text_l">본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr onclick="location.href='notice_detail.php'">
						<td>3</td>
						<td class="text_l">본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr onclick="location.href='notice_detail.php'">
						<td>2</td>
						<td class="text_l">본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
					<tr onclick="location.href='notice_detail.php'">
						<td>1</td>
						<td class="text_l">본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.</td>
						<td>관리자</td>
						<td>2022.06.20</td>
						<td>225</td>
					</tr>
				</tbody>
			</table>
    	</div>		
		<div class="pagenate">
			<a href="" class="page_ar"><img src="./images/page_l1.png" alt=""></a>
			<a href="" class="page_ar pa_m1"><img src="./images/page_l2.png" alt=""></a>
			<a href="" class="active">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="" class="page_del">4</a>
			<a href="" class="page_del">5</a>
			<a href="" class="page_ar pa_m2"><img src="./images/page_r2.png" alt=""></a>
			<a href="" class="page_ar"><img src="./images/page_r1.png" alt=""></a>
		</div>
    </div>
    <div class="shop_con">
        <div class="notice_write notice_detail">
            <div class="nw_box">
                <div class="nwb_list">
                    <div class="nwbl_l">제목</div>
                    <div class="nwbl_r">
                        본 사이트는 장애인차별금지법에 규정된 내용을 준수합니다.
                    </div>
                </div>
                <div class="nwb_list">
                    <div class="nwbl_l">작성자</div>
                    <div class="nwbl_r">
                        관리자
                    </div>
                </div>
                <div class="nw_txt">
                    <div class="nwt_img">
                        <img src="images/vi_banner_1_mb.png" alt="" />
                    </div>
                    가슴에 남는 좋은 글<br /><br />
                    웃음은 슬플 때를 위해 있는 것이고<br />
                    눈물은 기쁠 때를 위해 있는 것입니다.<br /><br />
                    사랑은 서로 마주 보는 것이 아니라<br />
                    함께 같은 방향을 보는 것입니다.<br /><br />
                    우정이란 친구를 딛고 내가 높아지는 것이 아니라<br />
                    친구가 나 자신을 딛게 하여 친구를 높이는 것이다.<br /><br />
                    그것은 둘이 함께<br />
                    높아지는 일이기도 합니다.<br /><br />
                    현명한 친구는 보물처럼 다루세요.<br />
                    많은 사람들의 호의보다 한 사람의 이해심이<br />
                    더욱 값지거든요.
                </div>
                <div class="nwb_list">
                    <div class="nwbl_l">첨부파일</div>
                    <div class="nwbl_r">
                        <a href="images/vi_banner_1_mb.png" download>vi_banner_1_mb.png</a>
                    </div>
                </div>
            </div>
            <div class="btn_box">
                <button type="button" class="btn_st" onclick="history.back()"><i class="xi-list-dot"></i> 목록으로</button>
                <div>
                    <button type="button" class="btn_st btn_darkgray"><i class="xi-angle-down-thin"></i> 이전 게시글</button>
                    <button type="button" class="btn_st btn_darkgray"><i class="xi-angle-up-thin"></i> 다음 게시글</button>
                </div>
            </div>
        </div>
    </div>
    <div class="shop_con">
        <div class="notice_write">
            <div class="nw_box">
                <div class="nwb_list">
                    <div class="nwbl_l">제목</div>
                    <div class="nwbl_r">
                        <input type="text" placeholder="제목을 입력하세요.">
                    </div>
                </div>
                <div class="nwb_list">
                    <div class="nwbl_l">작성자</div>
                    <div class="nwbl_r">
                        <input type="text" placeholder="작성자를 입력하세요.">
                    </div>
                </div>
                <div class="nwb_list">
                    <div class="nwbl_l">비밀번호</div>
                    <div class="nwbl_r">
                        <input type="password">
                        <p><i class="xi-lock"></i> 영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 10자~16자</p>
                    </div>
                </div>
                <div class="nwb_list">
                    <div class="nwbl_l">파일첨부</div>
                    <div class="nwbl_r">
                        <input type="file">
                        <p><i class="xi-camera"></i> 첨부파일: 10M 이하 / 확장자 제한 없음</p>
                    </div>
                </div>
            </div>
            <textarea class="nw_textarea"></textarea>
            <div class="btn_box">
                <button type="button" class="btn_st" onclick="history.back()"><i class="xi-list-dot"></i> 목록으로</button>
                <button type="button" class="btn_st btn_darkgray"><i class="xi-plus-thin"></i> 등록하기</button>
            </div>
        </div>
    </div>




<?php include "./lib/footer.php"; ?>