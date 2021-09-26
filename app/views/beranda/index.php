<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Beranda | Kampung Coklat</title>
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
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="#"><i class="fas fa-users"></i><span>PETANI</span></a>
            <a href="#"><i class="fas fa-database"></i><span>STOK KAKAO</span></a>
            <a href="#"><i class="fas fa-dice-d6"></i><span>PRODUK KAKAO</span></a>
            <a href="#"><i class="fas fa-box-open"></i><span>JUMLAH PRODUKSI</span></a>
            <a href="#"><i class="fas fa-chart-bar"></i><span>GRAFIK STOK</span></a>
            <a href="#"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <a href="#"><i class="fas fa-users"></i><span>PETANI</span></a>
        <a href="#"><i class="fas fa-database"></i><span>STOK KAKAO</span></a>
        <a href="#"><i class="fas fa-dice-d6"></i><span>PRODUK KAKAO</span></a>
        <a href="#"><i class="fas fa-box-open"></i><span>JUMLAH PRODUKSI</span></a>
        <a href="#"><i class="fas fa-chart-bar"></i><span>GRAFIK STOK</span></a>
        <a href="#"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="card">
            <h1>Petani</h1>
        </div>
        <div class="card">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="card">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
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