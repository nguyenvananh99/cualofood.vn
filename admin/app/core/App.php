<?php
require_once "./app/core/Route.php";
require_once "./app/configs/routes.php";
// Class APP thực hiện xử lý đường dẫn để truy cập vào controler 
    class App 
    {
        private $__controller,$__action,$__params;
  
        // Khởi tạo class App 
        public function __construct()
        {
            global $routes;

            $this->__controller= $routes['defautl_controller'];
            $this->__action='index';
            $this->__params=[];
            $this->handleUrl();
        }
        // Thực hiện lấy url từ đường dẫn 
        public function getUrl()
        {
            if(!empty($_SERVER['PATH_INFO']))
            {
                $url = $_SERVER['PATH_INFO'];
            }
            else
            {
                $url = '/';
            }
            return $url;
        }
        // Thực hiện xử lý đường dẫn 
        public function handleUrl()
        {
           
            // Chuyển đổi url thành mảng để xử lý 
            $url = $this->getUrl();
            global $routes;
            $this->__routes = new Route();
            $url = $this->__routes->handleRoute($url);
            $urlArray = array_filter(explode('/',$url));
            $urlArray = array_values($urlArray);
            // Xử lý controller 
            if(!empty($urlArray[0]))
            {
                // Xử lý viết hoa chữ cái đầu tiên 
                $this->__controller=ucfirst($urlArray[0]);
                // Kiểm tra lại sự tồn tại của controller 
              
                if(file_exists('./app/controllers/'.($this->__controller).'.php'))
                {
                    require_once './app/controllers/'.($this->__controller).'.php';
                    // Kiểm tra sự tồn tại của this controller 
                    if(class_exists($this->__controller))
                    {
                        $this->__controller = new $this->__controller;
                        unset($urlArray[0]);
                    }
                   else
                    { 
                       $this->loadError(); 
                    }    
             }
                // Hiển thị khi controller không tồn tại
                else{
                   $this->__controller = $urlArray[0];
                    $this->loadError();
                }  
            }
            else{
               header('location: login');
            }
            // Xử lý action 
            if(!empty($urlArray[1]))
            {
                $this->__action = $urlArray[1];
                unset($urlArray[1]);
            }

            // Xử lý params 
            $this->__params = array_values($urlArray);
            if(method_exists($this->__controller,$this->__action)){
                call_user_func_array([$this->__controller, $this->__action],$this->__params);
            }

            
        }
    
        // Thực hiện xử lý lỗi 
        public function loadError($name='404')
        {
            require_once './app/views/pages/errors/'.$name.'.php';
        }   
    }
?>