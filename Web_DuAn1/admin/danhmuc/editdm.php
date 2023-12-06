<?php
include "header.php";
if (is_array($onedm)) {
    extract($onedm);
}
?>
<div class="tieuDe">
    <h1>Sửa danh mục</h1>
</div>

<div class="form">
    <form action="index.php?act=editdm" method="post">
        <div class="in_form">
            <label class="label">Mã loại</label> <br>
            <input name="id" class="inp" value="<?= $id ?>" readonly> <br>
            <label class="label">Tên loại</label> <br>
            <input name="tendm" class="inp" type="text" placeholder="Nhập tên danh mục" value="<?= $tendm ?>">
        </div>
        <input name="editdm" class="submit" type="submit" value="Cập nhật">
    </form>
</div>


<div class="thongbao">
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>
</aside>

<?php
include "footer.php";
?>