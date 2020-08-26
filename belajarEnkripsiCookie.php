<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BPKP Test</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap4/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<h2>BPKP Test Enkripsi file simpan di cookie serta dekripnya</h2>
			<br>
			<a class="btn btn-outline-info" href="index.php">KEMBALI</a>
			<br>
			<br>
			<h3>Belajar enkripsi cookie</h3>
			<?php if (!isset($_COOKIE['FebiArisRinaldi'])):?>
			<form action="enkripCookie.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<tr>
						<td>file</td>
						<td><input type="file" class="form-control" name="file"></td>
					</tr>
				</div>
				<div class="form-group">
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-outline-secondary" value="Simpan di cookie & enkrip"></td>
					</tr>
				</div>
			</form>
			<?php else:?>
			<form action="dekripCookie.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<tr>
						<td>file</td>
						<td><input type="text" readonly="" value="<?=$_COOKIE['FebiArisRinaldi']?>" class="form-control" name="file"></td>
					</tr>
				</div>
				<div class="form-group">
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-outline-secondary" value="Dekrip Cookie"></td>
					</tr>
				</div>
			</form>
		<?php endif; ?>

		</div>

</body>
</html>