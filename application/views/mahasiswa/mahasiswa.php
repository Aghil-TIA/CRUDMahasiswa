<div id="main">
	<div class="page-heading">
		<h3>Halaman Mahasiswa</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/input" class="btn btn-info mb-2">Tambah Mahasiswa</a>
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
										<td>Nama</td>
										<td>Nim</td>
										<td>Email</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($mahasiswa as $mhs):
										?>
										<tr>
											<td>
												<?= $i ?>
											</td>
											<td>
												<?= $mhs['nama'] ?>
											</td>
											<td>
												<?= $mhs['nim'] ?>
											</td>
											<td>
												<?= $mhs['email'] ?>
											</td>
											<td>
												<a href="<?= base_url() ?>Mahasiswa/hapus/<?= $mhs['id'] ?>"
													class="btn btn-danger">Hapus</a>
												<a href="<?= base_url() ?>Mahasiswa/edit/<?= $mhs['id'] ?>"
													class="btn btn-warning">Edit</a>
												<a href="<?= base_url() ?>Mahasiswa/detail/<?= $mhs['id'] ?>"
													class="btn btn-primary">Detail</a>
											</td>
										</tr>
										<?php $i++; endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
