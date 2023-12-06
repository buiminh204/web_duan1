<?php
include "site/head.php";
?>

<body>
    <main>
        <?php include "header.php"  ?>

        <!--  -->
        <div class="aside_left" id="show-danhmuc">
            <div class="sub_menu">
                <div class="name_danhmuc">
                    <i class="fa-brands fa-forumbee fa-lg"></i>DANH MỤC SHOP
                </div>
                <div class="sub_menu_listdm">
                   <ul>
                    <?php
                     foreach ($listdm as $dm) {
                        extract($dm);
                        $loadsp_cungLoai = "index.php?act=sanphamDM&iddm=".$id;
                        
                    ?>
                    <li><a href="<?= $loadsp_cungLoai ?>"><i class="fa-solid fa-shirt fa-sm"></i><?= $tendm ?></a></li>
                    <?php } ?>
                    <!-- <li><a href="#"><i class="fa-solid fa-shirt fa-sm"></i>Quần Jean</a></li>
                    <li><a href="#"><i class="fa-solid fa-shirt fa-sm"></i>Áo Sơ Mi</a></li>
                    <li><a href="#"><i class="fa-solid fa-shirt fa-sm"></i>Áo Polo</a></li>
                    <li><a href="#"><i class="fa-solid fa-shirt fa-sm"></i>Quần Tây</a></li>
                    <li><a href="#"><i class="fa-solid fa-shirt fa-sm"></i>Áo Hoodie</a></li> -->
                   </ul>
                </div>
            </div>
             <!--Login_mobile -->
             <div class="taiKhoan_mobile">
                <div class="dangKy_mobile"><a href="index.php?act=dang_ky">Đăng Ký</a></div>
                <div class="dangNhap_mobile"><a href="index.php?act=dang_nhap">Đăng Nhập</a></div>
            </div>
         </div>
<!--  -->

        <article class="article_sanphamDM">
            <div class="colum">
                <div class="tieuDe">
                    <p>Sản Phẩm</p>
                </div>
            </div>

            <div class="listProduct">
                <div class="product">
                       <?php
                       $URL_UPLOAD = "upload/";

                       foreach ($dssp as $sp) {
                        extract($sp);
                        $hinh = $URL_UPLOAD . $img;
                        $linksp = "index.php?act=chitiet_SP&idsp=".$idsp;

                        echo '
                        <div class="box">
                                <div class="image">
                                <a href="'.$linksp.'">
                                    <img width="180px" height="188px"
                                        src="'.$hinh.'"
                                        alt="">  </a>
                                </div>

                                <img class="voucher" src="img/voucher.jpg" alt="">

                                <div class="note">
                                    <p>'.$tensp.'</p>
                                </div>

                                <div class="price">
                                    <div>
                                        <span class="sp1">'.$gia.'</span>đ
                                    </div>
                                    <div>
                                        <button class="buyNow">Thêm Giỏ</button>
                                      
                                    </div>
                                </div>
                            </div>';
                       }
                       ?>

                </div>
            </div>


        </article>

        <?php
        include "footer.php";
        ?>

        <div class="chat">
            <i class="fa-regular fa-comment-dots fa-2xl"></i>
            <b>Chat</b>
            </ul>
        </div>
    </main>

    <script src="content/js/index.js"></script>
    <script src="content/js/danhmuc.js"></script>
</body>

</html>