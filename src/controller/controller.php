<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            //Gọi model ra để truy vấn dữ liệu
            $model = new model;
            $datas = $model->getAllDatas();
            //Sau khi truy vấn xong đổ ra index.php
            require_once('view/index.php');
        }

        function add(){
            require_once 'view/add.php';
            //Tạo phương thức POST để nhập thông tin
            if(isset($_POST['txtHovaten'])){
                $Hovaten = $_POST['txtHovaten'];
                $Gioitinh = $_POST['txtGioitinh'];
                $Namsinh = $_POST['txtNamsinh'];
                $Nghenghiep = $_POST['txtNghenghiep'];
                $Ngaycapthe = $_POST['txtNgaycapthe'];
                $Ngayhethan = $_POST['txtNgayhethan'];
                if(empty($Hovaten)){
                    echo("<script>alert('bạn chưa điền đầy đủ thông tin');</script>");
                }
                else{
                    $data = [
                        'Hovaten' => $Hovaten,
                        'Gioitinh' => $Gioitinh,
                        'Namsinh' => $Namsinh,
                        'Nghenghiep' => $Nghenghiep,
                        'Ngaycapthe' => $Ngaycapthe,
                        'Ngayhethan' => $Ngayhethan
                    ];
                    $model = new model;
                    $result = $model->addData($data);
                    if($result){
                        header("location:index.php");
                        exit();
                    }
                    else{
                        $_SESSION['error'] = "Thêm mới thất bại";
                        header("error.php");
                    }
                    
                }
                
            }
        }
    
    }
?>
