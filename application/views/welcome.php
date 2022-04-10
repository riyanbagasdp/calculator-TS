<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Calculator</title>
</head>

<body>
	<div class="container py-5">
		<div class="card">
			<div class="card-header"><h1>Selamat Datang di Calculator ceria</h1></div>
		</div>
		<div class="card body mt-5">
			<div class="container text-center">
				<div class="mb-3">
					<a href="<?php echo base_url('penjumlahan') ?>" class="btn btn-primary">Penjumlahan</a>
				</div>
				<div class="mb-3">
					<a href="<?php echo base_url('pengurangan') ?>" class="btn btn-primary">Pengurangan</a>
				</div>
				<div class="mb-3">
					<a href="<?php echo base_url('pembagian') ?>" class="btn btn-primary">Pembagian</a>
				</div>
				<div class="mb-3">
					<a href="<?php echo base_url('perkalian') ?>" class="btn btn-primary">Perkalian</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>
</body>

</html>
