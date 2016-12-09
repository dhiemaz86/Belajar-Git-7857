<html>
	<head>
		<title>LOGIN</title>
	</head>
	
	<body>
		<h1>FORM LOGIN</h1>
		
		<?php echo date('D M Y');
		
		if(!empty($_POST['submit'])){
			$input_username = 'abc123';
			$input_password = 'rahasi@';
			
			if($_POST['in_usr']==$input_username && $_POST['in_pwd']==$input_password){
				setcookie('usr', $input_username , time()+3600);
				setcookie('pwd', $input_password , time()+3600);
				
				header('location:admin.php');
			}else{
				echo'<h1>Login Gagal</h1>';
			}
		}
		?>
		
		<br/><br/>
		
		<form action="login.php" method="post">
		
		<div>
			<label>Username</label><br/>
			<input type="text" name="in_usr"/>
		</div>
		
		<div>
			<label>Password</label><br/>
			<input type="password" name="in_pwd"></textarea>
		</div>
		
		<div>
			<br/>
			<input type="submit" name="submit" value="Submit">
		</div>
		</form>
		
	</body>

</html>