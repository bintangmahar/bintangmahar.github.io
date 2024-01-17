<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa Bintang</title>
</head>
<body>
			<table border="1px solid pink">
					<h3>Data  Mahasiswa </h3>
				<tr>
					<th>Nama Mahasiswa</th>
					<th>NIM</th>
					<th>Alamat</th>
				</tr>

			<?php foreach ($mahasiswa as $mhs) : ?>

				<tr>
					<td><?php echo $mhs['nama']; ?></td>
					<td><?php echo $mhs['nim']; ?></td>
					<td><?php echo $mhs['alamat']; ?></td>
				</tr>

			<?php endforeach; ?>
			</table>
</body>
</html>