<?php

class dbobject
{
     
    
    function getUserData($name,$email,$password)
    {
        global $database;
        $result=$database->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
         echo "<script>window.location.href='index.php'</script>";
    }  
}
$dbobject= new dbobject();


?>