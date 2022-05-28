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
        // Hàm tính tổng số trang 
        public function page_number($table,$limit)
        {
            $query = "SELECT * FROM $table";
            $total_row = mysqli_num_rows($this->db->select($query));
            $total_page = ceil($total_row/$limit);
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
             
            // Tìm Start
            $start = ($current_page - 1) * $limit;
            $result ="SELECT * FROM $table LIMIT $start, $limit";
             
            

        }
      

    }
?>