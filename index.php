<?php 
session_start();

if (isset($_SESSION["admin"])) {
  echo "<script>
         window.location.replace('admin');
       </script>";
  exit;
}
if (!isset($_SESSION['user'])) {
   echo "<script>
         window.location.replace('login.php');
       </script>";
  exit;
}
require 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon dari Fontawesome -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>Kue Nana</title>
    <style>
        /*Membuat Tulisan Berkedip*/
        blink {
          -webkit-animation: 2s linear infinite condemned_blink_effect;
          animation: 1s linear infinite condemned_blink_effect;
        }
        @keyframes condemned_blink_effect {
          0% {
            visibility: hidden;
          }
          50% {
            visibility: hidden;
          }
          100% {
            visibility: visible;
          }
        }
        .btn {
            text-decoration: none;
            padding: 5px 10px;
            background-color: red;
        } 
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="katalog.php">Katalog</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="logout.php" class="btn" style="border-bottom: none;">Logout</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <h3>Kue Nana <i class="fas fa-gem"></i></h3>
            <p>Happy Shopping</p>
        </div>
        <!-- Gelombang -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,69.3C384,32,480,32,576,74.7C672,117,768,203,864,213.3C960,224,1056,160,1152,144C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </header>

    <main>
         <article class="card">
                <marquee><h3 style="color:#FF5585;">Selamat Datang di Kue Nana</h3></marquee>
            </article>
        <div id="content">
            
            <article class="card">
                <h4 class="judul">Nikmati Berbagai Metode Pembayaran : </h4>
                <center>
                    <img src="images/bni.PNG" alt="bni" width="25%">
                    <p><span style="color:royalblue;">0345781429</span> An. Nawanda Nadya Putri</p>
                    <hr width="25%">
                    <br>
                </center>
                <center>
                    <img src="images/mandiri.PNG" alt="mandiri" width="25%">
                    <p><span style="color:royalblue;">4312789157</span> An. Nawanda Nadya Putri</p>
                    <hr width="25%">
                    <br>
                </center>
                <center>
                    <img src="images/btn.PNG" alt="btn" width="25%">
                    <p><span style="color:royalblue;">3124783115</span> An. Nawanda Nadya Putri</p>
                    <hr width="25%">
                    <br>
                </center>
                <center>
                    <img src="images/bri.PNG" alt="bri" width="25%">
                    <p><span style="color:royalblue;">3247891637</span> An. Nawanda Nadya Putri</p>
                </center>
            </article>
            <article class="card">
                <h4 class="judul">Dengan Berbagai Jasa Pengiriman :</h4>
                <br>
                <center>
                    <img src="images/j&t.PNG" alt="j&t" width="25%">
                    <br><br>
                    <br>
                </center>
                <center>
                    <img src="images/jne.PNG" alt="jne" width="25%">
                    <br>
                    <br>
                </center>
                <center>
                    <img src="images/lion.PNG" alt="lion" width="25%">
                </center>
            </article>
        </div>

        <aside>
            <a href="katalog.php" style="text-decoration: none;">
                <article class="card">
                    <blink><p class="judul"><b>Katalog Produk</b> <i class="fas fa-angle-left"></i></p></blink>
                </article>
            </a>

            <article class="card">
                <h3 class="judul">Kebijakan Privasi</h3>
                <center><i class="fas fa-gem judul"></i></center>
                <p>Adanya Kebijakan Privasi ini adalah komitmen nyata dari toko kami untuk menghargai dan melindungi setiap informasi pribadi pengguna situs ini. Kebijakan ini menjadi acuan yang mengatur dan melindungi penggunaan data dan informasi penting para pengguna situs toko kue nana.</p>
            </article>
        </aside>
    </main>
    
   <!-- Gelombang -->
        <div class="gelombang">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,96L12.6,90.7C25.3,85,51,75,76,69.3C101.1,64,126,64,152,53.3C176.8,43,202,21,227,58.7C252.6,96,278,192,303,229.3C328.4,267,354,245,379,218.7C404.2,192,429,160,455,149.3C480,139,505,149,531,149.3C555.8,149,581,139,606,160C631.6,181,657,235,682,240C707.4,245,733,203,758,197.3C783.2,192,808,224,834,229.3C858.9,235,884,213,909,176C934.7,139,960,85,985,74.7C1010.5,64,1036,96,1061,128C1086.3,160,1112,192,1137,170.7C1162.1,149,1187,75,1213,80C1237.9,85,1263,171,1288,197.3C1313.7,224,1339,192,1364,154.7C1389.5,117,1415,75,1427,53.3L1440,32L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>
        </div>

    <footer>
        <p>&#169 Kue Nana <i class="fas fa-gem"></i> 2021</p>
    </footer>
</body>
</html>