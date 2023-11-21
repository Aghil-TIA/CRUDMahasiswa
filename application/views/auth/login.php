<body>
	<section class="ftco-section">
		<div class="container">
			<?= $this->session->flashdata('message') ?>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img">
							<img src="<?= base_url('assets/') ?>images/bg-1.jpg" width="550px" height="230px" alt="">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="<?= base_url() ?>Login/cek_login" method="POST" class="signin-form">
								<div class="form-group mt-3">
									<input type="email" value="<?= set_value('email') ?>" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="username">Email</label>
																		<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<input id="password-field" value="<?= set_value('nama') ?>" name="password" type="password" class="form-control" required>									
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
							</form>
							<p class="text-center">Not a member? <a href="<?= base_url()?>Login/regis">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
