<?php
session_start();
if(!isset($_SESSION['userId'])){ 
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Banking</title>
	<?php require 'assets/autoloader.php'; ?>
	<?php require 'assets/function.php'; ?>

	<?php

    $con = new mysqli('localhost', 'kopaing', 'password', 'mybank');
	
	if (isset($_POST['changePWD']))
	{$userId = $_SESSION['userId'];
		$error = "";
		$old_pwd = $_POST['old_pwd'];
		$new_pass = $_POST['new_password'];
		$retype_pass = $_POST['retype_password'];
	   
		$result = $con->query("select * from useraccounts where id='$userId' AND password='$old_pwd'");
		if($result->num_rows>0)
		{ 
			if($new_pass == $retype_pass){
			$data = $result->fetch_assoc();
			$newId = $data['id'];
			$result = $con->query("UPDATE `useraccounts` SET `is_first_login` = '0', `password` = '$new_pass' WHERE `useraccounts`.`id` = $newId");
			if($result){
				session_start();
				$_SESSION['userId']=$data['id'];
				header('location:index.php');
			}
			}else{
				$error = "<div class='alert alert-warning text-center rounded-0'>Not match comfirm password try again!</div>";
			}
		 }
		else
		{
		  $error = "<div class='alert alert-warning text-center rounded-0'>Your password wrong try again!</div>";
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
        <h1>Change Password</h1>
		<h6>Your account need to chage default password!</h6>
    </div>
    <div class="card-body">

        <div class="mb-3">

                <div class="card-body">
                    <form method="POST">
                        <input type="text" value="" name="old_pwd" class="form-control mb-2" required placeholder="Old Password">
                        <input type="password" name="new_password" value="" class="form-control mb-2" required placeholder="New Password">
						<input type="password" name="retype_password" value="" class="form-control mb-3" required placeholder="Comfirm Password">
                        <button type="submit" class="btn btn-primary btn-block btn-sm my-1" name="changePWD">Change</button>
                    </form>
                </div>
        </div>

    
    </div>
    <div class="card-footer text-muted bg-white">
        M Bank 2023
    </div>
</div>
<nav class="navbar bg-dark fixed-bottom bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-center">
        <small><a href="#" class="text-light">Developer By Zayar Maung Htay</a></small>
    </div>
</nav>
</body>
</html>