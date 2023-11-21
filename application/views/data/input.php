<div id="main">
	<div class="page-heading">
		<h3>Halaman Tambah Data Karyawan</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Masukkan Data Karyawan</h4>
		</div>		
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="" class="form form-horizontal" enctype="multipart/form-data">
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
								<label>Tempat Lahir</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= set_value('tempatLahir') ?>" name="tempatLahir" placeholder="Tempat Lahir">
								<?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Tanggal Lahir</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="date" id="email-id" class="form-control" value="<?= set_value('tanggalLahir') ?>" name="tanggalLahir" placeholder="Tanggal Lahir">
								<?= form_error('tanggalLahir', '<small class="text-danger pl-3">', '</small>') ?>
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
								<label>Agama</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="agama" id="" value="<?= set_value('agama') ?>" class="form-control" placeholder="Agama">
									<option value="" selected disabled>Agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
								</select>
								<?= form_error('agama', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>No HP</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= set_value('noHp') ?>" name="noHp" placeholder="No HP">
								<?= form_error('noHp', '<small class="text-danger pl-3">', '</small>') ?>
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
								<label>Alamat</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= set_value('alamat') ?>" class="form-control" name="alamat"
									placeholder="Alamat">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Kota</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= set_value('kota') ?>" class="form-control" name="kota"
									placeholder="Kota">
								<?= form_error('kota', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Negara</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= set_value('negara') ?>" class="form-control" name="negara"
									placeholder="Negara">
								<?= form_error('negara', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Gambar</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="file" id="email-id" class="form-control" name="gambar"
									placeholder="Gambar">								
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Data/index"
										class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" name="tambah" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
