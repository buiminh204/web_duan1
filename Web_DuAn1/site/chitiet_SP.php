<?php
include "site/head.php";
?>

<body>
    <main>
        <?php include "header.php" ?>

        <div class="aritcle_chitiet">
            <div class="content_SP">
                <div class="chitetSP">
                    <?php
                    // $onedm = loadOne_danhmuc($id);
                    extract($oneSPDM);
                    $URL_UPLOAD = "upload/";
                    $hinh = $URL_UPLOAD . $img;

                    ?>
                    <div class="thongTin_SP_tablet">
                        <h1>
                            <?= $tensp ?>
                        </h1>
                    </div>
                    <div class="anh_chitiet">
                        <img src="<?= $hinh ?>" alt="">
                    </div>

                    <div class="thongTin_SP">
                        <h1>
                            <?= $tensp ?>
                        </h1>

                        <div class="flex_bnt">
                            <button>
                                <div class="bnt_item1">4,7K</div>
                                <div class="bnt_item2">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                </div>
                            </button>

                            <button>
                                <div class="bnt_item1">13,7K</div>
                                <div class="bnt_item2">Đánh Giá</div>
                            </button>

                            <button>
                                <div class="bnt_item1">13,7K</div>
                                <div class="bnt_item2">Đánh Giá</div>
                            </button>
                        </div>

                        <div class="khung">
                            <h3>12.12 Sale</h3>
                        </div>

                        <div class="Gia">
                            <div class="price_SP">
                                <?= $gia ?>K
                            </div>
                            <div class="_0voski">21% Giảm</div>
                        </div>


                        <div class="thongTin_chitiet">
                            <p>Mã Sản Phẩm :
                                <?= $idsp ?>
                            </p>
                            <p>Loại Hàng :
                                <?= $tendm ?>
                            </p>
                            <p>Ngày Nhập : 10/12/2023</p>
                            <p>Số Lượt Xem :
                                <?= $luotxem ?>
                            </p>
                            <p id="mota_SP">Mô Tả :
                                <?= $mota ?>
                            </p>

                            <div class="inp">
                                <p>Số Lượng : <input type="number" value="1"></p>
                            </div>

                            <div class="nut">
                                <button><i id="i_icon" class="fa-solid fa-cart-shopping fa-sm"></i><a
                                        href="index.php?act=thanhtoan">Mua Ngay</a></button>
                                <!-- <button>Mua Ngay</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sản phẩm liên quan -->

                <div class="sanpham_lienquan">
                    <h3>Sản Phẩm Liên Quan</h3>
                </div>

                <div class="box_sp">
                    <?php
                    foreach ($top6 as $top) {
                        extract($top);
                        $URL_UPLOAD = "upload/";
                        $hinh = $URL_UPLOAD . $img;
                        $linksp = "index.php?act=chitiet_SP&idsp=".$idsp;
                        ?>
                        <div class="box">
                            <a href="<?= $linksp ?>">
                            <div class="image">
                                <img width="180px" height="188px" src="<?= $hinh ?>" alt="">
                            </div>
                            </a>

                            <img class="voucher" src="img/voucher.jpg" alt="">

                            <div class="note">
                                <p><?= $tensp ?></p>
                            </div>

                            <div class="price">
                                <div>
                                    <span class="sp1"><?= $gia ?></span>đ
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="tieuDe_chat">
                    <h3>Bình Luận</h3>
                </div>
                <!-- form gửi bl -->
                <?php  extract($oneSPDM); ?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("#binhluan").load("site/binhluan.php", { idproduct: <?= $idsp ?> });
                });
            </script>
                <div id="binhluan">

                </div>
                <!-- form gửi bl -->


            </div>
        </div>

        <!-- footer -->
        <?php
        include "footer.php";
        ?>
    </main>

    <script src="content/js/index.js"></script>
</body>

</html>