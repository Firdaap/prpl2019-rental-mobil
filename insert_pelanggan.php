<?php 
	//require 'index.php';
	include 'database.php';
	if($_POST ) {
		$id = $_POST['id'];
		$nama_pelanggan = $_POST['nama_pelanggan'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$jenis_kelamin = $_POST['jenis_kelamin'];

		echo $id;
		echo $nama_pelanggan;
		echo $alamat;
		echo $no_hp;
		echo $jenis_kelamin;

		$query = mysqli_query($connect,"INSERT INTO pelanggan VALUES($id,'$nama_pelanggan','$alamat',$no_hp,'$jenis_kelamin')");
		//$sql = mysqli_query($connect, $query);

		if($query) {
			//echo "Data tersimpan";
			// die("berhasil");
			header("location:tampil_pelanggan.php");
		} else {
			echo "Gagal tersimpan";
			
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Rental Mobil</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right" form method="post" action="searching_mobil.php">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1 class="display-3 text-center py-5">Input Pelanggan</h1>
			<div class="col-1"></div>		
			<div class="col-6">
				<form action="insert_pelanggan.php" method="post">
				  <div class="form-group">
				    <label for="id">ID Pelanggan</label>
				    <input type="text" class="form-control" id="id" name="id" placeholder="Id">
				  </div>
				  <div class="form-group">
				    <label for="nama_pelanggan">Nama Pelanggan</label>
				    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama pelanggan">
				  </div>
				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
				  </div>
				  <div class="form-group">
				    <label for="no_hp">No HP</label>
				    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP">
				  </div>
				  <div class="form-group">
				    <label for="jenis_kelamin">Jenis Kelamin</label>
				    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
				  </div>
				  
				  <button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>			
			<div class="col-2"></div>		
		</div>
	</div>
</body>
</html>