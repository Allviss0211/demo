<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="thw v4.12.3, index.html">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="../assets/images/101924093-246119703475650-424695557458493440-n-1-122x99.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="../assets/web/assets/thw-icons-bold/thw-icons-bold.css">
    <link rel="stylesheet" href="../assets/web/assets/thw-icons/thw-icons.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/tether/tether.min.css">
    <link rel="stylesheet" href="../assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../assets/socicon/css/styles.css">
    <link rel="stylesheet" href="../assets/theme/css/style.css">
    <link rel="preload" as="style" href="../assets/thw/css/thw-additional.css">
    <link rel="stylesheet" href="../assets/thw/css/thw-additional.css" type="text/css">
    <link rel="stylesheet" href="\resources\css\style.css">


</head>

<body>
    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="<?= base_url("home") ?>">
                            <img src="../assets/images/101924093-246119703475650-424695557458493440-n-1-122x99.png" alt="thw" title="" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?= base_url("home") ?>">Tourist Half Way</a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-primary display-4" href="index.html">
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION["isLogin"])) {
                            if (isset($_SESSION["lgRole"]) && $_SESSION["lgRole"] == 1) { ?>
                                <a class="nav-link link text-primary display-4" href="dashboard?id=<?php echo $_SESSION['lgIdUser'] ?>"><span class="thwib-info thw-iconfont thw-iconfont-btn">
                                    </span><?php echo $_SESSION["lgFullname"] ?> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </a>
                            <?php } else { ?>
                                <a class="nav-link link text-primary display-4" href=""><span class="thwib-info thw-iconfont thw-iconfont-btn">
                                    </span><?php echo $_SESSION["lgFullname"] ?>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </a>
                            <?php }
                        } else { ?>
                            <a class="nav-link link text-primary display-4" href="user/login"><span class="thwib-lock thw-iconfont thw-iconfont-btn">
                                </span>Đăng nhập &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            </a>
                        <?php  }
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-primary display-4" href="<?= base_url("home") ?>"><span class="thwib-home thw-iconfont thw-iconfont-btn"></span>Trang chủ &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="page3.html"><span class="thwib-gift thw-iconfont thw-iconfont-btn"></span>Sự kiện &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="page1.html"><span class="thwib-contact-form thw-iconfont thw-iconfont-btn"></span>
                            Giới thiệu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
                </ul>

            </div>
        </nav>
    </section>

    <section class="engine"></section>
    <section class="cid-qTkA127IK8 thw-fullscreen" id="header2-1">



        <div class="thw-overlay" style="opacity: 0.5; background-color: rgb(118, 118, 118);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="thw-white col-md-10">
                    <h1 class="thw-section-title thw-bold pb-3 thw-fonts-style display-1">Welcome to Tourist Half Way
                    </h1>

                    <p class="thw-text pb-3 thw-fonts-style display-5">Với khẩu hiệu: "Tận nơi, Tận tình, Tận nhiệt" -
                        Hãy để Tourist Half Way đưa bạn đến với tận cùng của sự hưởng thụ.&nbsp;</p>
                    <p></p>
                    <p></p>
                    <div class="thw-section-btn"><a class="btn btn-md btn-primary display-4" href="<?= base_url("trong_nuoc") ?>">Tour
                            Trong Nước</a>
                        <a class="btn btn-md btn-white-outline display-4" href="<?=base_url("trong_nuoc")?>">Tour Ngoài Nước</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class="cid-s0ao5PIJhv" id="footer2-8">





        <div class="container">
            <div class="media-container-row content thw-white">
                <div class="col-12 col-md-3 thw-fonts-style display-7">
                    <p class="thw-text"><strong>Địa Chỉ:</strong><br> 280 đường An Dương Vương, Phường 4, Quận 5, Thành
                        phố hồ Chí Minh.<br><br><strong>Liên hệ:</strong><br>Email:
                        touristhw@gmail.com<br>Hotline:&nbsp;0909.113.115<br>Tư vấn và đặt dịch vụ:
                        1900.1508<br><br><strong><a href="page20.html">Góp ý về Tourist Half Way</a></strong><br></p>
                </div>
                <div class="col-12 col-md-3 thw-fonts-style display-7">
                    <p class="thw-text">&nbsp;&nbsp;</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.8282399895065!2d106.681882!3d10.760936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fb4502ebd044212!2sHo%20Chi%20Minh%20City%20University%20of%20Education!5e0!3m2!1sen!2sus!4v1590561186918!5m2!1sen!2sus" allowfullscreen=""></iframe></div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row thw-white">
                    <div class="col-sm-6 copyright">
                        <p class="thw-text thw-fonts-style display-7">
                            © Tourist Half Way - We will fill your life with lots of joy</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://www.facebook.com/Tourist-Half-Way-106931774377216/?modal=admin_todo_tour" target="_blank">
                                    <span class="thw-iconfont thw-iconfont-social socicon-facebook socicon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="../assets/web/assets/jquery/jquery.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/tether/tether.min.js"></script>
    <script src="../assets/dropdown/js/nav-dropdown.js"></script>
    <script src="../assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="../assets/smoothscroll/smooth-scroll.js"></script>
    <script src="../assets/theme/js/script.js"></script>


</body>

</html>