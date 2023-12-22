<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>
<?php include "./lib/moim_fix_menu.php"; ?>


<div class="wrap">
    <div class="page_title">
        <h2>Moim</h2>
    </div>
    <div class="page_nav">
        <div class="con">
            <ul>
                <li>
                    <a href="./index.php"><img src="./images/home_icon_sm.png" alt="">Home</a>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">모임</option>
                        <option value="">Feed</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">추천모임</option>
                        <option value="">Hot 모임</option>
                        <option value="">나의 모임</option>
                        <option value="">내가만든 모임</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="con">
        <div class="mv_con">
            <div class="mv_tit">
                <div class="mv_img">
                    <div class="mv_im_im">
                        <img src="./images/mv_tit_img_f.png" alt="">
                        <img src="./images/mv_tit_img.png" alt="" class="real_img">
                    </div>
                    <ul>
                        <li>
                            <button type="button" class="wish_btn"><i class="xi-star-o"></i></button>
                            <button type="button" class="moim_join_btn"><i class="xi-plus"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="mv_txt">
                    <h2>Surfing</h2>
                    <p>OCEAN BEACH</p>
                </div>
                <div class="feed_p3">
                    <ul>
                        <li>
                            <button type="button"><i class="xi-heart-o"></i> <p>LIKE</p> <span>2</span></button>
                        </li>
                        <li>
                            <button type="button"><i class="xi-comment-o"></i> <p>COMMENT</p> <span>2</span></button>
                        </li>
                        <li>
                            <button type="button"><i class="xi-share"></i> <p>SHARE</p> <span>5</span></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="moim_mem_list_v">
                <div class="mmlv_tit">
                    <h2>Member</h2>
                    <span>(300)</span>
                    <div class="mmlvt_btn_group">
                        <ul>
                            <li>
                                <button type="button" class="mmlv_add_mem" data-bs-toggle="modal" data-bs-target=".add_mem_modal">초대하기 <i class="xi-user-plus-o"></i></button>
                            </li>
                            <li>
                                <button type="button" class="mmlv_request_join" data-bs-toggle="modal" data-bs-target=".request_join_modal">가입요청 <i class="xi-bell-o"></i><span>3</span></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mmlv_l mmlv_detail">
                    <ul>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/fp1_p_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">john</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Gal Gadot</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">peter</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/fp1_p_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Unname</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Bob</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Dynamic</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/fp1_p_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Gal Gadot</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">Unname</p>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/mem_in_photo_f.png" alt="">
                                <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                            </a>
                            <p class="member_name">john</p>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--멤버초대:s-->
<div class="modal fade add_mem_modal" tabindex="-1" aria-labelledby="search_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>멤버초대</h2>
                <button type="button" class="search_mod_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="search_mod_form">
                    <div class="search_mod_input">
                        <div class="smi_input">
                            <input type="text">
                        </div>
                    </div>
                    <div class="modal_search_btn">
                        <button type="button"><i class="xi-search"></i> Search</button>
                    </div>
                    <div class="add_mem_s_li">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">john</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Gal Gadot</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">peter</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Unname</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Bob</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Dynamic</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Gal Gadot</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Unname</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">john</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-plus-circle-o"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
<!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
-->
            </div>
        </div>
    </div>
</div>
<!--멤버초대:e-->
<!--가입요청:s-->
<div class="modal fade request_join_modal" tabindex="-1" aria-labelledby="search_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>가입요청</h2>
                <button type="button" class="search_mod_close" data-bs-dismiss="modal" aria-label="Close"><i class="xi-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="search_mod_form">
                    <div class="add_mem_s_li">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">john</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Gal Gadot</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">peter</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Unname</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Bob</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Dynamic</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/fp1_p_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Gal Gadot</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">Unname</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./images/mem_in_photo_f.png" alt="">
                                    <img src="./images/mem_li_photo_1.png" class="real_img" alt="">
                                </a>
                                <p class="member_name">john</p>
                                <div class="add_mem_btn">
                                    <button type="button"><i class="xi-check-circle-o"></i> <span>승인</span></button>
                                    <button type="button" class="btn_gray"><i class="xi-close-circle"></i> <span>거절</span></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
<!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
-->
            </div>
        </div>
    </div>
</div>
<!--가입요청:e-->







<?php include "./lib/footer.php"; ?>