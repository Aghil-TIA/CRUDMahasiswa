<div id="main">
	<div class="page-heading">
		<h3>Halaman Prodi</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6"><a href="<?= base_url() ?>Prodi/input" class="btn btn-info mb-2">Tambah
					Prodi</a></div>
			<?= $this->session->flashdata('message') ?>
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<div class="col-md-11">
							<table class="table table-stripped">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama Prodi</td>
										<td>Ruangan</td>
										<td>Jurusan</td>
										<td>Akreditasi</td>
										<td>Nama Kaprodi</td>
										<td>Tahun Berdiri</td>
										<td>Output Lulusan</td>
										<td>Gambar</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($prodi as $pr) :
									?>
										<tr>
											<td><?= $i ?></td>
											<td><?= $pr['namaProdi'] ?></td>
											<td><?= $pr['ruangan'] ?></td>
											<td><?= $pr['jurusan'] ?></td>
											<td><?= $pr['akreditasi'] ?></td>
											<td><?= $pr['nama'] ?></td>
											<td><?= $pr['tahunBerdiri'] ?></td>
											<td><?= $pr['outputLulusan'] ?></td>
											<td><img src="<?= base_url('assets/images/img/') . $pr['gambar'] ?>" style="width:100px;" class="img-thumbnail" alt=""></td>
											<td>
												<a href="<?= base_url('Prodi/hapus') ?>/<?= $pr['id'] ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Prodi/edit') ?>/<?= $pr['id'] ?>" class="btn btn-warning">Edit</a>
												<a href="<?= base_url('Prodi/detail') ?>/<?= $pr['id'] ?>" class="btn btn-primary">Detail</a>
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