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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Hasil Ranking
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered no-wrap">
										<thead class="bg-info text-white text-center">
											<?php
                        $i=0;
                        foreach($tbl_nilaiakhir as $row)
                        { 
                          $kode[$i] = $row->kode_alternatif;    
                          $arr_nilai[$i] = (explode (',', $row->nilai));
                          $i++;
                        }
                      ?>
                      <?php
                        $j=0;
                        foreach($tbl_bobot as $row)
                        { 
                            $kode_w[$j] = $row->id_w; 
                            $nil_w[$j] = $row->nilai_w;
                            $j++;
                        }
                      ?>
                      <tr>
												<th>Kode Alternatif</th>
                        <th>Bobot Akhir</th>
											</tr>
										</thead>
										<tbody class="text-center">
												<?php
                        $x=0;
                        // $nb = array(); diperlukan jika dilakukan return
                        while($x<COUNT($arr_nilai))
                        {
                          $kod_alt[$x] = 'A'.($x+1).'';
                            $y=0;
                            $nb[$x] = 0;
                            while($y<COUNT($arr_nilai[0]))
                            {
                              $nb[$x] += $arr_nilai[$x][$y]*$nil_w[$y];
                              $y++;
                            }
                            
                          echo '<tr>';
                          echo '<td>'.$kod_alt[$x].'</td>';
                          echo '<td>'.$nb[$x].'</td>';
                          echo '</tr>';
                          $x++;
                        }
                        ?>
											</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_modal.php") ?>
	<?php $this->load->view("admin/_partials/v_js.php") ?>
	<script>
		$(document).ready(function() {
				$('#example').DataTable( {
						"order": [[ 1, "desc" ]]
				} );
		} );
	</script>
</body>

</html>
