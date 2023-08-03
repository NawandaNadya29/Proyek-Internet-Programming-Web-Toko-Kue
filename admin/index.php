<?php 
session_start();

if (!isset($_SESSION["admin"])) {
  echo "<script>
         window.location.replace('../logout.php');
       </script>";
  exit;
}
require 'functions.php';

  $produk = mysqli_query($conn, "SELECT * FROM produk");
  $total_produk = mysqli_num_rows($produk);
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
         <article class="card">
                <center><h3 style="color:#FF5585;">Katalog Kue Nana</h3></center>
        </article>

        <div id="content">
            <?php foreach ($produk as $p) : ?>
            <div class="flex">
                <div class="card">
                    <center>
                    <img src="../images/<?= $p["gambar"]; ?>" class="featured-image">
                    <h4><?= $p["nama"]; ?></h4>
                    <p><?= $p["deskripsi"]; ?></p>
                    <p>Kode : <b><?= $p["kode_brg"]; ?></b></p>
                    <p>Harga : Rp <b><?= $p["harga"]; ?></b></p>
                    <p>Stock : <b><?= $p["stok"]; ?></b></p>
                    <p><a href="edit-item.php?id=<?= $p["id"]; ?>" class="btn" style="background-color: orange;">Edit</a></p>
                    <p><a href="hapus-item.php?id=<?= $p["id"]; ?>" class="btn">Hapus</a></p>
                    </center>
               </div>
            </div>
            <?php endforeach; ?>
        </div>

        <aside>
            <div class="card">
                <center><p>Total Katalog : <b><span style="color: #FF5585"><?= $total_produk; ?></span></b></p></center>
            </div>

            <a href="tambah.php"><div class="card">
                <center><p>Tambah Produk</p></center>
            </div></a>
        </aside>
           
    </main>
    
    <!-- Gelombang -->
        <div class="gelombang"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,165.3C384,181,480,171,576,149.3C672,128,768,96,864,90.7C960,85,1056,107,1152,138.7C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>

    <footer>
        <p>&#169 Kue Nana <i class="fas fa-gem"></i> 2021</p>
    </footer>

</body>
</html>