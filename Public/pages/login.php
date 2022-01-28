<?php
require '../classes/initialize.construct.php';

// checking if user is making login request..
if(isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->loginUser($_POST['email'],$_POST['password']);
}
// checking if user is already logged in...
if(isset($_SESSION['email'])){
  header('Location: ../index');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include '../paritals/home_includes/meta_data.php';?>
</head>
<body>
  <div class="main_container login_signup_container">
    <h1>Login</h1>
    <form action="" method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <input type="submit" value="Login">
      <a href="signup" class="form_link">Sign Up</a>
      <div>  
      <?php
        if(isset($result['errorMessage'])){
          echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
        }
        if(isset($result['successMessage'])){
          echo '<p class="successMsg">'.$result['successMessage'].'</p>';
        }
      ?>    
    </div>
    </form>
    <p><a href="https://www.rulseyprojects.com">Rulsey Prototype</a></p>
  </div>
</body>
</html>
