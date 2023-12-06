<?php
include "header.php";
?>

<div class="tieuDe">
    <h1>Danh sách danh mục</h1>
</div>

<div class="table">
    <div class="thead">
        <div class="tr">
            <div class="th" style="width: 100px;">Mã Loại</div>
            <div class="th" style="width: 700px;">Tên Loại</div>
            <div class="th" style="width: 300px;">Thao Tác</div>
        </div>
    </div>

    <div class="tbody">
        <?php
        foreach ($listdm as $dm) {
            extract($dm);
            $delete_link = "index.php?act=xoadm&id=" . $id;
            $update_link = "index.php?act=suadm&id=" . $id;
            ?>
            <div class="flex_tr">
                <div class="tr">
                    <div class="th" style="width: 100px;"><?= $id ?></div>
                    <div class="th" style="width: 700px;"><?= $tendm ?></div>
                    <div class="th" style="width: 300px;">
                        <button class="bnt_list"><a href="<?= $update_link ?>">Sửa</a></button>
                        <button class="bnt_list1"><a href="<?= $delete_link ?>">Xóa</a></button>
                    </div>
                </div>
            </div>
            <?php
        } ?>
            </div>
            <button class="submit"><a href="index.php?act=danhmuc">Nhập Thêm</a></button>
        </div>
       

        </aside>


        <?php
        include "footer.php";
        ?>