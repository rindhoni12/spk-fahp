<!-- Profil Modal -->
<div id="centermodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
						<div class="modal-header modal-colored-header bg-info">
								<h4 class="modal-title" id="info-header-modalLabel">Profil Pengguna Login</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
									<div class="row">
										<div class="col-md-12 text-center">
												<label for="nama_user"> <strong>Foto Pengguna</strong> </label>
                        <br>
												<img src="<?php echo base_url('upload/pengguna/'.$this->session->userdata("foto")) ?>" alt="user" class="rounded-circle" height="200" width="200" style="object-fit: cover; object-position: center;">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
												<br>
                        <label for="nama_user"> <strong>Nama Pengguna</strong> </label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("user_nama"); ?></label>
										</div>
										<div class="col-md-4">
												<br>
                        <label for="role"><strong>Username</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo $this->session->userdata("user_name"); ?></label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
												<label class="mt-3" for="username"><strong>Role Pengguna</strong></label>
                        <br>
                        <label for="nama_user2" class="text-capitalize"><?php echo $this->session->userdata("role"); ?></label>
										</div>
                    <div class="col-md-4">
												<label class="mt-3" for="terdaftar_sejak"><strong>Terdaftar Sejak</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo longdate_indo($this->session->userdata("dibuat_tanggal")); ?></label>
										</div>
                    <div class="col-md-4">
												<label class="mt-3" for="login_terakhir"><strong>Login Terakhir</strong></label>
                        <br>
                        <label for="nama_user2"><?php echo longdate_indo($this->session->userdata("terakhir_login")); ?></label>
										</div>
									</div>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
								<a class="btn btn-info" href="<?php echo site_url('ubah_profil') ?>">Ubah Profil</a>
						</div>
				</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ENd of Profil Modal -->

<script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('dist/js/app-style-switcher.js') ?>"></script>
<script src="<?php echo base_url('dist/js/feather.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('dist/js/sidebarmenu.js') ?>"></script>
<script src="<?php echo base_url('dist/js/custom.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/c3/d3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/c3/c3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/chartist/dist/chartist.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') ?>"></script>
<script src="<?php echo base_url('dist/js/pages/dashboards/dashboard1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('dist/js/pages/datatable/datatable-basic.init.js') ?>"></script>