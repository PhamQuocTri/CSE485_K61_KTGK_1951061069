<?php include("template/header.php"); ?>
<div class="container">
<h1 class="text-center text-primary mt-5">Thêm dữ liệu</h1>
    <form method="post">
        <div class="form-group">
            <label for="txtHovaten">Tên độc giả</label>
            <input class="form-control" type="text"  id="txtHovaten" name="txtHovaten">
        </div>
        

        <div class="form-group">
            <label for="txtGioitinh">Giới tính</label>
            <input class="form-control" type="text" id="txtGioitinh" name="txtGioitinh" >
        </div>
        
        <div class="form-group">
            <label for="txtNamsinh">Năm sinh</label>
            <input class="form-control" type="number" id="txtNamsinh" name="txtNamsinh" >
        </div>

        <div class="form-group">
            <label for="txtNghenghiep">Nghề nghiệp</label>
            <input class="form-control" type="text" id="txtNghenghiep" name="txtNghenghiep" >
        </div>

        <div class="form-group">
            <label for="txtNgaycapthe">Ngày cấp thẻ</label>
            <input class="form-control" type="text" id="txtNgaycapthe" name="txtNgaycapthe" >
        </div>

        <div class="form-group">
            <label for="txtNgayheyhan">Ngày hết hạn</label>
            <input class="form-control" type="text" id="txtNgayhethan" name="txtNgayhethan" >
        </div>

        <button class="btn btn-primary" type="submit">Thêm</button>
    </form>
</div>

<?php include("template/footer.php"); ?>