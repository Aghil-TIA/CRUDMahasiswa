<div id="main">
	<div class="page-heading">
		<h3>Halaman Presiden</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6"><a href="<?= base_url() ?>Presiden/input" class="btn btn-info mb-2">Tambah
					Data Presiden</a></div>
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<div class="col-md-11">
							<table class="table table-stripped">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama lengkap</td>
										<td>Asal</td>
										<td>Partai Pendukung</td>
										<td>Riwayat</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($presiden as $pr):
										?>
										<tr>
											<td>
												<?= $i ?>
											</td>
											<td>
												<?= $pr['nama'] ?>
											</td>
											<td>
												<?= $pr['asal'] ?>
											</td>
											<td>
												<?= $pr['partai'] ?>
											</td>
											<td>
												<?= $pr['riwayat'] ?>
											</td>
											<td>
												<a href="<?= base_url('Presiden/hapus') ?>/<?= $pr['id'] ?>"
													class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Presiden/edit') ?>/<?= $pr['id'] ?>"
													class="btn btn-warning">Edit</a>
												<a href="<?= base_url('Presiden/detail') ?>/<?= $pr['id'] ?>"
													class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<?php
										$i++;
									endforeach;
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
