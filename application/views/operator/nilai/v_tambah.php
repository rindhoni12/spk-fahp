<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<!-- ini isi v_head.php -->
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

		<?php $this->load->view("admin/_partials/v_navbar.php") ?>

		<?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>

		<div class="page-wrapper">

			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Nilai 
						
						<?php
							$i=0;
							foreach($data_param as $row)
							{ 
									$arr_par[$i] = (explode (',', $row->nilai_param));
									$par_kri[$i] = (explode (',', $row->param_kriteria));
									$i++;
							}
							
						?>
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('operator/nilai') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali </a>
								
							</div>
							<div class="card-body">
                <form action="<?php base_url('operator/nilai/tambah') ?>" method="post" enctype="multipart/form-data" >
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="kode_alternatif">Kode Alternatif </label>
												<select class="form-control" name="kode_alternatif">
													<option value="" selected disabled hidden>Pilih Alternatif</option>
													<?php 
													foreach($data_alternatif as $row)
													{ 
														echo '<option value="'.$row->kode_alternatif.'">'.$row->kode_alternatif.' - '.$row->nama_alternatif.'</option>';
													}
													?>
												</select>
												
											</div>
										</div>
									</div>
									<div class="row">
									<?php
										$x=0;
										foreach($data_kode as $row)
										{
											echo '<div class="col-md-4">
																<div class="form-group">
																	<label for="nilai">Nilai Parameter '.$row->kode_kriteria.' </label>
																	<select class="form-control" name="nilai[]">
																		<option value="" selected disabled hidden>Pilih salah satu</option>';
														
														// while($x < COUNT($data_param))
														// {
															$y = 0;
															while($y < COUNT($arr_par[$x]))
															{
																echo '<option value="'.$arr_par[$x][$y].'">'.$par_kri[$x][$y].'</option>';
																$y++;
															}
															
														// }
											echo 					'</select>
																		</div>
																	</div>';
											$x++;
										}
									?>
									</div>									
								</div>
									<div class="form-actions mt-4">
										<div class="text-left">
											<button type="submit" class="btn btn-info">Tambah Data</button>
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
