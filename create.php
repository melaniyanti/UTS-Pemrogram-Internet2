<!doctype html>
<html lang="en">
<head>
 <title>Tambah Data Absensi</title>
</head>
<body>
 <h1>Tambah</h1>
 <a href="index.php">Kembali</a>
 <br><br>
 <form action="proses.php" method="post">
 <label>Tglabsen</label>
 <br>
 <input type="date" name="tglabsen">
 <br>
 <label>Masuk</label>
 <br>
 <input type="time" name="masuk">
 <br>
 <label>Keluar</label>
 <br>
 <input type="time" name="keluar">
 <br>
 <label>Kodedosen</label>
 <br>
 <input type="text" name="kodedosen">
 <br>
 <label>Sesi</label>
 <br>
 <input type="number" name="sesi">
 <br>
 <label>Kelassesi</label>
 <br>
 <input type="number" name="kelassesi">
 <br><br>
 <button type="submit" name="submit_simpan">Submit</button>
 <button type="reset">Reset</button>
 </form>
</body>
</html>