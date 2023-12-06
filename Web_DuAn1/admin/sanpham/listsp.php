<?php
include "header.php";
?>

<div class="tieuDe">
    <h1>Danh sách sản phẩm</h1>
</div>


<div class="table">
    <div class="thead">
        <div class="tr">
            <div class="th" style="width: 100px;">Mã loại</div>
            <div class="th" style="width: 300px;">Tên loại</div>
            <div class="th" style="width: 300px;">Hình</div>
            <div class="th" style="width: 100px;">Giá</div>
            <div class="th" style="width: 300px;">Thao tác</div>
        </div>
    </div>

    <div class="tbody">
        <?php
        $listsp = loadAll_sanpham();
        foreach ($listsp as $sp) {
            extract($sp);
            $delete_link = "index.php?act=xoasp&idsp=" . $idsp;
            $update_link = "index.php?act=suasp&idsp=" . $idsp;
            $hinhanh = "../upload/" . $img;
            if (is_file($hinhanh)) {
                // kiểm tra hinh ảnh có tồn tại hay ko
                $hinh = "<img src='" . $hinhanh . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div class="flex_tr">
                <div class="tr">
                    <div class="th" style="width: 100px;">
                        <?= $idsp ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <?= $tensp ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <?= $hinh ?>
                    </div>
                    <div class="th" style="width: 100px;">
                        <?= $gia ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <button class="bnt_list"><a href="<?= $update_link ?>">Sửa</a></button>
                        <button class="bnt_list1"><a href="<?= $delete_link ?>">Xóa</a></button>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <button class="submit"><a href="index.php?act=sanpham">Nhập Thêm</a></button>
</div>
</aside>


<?php
include "footer.php";
?>