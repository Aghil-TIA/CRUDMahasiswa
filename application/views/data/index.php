<div id="main">
	<div class="page-heading">
		<h3>Halaman Data Karyawan</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<a href="<?= base_url() ?>Data/input" class="btn btn-info mb-2">Tambah Data Karyawan</a>
				<?= $this->session->flashdata('message') ?>
			</div>
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<div class="col-md-11">
							<table class="table table-stripped">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama Lengkap</td>
										<td>Jenis Kelamin</td>
										<td>Negara</td>
										<td>Kota</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($data as $dt) :
									?>
										<tr>
											<td>
												<?= $i ?>
											</td>
											<td>
												<?= $dt['nama'] ?>
											</td>
											<td>
												<?= $dt['jenisKelamin'] ?>
											</td>
											<td>
												<?= $dt['negara'] ?>
											</td>
											<td>
												<?= $dt['kota'] ?>
											</td>
											<td>
												<a href="<?= base_url() ?>Data/hapus/<?= $dt['id'] ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url() ?>Data/ubah/<?= $dt['id'] ?>" class="btn btn-warning">Edit</a>
												<a href="<?= base_url() ?>Data/detail/<?= $dt['id'] ?>" class="btn btn-primary">Detail</a>
											</td>
										</tr>
									<?php $i++;
									endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>