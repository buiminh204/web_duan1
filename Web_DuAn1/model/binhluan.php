<?php
function insert_binhluan($noidung, $iduser, $idproduct, $ngaybinhluan,$tennguoidung, $anhnguoidung) {
    $sql="insert into binhluan(noidung,iduser,idproduct,ngaybinhluan,tennguoidung,anhnguoidung) values('$noidung','$iduser','$idproduct','$ngaybinhluan','$tennguoidung','$anhnguoidung')";
    pdo_execute($sql);
} 
function loadAll_binhluan1() {
    $sql = "SELECT * from binhluan order by idbl DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadall_binhluan($idproduct) {
    $sql = "SELECT * FROM binhluan WHERE  1";
    if($idproduct>0) $sql.=" AND idproduct='".$idproduct."'";
    $sql.=" ORDER BY idbl DESC";
    $listbl = pdo_query($sql);
    return  $listbl;
}

function delete_binhluan($idbl) {
    $sql = "delete from binhluan where idbl=?";
    pdo_execute($sql, $_GET['idbl']);
} 

?>