<?php
    if(isset($_POST["login"])){
        $mail = mysqli_real_escape_string($connection,$_POST["mail"]);
        $pswd = mysqli_real_escape_string($connection,$_POST["pswd"]);
        if($mail != "" && $pswd != ""){
          $sql1 = "SELECT * FROM users WHERE mail='{$mail}' AND pswd='{$pswd}'";

          $result_set1 = mysqli_query($connection,$sql1);

          if(mysqli_num_rows($result_set1) == 1){
              $row = mysqli_fetch_assoc($result_set1);

              $_SESSION['user_id'] = $row['userid'];
              header("Location: index.php");
          }        
      }
  }
?>

        



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devicce_width, initial-scale=1.0">
    <title>Log In-User Management System</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<style>
   body {
            font-family:Arial;
            font_size:14px;
        }
        .login{
          width:350px;
          margin:100px auto;
        }
        input{
          display:block;
          width:100px;
          padding:5px;
          box-sizing: border-box;
        }
    </style>
<body >
      
        
    <div class="login">
    <form method="post" action="login.php" style="margin-top:100px">
  <div class="md-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-dark w-100">Submit</button>
</form>
    </div>
</body>
</html>