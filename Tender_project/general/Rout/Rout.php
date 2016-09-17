<?php

//include_once 'autharization.php';


class Routing {

    public $routes = array();

    function __construct() {
        
    }

    function router() {
       
        

       // var_dump($_SESSION);

        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            

            $file = 'controller/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
            } else {
                echo'controler not found';
            }



            // calling methods
            if (isset($url[2])) {
                if (method_exists($url[0], $url[1])) {

                             $ex = array(
                                    'login_controler'=>'login_controler',
                              
                                   );
                             $ex2 = array(
                                    'logout_controler'=>'logout_controler',
                                    'user_controler'=>'user_controler',
                                    'tender_controler'=>'tender_controler',
                                   );

                        if (!isset($_SESSION['user_id']) || ( in_array($url[0],$ex))) {

                           
                            $controller = new $url[0];
                            $controller->{$url[1]}($url[2]);
                        }
                        else{ 
                            
                        if(isset($_SESSION['user_id']) && in_array($url[0],$ex2) ){
                           
                            
                             echo $url[0];
                                $controller = new $url[0];
                                 $controller->{$url[1]}($url[2]);
                        }
                        else{
                            
                            // $s = new autharization();
                           // if($s->auth($url[0], $url[1], $_SESSION['user_id'])) {
                               $controller = new $url[0];
                               $controller->{$url[1]}($url[2]);
                            
                            
                            
                        }
                        }
                    
                } else {
                    echo 'function with no parameters';
                }
            } else {
                if (isset($url[1])) {
                    if (method_exists($url[0], $url[1])) {

                        $ex = array(
                                    'login_controler'=>'login_controler',
                                   'Home'=>'tender_controler',
                                   );
                        $ex2 = array(
                                    'logout_controler'=>'logout_controler',
                         
                                   );

                        if (!isset($_SESSION['user_id']) || ( in_array($url[0],$ex))) {

                            
                            $controller = new $url[0];
                            $controller->{$url[1]}();
                        }
                        else{ 
                            
                        if(isset($_SESSION['user_id']) &&( in_array($url[0],$ex2)) ){
                           
                       
                             echo $url[0];
                                 $controller = new $url[0];
                                $controller->{$url[1]}();
                        }
                        else{
                           
                             $s = new autharization();
                            if($s->auth($url[0], $url[1], $_SESSION['user_id'])) {
                                $controller = new $url[0];
                                $controller->{$url[1]}();
                            
                            }
                            else {
                                echo 'you are not authrized';
                            }
                        }
                        }
                    } else {
                        echo'method not found';
                    }
                }
            }
        }
    }

}

?>