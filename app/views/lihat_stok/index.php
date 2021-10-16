<!DOCTYPE html>
<html lang=”en”>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Stok Kakao | Kampung Coklat</title>
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
            <a href="<?= BASEURL ?>/beranda"><i class="fas fa-home"></i><span>BERANDA</span></a>
            <a href="<?= BASEURL ?>/lihat_petani/1"><i class="fas fa-users"></i><span>PETANI</span></a>
            <a href="<?= BASEURL ?>/lihat_stok/1"><i class="fas fa-database"></i><span>STOK</span></a>
            <a href="#"><i class="fas fa-box-open"></i><span>PRODUKSI</span></a>
            <a href="#"><i class="fas fa-dice-d6"></i><span>PRODUK</span></a>
            <a href="#"><i class="fas fa-chart-bar"></i><span>GRAFIK</span></a>
            <a href="#"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <a href="<?= BASEURL ?>/beranda"><i class="fas fa-home"></i><span>BERANDA</span></a>
        <a href="<?= BASEURL ?>/lihat_petani/1"><i class="fas fa-users"></i><span>PETANI</span></a>
        <a href="<?= BASEURL ?>/lihat_stok/1"><i class="fas fa-database"></i><span>STOK</span></a>
        <a href="#"><i class="fas fa-box-open"></i><span>PRODUKSI</span></a>
        <a href="#"><i class="fas fa-dice-d6"></i><span>PRODUK</span></a>
        <a href="#"><i class="fas fa-chart-bar"></i><span>GRAFIK</span></a>
        <a href="#"><i class="fas fa-calculator"></i><span>KALKULATOR</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="card">
            <h1>Stok Kakao</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="card_table1">
                    <br><br>
                    <a href="<?= BASEURL ?>/tambah_stok" class="tambah"><i class="fas fa-user-plus"></i><span> Tambah</span></a>
                </div>
                </div>
                <div class="card_table2">
                    <table class="tabelMahasiswa" width="60%">
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Setor</th>
                            <th>Nama Petani</th>
                            <th>Stok Masuk(kg)</th>
                            <th>Status Kakao</th>
                            <th>Harga(kg)</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($data['stok']['list_data'] as $key => $value) { ?>
                        <tr>
                            <th><?= ($key + 1) ?></th>
                            <th><?= $value['tanggal_setor'] ?></th>
                            <th><?= $value['nama_petani'] ?></th>
                            <th><?= $value['stok_masuk'] ?></th>
                            <th><?= $value['status_kakao'] ?></th>
                            <th style="text-align: right;"><?= "Rp " . number_format($value['harga'], 2, ",", ".") ?></th>
                            <th style="text-align: right;"><?= "Rp " . number_format($value['harga']*$value['stok_masuk'], 2, ",", ".") ?></th>
                            <th><a class = 'edit' href = '<?= BASEURL;?>/ubah_stok/<?= $value['id_stok']?>'><i class="fas fa-edit"></i> Ubah</a><a href="<?= BASEURL;?>/hapus_stok/hapus/<?= $value['id_stok']?>" class="hapus"><i class="fas fa-trash"></i> Hapus</a></th>
                        </tr>
                        <?php } ?>
                    </table>
                    <br>
                    <br>

                    <?php if($data['stok']['halaman_saat_ini'] > 1): ?>
                        <a href = "<?= BASEURL ?>/lihat_stok/<?= $data['stok']['halaman_saat_ini'] - 1; ?>"  class = 'pageLebih'>&laquo;</a>
                    <?php endif; ?>

                    <?php for($p = 1; $p <= $data['stok']['jumlah_halaman']; $p++): ?>
                        <?php if($p == $data['stok']['halaman_saat_ini']): ?>
                            <a href= "<?= BASEURL ?>/lihat_stok/<?= $p; ?>" class = 'page_aktif'><?= $p; ?></a>
                        <?php else: ?>
                            <a href= "<?= BASEURL ?>/lihat_stok/<?= $p; ?>"  class = 'page'><?= $p; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    <?php if($data['stok']['halaman_saat_ini'] < $data['stok']['jumlah_halaman']): ?>
                        <a href = "<?= BASEURL ?>/lihat_stok/<?= $data['stok']['halaman_saat_ini'] + 1; ?>"  class = 'pageLebih'>&raquo;</a>
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