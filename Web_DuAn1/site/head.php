<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bee</title>
    <link rel="stylesheet" href="content/css/index.css">
    <link rel="stylesheet" href="content/css/cart.css">
    <link rel="stylesheet" href="content/css/chitiet.css">
    <link rel="stylesheet" href="content/css/dang_nhap.css">
    <link rel="stylesheet" href="content/css/thanhtoan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <script>
        var list_icon = [
            { hinh: 'content/img_icon/icon1.png', text: 'Khung giờ săn sale' },
            { hinh: 'content/img_icon/icon2.png', text: 'Miễn Ship Shoppe' },
            { hinh: 'content/img_icon/icon3.png', text: 'Voucher ưu đãi' },
            { hinh: 'content/img_icon/icon4.png', text: 'Mã Giảm Giá' },
            { hinh: 'content/img_icon/icon5.png', text: 'Gì Cũng rẻ' },
            { hinh: 'content/img_icon/icon6.png', text: 'Nạp Thẻ, Dịch Vụ & Data' },
            { hinh: 'content/img_icon/icon7.png', text: 'Trúng Voucher 1.000.000Đ' },
            { hinh: 'content/img_icon/icon8.png', text: 'Quốc Tế - Deal Siểu Rẻ' },
            { hinh: 'content/img_icon/icon9.png', text: 'Bắt Trend - Giá Sốc' },
            { hinh: 'content/img_icon/icon10.png', text: 'Hàng Hiệu Giảm 50%' },
        ]

        var list_products = [
            {hinh: 'content/img/sp1.jpg', text: 'Quần ống suông nam form rộng nhung tăm dể mặc', price: '195', buy: 'Đã bán 195'},
            {hinh: 'content/img/sp2.jpg', text: 'Áo Thun Nữ Đen Trắng Form Oversize Dể Mặc', price: '155', buy: 'Đã bán 110'},
            {hinh: 'content/img/sp3.jpg', text: 'Áo Khoác Nhung Tăm Đen Trắng Có Khuy Cài', price: '175', buy: 'Đã bán 130'},
            {hinh: 'content/img/sp4.jpg', text: 'Áo Thun Tay Lỡ Kẻ Sọc Đen Trắng Bo Cổ', price: '295', buy: 'Đã bán 129'},
            {hinh: 'content/img/sp5.jpg', text: 'Đồ Bộ Áo Thun Quần Jean Đen Nam Tính', price: '125', buy: 'Đã bán 176'},
            {hinh: 'content/img/sp6.jpg', text: 'Áo Thun Trắng Xám Mùa Hè Nam Nữ', price: '105', buy: 'Đã bán 150'},
            {hinh: 'content/img/sp7.jpg', text: 'Áo Oversize nam form rộng nhung tăm dể mặc', price: '199', buy: 'Đã bán 116'},
            {hinh: 'content/img/sp8.jpg', text: 'Gấu Bông Màu Hương Dể Thương Oversize', price: '315', buy: 'Đã bán 222'},
            {hinh: 'content/img/sp9.jpg', text: 'Áo Sơ Mi Tay Dài Đen Trắng Nam Nữ', price: '422', buy: 'Đã bán 134'},
            {hinh: 'content/img/sp10.jpg', text: 'Dép Tổ Ông 7 Màu Nam Nữ nhiều màu ', price: '177', buy: 'Đã bán 121'},
        ]

        var list_products1 = [
            { hinh: 'content/img/sp1.jpg', text: 'Quần ống suông nam form rộng nhung tăm dể mặc', price: '195', buy: 'Đã bán 195' },
            { hinh: 'content/img/sp7.jpg', text: 'Áo Thun Nữ Đen Trắng Form Oversize Dể Mặc', price: '155', buy: 'Đã bán 110' },
            { hinh: 'content/img/sp3.jpg', text: 'Áo Khoác Nhung Tăm Đen Trắng Có Khuy Cài', price: '175', buy: 'Đã bán 130' },
            { hinh: 'content/img/sp4.jpg', text: 'Áo Thun Tay Lỡ Kẻ Sọc Đen Trắng Bo Cổ', price: '295', buy: 'Đã bán 129' },
            { hinh: 'content/img/sp5.jpg', text: 'Đồ Bộ Áo Thun Quần Jean Đen Nam Tính', price: '125', buy: 'Đã bán 176' },
            { hinh: 'content/img/sp6.jpg', text: 'Áo Thun Trắng Xám Mùa Hè Nam Nữ', price: '105', buy: 'Đã bán 150' },

        ]
        
    </script>
</head>