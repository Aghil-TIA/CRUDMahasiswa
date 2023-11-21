<div id="main">
	<div class="page-heading">
		<h3>Halaman Detail Presiden</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<h2 class="card-subtitle mb-2">
							<?= $presiden['nama'] ?>
						</h2>
						<h6 class="card-subtitle mb-2 text-muted">
							<?= $presiden['nik'] ?>
						</h6>
						<div class="row">
							<div class="col-md-4">Partai Pendukung</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $presiden['partai'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Asal</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $presiden['asal'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Riwayat Pekerjaan</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $presiden['riwayat'] ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">Umur</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6">
								<?= $presiden['umur'] ?>
							</div>
						</div>						
				</div>
				<div class="d-flex justify-content-between">
					<a href="<?= base_url() ?>presiden/index" style="margin-left:2%; margin-bottom:2%;"
						class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
