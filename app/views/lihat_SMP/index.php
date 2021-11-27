<!DOCTYPE html>
<html lang=”en”>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Stok Masuk Produk | Kampung Coklat</title>
	<link href="<?= BASEURL ?>/css/melihat_petani.css" rel="stylesheet" type="text/css">
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
        <div class="card">
            <h1>Stok Masuk Produk</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="card_table1">
                    <br><br>
                    <?php if ($data['hak_akses'] == 'admin_prod') { ?>
                        <a href="<?= BASEURL ?>/tambah_SMP" class="tambah"><i class="fas fa-user-plus"></i><span> Tambah</span></a>
                    <?php } ?>
                </div>
                </div>
                <div class="card_table2">
                    <table class="tabelMahasiswa" width="60%">
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">Tanggal Masuk</th>
                            <th>Nama Produk</th>
                            <th style="text-align: center;">Stok Masuk(pcs)</th>
                            <?php if ($data['hak_akses'] == 'admin_prod') { ?>
                                <th colspan="2" style="text-align: center;">Action</th>
                            <?php } ?>
                        </tr>
                        <?php foreach ($data['masuk_produk']['list_data'] as $key => $value) { ?>
                        <tr>
                            <th style="text-align: center;"><?= ($key + 1) ?></th>
                            <th style="text-align: center;"><?= $value['tanggal_masuk'] ?></th>
                            <th><?= $value['nama_produk'] ?></th>
                            <th style="text-align: center;"><?= $value['stok_masuk'] ?></th>
                            <?php if ($data['hak_akses'] == 'admin_prod') { ?>
                                <th style = "text-align: center;">
                                    <a class = 'edit' href = '<?= BASEURL;?>/ubah_SMP/<?= $value['id_masuk_produk']?>'><i class="fas fa-edit"></i> Ubah</a>
                                </th>
                                <th style = "text-align: center;">
                                    <form method="get" action="<?= BASEURL;?>/hapus_SMP/hapus/<?= $value['id_masuk_produk']?>">
                                        <button style = "font-size: 16px; border: none;" type="submit" class="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?');"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </th>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                    <br>
                    <br>

                    <?php if($data['masuk_produk']['halaman_saat_ini'] > 1): ?>
                        <a href = "<?= BASEURL ?>/lihat_SMP/<?= $data['masuk_produk']['halaman_saat_ini'] - 1; ?>"  class = 'pageLebih'>&laquo;</a>
                    <?php endif; ?>

                    <?php for($p = 1; $p <= $data['masuk_produk']['jumlah_halaman']; $p++): ?>
                        <?php if($p == $data['masuk_produk']['halaman_saat_ini']): ?>
                            <a href= "<?= BASEURL ?>/lihat_SMP/<?= $p; ?>" class = 'page_aktif'><?= $p; ?></a>
                        <?php else: ?>
                            <a href= "<?= BASEURL ?>/lihat_SMP/<?= $p; ?>"  class = 'page'><?= $p; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    <?php if($data['masuk_produk']['halaman_saat_ini'] < $data['masuk_produk']['jumlah_halaman']): ?>
                        <a href = "<?= BASEURL ?>/lihat_SMP/<?= $data['masuk_produk']['halaman_saat_ini'] + 1; ?>"  class = 'pageLebih'>&raquo;</a>
                    <?php endif; ?>

                    <br>
                    <br>
                    <br>
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