<?php

class database
{
      public $connection;  
       
    public function connect()
    {
        $this->connection=mysqli_connect("localhost","root","","sunrisemywork1");
        
        return $this->connection;
   
    }
    public function query($sql)
    {
        $con=$this->connect();   
       return  mysqli_query($con,$sql);
    }
      
}
$database= new database();


?>