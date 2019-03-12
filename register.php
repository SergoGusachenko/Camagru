<?php include('server.php') ;
			include('resetpwd.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Camagru</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="color:white;">Username</label>
  	  <input type="text" style="color:black;" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group" >
  	  <label style="color:white;" >Email</label>
  	  <input type="email" name="email" style="color:black;" value="<?php echo $email; ?>" required> 
  	</div>
  	<div class="input-group">
  	  <label style="color:white;">Password</label>
  	  <input style="color:white;" type="pwd" name="pwd_1" required>
  	</div>
  	<div class="input-group">
  	  <label style="color:white;">Confirm password</label>
  	  <input style="color:white;" type="pwd" name="pwd_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" style="color:white;" name="reg_user">Register</button>
  	</div>
  	<p style="color:white;">
  		Already a member? <a  href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>