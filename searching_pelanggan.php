<?php
include "database.php";
$key = $_POST['search'];
$query = mysqli_query($connect, "SELECT * FROM pelanggan WHERE id LIKE '%$key%' OR nama_pelanggan LIKE '%$key%' OR jenis_kelamin LIKE '%$key%' OR alamat LIKE '%$key%' OR no_hp LIKE '%$key%' ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>



		<div class="container">
		<h1 class="display-4 text-center py-5">Pelanggan</h1>
		<table border="1" class="table">
			<tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Pelanggan </th>
        <th> Nama Pelanggan </th>
        <th> Alamat </th>
        <th> Nomor Telepon </th>
        <th> Jenis Kelamin </th>
			</tr>

		<?php

			foreach ($query as $key)
			{
				echo "
					<tr>
          <td>$key[id]</td>
          <td>$key[nama_pelanggan]</td>
          <td>$key[alamat]</td>
          <td>$key[no_hp]</td>
          <td>$key[jenis_kelamin]</td>
					</tr>
				";

			}
		?>

		</table>
	</div>
</body>