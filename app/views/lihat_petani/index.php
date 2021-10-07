<!DOCTYPE html>
<html lang=”en”>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Petani | Kampung Coklat</title>
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
            <a href="<?= BASEURL ?>/lihat_petani"><i class="fas fa-users"></i><span>PETANI</span></a>
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
        <a href="<?= BASEURL ?>/beranda"><i class="fas fa-home"></i><span>BERANDA</span></a>
        <a href="<?= BASEURL ?>/lihat_petani"><i class="fas fa-users"></i><span>PETANI</span></a>
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
        <div class="card_table">
            <div>
                <div class="card_table1">
                    <br><br>
                    <a href="<?= BASEURL ?>/tambah_petani" class="tambah"><i class="fas fa-user-plus"></i><span> Tambah</span></a>
                </div>
                </div>
                <div class="card_table2">
                    <table class="tabelMahasiswa" width="60%">
                        <tr>
                            <th>No.</th>
                            <th>Nama Petani</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Status Lahan</th>
                            <th>Status Keanggotaan</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($data['petani'] as $key => $value) { ?>
                        <tr>
                            <th><?= ($key + 1) ?></th>
                            <th><?= $value['nama_petani'] ?></th>
                            <th><?= $value['tanggal_lahir'] ?></th>
                            <th><?= $value['alamat'] ?></th>
                            <th><?= $value['status_lahan'] ?></th>
                            <th><?= $value['status_anggota'] ?></th>
                            <th><a class = 'edit' href = '<?= BASEURL;?>/ubah_petani/<?= $value['id_petani']?>'><i class="fas fa-edit"></i> Ubah</a><a href="<?= BASEURL;?>/hapus_petani/hapus/<?= $value['id_petani']?>" class="hapus"><i class="fas fa-trash"></i> Hapus</a></th>
                        </tr>
                        <?php } ?>
                    </table>
                    <br>

                    <!-- <?php if($data['halaman_saat_ini'] > 1): ?>
                        <a href = "?Page=<?= $data['halaman_saat_ini'] - 1; ?>"  class = 'pageLebih'>&laquo;</a>
                    <?php endif; ?>

                    <?php for($p = 1; $p <= $data['jumlah_halaman']; $p++): ?>
                        <?php if($p == $data['halaman_saat_ini']): ?>
                            <a href= "?Page=<?= $p; ?>" class = 'page_aktif'><?= $p; ?></a>
                        <?php else: ?>
                            <a href= "?Page=<?= $p; ?>"  class = 'page'><?= $p; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    <?php if($data['halaman_saat_ini'] < $data['jumlah_halaman']): ?>
                        <a href = "?Page=<?= $data['halaman_saat_ini'] + 1; ?>"  class = 'pageLebih'>&raquo;</a>
                    <?php endif; ?>

                    <br> -->
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