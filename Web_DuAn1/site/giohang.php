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

        <div class="article">
            <div class="main_header">
                <div class="picture1">
                    <ul class="ul_logo1">
                        <li class="i1"><i class="fa-brands fa-forumbee fa-2xl"></i></li>
                        <li><a class="name_logo1" href="index.php">BeeShop | Giỏ Hàng</a></li>
                    </ul>

                    <ul class="ul_logo1">
                        <li><input type="text" placeholder="Tìm kiếm ..."></li>
                        <li class="li_bnt1"><button><i class="fa-solid fa-magnifying-glass fa-sm"></i></button></li>

                    </ul>
                </div>
            </div>

            <!-- sp -->
            <div class="mainColum">
                <div class="mucluc">
                    <div class="ML1"><input type="checkbox"></div>
                    <div class="ML2">Sản Phẩm</div>
                    <div class="ML3"></div>
                    <div class="ML4">Đơn Giá</div>
                    <div class="ML5">Số Lượng</div>
                    <div class="ML6">Số Tiền</div>
                    <div class="ML7">Thao Tác</div>
                </div>

                <div id="main_messager">
                    <div id="thongBao_imageCart">
                        <img src="content/img/cart_trong.webp" alt="">
                    </div>
                </div>

                <div class="listSP">
                    <!-- <div class="list">
                        <div class="SP1"><input type="checkbox"></div>
                        <div class="SP2"><img width="80px" src="img/sp1.jpg" alt=""></div>
                        <div class="SP3">Áo Oversize nam form rộng nhung tăm dể mặc</div>
                        <div class="SP4">1.000.000</div>
                        <div class="SP5"><input type="number" value="1"></div>
                        <div class="SP6">2.000.000</div>
                        <div class="SP7"><button onclick="removeItem(' + i + ')>Xóa</button></div>
                    </div> -->
                </div>
            </div>

        </div>

        <div class="total">
            <div class="listTT">
                <div class="t1"><input type="checkbox"></div>
                <div class="t2">Chọn Tất Cả(<span id="count">0</span>)</div>
                <div class="t3">Tổng Thanh Toán :<span class="tongtien">0</span>đ</div>
                <div class="t4"><button><a href="index.php?act=thanhtoan">Mua Ngay</a></button></div>
            </div>
        </div>

        <?php
        include "footer.php";
      ?>


        <div class="chat">
            <i class="fa-regular fa-comment-dots fa-2xl"></i>
            <b>Chat</b>
            </ul>
        </div>
    </div>

    <script src="content/js/index.js"></script>
</body>

</html>