<?php
include 'php/cons.php';
if (!isset($_SESSION)) {
  session_start();
}




$loginerror = false;
if( isset($_POST['username'])&& isset($_POST['password']) ){
$username = $_POST['username'];
$password = $_POST['password'];		
$sql = "Select * from users where username='{$username}' and password = '{$password}'";	
//echo $sql;
$recset=$mycon->query($sql);
	if($recset === false) {
	  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $mycon->error, E_USER_ERROR);
	} else {
	  $rows_returned = $recset->num_rows;
	  if($rows_returned){ // ----- if there is a match in the users table ------
	  	$recset->data_seek(0);
		  $row = $recset->fetch_assoc();
		  $_SESSION['MM_username'] = $row['username'];
		  $_SESSION['MM_adminid'] = $row['userid'];
		  $_SESSION['MM_nick']= $row['nickname'];
		  
			$redirect = 'index.php';  
			header("Location: " . $redirect );
		  
	  }else{
	  	$loginerror = true;
	  }
	  
	}
	
}

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TacChro | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Tacloban</b>Chronicle</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          <a href="front.php" class="btn btn-success btn-block btn-flat" >Search </a>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p></p>
    <!--
    <form action="front.php" method="post">
      <div class="form-group has-feedback">
        <!--<input type="text" name="jonumber" class="form-control" placeholder="Search Job Order"> 
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <a  href="front.php" class="btn btn-success btn-block btn-flat">Search</button>
        </div>
        <!-- /.col 
      </div>
      


    </form>-->



  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
