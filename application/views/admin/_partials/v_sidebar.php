<aside class="left-sidebar" data-sidebarbg="skin6">
<div class="scroll-sidebar" data-sidebarbg="skin6">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="sidebar-item" <?php echo $this->uri->segment(2) == 'beranda' ? 'active': '' ?>> 
                <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin') ?>" aria-expanded="false">
                    <i data-feather="home" class="feather-icon"></i><span
                        class="hide-menu">Beranda</span></a></li>
            
            <!-- garis pemisah -->
            <li class="list-divider"></li> 
            <li class="nav-small-cap"><span class="hide-menu">Data</span></li>
            <li class="sidebar-item" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i data-feather="list" class="feather-icon"></i>
                    <span class="hide-menu">Data Embung </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/kriteria') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Kriteria
                            </span>
                        </a>    
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/alternatif') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Alternatif
                            </span>
                        </a>    
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/nilai') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-divider"></li> 
            <li class="nav-small-cap"><span class="hide-menu">Perankingan </span></li>
            <li class="sidebar-item" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
                <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/perankingan/hasil_ranking') ?>" aria-expanded="false">
                    <i data-feather="trending-up" class="feather-icon"></i>
                    <span class="hide-menu">Hasil Ranking </span>
                </a>
            </li>
            <!-- <li class="sidebar-item" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i data-feather="grid" class="feather-icon"></i>
                    <span class="hide-menu">Ranking </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perankingan/nilai_akhir') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai Akhir
                            </span>
                        </a>    
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/alternatif') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Bobot Akhir
                            </span>
                        </a>    
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/nilai') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Hasil Ranking
                            </span>
                        </a>
                    </li>
                </ul>
            </li> -->
            
            <!-- garis pemisah -->
            <!-- <li class="list-divider"></li> 
            <li class="nav-small-cap"><span class="hide-menu">Perhitungan</span></li>
            <li class="sidebar-item" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i data-feather="grid" class="feather-icon"></i>
                    <span class="hide-menu">Pencarian Bobot </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perhitungan/nilai_si') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai Si
                            </span>
                        </a>
                            
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perhitungan/nilai_v') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai V
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perhitungan/nilai_d') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai d'
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perhitungan/nilai_bobot') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai W'
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo site_url('admin/perhitungan/nilai_ternormalisasi') ?>" class="sidebar-link">
                            <span class="hide-menu">
                                Nilai W
                            </span>
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- garis pemisah -->
            <li class="list-divider"></li> 
            <li class="nav-small-cap"><span class="hide-menu">Pengaturan</span></li>
            <li class="sidebar-item" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
                <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/pengguna') ?>" aria-expanded="false">
                    <i data-feather="users" class="feather-icon"></i>
                    <span class="hide-menu">Pengguna </span>
                </a>
            </li>
            <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/peta') ?>" aria-expanded="false">
                    <i data-feather="map" class="feather-icon"></i>
                    <span class="hide-menu">Peta </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</aside>