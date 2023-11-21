<div id="main">
	<div class="page-heading">
		<h3>Halaman Detail Mahasiswa</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<h2 class="card-subtitle mb-2">
							<?= $prodi['nama'] ?>
						</h2>						
						<div class="row">
							<div class="col-md-4">Nama Prodi</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $prodi['namaProdi'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Jurusan</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $prodi['jurusan'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Ruangan</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								R.<?= $prodi['ruangan'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Akreditasi</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $prodi['akreditasi'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Tahun Berdiri</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $prodi['tahunBerdiri'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Lulusan</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $prodi['outputLulusan'] ?>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-between">
					<a href="<?= base_url() ?>Prodi/prodi" style="margin-left:2%; margin-bottom:2%;"
						class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
