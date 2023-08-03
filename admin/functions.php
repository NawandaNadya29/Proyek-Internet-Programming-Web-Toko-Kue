<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kue");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	};
	return $rows;
};

function tambah($data) {
	global $conn;

	// htmlspecialchars berfungsi untuk tidak menjalankan script
	$kode_brg = htmlspecialchars($data["kode_brg"]);
	$nama = htmlspecialchars($data["nama"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$harga = htmlspecialchars($data["harga"]);
	$stok = htmlspecialchars($data["stok"]);

	$gambar = upload();


		// tambahkan ke database
		// NULL digunakan karena jika dikosongkan maka akan terjadi error di database yang sudah online
		// sedangkan jika masih di localhost, bisa memakai ''
	mysqli_query($conn, "INSERT INTO produk VALUES(NULL, '$gambar', '$kode_brg', '$nama', '$deskripsi', '$harga', '$stok')");
	return mysqli_affected_rows($conn);
}


function hapusitem($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
     
    $id = $data["id"];
    $gambar = $data["gambar"];
    $kode_brg = $data["kode_brg"];
    $nama = $data["nama"];
	$deskripsi = $data["deskripsi"];
	$harga = $data["harga"];
	$stok = $data["stok"];

	$query = "UPDATE produk SET 
				gambar = '$gambar',
				kode_brg = '$kode_brg',
				nama = '$nama',
				deskripsi = '$deskripsi',
				harga = '$harga',
				stok = '$stok'
			  WHERE id = $id
			";
			
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahgambar($data) {
	global $conn;
     
    $id = $data["id"];

	$gambar = upload();


	$query = "UPDATE produk SET 
				gambar = '$gambar'
			  WHERE id = $id
			";
			
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];


    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, '../images/' . $namaFileBaru);

    return $namaFileBaru;
}