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
            <h1>Petani</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="card_table1">
                    <br><br>
                    <?php if ($data['hak_akses'] == 'admin_bahan') { ?>
                        <a href="<?= BASEURL ?>/tambah_petani" class="tambah"><i class="fas fa-user-plus"></i><span> Tambah</span></a>
                    <?php } ?>
                </div>
                <?php 
    
                $explodeUrl = explode('/', $_GET['url']);
                $urlContinue = !is_numeric(end($explodeUrl)) ? '/' . implode('/', array_slice($explodeUrl, -2, 2, true)) : '';
                $isDesc = !is_numeric(end($explodeUrl)) && end($explodeUrl) == 'desc' ? 1 : 0;

                ?>
                </div>
                <div class="card_table2">
                    <table class="tabelMahasiswa" width="60%">
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th>Nama Petani</th>
                            <th style="text-align: center;">Tanggal Lahir</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Status Keanggotaan <a href="<?= BASEURL ?>/lihat_petani/<?= $data['petani']['halaman_saat_ini']; ?>/status/<?= $isDesc ? 'asc' : 'desc' ?>"><i class="fas fa-angle-<?= $isDesc ? 'down' : 'up' ?>"></i></a></th>
                            <?php if ($data['hak_akses'] == 'admin_bahan') { ?>
                                <th colspan="2" style="text-align: center;">Action</th>
                            <?php } ?>
                        </tr>
                        <?php foreach ($data['petani']['list_data'] as $key => $value) { ?>
                        <tr>
                            <th style="text-align: center;"><?= ($key + 1) ?></th>
                            <th><?= $value['nama_petani'] ?></th>
                            <th style="text-align: center;"><?= $value['tanggal_lahir'] ?></th>
                            <th style="text-align: center;"><?= $value['alamat'] ?></th>
                            <th style="text-align: center;"><?= $value['status_anggota'] ?></th>
                            <?php if ($data['hak_akses'] == 'admin_bahan') { ?>
                                <th style = "text-align: center;">
                                    <a class = 'edit' href = '<?= BASEURL;?>/ubah_petani/<?= $value['id_petani']?>'><i class="fas fa-edit"></i> Ubah</a>
                                </th>
                                <th style = "text-align: center;">
                                    <form method="get" action="<?= BASEURL;?>/hapus_petani/hapus/<?= $value['id_petani']?>">
                                        <button style = "font-size: 16px; border: none;" type="submit" class="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?');"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </th>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                    <br>
                    <br>

                    <?php if($data['petani']['halaman_saat_ini'] > 1): ?>
                        <a href = "<?= BASEURL ?>/lihat_petani/<?= ($data['petani']['halaman_saat_ini'] - 1) . $urlContinue; ?>"  class = 'pageLebih'>&laquo;</a>
                    <?php endif; ?>

                    <?php for($p = 1; $p <= $data['petani']['jumlah_halaman']; $p++): ?>
                        <?php if($p == $data['petani']['halaman_saat_ini']): ?>
                            <a href= "<?= BASEURL ?>/lihat_petani/<?= $p . $urlContinue; ?>" class = 'page_aktif'><?= $p; ?></a>
                        <?php else: ?>
                            <a href= "<?= BASEURL ?>/lihat_petani/<?= $p . $urlContinue; ?>"  class = 'page'><?= $p; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    <?php if($data['petani']['halaman_saat_ini'] < $data['petani']['jumlah_halaman']): ?>
                        <a href = "<?= BASEURL ?>/lihat_petani/<?= ($data['petani']['halaman_saat_ini'] + 1) . $urlContinue; ?>"  class = 'pageLebih'>&raquo;</a>
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