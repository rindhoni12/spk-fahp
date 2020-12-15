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
    <?php 
      if ($this->session->userdata('role') == 'operator')
      {
        $this->load->view("admin/_partials/v_sidebaroperator.php");
      }
      else
      {
        $this->load->view("admin/_partials/v_sidebar.php");
      }  
    ?>
		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ubah Profil Pengguna Login
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
        <?php if ($this->session->flashdata('success')): ?>
          <div class="col-8 alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
				<div class="row">
					<div class="col-12">
						<div class="card">

							<div class="card-header text-white bg-light">
								<a href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">
								<form action="<?php base_url('admin/pengguna/ubah_profil') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $this->session->userdata("user_id"); ?>">
                  <input type="hidden" name="tanggal_dibuat" value="<?php echo $this->session->userdata("dibuat_tanggal"); ?>">
                  <input type="hidden" name="login_terakhir" value="<?php echo $this->session->userdata("terakhir_login"); ?>">
                  <input type="hidden" name="role" value="<?php echo $this->session->userdata("role"); ?>">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <label for="nama_user"><strong>Foto Pengguna</strong></label>
                        <br>
                        <img src="<?php echo base_url('upload/pengguna/'.$this->session->userdata("foto")) ?>" alt="user" class="rounded-circle" style="object-fit: cover; object-position: center; max-width: 250px; height: 250px;">
                        <br>
                        <br>
                        <label for="nama_user" class="text-capitalize"><strong>Role : </strong><?php echo $this->session->userdata("role"); ?></label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mt-3" for="nama_user"><strong>Nama Pengguna</strong></label>
                          <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"	type="text" name="nama_user" placeholder="Masukkan nama pengguna" autofocus autocomplete="off" value="<?php echo $this->session->userdata("user_nama"); ?>">
                          <div class="invalid-feedback"><?php echo form_error('nama_user') ?></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mt-3" for="username"><strong>Username</strong></label>
                          <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"	type="text" name="username" placeholder="Masukkan username" autocomplete="off" value="<?php echo $this->session->userdata("user_name"); ?>" readonly>
                          <div class="invalid-feedback"><?php echo form_error('username') ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mt-3" for="password"><strong>Password (Optional)</strong></label>
                          <input class="form-control" type="password" name="password" placeholder="Masukkan password">
                          <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                          <input class="form-control" type="text" name="password_lama" value="<?php echo $this->session->userdata("user_pass"); ?>" hidden>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mt-3" for="foto"><strong>Foto Pengguna (Optional)</strong></label>
                          <input class="form-control-file" type="file" name="foto" accept=".gif, .jpg, .jpeg, .png">
                          <small class="form-text text-muted">Tidak perlu upload foto jika tidak ingin mengubah foto</small>
                          <input type="hidden" name="foto_lama" value="<?php echo $this->session->userdata("foto"); ?>">
                        </div>
                      </div>
                    </div>
                  </div>
									<div class="form-actions mt-4">
										<div class="text-left">
											<button type="submit" class="btn btn-info">Ubah Data</button>
										</div>
									</div>
								</form>
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
