<html>
	<head>
		<title>Form Registrasi</title>
	</head>
	
	<body>
		<h1>Form Registrasi</h1>
		
		<?php echo date('D M Y')?>
		<br/><br/>
		
		<?php echo "Nama Anda    : " . $_POST['in_nama']?><br/>
		<?php echo "Alamat Anda  : " . $_POST['in_alamat']?><br/>
		<?php echo "No.Telp Anda : " . $_POST['in_telp']?><br/>
		<?php echo "Email Anda   : " . $_POST['in_email']?><br/>
		
		<br/>
		
		<?php print_r($_POST)?>
		<br/><br/>
		
		<form action="form.php" method="post">
		
		<div>
			<label>Nama Lengkap</label><br/>
			<input type="text" name="in_nama"/>
		</div>
		
		<div>
			<label>Alamat</label><br/>
			<textarea name="in_alamat"></textarea>
		</div>
		
		<div>
			<label>Nomor Telepon</label><br/>
			<input type="text" name="in_telp"/>
		</div>
		
		<div>
			<label>Email</label><br/>
			<input type="text" name="in_email"/>
		</div>
		
		<div>
			<br/>
			<input type="submit" name="submit" value="Kirim">
		</div>
		</form>
		
	</body>

</html>