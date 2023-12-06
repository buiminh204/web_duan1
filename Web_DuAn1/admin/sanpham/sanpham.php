<?php
include "header.php";
?>

<div class="tieuDe">
    <h1>Thêm sản phẩm</h1>
</div>

<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="in_form">
            <div class="form_group_labinp">
                <label class="label">Mã sản phẩm</label> <br>
                <input name="idsp" class="inp" value="auto-number" readonly> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label">Tên sản phẩm</label> <br>
                <input name="tensp" class="inp" type="text" placeholder="Tên sản phẩm" required> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label">Đơn giá</label> <br>
                <input name="gia" class="inp" type="number" placeholder="Giá tiền" required> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label">Lượt xem</label> <br>
                <input name="luotxem" class="inp" type="number" placeholder="Số lượt xem" required> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label">Hình</label> <br>
                <input name="hinh" class="inp" id="file" type="file" required> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label">Mã loại</label> <br>
                <select class="inp" name="iddm">
                    <?php
                    $listdm = loadAll_danhmuc();
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="' . $id . '">' . $tendm . '</option>';
                    }
                    ?>
                </select> <br>
            </div>

            <div class="form_group_labinp">
                <label class="label" id="mota">Mô tả</label> <br>
                <textarea class="inp" name="mota" id="" cols="50" rows="7" placeholder="Nội dung"></textarea> </br>
            </div>
        </div>
        <input name="themsp" class="submit" type="submit">
        <button class="submit"><a href="index.php?act=listsp">Danh sách</a></button>
    </form>
</div>
</aside>


<?php
include "footer.php";
?>