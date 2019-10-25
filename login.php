<?php
	session_start();
	//check if the user is logged in,if yes then redirect him to index.php.
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: index.php");
		exit;
	}

	require_once "connect.php";

	//define variables and set them to empty values
	$user_id  = $pass ="";
	$user_idErr = $passErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		//checks if username is empty
		if (empty(trim($_POST["user_id"]))){
			$user_idErr = "Please enter username";
		}else{
			$user_id = trim($_POST["user_id"]);
		}

		//check if password is empty
		if (empty(trim($_POST["pass"]))){
			$passErr = "Please enter your password";
		}else{
			$pass = trim($_POST["pass"]);
		}

		//validate credentials
		if (empty($user_idErr) && empty($passErr)){
			//prepare select statement
			$sql = "SELECT id,username,password FROM users WHERE username = ?";
			if ($stmt = mysqli_prepare($link,$sql)){
				//bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt,"s",$param_user_id);

				//set parameters
				$param_user_id = $user_id;

				//Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){

					//store result
					mysqli_stmt_store_result($stmt);

					//check if the username exists, if yes then verify password
					if(mysqli_stmt_num_rows($stmt) == 1){
						//bind result variables
						mysqli_stmt_bind_result($stmt,$id,$user_id,$hashed_password);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($pass,$hashed_password)){
								//password is correct, so start a new session

								session_start();

								//store the data in session in variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["user_id"] = $user_id;

								//redirect user to welcome page
								header("location:index.php");
							}else{
								//display an error message if password id not valid
								$passErr = "The password you entered is not valid";
							}
						}
					}else{
						//display an error message if username doesn`t exist
						$user_idErr = "No account with that username.";
					}
				}else{
					echo "Oops!Something went wrong.Please try again later.";
				}
			}

			//close statement
			mysqli_stmt_close($stmt);
		}

		//close connection
		mysqli_close($link);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<h1>Welcome to Mush Rush Log in Page</h1>
	<div class="container">
		<h2>Log in to Mush Rush</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
			<label>Username:</label>
			<div class="form-group <?php echo (!empty($user_idErr)) ? 'has-error' : ''; ?>">
				<input type="text" name="user_id" placeholder="Enter Username" />
				<span class="help-block"><?php echo $user_idErr; ?></span>
			</div>
			<br />
			<label>Password:</label>
			<div class="form-group <?php echo (!empty($passErr)) ? 'has-error' : ''; ?>">
				<input type="password" name="pass" placeholder="Enter password" />
				<span class="help-block"><?php echo $passErr; ?></span>
			</div>
			<br />
				<input class="button" type="submit" value="Submit" /><br /><br />
				<span class="design">New to Mush Rush?Sign up <a href="signup.php">here</span>
		</form>
	</div>
</body>
</html>