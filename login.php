<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
     <h3>Login</h3>
     <?php if (isset($_GET['error'])) { ?>
     	<b style="color: #f00;"><?=$_GET['error']?></b><br>
      <?php } 
	  $putanja_do_datoteke = "log_messages.txt";

		if (file_exists($putanja_do_datoteke)) {
			$datoteka = fopen($putanja_do_datoteke, "w");
			fwrite($datoteka, "ACTIVITY LOG\n____________\n");
			fclose($datoteka);
		}
	  ?>
     <form action="app/login.php" method="POST">
     	<label>Email</label><br>
     	<input type="text" name="email"><br>
     	<label>Password</label><br>
     	<input type="password" name="password"><br><br>
     	<button type="submit">Login</button>
     	<a href="signup.php">Sign Up</a>
     </form>
</body>
</html>