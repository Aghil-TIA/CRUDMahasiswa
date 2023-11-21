<script src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
<script src="<?= base_url('assets/') ?>js/app.js"></script>
<!-- Need: Apexcharts -->
<script src="<?= base_url('assets/') ?>extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets/') ?>js/pages/dashboard.js"></script>

<footer class="sticky-footer">
	<div id="main">
		<div class="footer clearfix mb-0 text-muted">
			<div class="float-start">
				<p>2023 &copy; Mahasiswa</p>
			</div>
		</div>
	</div>
<script>
	$('.custom-file-input').on('change', function(){
		let fileName = $(this).val().split('\\').pop();

		$(this).next('.custom-file-label').addClass("selected").html(filename);
	})
</script>
</footer>
</body>

</html>
