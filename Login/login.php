<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN IN PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
      $con = mysqli_connect('localhost', 'root', 'root', 'LOGIN');
      // if(mysqli_connect_errno()){
      //   echo "false!";
      // }
      // else{
      //   echo "successful!";
      // }


    if(isset($_POST['log'])){
      $username = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
    
    if($username==""){
      $msg = "<span>Your Email is invalid!</span>";
      echo $msg;
    }
    else if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $websiteErr = "Invalid email"; 
      echo $websiteErr;
    }
    else if($password==""){
      $msg = "<span>Your Password is invalid!</span>";
      echo $msg;
    }
      
    else if ($username!="" && $password!=""){
      $sql = "SELECT ID FROM login WHERE Username='$username' and Password='$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      if($count==1){
        header("location: image.html");
      }
      else{
        $sql2 = "INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES (NULL, '$username', '$password');";
        mysqli_query($con,$sql2);
        echo "<span>Congratulation! You have logged in sucessfully</span>";
      }
      
    }
    }
    
    ?>
  </head>
  <body>
    <div id="login">
      <h2>Login Form</h2>
      <form action="login.php" method="post">
        <div class="container">
          <label for="">Sign Up</label>
          <input type="text" name="email" placeholder="Email" value="">
          <input type="password" name="password" placeholder="Password" value="">
          <a href="">Forgot Password?</a></br></br>
          <button type="submit" class="btn" name="log">Login</button>
        </div>
      </form>
    </div>
  </body>
</html>