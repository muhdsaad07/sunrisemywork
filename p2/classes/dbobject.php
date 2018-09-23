<?php

class dbobject
{
     
    public $name;
	public $email;
	public $password;
    function getUserData()
    {
        global $database;
        $result=$database->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('".$this->name."','".$this->email."','".$this->password."')");
         echo "<script>window.location.href='index.php'</script>";
    }  
}
$dbobject= new dbobject();


?>