<!DOCTYPE html>
<html>
<head>
	<title>Banking</title>
	<?php require 'assets/autoloader.php'; ?>
	<?php require 'assets/function.php'; ?>
	<?php
    $con = new mysqli('localhost','root','','mybank');

		$error = "";
		if (isset($_POST['userLogin']))
		{
			$error = "";
  			$user = $_POST['email'];
		    $pass = $_POST['password'];
		   
		    $result = $con->query("select * from userAccounts where email='$user' AND password='$pass'");
		    if($result->num_rows>0)
		    { 
		      session_start();
		      $data = $result->fetch_assoc();
		      $_SESSION['userId']=$data['id'];
		      $_SESSION['user'] = $data;
		      header('location:index.php');
		     }
		    else
		    {
		      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
		    }
		}
		if (isset($_POST['cashierLogin']))
		{
			$error = "";
  			$user = $_POST['email'];
		    $pass = $_POST['password'];
		   
		    $result = $con->query("select * from login where email='$user' AND password='$pass'");
		    if($result->num_rows>0)
		    { 
		      session_start();
		      $data = $result->fetch_assoc();
		      $_SESSION['cashId']=$data['id'];
		      //$_SESSION['user'] = $data;
		      header('location:cindex.php');
		     }
		    else
		    {
		      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
		    }
		}
		if (isset($_POST['managerLogin']))
		{
			$error = "";
  			$user = $_POST['email'];
		    $pass = $_POST['password'];
		   
		    $result = $con->query("select * from login where email='$user' AND password='$pass' AND type='manager'");
		    if($result->num_rows>0)
		    { 
		      session_start();
		      $data = $result->fetch_assoc();
		      $_SESSION['managerId']=$data['id'];
		      //$_SESSION['user'] = $data;
		      header('location:mindex.php');
		     }
		    else
		    {
		      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
		    }
		}

	 ?>
</head>
<body style="background:#e0e0e0">
<nav class="navbar bg-body-tertiary bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-light">Online Banking</span>
    </div>
</nav>
<br>
<?php echo $error ?>
<br>


<div class="card text-center container" style="width: 38rem;">
    <div class="card-header bg-white">
        <h1>Login</h1>
    </div>
    <div class="card-body">

        <div class="mb-3">
            <a style="text-decoration: none" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <button class="btn btn-primary btn-block">User Login</button>
            </a>
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form method="POST">
                        <input type="email" value="some@gmail.com" name="email" class="form-control" required placeholder="Enter Email">
                        <input type="password" name="password" value="some" class="form-control" required placeholder="Enter Password">
                        <button type="submit" class="btn btn-primary btn-block btn-sm my-1" name="userLogin">Enter </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <a style="text-decoration: none" class="d-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <button class="btn btn-primary btn-block">Manager Login</button>
            </a>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form method="POST">
                        <input type="email" value="manager@manager.com" name="email" class="form-control" required placeholder="Enter Email">
                        <input type="password" name="password" value="manager" class="form-control" required placeholder="Enter Password">
                        <button type="submit" class="btn btn-primary btn-block btn-sm my-1" name="managerLogin">Enter </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <a style="text-decoration: none" class="d-block" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <button class="btn btn-primary btn-block">Cashier Login</button>
            </a>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form method="POST">
                        <input type="email" value="cashier@cashier.com" name="email" class="form-control" required placeholder="Enter Email">
                        <input type="password" name="password" value="cashier" class="form-control" required placeholder="Enter Password">
                        <button type="submit"  class="btn btn-primary btn-block btn-sm my-1" name="cashierLogin">Enter </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer text-muted bg-white">
        Multi Login System
    </div>
</div>
<nav class="navbar bg-dark fixed-bottom bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-center">
        <small><a href="#" class="text-light">Developer By Zayar Maung Htay</a></small>
    </div>
</nav>
</body>
</html>