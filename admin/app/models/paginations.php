<?php 
/*
Đây là pagination models
Thực hiện quá trình xử lý phân trang trong dự án
*/

require_once "./app/core/Db.php";
    class paginations extends Database
    {
        private $db;
        public function __construct()
        {
            $this->db = new Database();        
        }
        // Hàm đếm số lượng cột có trong bảng của cơ sở dữ liệu (1)
        public function count_reconds($table)
        {
            $query = "SELECT * FROM $table";
            $total_row = mysqli_num_rows($this->db->select($query));
                
        }
        // Hàm tính tổng số trang thông qua số lượng cột đã đếm ở(1)
        public function page_number($table)
        {
          echo $this->count_reconds($table); 
            
        }
    }
?>