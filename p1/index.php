<?php include_once('init.php'); 
 if(isset($_POST['register']))
{
$dbobject->getUserdata(trim($_POST['name']),trim($_POST['email']),trim($_POST['pass']));

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
<td><th>Login</th></td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td><th>Password</th></td>
<td><input type="text" name="name"/></td>
</tr>
<tr><td></td><td align="center"><button name="register" type="submit">Login</td></tr>

</table>
</form>
</body>
</html>
