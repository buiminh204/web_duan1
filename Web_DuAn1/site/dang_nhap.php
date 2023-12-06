<?php
   include "site/head.php";
?>

<body>
    <div class="header_dn">
        <ul class="ul_nav" style="padding-left: 30px;">
        <li class="li"><i class="fa-brands fa-forumbee fa-2xl"></i></li>
            <li style="margin: 0px;"><a class="nav_a" href="#"><b>BeeShop</b></a><a id="a"> Đăng Nhập</a></li>
        </ul>
</div>

    <main class="main1">
        <div class="backgroud1">
        
            <section id="drag1" class="main_section">
                <h3>Đăng Nhập</h3>

                <form method="post">
                    <input name="user" class="input" type="text" placeholder="Tên đăng nhập" required>
                    <input name="pass" class="input" type="password" placeholder="Mật Khẩu" required>
                    <input name="email" class="input" type="email" placeholder="email@exemple.com" required>

                    <section class="but0">
                        <input name="dangnhap" class="but1" type="submit" value="Đăng Nhập">
                    </section>
                </form>

                <div style="color: red;margin-top: 5px;margin-left: 32px; font-size: 10px;" class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </div>
                
                <section class="a">
                    <p class="p"><a style="line-height: 0px;" href="#">Quên mật khẩu?</a></p>
                </section>
                <section class="change">
                    <button class="but2" style="color: tomato;">Google</button>
                    <button class="but2" style="color: #2791A8;">Facebook</button>
                    <p class="p1">Bạn chưa có tài khoản?.<a id="a1" href="index.php?act=dang_ky" >Đăng kí ngay</a></p>
                    <p class="p1"><a id="a1" href="index.php">Quay lại trang chủ.</a></p>
                </section>

            </section>
</div>
    </main>

  <!-- footer -->
  <?php
        include "footer.php";
      ?>
<script src="/content/js/login.js">
   
</script>
</body>

</html>