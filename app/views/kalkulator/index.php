<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Kalkulator | Kampung Coklat</title>
	<link href="<?= BASEURL ?>/css/melihat_petani.css" rel="stylesheet" type="text/css">
    <link href='http://localhost/KampungCoklat/public/img/icon_judul.jpg' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <div class="card">
            <h1>Kalkulator</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="kotak">
                <form method="post">
                    <div class="form">
                        <br>
                        <div class="inputfield">
                            <label class="dataDiri">Bar Crispy</label>
                            <input class="diri" id="bar_crispy" name="bar_crispy" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bar Dark 100%</label>
                            <input class="diri" id="bar_dark_100" name="bar_dark_100" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Bar Dark 90%</label>
                            <input class="diri" id="bar_dark_90" name="bar_dark_90" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bar Dark 80%</label>
                            <input class="diri" id="bar_dark_80" name="bar_dark_80" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Bar Dark 67%</label>
                            <input class="diri" id="bar_dark_67" name="bar_dark_67" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bar Love Milk</label>
                            <input class="diri" id="bar_love_milk" name="bar_love_milk" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Bar Love Original</label>
                            <input class="diri" id="bar_love_original" name="bar_love_original" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bar Milk</label>
                            <input class="diri" id="bar_milk" name="bar_milk" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Bar Original</label>
                            <input class="diri" id="bar_original" name="bar_original" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bubuk Murni</label>
                            <input class="diri" id="bar_murni" name="bar_murni" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Bubuk Original</label>
                            <input class="diri" id="bubuk_original" name="bubuk_original" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Carang Mas Coklat</label>
                            <input class="diri" id="carang_mas_coklat" name="carang_mas_coklat" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Kripik Pisang</label>
                            <input class="diri" id="kripik_pisang" name="kripik_pisang" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Kripik Ubi Coklat</label>
                            <input class="diri" id="kripik_ubi_coklat" name="kripik_ubi_coklat" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Permen Tape Coklat</label>
                            <input class="diri" id="permen_tape_coklat" name="permen_tape_coklat" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div class="inputfield2">
                            <label class="dataDiri">Bubuk Strawberry</label>
                            <input class="diri" id="bubuk_strawberry" name="bubuk_strawberry" type="text" placeholder="Masukkan Jumlah Produk">
                        </div>
                        <div style="text-align: center;">
                            <button class = "hitung" name = "hitung">Hitung</button>
                        </div>
                        <br>
                        <?php
                            $kakao_kering = '';
                            $kakao_basah = '';
                            if (isset($_POST['hitung'])) {
                                $bar_crispy = (float) $_POST['bar_crispy'];
                                $bar_dark_100 = (float) $_POST['bar_dark_100'];
                                $bar_dark_90 = (float) $_POST['bar_dark_90'];
                                $bar_dark_80 = (float) $_POST['bar_dark_80'];
                                $bar_dark_67 = (float) $_POST['bar_dark_67'];
                                $bar_love_milk = (float) $_POST['bar_love_milk'];
                                $bar_love_original = (float) $_POST['bar_love_original'];
                                $bar_milk = (float) $_POST['bar_milk'];
                                $bar_original = (float) $_POST['bar_original'];
                                $bar_murni = (float) $_POST['bar_murni'];
                                $bubuk_original = (float) $_POST['bubuk_original'];
                                $carang_mas_coklat = (float) $_POST['carang_mas_coklat'];
                                $kripik_pisang = (float) $_POST['kripik_pisang'];
                                $kripik_ubi_coklat = (float) $_POST['kripik_ubi_coklat'];
                                $permen_tape_coklat = (float) $_POST['permen_tape_coklat'];
                                $bubuk_strawberry = (float) $_POST['bubuk_strawberry'];
                        
                                $kakao_kering = ($bar_crispy/16) + ($bar_dark_100/12) + ($bar_dark_90/13) + ($bar_dark_80/14) + ($bar_dark_67/16) + ($bar_love_milk/8) + ($bar_love_original/10) + ($bar_milk/16) + ($bar_original/18) + ($bar_murni/9) + ($bubuk_original/8) + ($carang_mas_coklat/18) + ($kripik_pisang/30) + ($kripik_ubi_coklat/18) + ($permen_tape_coklat/20) + ($bubuk_strawberry/7);
                        
                                $kakao_basah = ($bar_crispy/13) + ($bar_dark_100/9) + ($bar_dark_90/10) + ($bar_dark_80/11) + ($bar_dark_67/13) + ($bar_love_milk/5) + ($bar_love_original/7) + ($bar_milk/13) + ($bar_original/15) + ($bar_murni/6) + ($bubuk_original/5) + ($carang_mas_coklat/15) + ($kripik_pisang/27) + ($kripik_ubi_coklat/15) + ($permen_tape_coklat/17) + ($bubuk_strawberry/4);
                            }
                        ?>
                        <div style="text-align: center;">
                            <p><b>Kakao Kering: </b><?= round($kakao_kering, 3); ?> kg</p>
                            <p><b>Kakao Basah: </b><?= round($kakao_basah, 3); ?> kg</p>
                        </div>
                        <br>
                    </div>
                </form>
                </div>
            </div>
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