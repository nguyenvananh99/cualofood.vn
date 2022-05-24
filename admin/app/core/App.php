<?php
 
    class App{
        protected $controller = "login";
        protected $action = "a";
        protected $params = [];
        function __construct(){
             $arr = $this -> ProcessUrl();
            // Xu ly controller 

                if(file_exists("./app/controllers/".$arr[0].".php")){
                    $this->controller = $arr[0];
                    unset($arr[0]);
                }

                require_once "./app/controllers/".$this->controller.".php";
                $this->controller =  new $this->controller();
                               
            // Xu ly action 
                if(!empty($arr[1])){
                    if(method_exists($this->controller,$arr[1])){
                        $this->action = $arr[1];

                        
                        
                    }
                    unset($arr[1]);
                }
              
            
            
            
            // Xu ly params 

            $this->params = !empty(array_values($arr))?array_values($arr):[];
            // call moniter
            if(method_exists($this->controller, $this->action)){
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
            
        }
        function ProcessUrl(){
            if(isset($_GET["url"])){
                return  explode("/",filter_var(trim($_GET["url"])));
            }
        }
    }

?>