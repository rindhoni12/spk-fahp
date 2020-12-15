<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
    <?php $this->load->view("admin/_partials/v_preloader.php") ?>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php $this->load->view("admin/_partials/v_navbar.php") ?>
        <?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang <?php echo $this->session->userdata("user_nama"); ?>!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda Operator</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php if(isset($hasil_kriteria)) {echo $hasil_kriteria;}?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Kriteria</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="list"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller"></sup><?php if(isset($hasil_alternatif)) {echo $hasil_alternatif;}?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Alternatif
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="list"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-white bg-light">
                                <a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Tentang </a>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Selamat Datang di Sistem Pendukung Keputusan dengan Metode FAHP</h3>
                                <br>
                                <h5>Sistem Pendukung Keputusan (SPK) adalah aplikasi yang membantu pemangku keputusan dalam menemukan keputusan terbaik dari pilihan alternatif yang ada. 
                                Pada Sistem Pendukung Keputusan (SPK) ini digunakan untuk menentukan Embung terbaik dari Alternatif Embung yang ada di Kabupaten Semarang menggunakan Metode Fuzzy Analytic Hierarchy Process (FAHP).</h5>
                                <br>
                                <h5>Untuk lebih jelas tentang Sistem Pendukung Keputusan ini, berikut terdapat beberapa informasi yang dapat dibaca.</h5>
                                <br>
                                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseMetode" aria-expanded="false" aria-controls="collapseMetode">
                                    <i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i>	Metode
                                </button>
                                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseAlur" aria-expanded="false" aria-controls="collapseAlur">
                                    <i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i>	Alur Pengisian Program
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseMetode">
                    <div class="card-header text-white bg-light">
                        <a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Metode</a>
                    </div>
                    <div class="card card-body">
                        <h4>Fuzzy Analytic Hierarchy Process (FAHP)</h4>
                        <p style="width: 90%;">
                        Metode Fuzzy Analytic Hierarchy Process (FAHP) pertama kali diusulkan oleh seorang peneliti bernama
                        Chang
                        dan merupakan perpanjangan langsung dari metode Analytic Hierarchy Process (AHP) yang diciptakan oleh
                        Saaty
                        yang terdiri dari
                        unsur-unsur matriks yang diwakili oleh bilangan fuzzy.
                        </p>
                        <p style="width: 90%;">
                        Metode FAHP menggunakan rasio fuzzy yang disebut Triangular Fuzzy Number (TFN) dan digunakan dalam proses
                        fuzzifikasi. TFN terdiri dari tiga fungsi keanggotaan, yaitu nilai lower (l), nilai middle (m), dan nilai upper (u).
                        </p>
                        <p>Langkah penyelesaian Fuzzy AHP adalah sebagai berikut :</p>
                        <p> a. Membuat struktur hierarki masalah yang
                            akan diselesaikan dan menentukan perbandingan
                            matriks berpasangan antar kriteria dengan skala
                            TFN (Tringular Fuzzy Number).
                        </p>
                        <p> b. Menentukan Nilai Fuzzy Synthetic Extent (Si)</p>
                        <p> c. Menghitung Nilai Vektor Derajat Kemungkinan (V)</p>
                        <p> d. Identifikasi Nilai Ordinat (d')</p>
                        <p> e. Transformasi Nilai Ordinat menjadi Vektor Bobot (W’)</p>
                        <p> f. Menormalisasi Nilai Vektor Bobot (W’) menjadi Vektor Bobot Ternormalisasi (W)</p>
                        <p>
                        Referensi : <br>
                        Faisol, Ahmad, M. Aziz Muslim & Hadi Suyono, 2014, "Komparasi Fuzzy AHP dengan AHP pada Sistem Pendukung
                        Keputusan Investasi Properti", Jurnal EECCIS Vol. 8, No. 2.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="collapseAlur">
                    <div class="card-header text-white bg-light">
                        <a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Alur Pengisian Program</a>
                    </div>
                    <div class="card card-body">
                        <p>Dalam pengisian program supaya tidak menimbulkan kesalahan, maka pengguna diharapkan mengikuti panduan berikut:</p>
                        
                        <p> 1. Mengisi Kriteria </p>
                        <p> Pengguna diharuskan mengisikan data kriteria terlebih dahulu, dalam pengisian kode kriteria diharapkan diurutkan berdasarkan kode kriteria sebelumnya. Dan jika paramter yang dimiliki kriteria lebih dari satu silahkan tekan tombol Tambah Form untuk menambahkan form. </p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="<?php echo base_url('assets/videos/kriteria.mp4') ?>" type="video/mp4">
                            </video>
                        </p>

                        <p> 2. Mengisi Alternatif</p>
                        <p> Setelah pengguna mengisi data kriteria, maka dilanjutkan dengan mengisi data alternatif. Dalam pengisian kode alterntaif diharapkan diurutkan berdasarkan kode alternatif sebelumnya.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="<?php echo base_url('assets/videos/alternatif.mp4') ?>" type="video/mp4">
                            </video>
                        </p>

                        <p> 3. Mengisi Nilai</p>
                        <p> Setelah pengguna mengisi data kriteria dan data alternatif, baru pengguna dapat mengisi data nilai. Pengguna akan disuguhkan data kriteria dan data alternatif yang sudah diisikan pengguna sebelumnya. Dan isikan data nilai dengan data yang disuguhkan di dropdown.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="<?php echo base_url('assets/videos/nilai.mp4') ?>" type="video/mp4">
                            </video>
                        </p>
                        
                        <p> 4. Melihat Perhitungan Nilai</p>
                        <p> Setelah pengguna mengisikan data kriteria, data alternatif, dan data nilai, pengguna dapat melihat Perhitungan setiap langkah untuk mencari Bobot setiap kriteria di bagian Menu Perhitungan.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="<?php echo base_url('assets/videos/perhitungan.mp4') ?>" type="video/mp4">
                            </video>
                        </p>
                        
                        <p> 5. Melihat Hasil Perankingan</p>
                        <p> Setelah pengguna mengisikan data kriteria, data alternatif, dan data nilai, pengguna dapat melihat ranking alternatif terbaik di bagian Menu Perankingan.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="<?php echo base_url('assets/videos/perankingan.mp4') ?>" type="video/mp4">
                            </video>
                        </p>

                        <p> Catatan : </p>
                        <p> Dalam penulisan kode kriteria, alternatif, maupun nilai, dimohon menuliskan secara urut tidak melompati suatu nilai. Sebagai contoh :</p>
                        <p>Penulisan salah : K1, K2, K4, K5 (Karena melompati kode K3)</p>
                        <p>Penulisan benar : K1, K2, K3, K4, K5 (Karena penulisan kode urut tanpa ada yang terlompati)</p>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/_partials/v_footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/v_js.php") ?>
</body>
</html>