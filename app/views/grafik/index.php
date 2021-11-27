<!DOCTYPE html>
<html lang=”en”>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
	<title>Grafik| Kampung Coklat</title>
	<link href="<?= BASEURL ?>/css/grafik.css" rel="stylesheet" type="text/css">
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
            <h1>Grafik</h1>
        </div>
        <div>
            <form method="POST" action="<?= BASEURL; ?>/grafik/search">
                <select class = "cari_option"  style = "margin-left: 43%;" name="year">
                    <?php foreach ($data['year_select'] as $x) { ?>
                        <option value="<?= $x ;?>" <?= (isset($data['year']) && $data['year'] == $x) ? 'selected' : '' ?>><?= $x; ?></option>
                    <?php } ?>
                </select>
                <button class = "cari_button" type="submit">Cari</button>
            </form>
        </div>
        <br>
        <div class="card_table">
            <div>
                <figure class="highcharts-figure">
                    <div id="grafik_data_SMK"></div>
                </figure>
            </div>
            <div>
                <figure class="highcharts-figure">
                    <div id="grafik_data_SKK"></div>
                </figure>
            </div>
            <div>
                <figure class="highcharts-figure">
                    <div id="grafik_data_SMP"></div>
                </figure>
            </div>
            <div>
                <figure class="highcharts-figure">
                    <div id="grafik_data_SKP"></div>
                </figure>
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
    
    <script src="<?= BASEURL ?>/js/highcharts.js"></script>
    <script src="<?= BASEURL ?>/js/exporting.js"></script>

    <script type="text/javascript">
        Highcharts.chart('grafik_data_SMK', {

            title: {
                text: 'Stok Masuk Kakao'
            },

            subtitle: {
                text: 'Source: Kampung Coklat'
            },

            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Stok Masuk Kakao'
                }
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },

            series: [{
                name: 'Kakao Kering',
                data: [
                    <?php foreach ($data['stok_masuk']['stok_masuk_kering'] as $key => $value) {
                        echo $key == (count($data['stok_masuk']['stok_masuk_kering']) - 1) ? $value : $value . ', ';
                    } ?>
                ]
            }, {
                name: 'Kakao Basah',
                data: [
                    <?php foreach ($data['stok_masuk']['stok_masuk_basah'] as $key => $value) {
                        echo $key == (count($data['stok_masuk']['stok_masuk_basah']) - 1) ? $value : $value . ', ';
                    } ?>
                ]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
    </script>

    <script type="text/javascript">
        Highcharts.chart('grafik_data_SKK', {

            title: {
                text: 'Stok Keluar Kakao'
            },

            subtitle: {
                text: 'Source: Kampung Coklat'
            },

            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Stok Keluar Kakao'
                }
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },

            series: [{
                name: 'Kakao Kering',
                data: [
                    <?php foreach ($data['stok_keluar']['stok_keluar_kering'] as $key => $value) {
                        echo $key == (count($data['stok_keluar']['stok_keluar_kering']) - 1) ? $value : $value . ', ';
                    } ?>
                ]
            }, {
                name: 'Kakao Basah',
                data: [
                    <?php foreach ($data['stok_keluar']['stok_keluar_basah'] as $key => $value) {
                        echo $key == (count($data['stok_keluar']['stok_keluar_basah']) - 1) ? $value : $value . ', ';
                    } ?>
                ]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>

    <script type="text/javascript">
        Highcharts.chart('grafik_data_SMP', {

            title: {
                text: 'Stok Masuk Produk'
            },

            subtitle: {
                text: 'Source: Kampung Coklat'
            },

            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Stok Masuk Produk'
                }
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },

            series: [
                <?php foreach ($data['stok_masuk_produk'] as $key => $value) { ?>
                    {
                        name: <?= "'" . $key . "'" ?>,
                        data: [<?php foreach ($value as $keyX => $valueX) {echo $keyX == (count($value) - 1) ? $valueX : $valueX . ', ';} ?>]
                    },
                <?php } ?>
            ],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>

    <script type="text/javascript">
        Highcharts.chart('grafik_data_SKP', {

            title: {
                text: 'Stok Keluar Produk'
            },

            subtitle: {
                text: 'Source: Kampung Coklat'
            },

            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Stok Keluar Produk'
                }
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },

            series: [
                <?php foreach ($data['stok_keluar_produk'] as $key => $value) { ?>
                    {
                        name: <?= "'" . $key . "'" ?>,
                        data: [<?php foreach ($value as $keyX => $valueX) {echo $keyX == (count($value) - 1) ? $valueX : $valueX . ', ';} ?>]
                    },
                <?php } ?>
            ],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
</body>
</html>