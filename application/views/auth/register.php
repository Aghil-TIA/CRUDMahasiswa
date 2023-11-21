<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img">
							<img src="<?= base_url('assets/') ?>images/bg-1.jpg" width="550px" height="230px" alt="">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign Up</h3>
								</div>
							</div>
							<form action="<?= base_url() ?>Login/regis" method="POST" class="signin-form">
								<div class="form-group mt-3">
									<input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" required>
									<?= form_error('nama', '<small class="text-danger pl-3">','</small>') ?>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
								<div class="form-group mt-3">
									<input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" required>
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
									<label class="form-control-placeholder" for="username">Email</label>
								</div>
								<div class="form-group">
									<input id="password-field" name="password" value="<?= set_value('password') ?>" type="password" class="form-control" required>
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field"
										class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input id="password-field" name="password1" value="<?= set_value('password1') ?>" type="password" class="form-control" required>
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
									<label class="form-control-placeholder" for="password1">Confirm Password</label>
									<span toggle="#password-field"
										class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
										Up</button>
								</div>
							</form>
							<p class="text-center">have an account? <a href="<?= base_url() ?>Login">Sign In</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
