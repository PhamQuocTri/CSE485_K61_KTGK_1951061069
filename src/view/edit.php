<?php include("template/header.php"); ?>
<div class="container">
<h1 class="text-center text-primary mt-5">Sửa dữ liệu</h1>
    <form method="post">
        <div class="form-group">
            <label for="txtHovaten">Tên độc giả</label>
            <input class="form-control" type="text" id="txtHovaten" name="txtHovaten" value="<?php echo $datas['Hovaten'];?>"">
        </div>
        

        <div class="form-group">
            <label for="txtGioitinh">Giới tính</label>
            <input class="form-control" type="text" id="txtGioitinh" name="txtGioitinh" value="<?php echo $datas['Gioitinh'];?>">
        </div>
        
        <div class="form-group">
            <label for="txtNamsinh">Năm sinh</label>
            <input class="form-control" type="number" id="txtNamsinh" name="txtNamsinh" value="<?php echo $datas['Namsinh'];?>">
        </div>

        <div class="form-group">
            <label for="txtNghenghiep">Nghề nghiệp</label>
            <input class="form-control" type="text" id="txtNghenghiep" name="txtNghenghiep" value="<?php echo $datas['Nghenghiep'];?>">
        </div>

        <div class="form-group">
            <label for="txtNgaycapthe">Ngày cấp thẻ</label>
            <input class="form-control" type="text" id="txtNgaycapthe" name="txtNgaycapthe" value="<?php echo $datas['Ngaycapthe'];?>">
        </div>

        <div class="form-group">
            <label for="txtNgayhethan">Ngày hết hạn</label>
            <input class="form-control" type="text" id="txtNgayhethan" name="txtNgayhethan" value="<?php echo $datas['Ngayhethan'];?>">
        </div>

        <button class="btn btn-primary" type="submit">Lưu</button>
    </form>
</div>

<?php include("template/footer.php"); ?>