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
							<input type="text" value="<?= $data['id']?>" name="id" hidden>
							<div class="col-md-4">
								<label>Nama</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="first-name" value="<?= $data['nama'] ?>" class="form-control" name="nama" placeholder="Nama">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>')?>
							</div>
							<div class="col-md-4">
								<label>Tempat Lahir</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= $data['tempatLahir'] ?>" name="tempatLahir" placeholder="Tempat Lahir">
								<?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Tanggal Lahir</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="date" id="email-id" class="form-control" value="<?= $data['tanggalLahir'] ?>" name="tanggalLahir" placeholder="Tanggal Lahir">
								<?= form_error('tanggalLahir', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Jenis Kelamin</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="jenisKelamin" value="<?= $data['jenisKelamin'] ?>" class="form-control" id="">
									<option value="Laki-laki" <?php if ($data['jenisKelamin'] == "Laki-Laki") {echo "selected";}?>>Laki-Laki</option>
									<option value="Perempuan" <?php if ($data['jenisKelamin'] == "Perempuan") {echo "selected";}?>>Perempuan</option>
								</select>
								<?= form_error('jenisKelamin', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Agama</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="agama" id="" value="<?= $data['agama'] ?>" class="form-control" >							
									<option value="Islam" <?php if($data['agama'] == "Islam"){ echo"selected"; }?>>Islam</option>
									<option value="Kristen" <?php if($data['agama'] == "Kristen"){ echo"selected"; }?>>Kristen</option>
                                    <option value="Hindu" <?php if($data['agama'] == "Hindu"){ echo"selected"; }?>>Hindu</option>
                                    <option value="Budha" <?php if($data['agama'] == "Budha"){ echo"selected"; }?>>Budha</option>
                                    <option value="Konghuchu" <?php if($data['agama'] == "Konghuchu"){ echo"selected"; }?>>Konghuchu</option>
								</select>
								<?= form_error('agama', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>No HP</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" value="<?= $data['noHp'] ?>" name="noHp" placeholder="No HP">
								<?= form_error('noHp', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Email</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="email" id="email" value="<?= $data['email'] ?>" class="form-control" name="email" placeholder="Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Alamat</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $data['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Kota</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $data['kota'] ?>" class="form-control" name="kota" placeholder="Kota">
								<?= form_error('kota', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Negara</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $data['negara'] ?>" class="form-control" name="negara"
									placeholder="Negara">
								<?= form_error('negara', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
                            <div class="col-md-4">
								<label>Gambar</label>
							</div>
							<div class="col-md-8 form-group">
							<img src="<?= base_url('assets/images/foto/'). $data['gambar'] ?>" style="width:200px;" class="img-thumbnail" alt="">
								<input type="file" id="email-id" value="<?= $data['gambar'] ?>" class="form-control" name="gambar" placeholder="Gambar">								
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Data/index" class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" name="tambah" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
