<?php 
namespace medicalwizard;

require_once __DIR__.'/../vendor/autoload.php';

use medicalwizard\controller\uservalidate;
session_start(); 

if((isset($_POST['uname']) and isset($_POST['pass'])) or  (isset($_SESSION['logged_in']) and ($_SESSION['logged_in']=='yes' )))
{

	if(isset($_SESSION['logged_in']) and ($_SESSION['logged_in']=='yes' ))
	{

		header('Location:action.php');

	}

	else
	{
		$user=filter_input(INPUT_POST,'uname');
		$pass=filter_input(INPUT_POST,'pass');

		$userCheck=new uservalidate();
		$login_Status=$userCheck->checkUser($user,$pass);

		if($login_Status)
		{
			$_SESSION['logged_in']='yes';
			header('Location:action.php');
		}
		else{

			$_SESSION['logged_in']='no';

		}


	}


}


?>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="uname">
						<span class="focus-input100" data-placeholder="User Name"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

</body>
</html>