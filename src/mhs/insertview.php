<?php 
	require_once __DIR__ . "/../constant.inc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Mahasiswa</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		.centering {
			width: 100vw;
			height: 100vh;
			display: grid;
			place-items: center;
		}
	</style>
</head>
<body>
	<div class="centering">
		<form action="insert.php" method="POST" class="container">
			<a href="<?= "{$env['server']}/mhs/view.php"?>" class="btn btn-primary">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
				</svg>
				Back to Mahasiswa
			</a>
			<h2 class="mb-3">Insert Mahasiswa</h2>
			<div class="row mb-3">
				<label for="nama" class="col form-label me-3">Nama</label>
				<input type="text" name="nama" class="col form-control" />
			</div>
			<div class="row mb-3">
				<label for="kelas" class="col form-label me-3">Kelas</label>
				<input type="text" name="kelas" class="col form-control" />
			</div>
			<div class="row mb-3">
				<label for="nrp" class="col form-label me-3">NRP</label>
				<input type="text" name="nrp" class="col form-control" />
			</div>
			<div class="row">
				<button type="submit" class="btn btn-primary col me-3">Insert Mahasiswa</button>
				<button type="reset" class="btn btn-danger col">Reset</button>
			</div>
		</form>
	</div>
</body>
</html>