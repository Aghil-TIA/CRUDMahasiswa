<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan | <?= $judul; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/main/app.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/main/app-dark.css">
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/logo/favicon.svg" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/logo/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/shared/iconly.css">

</head>

<body>
	<div id="app">
		<div id="sidebar" class="active">
			<div class="sidebar-wrapper active">
				<div class="sidebar-header position-relative">
					<h3 class="card-subtitle mb-2 text-center">BPF TI 2023</h3>
					<div class="d-flex justify-content-between align-items-center">
						<div class="logo">
							<img src="<?= base_url('assets/images/logo/') . $user['gambar']; ?>" style="width:150px; height:auto; margin-left:40px; margin-bottom:20px;" alt="">
							<h4 class="card-subtitle mb-2 text-center justify-content-center"><?= $user['nama']; ?></h4>
							<h6 class="card-subtitle mb-2 text-muted text-center">2255301182</h6>
						</div>
						<div class="sidebar-toggler x">
							<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
						</div>
					</div>
				</div>
				<div class="sidebar-menu">
					<ul class="menu">
						<li class="sidebar-title">Menu</li>

						<li class="sidebar-item  ">
							<a href="<?= base_url() ?>Mahasiswa/index" class='sidebar-link'>
								<i class="bi bi-grid-1x2-fill"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<?php
						if ($user['role'] == 'Admin') {
						?>
							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Mahasiswa/mahasiswa" class='sidebar-link'>
									<i class="bi bi-people-fill"></i>
									<span>Mahasiswa</span>
								</a>
							</li>

							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Prodi/prodi" class='sidebar-link'>
									<i class="bi bi-person-fill"></i>
									<span>Prodi</span>
								</a>
							</li>

							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Data/index" class='sidebar-link'>
									<i class="bi bi-person-badge-fill"></i>
									<span>Data Karyawan</span>
								</a>
							</li>

							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Login/logout" class='sidebar-link'>
									<i class="bi bi-door-open-fill"></i>
									<span>Logout</span>
								</a>
							</li>

						<?php } ?>

						<?php
						if ($user['role'] == 'User') {
						?>
							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Profile/index" class='sidebar-link'>
									<i class="bi bi-person-square"></i>
									<span>Profile</span>
								</a>
							</li>

							<li class="sidebar-item  ">
								<a href="<?= base_url() ?>Login/logout" class='sidebar-link'>
									<i class="bi bi-door-open-fill"></i>
									<span>Logout</span>
								</a>
							</li>

						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>