<?php


 class createConnection //create a class for make connection
{
    var $host="localhost";
    var $username="root";    // specify the sever details for mysql
    Var $password='';
    var $database="tender_database";
    
 var $conn;
 function  connectToDatabase() // create a function for connect database
    {

        $this->conn= mysqli_connect($this->host,$this->username,$this->password,$this->database );
      

        if(!$this->conn)// testing the connection
        {
            die ("Cannot connect to the database");
        }
        else{
            echo 'connection to database successful';
        }

      
       

    }

    
    function closeConnection() // close the connection
    {
        
        mysqli_close($this->conn);

       
    }

}

?>


