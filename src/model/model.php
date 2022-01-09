<?php
    require_once 'config/db.php';
    class model{
        //kiểm tra kết nối đến csdl
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_DataNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
        //Hiển thị csdl
        public function getAllDatas(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
             // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);
            // Khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_datas = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_datas = mysqli_fetch_all($result, MYSQLI_ASSOC);//Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }
            $this->closeDb($conn);

            return $arr_datas;
        }
        //Thêm csdl
        public function addData($data = []){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện thêm dữ liệu
            $sql = "INSERT INTO docgia(Hovaten,Gioitinh,Namsinh,Nghenghiep,Ngaycapthe,Ngayhethan) VALUES ('{$data['Hovaten']}', '{$data['Gioitinh']}', '{$data['Namsinh']}', '{$data['Nghenghiep']}', '{$data['Ngaycapthe']}', '{$data['Ngayhethan']}')";
            //Khai báo biến result để lưu trữ csdl trả về
            $result = mysqli_query($conn,$sql);
            // B3. Đóng kết nối
            $this->closeDb($conn);
            return $result;
        }


        public function getData($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM docgia WHERE madg = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $data = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $data;
        }
    }
?>