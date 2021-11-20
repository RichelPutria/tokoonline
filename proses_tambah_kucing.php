<?php 

function tambah($data){
	
			 $conn = $conn = mysqli_connect("localhost","root","","tokoonline");
				//htmlspecialchars(); aman.. memastikan yang masuk adalah spc char

			$nama_produk = htmlspecialchars($data["nama_produk"]);
			$deskripsi = htmlspecialchars($data["deskripsi"]);
			$harga = htmlspecialchars($data["harga"]);
			$foto = upload();
			if(!$foto){
				return false; 
			}

		
			$query = "INSERT INTO produk
						VALUES 
						('', '$nama_produk','$deskripsi','$harga','$foto')
						";
			mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);

}

function upload(){
	$printNama = $_FILES['foto']['name'];
	$printUkuran=$_FILES['foto']['size'];
	$printError = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	//cek upload foto
	if ($printError === 4) {
		echo 	"<script>
					alert('Pilh gambar terlebih dahulu');
				</script>";
		return false;
	}

	//Hanya upload gambar
	//delimiter untuk memecah 

		//ValidExt dari default dev
		//EctFoto dari upload user



	$ValidExt = ['jpg','jpeg','png'];
	$ExtFoto = explode('.', $printNama);
	$ExtFoto = strtolower(end($ExtFoto));

	if ( !in_array($ExtFoto, $ValidExt)) {
		echo 	"<script>
					alert('Tolong upload gambar!');
				</script>";
		return false;
	}

	//jika ukurannya terlalu besar

	if ($printUkuran > 1000000) {
		echo 	"<script>
					alert('ukuran gambar terlalu besar');
				</script>";
		return false;
	}

	//lolos syarat
	//generate nama baru
	$newName = uniqid();
	$newName .='.';
	$newName .= $ExtFoto;


	move_uploaded_file($tmpName, 'img/' . $newName);

	return $newName;


}

  ?>

  