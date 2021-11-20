<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php"> Home </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_siswa.php"> Data Siswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_kelas.php"> Data Kelas </a>
    </li>
  </ul>
</nav>
<br>


</body>
</html>

    <?php 
    include "koneksi.php";
    $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_get_produk);
    ?>
    <h3>Ubah Data Kucing</h3>
    <form action="proses_ubah_kucing.php" method="post">
        <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
        Jenis Kucing :
        <input type="text" name="nama_produk" value="<?=$dt_produk['nama_produk']?>" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="<?=$dt_produk['deskripsi']?>" class="form-control">
        Harga : 
        <input type="text" name="deskripsi" value="<?=$dt_produk['deskripsi']?>" class="form-control">

        Username : 
        <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
    <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
