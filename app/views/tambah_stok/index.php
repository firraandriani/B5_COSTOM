<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Stok Kakao | Kampung Coklat</title>
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
            <h1>Tambah Stok Kakao</h1>
        </div>
        <div class="card_table">
            <div>
                <div class="kotak">
                <form action="<?= BASEURL ?>/tambah_stok/tambah" method="post">
                    <div class="form">
                        <div class="inputfield">
                            <input name="id" type="hidden" value="<?= $data['id_stok'] ?? '' ?>">
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Nama Petani</label>
                            <div style="width: 100%;">
                                <select class="select" name="nama_petani" id="nama_petani" required oninvalid="this.setCustomValidity('Pilih Nama Petani')" oninput="setCustomValidity('')">
                                    <option value="" <?= (isset($data['nama_petani']) && $data['nama_petani'] == '') ? 'selected' : '' ?>>-Pilih Nama Petani-</option>
                                    <option value="2" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 2) ? 'selected' : '' ?>>Suwarno</option>
                                    <option value="3" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 3) ? 'selected' : '' ?>>Eko</option>
                                    <option value="4" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 4) ? 'selected' : '' ?>>Noto</option>
                                    <option value="8" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 8) ? 'selected' : '' ?>>Karyono</option>
                                    <option value="9" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 9) ? 'selected' : '' ?>>Handoko</option>
                                    <option value="10" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 10) ? 'selected' : '' ?>>Edi</option>
                                    <option value="11" <?= (isset($data['nama_petani']) && $data['nama_petani'] == 11) ? 'selected' : '' ?>>Sukarli</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Stok Masuk(kg)</label>
                            <div style="width: 100%;">
                                <input class="diri" id="stok_masuk" name="stok_masuk" value="<?= $data['stok_masuk'] ?? '' ?>" required oninvalid="this.setCustomValidity('Stok masuk tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="inputfield">
					        <label class="dataDiri">Status Kakao</label>
                            <div style="width: 100%;">
                                <select class="select" name="status_kakao" id="status_kakao" required oninvalid="this.setCustomValidity('Pilih Status Kakao')" oninput="setCustomValidity('')">
                                    <option value="" <?= (isset($data['status_kakao']) && $data['status_kakao'] == '') ? 'selected' : '' ?>>-Pilih Status Kakao-</option>
                                    <option value="27" <?= (isset($data['status_kakao']) && $data['status_kakao'] == 27) ? 'selected' : '' ?>>Kering</option>
                                    <option value="28" <?= (isset($data['status_kakao']) && $data['status_kakao'] == 28) ? 'selected' : '' ?>>Basah</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputfield">
                            <label class="dataDiri">Harga(kg)</label>
                            <div style="width: 100%;">
                                <input class="diri" id="harga" name="harga" value="<?= $data['harga'] ?? '' ?>" required oninvalid="this.setCustomValidity('Harga tidak boleh kosong')" oninput="setCustomValidity('')">
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
                                        <h2>Stok Kakao</h2>
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