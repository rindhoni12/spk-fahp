<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<?php $this->load->view("admin/_partials/v_sidebar.php") ?>
		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Profil Pengguna Login
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div class="card">

							<div class="card-header text-white bg-light">
								<a href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">
								<div class="form-body">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="nama_user"><strong>Foto Pengguna</strong></label>
                      <br>
                      <br>
                      <img src="<?php echo base_url('upload/pengguna/'.$this->session->userdata("foto")) ?>" alt="user" class="rounded-circle" height="300" width="300" style="object-fit: cover; object-position: center;">
                    </div>
                  </div>
									<div class="row">
                    <div class="col-md-3">
											<div class="form-group">
                        <br>
                        <label for="nama_user"> <strong>Nama Pengguna</strong> </label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("user_nama"); ?></label>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
                        <br>
                        <label for="role"><strong>Role Pengguna</strong></label>
                        <br>
                        <label for="nama_user2" class="text-capitalize"><?php echo $this->session->userdata("role"); ?></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label class="mt-3" for="username"><strong>Username</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("user_name"); ?></label>
											</div>
                    </div>
                    <div class="col-md-3">
											<div class="form-group">
												<label class="mt-3" for="terdaftar_sejak"><strong>Terdaftar Sejak</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("dibuat_tanggal"); ?></label>
											</div>
                    </div>
                    <div class="col-md-3">
											<div class="form-group">
												<label class="mt-3" for="login_terakhir"><strong>Login Terakhir</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("terakhir_login"); ?></label>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_js.php") ?>

</body>

</html>
