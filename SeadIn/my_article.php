<?php include "./lib/meta.php"; ?>
<?php include "./lib/header.php"; ?>

<div class="wrap">
    <div class="page_title">
        <h2>My article</h2>
    </div>
    <div class="page_nav">
        <div class="con">
            <ul>
                <li>
                    <a href="./index.php"><img src="./images/home_icon_sm.png" alt="">Home</a>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">내정보</option>
                        <option value="">Feed</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">나의 글</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    <div class="con">
        <div class="feed_li icon_feed">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Post</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Comment</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <select id="" class="feed_select">
                        <option value="1">최신순</option>
                        <option value="2">오래된순</option>
                    </select>
                    <ul>
                        <li>
                            <div class="feed_con">
                                <p class="moim_tag">A gathering of football lovers</p>
                                <div class="feed_p1">
                                    <div class="fp1_photo">
                                        <i class="xi-paper-o"></i>
                                    </div>
                                    <div class="fp1_txt">
                                        <div class="fp1_moment">
                                            <a href=""><p>Jamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset Cliffs</p></a>
                                        </div>
                                        <div class="fp1_time">
                                            <p>Today at 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feed_con">
                                <p class="moim_tag">A gathering of football lovers</p>
                                <div class="feed_p1">
                                    <div class="fp1_photo">
                                        <i class="xi-paper-o"></i>
                                    </div>
                                    <div class="fp1_txt">
                                        <div class="fp1_moment">
                                            <a href=""><p>Jamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffs</p></a>
                                        </div>
                                        <div class="fp1_time">
                                            <p>Today at 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="view_mor_con"><span>VIEW MORE</span> <i class="xi-plus-circle"></i></button>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <select id="" class="feed_select">
                        <option value="1">최신순</option>
                        <option value="2">오래된순</option>
                    </select>
                    <ul>
                        <li>
                            <div class="feed_con">
                                <p class="moim_tag">A gathering of football lovers</p>
                                <div class="feed_p1">
                                    <div class="fp1_photo">
                                        <i class="xi-message-o"></i>
                                    </div>
                                    <div class="fp1_txt">
                                        <div class="fp1_moment">
                                            <a href=""><p>Jamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffs</p></a>
                                        </div>
                                        <div class="fp1_time">
                                            <p>Today at 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feed_con">
                                <p class="moim_tag">A gathering of football lovers</p>
                                <div class="feed_p1">
                                    <div class="fp1_photo">
                                        <i class="xi-message-o"></i>
                                    </div>
                                    <div class="fp1_txt">
                                        <div class="fp1_moment">
                                            <a href=""><p>Jamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffr 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffs Jamie Allender surfed for 1.5 Hours at Sunset CliffsJamie Allender surfed for 1.5 Hours at Sunset Cliffss</p></a>
                                        </div>
                                        <div class="fp1_time">
                                            <p>Today at 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="view_mor_con"><span>VIEW MORE</span> <i class="xi-plus-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./lib/footer.php"; ?>