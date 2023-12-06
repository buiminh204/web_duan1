<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";


if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'danhmuc':
            if (isset($_POST['themdm']) && ($_POST['themdm'])) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/danhmuc.php";
            break;

        case 'listdm':
            $listdm = loadAll_danhmuc();
            include "danhmuc/listdm.php";
            break;

        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $listdm = loadAll_danhmuc();
            include "danhmuc/listdm.php";
            break;

        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $onedm = loadOne_danhmuc($id);
            }
            include "danhmuc/editdm.php";
            break;

        case "editdm":
            if (isset($_POST["editdm"]) && ($_POST["editdm"])) {
                $id = $_POST["id"];
                $tendm = $_POST["tendm"];
                update_danhmuc($tendm, $id);
            }
            $listdm = loadAll_danhmuc();
            include "danhmuc/listdm.php";
            break;

        // sản phẩm
        case "sanpham":
            if (isset($_POST['themsp']) && ($_POST['themsp'])) {
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $luotxem = $_POST['luotxem'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['hinh']['name']; //name là tên file
                $target_dir = "../upload/"; // thư mục uplaod của mình
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //    echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $gia, $luotxem, $mota, $iddm, $hinh);
            }
            include "sanpham/sanpham.php";
            break;

        case "listsp":
            $listsp = loadAll_sanpham();
            include "sanpham/listsp.php";
            break;

        case "xoasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                delete_sanpham($idsp);
            }
            include "sanpham/listsp.php";
            break;

        case "suasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                $onesp = loadOne_sanpham($idsp);
            }
            include "sanpham/editsp.php";
            break;

        case "editsp":
            if (isset($_POST['editsp']) && ($_POST['editsp'])) {
                $idsp = $_POST['idsp'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $luotxem = $_POST['luotxem'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['hinh']['name']; //name là tên file
                $target_dir = "../upload/"; // thư mục uplaod của mình
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($tensp, $gia, $luotxem, $mota, $iddm, $hinh, $idsp);
            }
            $listsp = loadAll_sanpham();
            include "sanpham/listsp.php";
            break;

        // tài khoản
        case "listtk":
            $listtk = loadAll_taikhoan();
            include "taikhoan/listtk.php";
            break;

        case "xoatk":
            if(isset($_GET['idtk']) && ($_GET['idtk'])) {
                $idtk = $_GET['idtk'];
                delete_taikhoan($idtk);
            }
            $listtk = loadAll_taikhoan();
            include "taikhoan/listtk.php";
            break;

        // bình luận
        case "listbl":
            include "binhluan/listbl.php";
            break;

            case "xoabl":
                if(isset($_GET['idbl']) && ($_GET['idbl'])) {
                    $idbl = $_GET['idbl'];
                    delete_binhluan($idbl);
                }
                include "binhluan/listbl.php";
                break;
            
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>