<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/binhluan.php";

$listdm = loadAll_danhmuc();
$top6 = loadAll_sanpham_Top6();
if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];

    switch ($act) {
        case 'dang_ky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $tentk = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $avatar = $_FILES['avatar']['name']; //name là tên file
                $target_dir = "uploadUser/"; // thư mục uplaod của mình
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    //    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //    echo "Sorry, there was an error uploading your file.";
                }
                insert_taikhoan($tentk, $pass, $email, $avatar);
                $thongbao = "Đăng ký thành công";
            }
            include "site/dang_ky.php";
            break;

        case 'dang_nhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $tentk = $_POST['user'];
                $pass = $_POST['pass'];
                $kiemtra = check_taikhoan($tentk, $pass);
                if (is_array($kiemtra)) {
                    $_SESSION['user'] = $kiemtra;
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản ko tồn tại";
                }
            }
            include "site/dang_nhap.php";
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        case 'giohang':
            include "site/giohang.php";
            break;

        case 'thanhtoan':
            include "site/thanhtoan.php";
            break;

        case 'chitiet_SP':
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                // $onespCT = loadOne_sanpham($idsp);
                $oneSPDM = select_sanpham_loai($idsp);
                include "site/chitiet_SP.php";
            } else {
                include "site/home.php";
            }

            break;

        case 'sanphamDM':
            if (isset($_POST["kyw"]) && ($_POST["kyw"] != "")) {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'])) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham_danhmuc($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "site/sanphamDM.php";
            break;
        default:
            include "site/home.php";
            break;
    }

} else {
    include "site/home.php";
}
?>