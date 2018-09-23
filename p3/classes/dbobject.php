<?php

class dbobject
{
     
    public $name;
	public $email;
	public $password;
	public $stmp;
    function getUserData()
    {
        global $database;
        $result=$database->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('".$this->name."','".$this->email."','".$this->password."')");
         echo "<script>window.location.href='index.php'</script>";
		 
    }  
	function auth()
	{
		global $database;
		$this->stmp=$database->query("select * from users where email='".$this->email."' and password='".$this->password."'");
		return $database->count();
	}
	
}
$dbobject= new dbobject();


?>