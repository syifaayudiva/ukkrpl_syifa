<?php include 'koneksi.php'; session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK 2024 Syifa | Website Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fst-italic" href="?url=home">Syifa's Gallery Photos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="?url=home">Home</a>
            <?php if(isset($_SESSION['user_id'])): ?>
            <a class="nav-link" href="?url=upload">Upload</a>
            <a class="nav-link" href="?url=album">Album</a>
            <a class="nav-link" href="?url=profile"><?= ucwords($_SESSION['username']) ?></a>
            <a href="?url=logout" class="nav-link">Logout</a>
            <?php else: ?>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
        </div>
    </div>
    </nav>
    <br>
    <h1 class="fst-italic text-center text-warning" >Welcome to The Gallery Photos</h1>
    <?php  // tampilan awal foto ketika sudah login dengan user yang terdaftar
        $url=@$_GET["url"];
        if($url=='home'){
            include 'page/home.php';
        }elseif($url=='profile'){
            include 'page/profil.php';
        }else if($url=='upload'){
            include 'page/upload.php';
        }else if($url=='album'){
            include 'page/album.php';
        }else if($url=='like'){
            include 'page/like.php';
        }else if($url=='komentar'){
            include 'page/komentar.php';
        }else if($url=='detail'){
            include 'page/detail.php';
        }else if($url=='kategori'){
            include 'page/kategori.php';
        }else if($url=='logout'){
            session_destroy();
            header("Location: ?url=home");
        }else{
            include 'page/home.php';
        }
    ?>
    <div class="container p-5 my-5 bg-dark text-white">
        <h2>About UKK</h2>
        <p>Uji Kompetensi Keahlian (UKK) adalah ujian yang dilakukan untuk menilai kemampuan siswa dalam bidang keahlian tertentu, yang diujikan pada akhir jenjang pendidikan kejuruan seperti SMK. Dan pada tanggal 27 - 28 Februari 2024 T.A. 2023/2024 SMK Negeri 1 Sumbawa Besar mengadakan UKK untuk Kompetensi Keahlian Rekayasa Perangkat Lunak</p>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <br>
    <div class="fst-italic text-center text-light bg-dark p-2 bg-light borde">
    <a href="https://www.facebook.com/ade.mula.940/" class="fab fa-facebook-f"></a>
    <a  href="https://github.com/syifaayudiva" class="fab fa-github"></a>
    <a  href="https://www.youtube.com/@smknegeri1sumbawabesar63" class="fab fa-youtube"></a>
    <a  href="https://www.figma.com/file/kuHij57BmAEif7cpAX9LXZ/Layout-FrontEnd-Syifa?type=design&node-id=0%3A1&mode=design&t=wP9mkRlz9Hg56zNu-1" class="fab fa-figma"></a>
    <br>
    <i>Copyright &copy; UKK2024 SyifaAyudiva</i>
    </div>
</body>
</html>