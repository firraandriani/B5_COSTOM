<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Petani | Kampung Coklat</title>
	<link href="<?= BASEURL ?>/css/tambah_petani.css" rel="stylesheet" type="text/css">
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
            <h1>Tambah Petani</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="kotak">
                <form action="<?= BASEURL ?>/tambah_petani/tambah" method="post">
                    <div class="form">
                        <div class="inputfield">
                            <input name="id" type="hidden" value="<?= $data['id_petani'] ?? '' ?>">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Nama Petani</label>
                            <input class="diri" id="nama_petani" name="nama_petani" type="text" placeholder="Masukkan Nama Petani" value="<?= $data['nama_petani'] ?? '' ?>" required oninvalid="this.setCustomValidity('Nama petani tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Tanggal Lahir</label>
                            <div style="width: 100%;">
                                <input class="tanggal" id="tanggal" type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?? '' ?>" required oninvalid="this.setCustomValidity('Tanggal tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>  
                        <div class="inputfield">
                            <label class="dataDiri">Alamat Kecamatan</label>
                            <div style="width: 100%;">
                                <select class="select" name="alamat_kec" id="alamat_kec" required oninvalid="this.setCustomValidity('Pilih Alamat Kecamatan')" oninput="setCustomValidity('')">
                                    <option value="" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == '') ? 'selected' : '' ?>>-Pilih Kecamatan-</option>
                                    <option value="3" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 3) ? 'selected' : '' ?>>Bakung</option>
                                    <option value="4" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 4) ? 'selected' : '' ?>>Binangun</option>
                                    <option value="5" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 5) ? 'selected' : '' ?>>Doko</option>
                                    <option value="6" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 6) ? 'selected' : '' ?>>Gandusari</option>
                                    <option value="7" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 7) ? 'selected' : '' ?>>Garum</option>
                                    <option value="8" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 8) ? 'selected' : '' ?>>Kademangan</option>
                                    <option value="9" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 9) ? 'selected' : '' ?>>Kanigoro</option>
                                    <option value="10" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 10) ? 'selected' : '' ?>>Kesamben</option>
                                    <option value="11" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 11) ? 'selected' : '' ?>>Nglegok</option>
                                    <option value="12" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 12) ? 'selected' : '' ?>>Panggungrejo</option>
                                    <option value="13" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 13) ? 'selected' : '' ?>>Ponggok</option>
                                    <option value="14" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 14) ? 'selected' : '' ?>>Sanankulon</option>
                                    <option value="15" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 15) ? 'selected' : '' ?>>Selorejo</option>
                                    <option value="16" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 16) ? 'selected' : '' ?>>Selopuro</option>
                                    <option value="17" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 17) ? 'selected' : '' ?>>Srengat</option>
                                    <option value="18" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 18) ? 'selected' : '' ?>>Sutojayan</option>
                                    <option value="19" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 19) ? 'selected' : '' ?>>Talun</option>
                                    <option value="20" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 20) ? 'selected' : '' ?>>Udanawu</option>
                                    <option value="21" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 21) ? 'selected' : '' ?>>Wates</option>
                                    <option value="22" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 22) ? 'selected' : '' ?>>Wlingi</option>
                                    <option value="23" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 23) ? 'selected' : '' ?>>Wonodadi</option>
                                    <option value="24" <?= (isset($data['alamat_kec']) && $data['alamat_kec'] == 24) ? 'selected' : '' ?>>Wonotirto</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputfield">
					        <label class="dataDiri">Status Lahan</label>
                            <div style="width: 100%;">
                                <select class="select" name="status_lahan" id="status_lahan" required oninvalid="this.setCustomValidity('Pilih Status Lahan')" oninput="setCustomValidity('')">
                                    <option value="" <?= (isset($data['status_lahan']) && $data['status_lahan'] == '') ? 'selected' : '' ?>>-Pilih Status Lahan-</option>
                                    <option value="1" <?= (isset($data['status_lahan']) && $data['status_lahan'] == 1) ? 'selected' : '' ?>>Sewa</option>
                                    <option value="2" <?= (isset($data['status_lahan']) && $data['status_lahan'] == 2) ? 'selected' : '' ?>>Milik Pribadi</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri"> </label>
                            <div style="width: 100%">
                                <input type="checkbox" id = "klik" <?= (isset($_SESSION['is_create']) && $_SESSION['is_create'] == 1) ? 'checked' : '' ?>>
                                <button class="click-me"><label for="klik">SIMPAN</label></button>
                                <?php if (isset($_SESSION['is_create']) && $_SESSION['is_create'] == 1) { ?>
                                <div class="content1">
                                    <div class="header1">
                                        <h2>Petani</h2>
                                        <label for="klik" class="fas fa-times"></label>
                                    </div>
                                    <label for="klik" class="fas fa-check"></label>
                                    <p>Data Berhasil Ditambah</p>
                                    <div class="line"></div>
                                    <label for="klik" class="close-btn">OK</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div> 
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