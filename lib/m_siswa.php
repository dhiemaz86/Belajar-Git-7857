<?php
class siswa{
private $db;
public function siswa(){
$this->db = new DBClass();
}

public function readAllSiswa(){
$query = "select * from siswa s join nationality n on 
s.id_nationality = n.id_nationality";
return $this ->db->getRows($query);
}

public function readSiswa($id){
$query = "select * from siswa s join nationality n on
s.id_nationality = n.id_nationality where id_siswa=".$id;
return $this ->db->getRows($query);
}
}
?>