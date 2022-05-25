<?php 
require_once "./app/core/Db.php";
    class paginations extends Database {
        private $db;
       
        
        

        public function __construct()
        {
            $this->db = new Database();        
        }
    
    public function count_reconds($table){
        $query = "SELECT * FROM $table";
        $total_row = mysqli_num_rows($this->db->select($query));
        echo $total_row;       
    }
    public function page_number($table,$limit){
        $this ->total_reconds =  $this->count_reconds($table);
        $total_page =  ceil($total_reconds/$limit);
        return  $total_page;

    }
}


?>