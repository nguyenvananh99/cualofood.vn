
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
}

?>