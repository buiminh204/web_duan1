<header>
    <div class="content">
        <div class="all_ul">
            <ul class="ul_head">
                <li class="li1">Kênh người bán |</li>
                <li class="li2">Tải ứng dụng |</a></li>
                <li class="li1">Kết nối <i id="icon" class="fa-brands fa-facebook fa-sm"></i> <i id="icon"
                        class="fa-brands fa-instagram fa-sm"></i></li>
            </ul>

            <ul class="ul_head" id="ul_head2">
                <li class="li3"><i class="fa-regular fa-bell fa-lg"></i> Thông báo</li>
                <li class="li4"><i class="fa-solid fa-headset fa-lg"></i> Hỗ trợ</li>
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    $UPLOAD_USER = "uploadUser/";
                    $hinh = $UPLOAD_USER . $avatar;
                    ?>

                    <?php if ($vaitro == 1) { ?>
                        <li class="li8"><button class="bnt"><a href="../web_duan1/admin/index.php">Amin</a></button></li>
                    <?php } ?>
                    <li><button class="bnt"><a href="index.php?act=thoat">Đăng Xuất</a></button></li>
                    <li class="li_avatar1"><img width="25px" height="25px" src="<?= $hinh ?>" alt=""></li>
                    <li class="li_nameUser">
                        <?= $tentk ?>
                    </li>
                    <?php
                } else { //nếu chưa đk thì sẽ hiện lên form để đăng ký
                    ?>

                    <li class="li6"><button class="bnt"><a href="index.php?act=dang_ky">Đăng ký</a></button></li>
                    <li class="li7"><button class="bnt"><a href="index.php?act=dang_nhap">Đăng Nhập</a></button></li>

                <?php } ?>
            </ul>
        </div>

        <div class="picture">
            <ul class="ul_logo">
                <li class="i"><i class="fa-brands fa-forumbee fa-2xl"></i></li>
                <li onclick="closeOpen()" class="bart_mobile"><i class="fa-solid fa-bars fa-lg"></i></li>
                <li><a class="name_logo" href="index.php">BeeShop</a></li>
            </ul>

            <ul class="ul_logo">
                <form action="index.php?act=sanphamDM" method="post">
                    <li><input type="text" name="kyw" placeholder="Tìm kiếm ..."></li>
                    <li class="li_bnt"><button name="timkiem" type="submit"><i
                                class="fa-solid fa-magnifying-glass fa-sm"></i></button></li>
                </form>


            </ul>

            <ul class="ul_logo" id="ul_cart">
                <li class="cart"><i class="fa-solid fa-cart-shopping fa-lg"></i> <span id="count">0</span>
                    <!-- submenu_cart -->
                    <div class="submenu_cart">
                        <div class="tieuDe_sub_cart">Sản Phẩm Mới Thêm</div>

                        <div id="messger">Ko có sản phẩm mô</div>
                        <ul class="ul_submenu_cart">
                            <!-- <li class="li_submenu_cart">
                                    <img src="content/img/sp3.jpg" alt="">
                                    <div class="name_sub_cart"> Áo khoác dạ nữ </div>
                                    <div class="price_sub_cart">100.000đ</div>
                                </li> -->


                        </ul>
                        <div class="viewCart">
                            <div class="number_cart"></div>
                            <div class="bnt_viewCart">Xem Giỏ Hàng</div>
                        </div>
                    </div>
                    <!-- end submenu_cart -->
                </li>
            </ul>
        </div>
    </div>
</header>