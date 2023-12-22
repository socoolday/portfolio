<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/category.php"; ?>
<?php include "./lib/page_category.php"; ?>
   
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