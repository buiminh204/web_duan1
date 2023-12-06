<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../content/css/danhmuc.css">
    <link rel="stylesheet" href="../content/css/listdm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>
    <article>
        <div class="box_left">
        <div class="box_left_h1">
                <h1>Admin</h1>
            </div>
            <ul class="ul_left">
                <div class="div_li" id="li1">
                    <li class="li_left"><a href="index.php?act=danhmuc">DANH MỤC</a></li>
                </div>
                <div class="div_li">
                    <li class="li_left"><a href="index.php?act=sanpham">SẢN PHẨM</a></li>
                </div>
                <div class="div_li">
                    <li class="li_left"><a href="index.php?act=listtk">KHÁCH HÀNG</a></li>
                </div>
                <div class="div_li">
                    <li class="li_left"><a href="index.php?act=listbl">BÌNH LUẬN</a></li>
                </div>
                <div class="div_li">
                    <li class="li_left"><a href="index.php?act=thongke">THỐNG KÊ</a></li>
                </div>
            </ul>
        </div>

        <div class="setting" onclick="closeOpen1()">
            <i class="fa-solid fa-gear fa-xl"></i>
        </div>

        <div id="out" style="display: none;">
            <ul>
                <li><a href="../index.php">Thoát</a></li>
            </ul>
        </div>
    </article>
<!-- aside -->
    <aside>
        <div class="logo">
            <ul class="ul_logo">
                <li class="i"><i class="fa-brands fa-forumbee fa-2xl"></i></li>
                <li><a class="name_logo" href="#">BeeShop</a></li>
            </ul> 
        </div>