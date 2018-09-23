<?php include_once('init.php'); 
 if(isset($_POST['register']))
{
	$dbobject->name=trim($_POST['name']);
	$dbobject->email=trim($_POST['email']);
	$dbobject->password=trim($_POST['pass']);
$dbobject->getUserdata();

}
else if(isset($_POST['login']))
{
	$dbobject->email=trim($_POST['email']);
	$dbobject->password=trim($_POST['pass']);
	if($dbobject->auth()==1)
	{
		echo "<script>window.location.href='login.php'</script>";
	}
	else
	{
		echo "<script>window.location.href='index.php'</script>";
	}
	
}
?>
<html>
<head></head>
<body>
<form method="post">
<table>
<tr>
<td><th>Name</th></td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td><th>Email</th></td>
<td><input type="email" name="email"/></td>
</tr>

<tr>
<td><th>Password</th></td>
<td><input type="password" name="pass"/></td>
</tr>
<tr><td></td><td align="center"><button name="register" type="submit">Register</td></tr>

</table>
</form>
<form method="post">
<table>
<tr>
<td><th>Email</th></td>
<td><input type="email" name="email"/></td>
</tr>
<tr>
<td><th>Password</th></td>
<td><input type="text" name="pass"/></td>
</tr>
<tr><td></td><td align="center"><button name="login" type="submit">Login</td></tr>

</table>
</form>
</body>
</html>
