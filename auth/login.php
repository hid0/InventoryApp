<?php
require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | T3k4jE InVentorY</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('_assets/css/main.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('_assets/css/materialize.min.css');?>">
  <link rel="icon" href="<?=base_url();?>/_assets/tkj.png">
</head>
<body>

<div class="container">

<?php 
  if (isset($_POST['login'])) {
    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
    $sql_login = mysqli_query($con, "SELECT * FROM users WHERE username = '$user' AND password = '$password'") or die(mysqli_error($con));
    if (mysqli_num_rows($sql_login) > 0 ){
      $_SESSION['user'] = $user;
      echo "<script>window.location='".base_url()."';</script>";
    } else {
      // <div class="row">
      //   <div class="col-lg-6 col-lg-offset-3">
      //     <div class="alert alert-danger alert-dismissable" role="alert">
      //       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      //       <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      //       <strong>Login gagal!!!</strong> Username / Password salah
      //     </div>
      //   </div>
      // </div>
      echo "<script>alert('Login Anda gagal');</script>";
    }
  }
?>
    <form action="" method="post">
        <div class="row z-depth-4">
            <div class="col s12" style="margin-top: 1em;">  
              <div class="input-field">
                  <input type="text" name="user" id="user" class="validate" autofocus>
                  <label for="user">Username</label>
              </div>
                  <!-- <img src="inc/img/img_avatar.png" alt="Avatar"> -->
              <div class="input-field">
                  <input type="password" name="password" id="pass" class="validate" required>
                  <label for="pass">Password</label><br />
              </div>
              <label>
                  <input type="checkbox" onclick="functionPass()" id="show" />
                  <span>Show Password</span>
              </label>
              <div class="input-field">
                <input type="submit" name="login" value="Login" class="btn waves-effect waves-light blue darken-1" style="width: 100%;cursor: pointer;">
              </div>
            </div>
        </div>
    </form>
</div>

<script src="<?=base_url('_assets/js/jquery.js');?>"></script>
<script src="<?=base_url('_assets/js/script.js');?>"></script>
<script src="<?=base_url('_assets/js/materialize.min.js');?>"></script>
</body>
</html>
<?php } ?>