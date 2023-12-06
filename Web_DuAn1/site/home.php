<?php
include "site/head.php";
?>

<body>
    <main>
        <?php include "header.php"  ?>

        <!--  -->
        <div class="aside_left"  id="show-danhmuc">
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
                    
                   </ul>
                </div>
            </div>
             <!--Login_mobile -->
             <div class="taiKhoan_mobile">
                <?php
                if(isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    $UPLOAD_USER = "uploadUser/";
                    $hinh = $UPLOAD_USER . $avatar;
                
                ?>
                <div class="dangKy_mobile"><a href="index.php?act=thoat">Đăng xuất</a></div>
                <div class="dangNhap_mobile avatar_moblie">Hello : <?= $tentk ?></div>
                <?php }else { ?>
                <div class="dangKy_mobile"><a href="index.php?act=dang_ky">Đăng Ký</a></div>
                <div class="dangNhap_mobile"><a href="index.php?act=dang_nhap">Đăng Nhập</a></div>

                <?php } ?>
            </div>
         </div>
<!--  -->

        <article>
            <div class="anhBia">
                <img src="" alt="">


                <div class="continer">
                    <div>
                        <img id="big_banner" class="big_banner" width="800x" height="233px"
                            src="content/img/BigBaner_BeeShop0.png" align="left" alt="">
                    </div>

                    <div>
                        <img class="small_banner" width="395px" height="115px" src="content/img/SmallBaner_BeeShop2.png" alt="">

                        <img class="small_banner" width="395px" height="115px" src="content/img/SmallBaner_BeeShop1.png" alt="">
                    </div>
                </div>

 <!--  -->

            <div class="colum">
                <div class="tieuDe">
                    <p><b>F<i class="fa-solid fa-bolt-lightning fa-xs"></i>ash</b>Sale</p>
                </div>
            </div>

            <div class="listProduct">
                <div class="product">
                       <?php
                       $URL_UPLOAD = "upload/";
                       $listsp = loadAll_sanpham();

                       foreach ($listsp as $sp) {
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

            <div class="event">
                <div class="tieuDe1">
                    <p><b>EVENT<i class="fa-solid fa-bolt-lightning fa-xs"></i></b>Sale</p>
                </div>
            </div>

            <div class="video">
            <video autoplay controls loop id="vid" width="100%" height="500px" src="content/MẪU VIDEO QUẢNG CÁO SẢN PHẨM THỜI TRANG Bright and Fashion.mp4" >
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/j0vXKqqS0c0?si=5Otpjnfre_nIhDAx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
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