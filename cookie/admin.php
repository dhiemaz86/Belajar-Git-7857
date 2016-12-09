<?php
	
	//echo'<h1>Administrator Page</h1>';
	//print_r($_COOKIE);
	
$cookie = $_COOKIE;

if(!empty($cookie['usr']) && !empty($cookie['pwd'])){
	
	echo'<h1>Administrator Page</h1>';
	echo'Selamat Datang User '.$cookie['usr'];
	echo'<br/><br/>';
	echo'<a href="logout.php">klik sini untuk logout</a>';
	
}else{
	echo'<h1>Access Forbiden</h1>';
	echo'Anda tidak bisa membuka halaman ini';
	
	header('Refresh: 3; URL=login.php');

}
	
?>