<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();

 public function insert($idabsen, $tglabsen, $masuk, $keluar, $kodeabsen, $sesi, $kelassesi)
{
	$sql = "INSERT INTO absensi (idabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi,  status) 
	VALUES ('$idabsen', '$tglabsen','$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi', '$status')";
	$this->conn->query($sql);
}
public function tampil_data()
{
	 $sql = "SELECT * FROM absensi";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit($idabsen)
{
	 $sql = "SELECT * FROM absensi WHERE idabsen='$idabsen'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;          
 }
	 return $baris;
}
public function update($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
	 $sql = "UPDATE absensi SET tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelassesi', WHERE idabsen='$idabsen'";
	 $this->conn->query($sql);
}
public function delete($idabsen)
{ 
	$sql = "DELETE FROM absensi WHERE idabsen='$idabsen'";
	$this->conn->query($sql);
}
}