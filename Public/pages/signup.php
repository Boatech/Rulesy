<?php
/** just used a form i found online, replace with the main form later on **/
require '../classes/initialize.construct.php';

//  checking if user is making registration request..
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->singUpUser($_POST['username'],$_POST['email'],$_POST['password']);
}
// checking if user is logged in
if(isset($_SESSION['email'])){
  header('Location: ../index');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
    <?php include '../paritals/home_includes/meta_data.php';?>
    <?php 
    $con = mysqli_connect('localhost','root','bloomonlineshop','rulsey');
    if (isset($_POST['submit']))
    {
     $birthday= $_POST['day']."/".$_POST['month']."/".$_POST['year'];
     mySQLi_query($con,"INSERT INTO users (dob)
      VALUES ('$birthday')");
    }
    else{
      echo "something is wrong";
    }
    
    ?>
</head>
<body>
  <div class="main_container login_signup_container">
    <h1>Sign Up</h1>
    <form action="" method="POST" novalidate>
      <label for="username">Full Name</label>
      <input type="text" id="username" name="username" spellcheck="false" placeholder="Enter your full name" required>
      <fieldset class="sign-up-form-1">
      <legend>Profile information</legend>
      <table cellpadding="5" cellspacing="5">
        <tr>
          <td><label>Birthday</label></td>
          <td>
          <select name="day" style="font-size:18px;" required>
          <?php

          $day=1;
          while($day <= 31)
            {
            echo "<option> $day
            </option>";
            $day++;
            }
          ?>
          </select>
          <select name="month" style="font-size:18px;" required>
            <option>January</option>
            <option>Febuary</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
          <select name="year" style="font-size:18px;" required>
          <?php
          $year=1901;
          while($year<=2014)
            {
            echo "<option> $year
            </option>";
            $year++;
            }
          ?>
          </select>
          </td>
        </tr>
        <tr>
          <td><label>Gender</label></td>
          <td>
          <label>Male</label><input type="radio" name="gender" value="male" required />
          <label>Female</label><input type="radio" name="gender" value="female" required />
          </td>
        </tr>
        <tr>
          <td><label>Mobile number*</label></td>
          <td><input type="text" name="number" placeholder="09...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
        </tr>
      </table>
    </fieldset>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
      <label for="password">Password</label>
      <br />
      <input type="checkbox" name="">
      <em>Yes, I have read and I accept the <a href="#">Biobook Terms of Use</a> and the <a href="#">Biobook Privacy Statement</a></em>
      <br />
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <input type="submit" value="Sign Up">
      <a href="login" class="form_link">Login</a>
    </form>
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
    <p><a href="https://www.rulseyprojects.com">Rulsey Prototype</a></p>
  </div>
</body>
</html>

