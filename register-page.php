<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>
    <script src="verify.js"></script> 
    </head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section #1-->
    <header class="row" style="margin-bottom:2px;">
        <?php include('header.php'); ?>
    </header>
    
<!-- Body Section -->
   <div class="row">
    <!-- Left-side Column Menu Section -->
        <div class="col-sm-2">
    
        </div>
  <!-- Validate Input -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
 require('process-register-page.php');
} // End of the main Submit conditional.
?>
<div class="col-sm-8">
<h2 class="h2 text-center">注册</h2>
<form action="register-page.php" method="post" onsubmit="return checked();" name="regform" id="regform">  
  <div class="form-group row">
    <label for="first_name" class="col-sm-4 col-form-label">名:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="first_name" name="first_name" 
	  placeholder="名字" maxlength="30" required
	  value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-4 col-form-label">姓:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="last_name" name="last_name" 
	  placeholder="姓名" maxlength="40" required
	  value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">邮箱:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" 
	  placeholder="邮箱" maxlength="60" required
	  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="password1" class="col-sm-4 col-form-label">输入密码:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password1" name="password1" 
	  placeholder="输入8到12位密码" minlength="8" maxlength="12" required
	  value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
	  <span id='message'>输入 8 到 12 位字符串.</span>
    </div>
  </div>
<div class="form-group row">
    <label for="password2" class="col-sm-4 col-form-label">确认密码:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password2" name="password2" 
	  placeholder="确认密码" minlength="8" maxlength="12" required
	  value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-12">
	<input id="submit" class="btn btn-primary" type="submit" name="submit" value="注册" >
    </div>
	</div>
    <p>已注册?<a href="login.php">这里登录</a></p>
	</form>
</div>
<!-- Right-side Column Content Section -->
<?php

 if(!isset($errorstring)) {
	echo '<aside class="col-sm-2">';
	include('info-col.php');
	echo '</aside>';
	echo '</div>';
	echo '<footer class="jumbotron text-center row col-sm-14"
		style="padding-bottom:1px; padding-top:8px;">';
	include("footer.php");
 }
 else
 {
	echo '<footer class="jumbotron text-center col-sm-12"
	style="padding-bottom:1px; padding-top:8px;">';
	include("footer.php");
 }
 ?>

</div>
</body>
</html>



