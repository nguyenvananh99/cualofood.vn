
<?php  
// Controller thực hiện xử lý phần Dashboard 
require_once "./app/core/Controller.php";
require_once "./app/helpers/format.php";
require_once "./app/lib/session.php";
class Dashboard extends Controller{
  public function __construct()
  {
  }
  public function index()
  {
    $this->view('dashboard','dashboard',[]);
  }
  public function detail($id,$slug)
  {
    echo 'ID sản phẩm:'.$id.'';
    echo 'Slug sản phẩm:'.$slug.'';
  }
  public function search()
  {
    $keyword = $_GET['keyword'];
    echo 'Từ khoá còn tìm:'.$keyword.'';
  }
}

?>