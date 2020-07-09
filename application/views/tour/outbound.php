<section class="thw-section info2 cid-s0fEQGHpQF" id="info2-v" data-bg-video="https://www.youtube.com/watch?v=KbPxz0V8dHQ&amp;feature=youtu.be&amp;fbclid=IwAR2ZiqCNsg_GXHVrlrOmaQnTk_cLie4mc6Gua2JikKc0AYuNsSMVr2Lduxg">

    <div class="thw-overlay" style="opacity: 0; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right thw-bold thw-white pb-3 thw-fonts-style display-2">&nbsp;&nbsp;</h2>

            </div>
        </div>
    </div>
</section>

<section class="services1 cid-s0m0XZ2TZr" id="services1-1c">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $count = 1;
            foreach ($tour as $t) { ?>

                <div class="card col-12 col-md-6 p-3 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <a href="<?= site_url("tourdescription/detail?id=$t[IdTour]") ?>"><img src="/resources/images/pq-696x407.jpg" alt="thw" title=""></a>
                        </div>
                        <div class="card-box">
                                <a href="<?= site_url("tourdescription/detail?id=$t[IdTour]") ?>" class="text-danger">
                                    <h4 class="card-title thw-fonts-style display-5 description">
                                        <?php
                                        echo $t['Name'];
                                        if ($t['Note'] != '') {
                                            echo " - " . $t['Note'];
                                        } 
                                        ?>
                                    </h4>
                                </a>
                                <p class="thw-text thw-fonts-style display-8">
                                    <h7 class="description thw-text thw-fonts-style display-8"><strong>Lịch trình</strong>: <?php echo $t['Schedule'] ?></h7>
                                    <h7 class="description thw-text thw-fonts-style display-8"><strong>Điểm khởi hành</strong>: <?php echo $t['Start'] ?></h7>
                                    <h7 class="description thw-text thw-fonts-style display-8"><strong>Thời gian</strong>: <?php echo $t['NoDay'] . " ngày" ?> <?php echo $t['NoNight'] > 0 ? $t['NoNight'] . " đêm" : null ?></h7>
                                    <h7 class="description thw-text thw-fonts-style display-8"><strong>Phương tiện</strong>: <?php echo $t['Vehicle'] ?></h7>
                                    <h7><strong>Khách sạn</strong>: <?php echo $t['Hotel'] ?></h7>
                                </p>
                                <!--Btn-->
                                <div class="thw-section-btn align-left">
                                    <a href="<?= site_url("tourdescription/detail?id=$t[IdTour]") ?>" class="btn btn-danger-outline display-4"><?php echo number_format("$t[Price]") . "đ" ?></a>
                                </div>
                            </div>
                    </div>
                </div>

                <?php $count++;
                if ($count % 3 == 0) echo "<br>"; ?>
            <?php } ?>
        </div>
    </div>
</section>
</body>

</html>