<?php 

	$koneksi = mysqli_connect("localhost", "root", "", "ulm");

	function query($query){
		global $koneksi;

		$result = mysqli_query($koneksi, $query);
		$rows = [];

		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	} 


	function tambah ($data){
		global $koneksi;

		$fakultas = htmlspecialchars($data["fakultas"]);
		$ruangan = htmlspecialchars($data["ruangan"]);
		$hari = htmlspecialchars($data["hari"]);		
		$mata_kuliah = htmlspecialchars($data["mata_kuliah"]);
		$jam = htmlspecialchars($data["jam"]);		

		$query = "INSERT INTO data_keseluruhan
				VALUES
				('', '$fakultas', '$ruangan', '$hari', '$mata_kuliah', '$jam')
				";

		mysqli_query($koneksi, $query);

		return 	mysqli_affected_rows($koneksi);
	}


 
	function ubah ($data){
		global $koneksi;

		$id = $data["id"];
		$fakultas = htmlspecialchars($data["fakultas"]);
		$ruangan = htmlspecialchars($data["ruangan"]);
		$hari = htmlspecialchars($data["hari"]);		
		$mata_kuliah = htmlspecialchars($data["mata_kuliah"]);
		$jam = htmlspecialchars($data["jam"]);		

		$query = "UPDATE data_keseluruhan SET
					fakultas = '$fakultas',
					ruangan = '$ruangan',
					hari = '$hari',
					mata_kuliah = '$mata_kuliah',
					jam = '$jam'
					WHERE id = $id
				";

		mysqli_query($koneksi, $query);

		return 	mysqli_affected_rows($koneksi);
	}


	function hapus($id){
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM data_keseluruhan
								WHERE
								id = $id");

		return mysqli_affected_rows($koneksi);
	}

 ?>