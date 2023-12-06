<?php
include "header.php";
?>

<div class="tieuDe">
    <h1>Danh sách bình luận</h1>
</div>


<div class="table">
    <div class="thead">
        <div class="tr">
            <div class="th" style="width: 100px;">Mã bình luận</div>
            <div class="th" style="width: 300px;">Người bình luận</div>
            <div class="th" style="width: 100px;">Mã sản phẩm</div>
            <div class="th" style="width: 400px;">Nội dung</div>
            <div class="th" style="width: 100px;">Ngày bình luận</div>
            <div class="th" style="width: 100px;">Thao tác</div>
        </div>
    </div>

    <div class="tbody">
        <?php
        $listbl = loadAll_binhluan1();
        foreach ($listbl as $bl) {
            extract($bl);
            $delete_link = "index.php?act=xoabl&idbl=" . $idbl;
            // $update_link = "index.php?act=suasp&idsp=" . $idsp;
            ?>
            <div class="flex_tr">
                <div class="tr">
                    <div class="th" style="width: 100px;">
                        <?= $idbl ?>
                    </div>
                    <div class="th" style="width: 300px;">
                        <?= $tennguoidung ?>
                    </div>
                    <div class="th" style="width: 100px;">
                        <?= $idproduct ?>
                    </div>
                    <div class="th" style="width: 400px;">
                        <?= $noidung ?>
                    </div>
                    <div class="th" style="width: 100px;">
                        <?= $ngaybinhluan ?>
                    </div>
                    <div class="th" style="width: 100px;">
                        <button class="bnt_list1"><a href="<?= $delete_link ?>">Xóa</a></button>
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