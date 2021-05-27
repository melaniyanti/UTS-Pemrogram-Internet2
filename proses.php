<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $idabsen = $_POST['idabsen'];
 $tglabsen = $_POST['tglabsen'];
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
 header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
 $idabsen = $_POST['idabsen'];
 $tglabsen = $_POST['tglabsen'];
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $model = new Model();
 $model->update($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
 header('location:index.php');
}
if (isset($_GET['idabsen'])) {
 $idabsen = $_GET['idabsen'];
 $model = new Model();
 $model->delete($idabsen);
 header('location:index.php');
}