<?php
include("template/header.php");
?>
<h1 class="text-center text-primary mt-5">Danh sách độc giả</h1>
    <div class="container">
    <div>
        <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
    </div>
    <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Mã độc giả</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nghề nghiệp</th>
                    <th scope="col">Ngày cấp thẻ</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                    <th scope="row"><?php echo $data['madg']; ?></th>
                    <td><?php echo $data['Hovaten']; ?></td>
                    <td><?php echo $data['Gioitinh']; ?></td>
                    <td><?php echo $data['Namsinh']; ?></td>
                    <td><?php echo $data['Nghenghiep']; ?></td>
                    <td><?php echo $data['Ngaycapthe']; ?></td>
                    <td><?php echo $data['Ngayhethan']; ?></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['madg']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['madg']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
    </div>
<?php
include("template/footer.php");
?>