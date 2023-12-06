<?php
include "header.php";
?>
<div class="tieuDe">
    <h1>Thêm danh mục</h1>
</div>

<div class="form">
    <form action="" method="post">
        <div class="in_form">
            <label class="label">Mã loại</label> <br>
            <input name="id" class="inp" value="auto number" readonly> <br>
            <label class="label">Tên loại</label> <br>
            <input name="tendm" class="inp" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <!-- <input class="submit" type="submit" value="Danh sách"> -->
        <button class="submit"><a href="index.php?act=listdm">Danh sách</a></button>
        <input name="themdm" class="submit" type="submit">
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