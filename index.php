<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="th.jpg" class="hello"><br>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br><table>
		<tr><td>ADMIN<br></td><td><input type="radio" id="ch1" name="choice"></td></tr>
		<tr><td>STUDENT<br></td><td><input type="radio" id="ch2" name="choice"></td></tr></table>
     	<button type="submit">Login</button>
     </form>
</body>
</html>