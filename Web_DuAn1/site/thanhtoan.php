<?php 
  include "site/head.php";
?>

<body>
<div class="main1">
        <div class="header">
            <div class="content1">
                <div class="all_ul1">
                    <ul class="ul_head1">
                        <li>Kênh người bán |</li>
                        <li>Tải ứng dụng |</li>
                        <li>Kết nối <i id="icon" class="fa-brands fa-facebook fa-sm"></i> <i id="icon"
                                class="fa-brands fa-instagram fa-sm"></i></li>
                    </ul>

                    <ul class="ul_head1" id="ul_head3">
                        <li><i class="fa-regular fa-bell fa-lg"></i> Thông báo</li>
                        <li><i class="fa-solid fa-headset fa-lg"></i> Hỗ trợ</li>
                        <?php if(isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        } ?>
                        <li><?= "Xin Chào: ". $tentk ?></li>
                        <!-- <li><i class="fa-solid fa-globe fa-lg"></i> Tiếng việt <i
                                class="fa-solid fa-chevron-down fa-sm"></i></li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="article_thanhtoan">
            <div class="main_header">
                <div class="picture1">
                    <ul class="ul_logo1">
                        <li class="i1"><i class="fa-solid fa-bag-shopping fa-2xl"></i></li>
                        <li><a class="name_logo1" href="index.php?act=index">Shoppe | Thanh Toán</a></li>
                    </ul>
                </div>
            </div>

            <div class="thongTin_nguoiNhan">
                <div class="tieuDe_thongtin">Thông Tin Người Nhận</div>
                <div class="form_main">
                    <form action="">
                        <div class="form__row">
                            <label class="form__label">Họ Tên :</label>
                            <input class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label class="form__label">Điện Thoại :</label>
                            <input class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label class="form__label">Email :</label>
                            <input class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label class="form__label">Địa Chỉ :</label>
                            <input class="form__input" type="text">
                        </div>
                    </form>
                </div>
            </div>

            <div class="sanPham_thanhToan">
                <div class="tieuDe_thanhToan">
                    <div class="TTSP1">Sản Phẩm</div>
                    <div class="TTSP2"></div>
                    <div class="TTSP3">Giá</div>
                    <div class="TTSP4">số Lượng</div>
                    <div class="TTSP5">Thành Tiền</div>
                </div>

                <div class="box_thanhtoan">
                    <div class="thongTin_SP_thanhToan">
                        <div class="boxTT1"><img src="content/img/sp7.jpg" alt=""></div>
                        <div class="boxTT2">Áo thun nam nữ oversize</div>
                        <div class="boxTT3">118K</div>
                        <div class="boxTT4">1</div>
                        <div class="boxTT5">118k</div>
                    </div>

                    <div class="thongTin_SP_thanhToan">
                        <div class="boxTT1"><img src="content/img/sp3.jpg" alt=""></div>
                        <div class="boxTT2">Áo khoác dạ nữ</div>
                        <div class="boxTT3">199K</div>
                        <div class="boxTT4">1</div>
                        <div class="boxTT5">199K</div>
                    </div>
                </div>
                <div class="box_datHang">
                    <div class="item_datHang">
                        <div>Tổng Tiền : 317k</div>
                        <button>Đặt Hàng</button>
                    </div>
                </div>
            </div>

        </div>

 <?php
  include "site/footer.php";
 ?>
    </div>
</body>

</html>