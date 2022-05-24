
<?php  


require_once "./app/core/Controller.php";
require_once "./app/helpers/format.php";
require_once "./app/lib/session.php";
class Dashboard extends Controller{
  public function __construct()
  {
    $this->view('dashboard','dashboard',[]);
    
  }
  
}

?>