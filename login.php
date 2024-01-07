<?php
include 'db.php';
    if(isset($_POST['submit'])) {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $password = stripcslashes($password);
		$password = md5($password);
        $sql = "SELECT * FROM reel WHERE email = '$email' and password = '$password'  LIMIT 1";		
        // print_r($sql);
		// exit;
		$query = mysqli_query($db, $sql);
		
        $row = mysqli_fetch_array($query);
		
        $id = $row['id'];
		
        $db_password = $row['password'];
		// print_r($db_password);
        // exit;
        if($password == $db_password){
			
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
			if ($count=1){
		

				if ($row['usertype']==0){
					echo "jilanumatiya";
				}
					elseif ($row['usertype']==1) {
					echo "umatyv";
					// echo ("you logged in as cashier");
			}
		
			}

        } else {
            echo "Error: the information is not correct.";
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    	<form method="POST" enctype="multipart/form-data" id="home_id">
            <div class="container">
        <h1 class="my-4">Login</h1>
		 <div class="mb-3">
          <label for="email" class="form-label"><b>Email</b></label>
          <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <div class="mb-3">
          <label for="psw" class="form-label"><b>Password</b></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" id="psw" required>
        </div>
		<div align="center">
          <button class="btn btn-secondary btn-lg btn-block"  type="submit"  name="submit">Login</button>
        </div>
         <div class="signup_link">
                  Already Account! <a href="register.php">Register Here</a>
              </div>
</div>
</form>
</body>
</html>