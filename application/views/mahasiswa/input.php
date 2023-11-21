<div id="main">
	<div class="page-heading">
		<h3>Halaman Tambah Mahasiswa</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Masukkan Data</h4>
		</div>		
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="" class="form form-horizontal">
					<div class="form-body">
						<div class="row">
							<div class="col-md-4">
								<label>Nama</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="first-name" value="<?= set_value('nama') ?>" class="form-control" name="nama" placeholder="Nama">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>')?>
							</div>
							<div class="col-md-4">
								<label>NIM</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= set_value('nim') ?>" name="nim" placeholder="NIM">
								<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Jenis Kelamin</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="jenisKelamin" id="" value="<?= set_value('jenisKelamin') ?>" class="form-control" placeholder="Jenis Kelamin">
									<option value="" selected disabled>Jenis Kelamin</option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
								<?= form_error('jenisKelamin', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Email</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="email" id="email" value="<?= set_value('email') ?>" class="form-control" name="email"
									placeholder="Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Pilih Prodi</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="prodi" id="" class="form-control" value="<?= set_value('prodi') ?>">
									<option value="" selected disabled>Prodi</option>
									<?php foreach($prodi as $jur): ?>
										<option value="<?= $jur['id'] ?>"><?= $jur['namaProdi'] ?></option>
									<?php endforeach; ?>
								</select>
								<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Asal Sekolah</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= set_value('asalSekolah') ?>" class="form-control" name="asalSekolah"
									placeholder="Asal Sekolah">
								<?= form_error('asalSekolah', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>No HP</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= set_value('noHp') ?>" name="noHp" placeholder="No HP">
								<?= form_error('noHp', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Alamat</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= set_value('alamat') ?>" class="form-control" name="alamat"
									placeholder="Alamat">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Mahasiswa/mahasiswa"
										class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
