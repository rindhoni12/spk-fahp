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
                                <h3 class="card-title">Selamat Datang di Sistem Pendukung Keputusan dengan Metode Fuzzy AHP</h3>
                                <br>
                                <h5>Sistem Pendukung Keputusan (SPK) adalah aplikasi yang membantu pemangku keputusan dalam menemukan keputusan terbaik dari pilihan alternatif yang ada. 
                                Dan pada Sistem Pendukung Keputusan (SPK) ini digunakan untuk menentukan Embung terbaik dari Alternatif Embung yang ada di Semarang menggunakan Metode Fuzzy Analytical Hierarchial Process (FAHP).</h5>
                                <br>
                                <h5>Untuk lebih jelas tentang Sistem Pendukung Keputusan ini, berikut terdapat beberapa informasi yang bisa untuk dibaca.</h5>
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
                        <h4>Fuzzy Analytical Hierarchy Process (FAHP)</h4>
                        <p style="width: 90%;">
                        Metode Fuzzy Analytical Hierarchy Process (FAHP) pertama kali diusulkan oleh seorang peneliti bernama
                        Chang
                        dan merupakan perpanjangan langsung dari metode Analytical Hierarchy Process (AHP) yang diciptakan oleh
                        Saaty
                        yang terdiri dari
                        unsur-unsur matriks yang diwakili oleh bilangan fuzzy.
                        </p>
                        <p style="width: 90%;">
                        Metode FAHP menggunakan rasio fuzzy yang disebut Triangular Fuzzy Number (TFN) dan digunakan dalam proses
                        fuzzifikasi. TFN terdiri dari tiga fungsi keanggotaan, yaitu nilai terendah (l), nilai tengah (m), dan
                        nilai tertinggi (u).
                        </p>
                        <p>Langkah penyelesaian Fuzzy AHP adalah sebagai berikut :</p>
                        <p> a. Membuat struktur hierarki masalah yang
                            akandiselesaikan dan menentukan perbandingan
                            matriks berpasangan antar kriteria dengan skala
                            TFN (Tringular Fuzzy Number).
                        </p>
                        <p> b. Menentukan nilai sistesis fuzzy (Si) prioritas
                            dengan rumus:
                            = x
                            1
                            Σ Σ M
                        </p>
                        <p> c. Menentukan nilai vektor (V) dan nilai Ordinat
                            Defuzzifikasi (d’).
                            Untuk k = 1,2,...n;k ≠ i, maka diperoleh nilai
                            bobot vektor:
                            W’ = (d’(A1), d’(A2),...,d’(An))T
                        </p>
                        <p>d. Normalisasi nilai bobot vektor fuzzy (W)
                            Nilai bobot vektor yang ternormalisasi adalah
                            seperti rumus berikut:
                            W = (d(A1), d(A2), ..., d(An))T
                            Dimana W adalah bilangan non fuzzy.
                            Perumusan normalisasinya adalah:
                            ( ) =
                            ′
                            Σ ′( )
                        </p>
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
                                <source src="movie.mp4" type="video/mp4">
                            </video>
                        </p>

                        <p> 2. Mengisi Alternatif</p>
                        <p> Setelah pengguna mengisi data kriteria, maka dilanjutkan dengan mengisi data alternatif. Dalam pengisian kode alterntaif diharapkan diurutkan berdasarkan kode alternatif sebelumnya.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="movie.mp4" type="video/mp4">
                            </video>
                        </p>

                        <p> 3. Mengisi Nilai</p>
                        <p> Setelah pengguna mengisi data kriteria dan data alternatif, baru pengguna dapat mengisi data nilai. Pengguna akan disuguhkan data kriteria dan data alternatif yang sudah diisikan pengguna sebelumnya. Dan isikan data nilai dengan data yang disuguhkan di dropdown.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="movie.mp4" type="video/mp4">
                            </video>
                        </p>
                        
                        <p> 4. Melihat Perhitungan Nilai</p>
                        <p> Setelah pengguna mengisikan data kriteria, data alternatif, dan data nilai, pengguna dapat melihat Perhitungan setiap langkah untuk mencari Bobot setiap kriteria di bagian Menu Perhitungan.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="movie.mp4" type="video/mp4">
                            </video>
                        </p>
                        
                        <p> 5. Melihat Hasil Perankingan</p>
                        <p> Setelah pengguna mengisikan data kriteria, data alternatif, dan data nilai, pengguna dapat melihat ranking alternatif terbaik di bagian Menu Perankingan.</p>
                        <p> Untuk lebih jelasnya, lihat video berikut ini : <br>
                            <video width="320" height="180" controls preload="none">
                                <source src="movie.mp4" type="video/mp4">
                            </video>
                        </p>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/_partials/v_footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/v_js.php") ?>
</body>
</html>