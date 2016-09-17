<?php

class Registration_controller{
    public function __construct() {
        include'modle/Registration.php';
       
    }
       function create() {
           
        if (isset($_POST['org_name'])) {

            $error = array();
            new Registration();
            $error = Registration::validate();
            $var = true;
            foreach ($error as $e){
                if (empty($e)){
                    if (Registration::check_db()) {
                       // new org_grid_view();
                        /*
                        org_grid_view::generate_grid();
                         * */
                        echo 'insertion is a succssfull';
                    } 
                    
                    else {
                        echo "this organization already exist";
                    }
                }  else {
                    echo "error";   
                }
        }
        }
        include'View/Registration_form/Registration_form.php';
    }
    
}
