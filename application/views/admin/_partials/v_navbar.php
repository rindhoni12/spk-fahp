<header class="topbar" data-navbarbg="skin6">
<nav class="navbar top-navbar navbar-expand-md">
    <div class="navbar-header" data-logobg="skin6">
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
            <i class="ti-menu ti-close"></i></a>
        <div class="navbar-brand">
            <a href="<?php echo site_url('admin') ?>">
                <b class="logo-icon">
                    <img src="<?php echo base_url('assets/images/web-icon.png') ?>" alt="homepage" class="dark-logo" />
                    <img src="<?php echo base_url('assets/images/logo-icon.png') ?>" alt="homepage" class="light-logo" />
                </b>
                <span class="logo-text">
                    <img src="<?php echo base_url('assets/images/spk-fahp-logo.png') ?>" alt="homepage" class="dark-logo" />
                    <img src="<?php echo base_url('assets/images/logo-light-text.png') ?>" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="ti-more"></i></a>
    </div>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img src="<?php echo base_url('upload/pengguna/'.$this->session->userdata("foto")) ?>" alt="user" class="rounded-circle" height="40" width="40" style="object-fit: cover; object-position: center;">
                    
                    <span class="ml-2 d-none d-lg-inline-block text-dark text-capitalize"><?php echo $this->session->userdata("user_nama"); ?></span> 
                    <i data-feather="chevron-down" class="svg-icon"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                
                    <label style="margin-left: 18px; margin-top:15px; margin-right:10px;">
                        <strong>Username : </strong>
                        <?php echo $this->session->userdata("user_name"); ?>
                    </label>
                    <br>
                    <label style="margin-left: 18px; margin-right:10px;" class="text-capitalize">
                        <strong>Role : </strong>
                        <?php echo $this->session->userdata("role"); ?>
                    </label>
                    <br>
                    <label style="margin-left: 18px; margin-right:10px;">
                        <strong>Terakhir Login : </strong>
                        <?php echo longdate_indo($this->session->userdata("terakhir_login")); ?>
                    </label>

                    <div class="dropdown-divider"></div>
                    
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#centermodal">
                        <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                        Profil Saya
                    </a>
                    <!-- <a class="dropdown-item" href="<?php echo site_url('profil') ?>">
                        <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                        Profil Saya
                    </a> -->
                    <a class="dropdown-item" href="<?php echo site_url('ubah_profil') ?>">
                        <i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                        Ubah Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="pl-4 p-3">
                        <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-sm btn-info float-right">Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
</header>