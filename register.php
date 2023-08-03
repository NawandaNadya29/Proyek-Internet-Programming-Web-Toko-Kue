<?php 
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0 ) {
    $success = true;
  } else {
    echo mysqli_error($conn);
  }
 }
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
        #content {
            width: 100%;
            padding: 0 350px;
        }
        @media screen and (max-width: 1000px) {
            #content {
                padding: 0 10px;
            }
        }
        .alert {
            margin: 10px 0;
            font-size: 0.9rem;
            background-color: #FCC663;
            padding: 10px;
            border: 1px solid darkorange;
        }
    </style>
</head>

<body>
    <header>
        <div class="jumbotron"> </div>
         <!-- Gelombang -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF5585" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,69.3C384,32,480,32,576,74.7C672,117,768,203,864,213.3C960,224,1056,160,1152,144C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </header>

    <main>
        <div id="content">
            <h2 class="judul">Registrasi Akun <i class="fas fa-gem"></i></h2>
            <?php if (isset($success)) : ?>
            <center>
                <p style="color: green;">Registrasi Berhasil <i class="fas fa-check-circle"></i></p>
            </center>
            <?php endif; ?>
            <article class="card">
                <form action="" method="post">
                    <div class="jarak">
                         <label for="username">Username</label>
                         <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="jarak">
                        <label for="password">Password</label>
                        <div class="alert"><a>Minimal 8 Digit</a></div>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password" min="8" minlength="8" required>
                    </div>
                    <div class="jarak">
                         <label for="nama">Nama Lengkap</label>
                         <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <button type="submit" name="register" class="btn" style="width: 100%;">Registrasi</button>
                </form>
            </article>

            <center>Sudah mempunyai akun? <a href="login.php">Login Disini</a></center>
        </div>
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