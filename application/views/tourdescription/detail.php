<section class="thw-section info1 cid-s0mzz4vPkA" id="info1-2a">
    <div class="thw-overlay" style="opacity: 0; background-color: rgb(239, 239, 239);">
    </div>
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="thw-section-subtitle align-left thw-light pb-3 thw-fonts-style display-5">
                    <br><br>
                    <strong>
                        <?php echo "Tour du lịch " . $tour['Name'] . ' ' . $tour['NoDay'] . " ngày " . $tour['NoNight'] . " đêm "; ?>
                    </strong>
                    <div><br></div>
                </h3>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="thw-section-btn align-right py-4"><a class="btn btn-danger display-4" href="<?= site_url("cart?id=$tour[IdTour]") ?>"><?php echo number_format("$tour[Price]")."đ" ?></a></div>
            </div>
        </div>
    </div>
</section>


<section class="features12 cid-s0mzNphvZ5" id="features12-2c">
    <div class="container">
        <h3 class="thw-section-subtitle pb-3 thw-fonts-style display-5">Ngày 1: Tp. Hồ Chí Minh - Đà Nẵng - Hội An
        </h3>
        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3">
                    <div class="thw-card-img-title">
                        <div class="thw-crt-title">
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="thw-text thw-section-text thw-fonts-style display-7"><strong>Sáng</strong>: Hướng
                            dẫn viên đón khách tại Đà Nẵng từ 7h00 – 09h00 (sân bay / ga /điểm hẹn).
                            Vòng qua Cầu Rồng lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong
                            lành bên bờ Hàn Giang với tượng Cá Chép Hóa Long - Biểu tượng mong muốn vươn lên của
                            người Đà Nẵng. Tham quan Chùa Quan Thế Âm - Bảo Tàng Phật Học và Làng Nghề Điêu Khắc Đá.
                            Mua sắm đặc sản Quà Miền Trung.&nbsp;<br>Trưa: Quý khách ăn trưa nhà hàng.&nbsp;<br></p>
                    </div>
                </div>
            </div>
            <div class="thw-figure m-auto" style="width: 50%;">
                <img src="/resources/images/hoian-982x574.jpg" alt="thw" title="">
            </div>
            <div class="block-content align-left">
                <div class="card pl-3 pr-3">
                    <div class="thw-card-img-title">
                        <div class="thw-crt-title">
                        </div>
                    </div>

                    <div class="card-box">
                        <p class="thw-text thw-section-text thw-fonts-style display-7"><strong>Chiều</strong>: Khởi
                            hành vào Hội An bách bộ tham quan và mua sắm Phố Cổvới: Chùa Cầu Nhật Bản, Nhà Cổhàng
                            trăm năm tuổi, Hội Quán Phước Kiến &amp; Xưởng thủ công mỹ nghệ. Khởi hành về lại Đà
                            Nẵng.
                            <br><strong>Tối</strong>: Ăn tối nhà hàng. Tự do thưởng ngoạn du thuyền trên sông Hàn
                            ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào
                            cuối tuần.&nbsp;<br></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>


<section class="services1 cid-s0mI4fNCuo" id="services1-2i">
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 thw-fonts-style display-5">Tour du lịch cùng loại</h2>
            </div>
            <!--Card-1-->
            <?php foreach ($tourbytype as $tt) { ?>
                <div class="card col-12 col-md-6 p-3 col-lg-3">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>"><img src="/resources/images/tn-506x296.jpg" alt="thw" title=""></a>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title thw-fonts-style display-5"><a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>" class="text-danger"><?= $tt['Name'] ?>
                                </a>
                                <div><br></div>
                            </h4>
                            <p class="thw-text thw-fonts-style display-7"><strong><br></strong>
                                    <strong>Lịch trình</strong>: <?= $tt['Schedule'] ?>
                                <br><strong>Điểm khởi hành</strong>: <?= $tt['Start'] ?>
                                <br><strong>Thời gian</strong>: <?php echo $tt['NoDay'] ?> ngày <?php echo $tt['NoNight'] ?> đêm
                                <br><strong>Phương tiện</strong>: <?= $tt['Vehicle'] ?>
                                <br><strong>Khách sạn</strong>: <?= $tt['Hotel'] ?></p>
                            <!--Btn-->
                            <div class="thw-section-btn align-left"><a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>" class="btn btn-danger-outline display-4"><?php echo number_format("$tt[Price]")."đ" ?></a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>