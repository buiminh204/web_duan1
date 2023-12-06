<?php
function insert_sanpham($tensp,$gia,$luotxem,$mota,$iddm,$hinh) {
    // $hinh_string = implode(",", $hinh);
    $sql = "INSERT INTO sanpham(tensp,gia,luotxem,mota,iddm,img) VALUES('$tensp','$gia','$luotxem','$mota','$iddm','$hinh') ";
    pdo_execute($sql);
}

function loadAll_sanpham() {
    $sql = "SELECT * FROM sanpham order by idsp DESC";
    $listsp = pdo_query($sql);
    return $listsp;
}

function delete_sanpham($idsp) {
    $sql = "DELETE FROM sanpham WHERE idsp=".$idsp;
    pdo_execute($sql);
}

function loadOne_sanpham($idsp) {
   $sql = "SELECT * From sanpham where idsp=".$idsp;
   $onesp = pdo_query_one($sql);
   return $onesp;
}

function update_sanpham($tensp,$gia,$luotxem,$mota,$iddm,$hinh,$idsp) {
    $sql = "UPDATE sanpham SET tensp='".$tensp."', gia='".$gia."', luotxem='".$luotxem."', mota='".$mota."', iddm='".$iddm."', img='".$hinh."' WHERE idsp='".$idsp."'";
    pdo_execute($sql);
}

// truy vấn 1 value có bảng sản phẩm và bảng danh mục
function select_sanpham_loai($idsp) {
    $sql = "SELECT * FROM danhmuc INNER JOIN sanpham ON danhmuc.id = sanpham.iddm WHERE idsp=".$idsp;
    $oneSPDM = pdo_query_one($sql);
    return $oneSPDM;
}

//load sản phẩm theo danh mục
function loadall_sanpham_danhmuc($kyw="",$iddm=0) {
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($kyw!="") {
        $sql.=" AND tensp like '%".$kyw."%'";
    }
    if($iddm>0) {
        $sql.=" AND iddm ='".$iddm."'";
    }
    $sql.=" order by iddm desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// load sản phẩm cùng loại tối đa 6 sp
function loadAll_sanpham_Top6() {
    $sql = "SELECT * FROM sanpham WHERE 1 order by luotxem DESC limit 0,6";
    $top6 = pdo_query($sql);
    return $top6;
}
?>