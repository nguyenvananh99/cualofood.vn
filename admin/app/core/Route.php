<?php
    class Route
    {
        private $__keyRoute = null;
        public function __construct()
        {
            
        }
        public function handleRoute($url){
            global $routes;
            unset($routes['defautl_controller']);
            // print_r($routes);
            $url =trim($url,'/');
         
            $handleUrl = $url;
            if(!empty($routes)){
                foreach($routes as $key=>$value){
                    if(preg_match('~'.$key.'~is',$url)){
                        $handleUrl = preg_replace('~'.$key.'~is', $value, $url);
                        $this->__keyRoute = $key;
                    }
                }
            }
            // echo $handleUrl;
            return $handleUrl;
        }
    }

?>