<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Beranda| Kampung Coklat</title>
	<link href="<?= BASEURL ?>/css/beranda.css" rel="stylesheet" type="text/css">
    <link href='http://localhost/KampungCoklat/public/img/icon_judul.jpg' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <img src="http://localhost/KampungCoklat/public/img/Logo-Daun.png">
        </div>
        <div class="right_area">
            <a href="<?= BASEURL ?>/logout" style="color: #000; margin-left: 10px;" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a class="menu" href="<?= BASEURL ?>/beranda"><i class="fas fa-home"></i><span>BERANDA</span></a>
            <?php if ($data['hak_akses'] != 'admin_prod') { ?>
                <a class="menu" href="<?= BASEURL ?>/lihat_petani/1"><i class="fas fa-users"></i><span>PETANI</span></a>
            <?php } ?>
            <p class="menu2">KAKAO</p>
            <a class="sub_menu" href="<?= BASEURL ?>/lihat_stok/1"><i class="fas fa-calendar"></i><span>STOK MASUK</span></a>
            <a class="sub_menu" href="<?= BASEURL ?>/lihat_SKK/1"><i class="fas fa-calendar-check"></i><span>STOK KELUAR</span></a>
            <p class="menu2">PRODUK</p>
            <a class="sub_menu" href="<?= BASEURL ?>/lihat_produk/1"><i class="fas fa-cookie"></i><span>DATA PRODUK</span></a>
            <a class="sub_menu" href="<?= BASEURL ?>/lihat_SMP/1"><i class="fas fa-box"></i><span>STOK MASUK</span></a>
            <a class="sub_menu" href="<?= BASEURL ?>/lihat_SKP/1"><i class="fas fa-dolly"></i><span>STOK KELUAR</span></a>
            <a class="menu" href="<?= BASEURL ?>/grafik/2021"><i class="fas fa-chart-bar"></i><span>GRAFIK</span></a>
            <a class="menu" href="<?= BASEURL ?>/kalkulator"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <a class="menu" href="<?= BASEURL ?>/beranda"><i class="fas fa-home"></i><span>BERANDA</span></a>
        <?php if ($data['hak_akses'] != 'admin_prod') { ?>
            <a class="menu" href="<?= BASEURL ?>/lihat_petani/1"><i class="fas fa-users"></i><span>PETANI</span></a>
        <?php } ?>
        <p class="menu2">KAKAO</p>
        <a class="sub_menu" href="<?= BASEURL ?>/lihat_stok/1"><i class="fas fa-calendar"></i><span>STOK MASUK</span></a>
        <a class="sub_menu" href="<?= BASEURL ?>/lihat_SKK/1"><i class="fas fa-calendar-check"></i><span>STOK KELUAR</span></a>
        <p class="menu2">PRODUK</p>
        <a class="sub_menu" href="<?= BASEURL ?>/lihat_produk/1"><i class="fas fa-cookie"></i><span>DATA PRODUK</span></a>
        <a class="sub_menu" href="<?= BASEURL ?>/lihat_SMP/1"><i class="fas fa-box"></i><span>STOK MASUK</span></a>
        <a class="sub_menu" href="<?= BASEURL ?>/lihat_SKP/1"><i class="fas fa-dolly"></i><span>STOK KELUAR</span></a>
        <a class="menu" href="<?= BASEURL ?>/grafik/2021"><i class="fas fa-chart-bar"></i><span>GRAFIK</span></a>
        <a class="menu" href="<?= BASEURL ?>/kalkulator"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <ul>
            <li>
                <span class="judul">TENTANG</span>
                <span class="judul2">Kampung Coklat</span>
            </li>
            <li>
                <span><img src='http://localhost/KampungCoklat/public/img/gambar.jpg' width="100%" height="50%" class="isi2"></span>
                <p class="isi">PT. Kampung Coklat atau dapat disebut sebagai “Wisata Edukasi Kampung Coklat” merupakan perusahaan yang bergerak di bidang jual beli biji kakao, produksi olahan dari biji kakao, dan salah tau tempat wisata edukasi yang berlokasi di Jl. Banteng - Blorok No. 18, Desa Plosorejo, RT. 01 / 06, Kademangan, Plosorejo, Kademangan, Blitar, Jawa Timur.</p>
            </li>
            <li>
                <p class="isi3">Pengolahan produk coklat PT. Kampung Coklat dibuat dan di awasi oleh sang Maestro Coklat PT. Kampung Coklat, dengan memastikan olahan coklat yang layak dan memiliki tekstur yang baik sehingga menciptakan sebuah Olahan Coklat yang bermutu dan berkualitas. PT. Kampung Coklat juga memiliki perkebunan kakao sendiri sehingga terjamin kualitas dan mutu disetiap produk.</p>
                <span><img src='http://localhost/KampungCoklat/public/img/kakao1.jpg' width="100%" height="50%" class="isi2"></span>
            </li>
        </ul>
</div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('.nav_btn').click(function(){
            $('.mobile_nav_items').toggleClass('active');
        });
    });
    </script>

</body>
</html>