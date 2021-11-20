<?php 
require 'proses_tambah_kucing.php';
if(isset($_POST["submit"]) ) {


	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Kucing berhasil ditambahkan');
				document.location.href = 'tambah_kucing.php';
			</script>
		";

	} else{
		echo "
			<script>
				alert('Kucing gagal ditambahkan');
				document.location.href = 'tambah_kucing.php';
			</script>
		";
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/stylekucing.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="" method="POST" enctype = "multipart/form-data">
							<div class="col-md-5">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Jenis Kucing" name="nama_produk" required>
									<span class="form-label">Jenis</span>
								</div>
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Deskripsi" name="deskripsi"required>
									<span class="form-label">Deskripsi</span>
								</div>
								<div class="input-group">
                                    <br>Cover produk:
                                        <input type="file" name="foto" id="foto" class = "form-control" required>
                                </div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
                                <input class="form-control" type="text" placeholder="Harga" name="harga"required>
									<span class="form-label">Harga</span>
								</div>
								
							</div>
							<div class="col-md-4">
                            <div class="form-btn">
									<button class="submit-btn" type="submit" name="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>