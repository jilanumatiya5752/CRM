<?php
include 'db.php';
if(isset($_POST['sub'])){
	$name=$_POST['name'];
  // $userid = $id;
	$email=$_POST['email'];
	$password=$_POST['password'];
  $usertype=$_POST['usertype'];
  $password = md5($password);

  if($_FILES['image']['name']){
		move_uploaded_file($_FILES['image']['tmp_name'],__DIR__ . "/img".$_FILES['image']['name']);
		 $image=$_FILES['image']['name'];
     
	}
	 $i="insert into reel(name,email,password,usertype,image)values('$name','$email','$password','$usertype','$image')";	
  $result = mysqli_query($db,$i);
   	
  }  
?>      


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css"/>
</head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1 class="my-4">Register</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Name</b></label>
          <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"><b>Email</b></label>
          <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <div class="mb-3">
          <label for="psw" class="form-label"><b>Password</b></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" id="psw" required>
        </div>
        <div class="mb-3">
          <label for="User type" class="form-label"><b>User type</b></label>
          <select class="form-select" name="usertype" id="User type" required>
            <option disabled selected value="">--- Select User Type ---</option>
            <option value="0">0</option>
            <option value="1">1</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label"><b>Image</b></label>
          <input type="file" class="form-control" name="image" id="image">
        </div>
        <div align="center">
          <button class="btn btn-secondary btn-lg btn-block"  type="submit"  name="sub">Register</button>
        </div>
         <div class="signup_link">
                  Have an Account ? <a href="login.php">Login Here</a>
              </div>
</form>
      </body>
</html>