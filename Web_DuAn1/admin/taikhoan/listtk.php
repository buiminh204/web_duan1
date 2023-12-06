<?php
include "header.php";
?>

<div class="tieuDe">
    <h1>Danh sách tài khoản</h1>
</div>

<div class="table">
    <div class="thead">
        <div class="tr">
            <div class="th" style="width: 100px;">Mã Tài Khoản</div>
            <div class="th" style="width: 300px;">Tên Tài Khoản</div>
            <div class="th" style="width: 300px;">Avatar</div>
            <div class="th" style="width: 100px;">Email</div>
            <div class="th" style="width: 300px;">Thao tác</div>
        </div>
    </div>

    <div class="tbody">
        <?php

        foreach ($listtk as $tk) {
            extract($tk);
            $delete_link = "index.php?act=xoatk&idtk=" . $idtk;
            $hinhanh = "../uploadUser/" . $avatar;
            if (is_file($hinhanh)) {
                // kiểm tra hinh ảnh có tồn tại hay ko
                $hinh = "<img style=' border-radius: 5px' src='" . $hinhanh . "'  width='50px'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div class="flex_tr">
                <div class="tr">
                    <div class="th" style="width: 100px;">
                        <?= $idtk ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <?= $tentk ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <?= $hinh ?>
                    </div>
                    <div class="th" style="width: 100px;">
                        <?= $email ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <button class="bnt_list"><a href="<?= $delete_link ?>">Xóa</a></button>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>


</aside>


<?php
include "footer.php";
?>