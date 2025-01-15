<?php require_once 'connection/connection.php'; ?>

<?php
    if(isset($_POST['sign'])){
        $fname = mysqli_real_escape_string($connection,$_POST['firstname']);
        $lname = mysqli_real_escape_string($connection,$_POST['lastname']);
        $mail = mysqli_real_escape_string($connection,$_POST['mail']);
        $pswd = mysqli_real_escape_string($connection,$_POST['pswd']);

        if($fname != "" && $lname != "" && $mail != "" && $pswd != ""){
            $sql = "INSERT INTO Reg_Users (usertype,fname,lname,mail,pswd) VALUES('client','{$fname}','{$lname}','{$mail}','{$pswd}')";

            $result_set = mysqli_query($connection,$sql);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .signup-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-signup {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    //<?php require_once 'navtwo.php'; ?>

    <!-- Sign Up Form -->
    <div class="signup-container">
        <form class="form-signup" action="signup.php" method="post">
            <h2 class="text-center" style="font-weight: bold;">Sign Up</h2>
            <p class="mb-4 text-center">Lorem ipsum dolor sit amet adipiscing elit.</p>
            
            <div class="mb-3">
                <label for="name" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="mail" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pswd" class="form-control" id="password" required>
            </div>

            <button type="submit" name="sign" class="btn btn-dark w-100">Sign up</button><br><br>
            Already have an account? <a href="login.php" class="text-decoration-none">Log in</a>
        </form>
        
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
