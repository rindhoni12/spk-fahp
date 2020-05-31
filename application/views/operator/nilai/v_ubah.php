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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ubah Data Nilai
						</h4>
						<?php
							$i=0;
							foreach($data_param as $row)
							{ 
								$arr_par[$i] = (explode (',', $row->nilai_param));
								$par_kri[$i] = (explode (',', $row->param_kriteria));
								$i++;
							}
						?>
						<?php
							$j=0;
							foreach($data_nilai as $row)
							{ 
								$arr_nilai[$j] = (explode (',', $row->nilai));
								$j++;
							}
						?>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">

							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('operator/nilai') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">
								<form action="<?php base_url('operator/nilai/ubah') ?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $nilai->id_nilai?>" />
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="kode_alternatif">Kode Alternatif </label>
												<select class="form-control" name="kode_alternatif">
													<?php 
													foreach($data_alternatif as $row)
													{ 
														$selectedgak = $nilai->kode_alternatif == $row->kode_alternatif ? 'selected' : '';
														echo '<option value="'.$row->kode_alternatif.'"'.$selectedgak.'>'.$row->kode_alternatif.' - '.$row->nama_alternatif.'</option>';
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<?php
										$x=0;
										$kz = ((substr($nilai->kode_alternatif, 1, 3)) - 1);

										foreach($data_kode as $row)
										{
											echo '<div class="col-md-4">
																<div class="form-group">
																	<label for="nilai">Nilai Parameter '.$row->kode_kriteria.' </label>
																	<select class="form-control" name="nilai[]">';
														
														// while($x < COUNT($data_param))
														// {
															$y = 0;
															while($y < COUNT($arr_par[$x]))
															{
																$selectedgak2 = $arr_nilai[$kz][$x] == $arr_par[$x][$y] ? 'selected' : '';
																echo '<option value="'.$arr_par[$x][$y].'"'.$selectedgak2.'>'.$par_kri[$x][$y].'</option>';
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
