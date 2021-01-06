<?php 
	require 'functions.php';

	if (isset ($_POST["submit"])) {

		if (tambah ($_POST) > 0) {
			echo "
				<script>

					alert('Data Berhasil Ditambahkan!');
					document.location.href = 'indexAdmin.php';

				</script>
			";
		}else {
			echo "<script>

					alert('Data Gagal Ditambahkan, Silahkan cek kembali inputan Data Anda!');
					document.location.href = 'indexAdmin.php';

				</script>
				";
		}


	}

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>ULMAP</title>
    <link rel="stylesheet" type="text/css" href="css/ubahData.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <a href="indexAdmin.php"><div class="logo_container">
			<h1><</h1><h1>FKIP</h1><h1><span>1MAP</span></h1><h1>></h1>
            </div></a>
                
            
            <ul class="navigation">
				<a href="tambahData.php"><li>Tambah Data</li></a>
                <a href="../index.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
	<br><br>
	<div class="ubahDataContainer">
		<div class="ubahData">TAMBAH DATA</div>
	</div>
    <br>
    <form class="formContainer"action="" method="post">
		<ul>
			<li>
				<label class="styleLabel" for="fakultas">Fakultas: </label>
				<input class="styleInput" type="text" name="fakultas" id="fakultas" required>
			</li>
            <br><br><br><br>
			<li>
				<label class="styleLabel" for="ruangan">Ruangan: </label>
				<input class="styleInput" type="text" name="ruangan" id="ruangan" required>
			</li>
            <br><br><br><br>
			<li>
				<label class="styleLabel" for="hari">Hari: </label>
				<input class="styleInput" type="text" name="hari" id="hari" required>
			</li>
            <br><br><br><br>
			<li>
				<label class="styleLabel" for="mata_kuliah">Mata Kuliah: </label>
				<input class="styleInput" type="text" name="mata_kuliah" id="mata_kuliah" required>
			</li>
            <br><br><br><br>
			<li>
				<label class="styleLabel" for="jam">Jam: </label>
				<input class="styleInput" type="text" name="jam" id="jam" required>
			</li>
            <br><br><br><br>
			<button class="buttonSubmit" type="submit" name="submit">✓</button>
		</ul>


	</form>
 
</body>
</html>