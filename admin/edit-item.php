<?php 
session_start();

if (!isset($_SESSION["admin"])) {
  echo "<script>
         window.location.replace('../logout.php');
       </script>";
  exit;
}
require 'functions.php';


$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        
      </script>
    ";
  }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Icon dari Fontawesome -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>

    <title>Kue Nana</title>
    <style>
        .btn {
            text-decoration: none;
            padding: 3px 10px;
            background-color: darkred;
        }
        #content {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h3>Kue Nana <i class="fas fa-gem"></i></h3>
            <p>Selamat Datang, Admin</p>
              <p><a href="../logout.php" class="btn">Logout</a></p>
        </div>
        <!-- Gelombang -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,101.3C384,107,480,149,576,176C672,203,768,213,864,181.3C960,149,1056,75,1152,42.7C1248,11,1344,21,1392,26.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </header>

   <main>
        <div id="content">
            <h2 class="judul">Edit Produk</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $produk["id"]; ?>">
                    <input type="hidden" name="gambar" id="gambar" value="<?= $produk["gambar"]; ?>">
                    <div class="jarak">
                        <center><img src="../images/<?= $produk["gambar"]; ?>" alt="" width="150px"></center><br>
                        <center><a href="edit-gambar.php?id=<?= $produk["id"]; ?>" style="color: green;">Ubah Gambar</a></center>
                    </div>
                    <div class="jarak">
                         <label for="kode_brg">Kode Produk</label>
                         <input type="text" id="kode_brg" name="kode_brg" placeholder="Masukkan Kode Produk" value="<?= $produk["kode_brg"]; ?>" required>
                    </div>
                     <div class="jarak">
                         <label for="nama">Nama Produk</label>
                         <input type="text" id="nama" name="nama" placeholder="Masukkan Nama produk" value="<?= $produk["nama"]; ?>" required>
                    </div>
                    <div class="jarak">
                         <label for="deskripsi">Deskripsi produk</label>
                         <input type="text" id="deskripsi" name="deskripsi" value="<?= $produk["deskripsi"]; ?>" required></input>
                    </div>
                    <div class="jarak">
                         <label for="harga">Harga produk</label>
                         <input type="text" id="harga" name="harga" value="<?= $produk["harga"]; ?>" required></input>
                    </div>
                    <div class="jarak">
                         <label for="stok">Stock produk</label>
                         <input type="number" id="stok" name="stok" value="<?= $produk["stok"]; ?>" required></input>
                    </div>
                    <button class="btn" onclick="window.location.href='index.php'" style="width: 100%;padding:10px;background-color: white;color: black;box-shadow: 2px 2px 10px #C6C6C6;margin-bottom: 10px;">Batal</button>
                    <button type="submit" name="submit" class="btn" style="width: 100%;padding:10px;background-color: #FF5585;">Ubah produk</button>
                </form>
            </article>
        </div>
    </main>
    
    <!-- Gelombang -->
        <div class="gelombang"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,165.3C384,181,480,171,576,149.3C672,128,768,96,864,90.7C960,85,1056,107,1152,138.7C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>

    <footer>
        <p>&#169 Kue Nana <i class="fas fa-gem"></i> 2021</p>
    </footer>

</body>
</html>