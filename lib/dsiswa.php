<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
$id = $_GET['a'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new siswa();
$data = $siswa->readSiswa($id);
if(empty($data)){
	
	exit('Datamu Raono!!!');
}

$dt = $data[0];
print_r($dt);
?>

<table border="1">
<tr>
<td>ID SISWA</td>
<td><?php echo $dt['id_siswa']?></td>
</tr>
<tr>
<td>FULLNAME</td>
<td><?php echo $dt['full_name']?></td>
</tr>
</tr>
<td>NATIONALITY</td>
<td><?php echo $dt['email']?></td>
</tr
</table>