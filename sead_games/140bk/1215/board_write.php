<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>


<div class="wrap">
    <div class="con">
        <div class="board">
            <h2 class="sub_tit"><b>Write Feed</b></h2>
            <div class="board_cover">
                <div class="bc_write_new">
                    <textarea name="name" rows="" cols=""></textarea>
                </div>
                <div class="filebox">
                    <input class="upload-name" value="파일선택" disabled="disabled">
                    <label for="ex_filename">업로드</label>
                    <input type="file" id="ex_filename" class="upload-hidden">
                </div>
                <div class="write_n_feed">
                    <button type="button" name="button"><i class="xi-pen-o"></i> Write New Feed</button>
                </div>

            </div>
        </div>
    </div>
</div>




<?php include "./lib/footer.php"; ?>
