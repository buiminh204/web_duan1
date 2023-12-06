<?php
// thêm tk
function insert_taikhoan($tentk, $pass, $email, $avatar) {
    $sql = "INSERT INTO taikhoan(tentk,pass,email,avatar) VALUES('$tentk','$pass','$email','$avatar')";
    pdo_execute($sql);
}

function loadAll_taikhoan() {
    $sql = "SELECT * FROM taikhoan order by idtk DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}

function delete_taikhoan($idtk) {
    $sql = "DELETE FROM taikhoan WHERE idtk=".$idtk;
    pdo_execute($sql);
}

function check_taikhoan($tentk,$pass) {
    $sql = "SELECT * FROM taikhoan WHERE tentk='".$tentk."' AND pass='".$pass."'";
    $kiemtra = pdo_query_one($sql);
    return $kiemtra;
}

?>