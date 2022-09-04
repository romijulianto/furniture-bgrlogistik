<style>
	body {
		background: linear-gradient(90deg, rgba(20,95,24,1) 50%, rgba(1,81,88,1) 80%);
	}
</style>
<div class="container mt-5 pt-4">
	<div class="row justify-content-center mt-5">
	<img src="https://www.bgrlogistik.id/bgr/img/logo_bli.png" alt="Logo BGR Logistik" style="width:20%; height:20%;">
	</div>
		<div class="row justify-content-center mt-5">
			<div class="col-lg-4 col-10 text-white rounded p-4 mt-5">
				<h3 class="mb-4 text-center">Login</h3>
				<form action="<?= base_url('auth/login'); ?>" method="post">
					<div class="form-group">
						<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
						<input type="text" id="username" class="form-control rounded-pill" placeholder="Masukkan Username" name="username" required>
					</div>
					<div class="form-group">
						<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
						<input type="password" id="password" class="form-control rounded-pill" placeholder="Masukkan Password" name="password" required>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-success rounded-pill px-4">Login</button>
					</div>
				</form>
				<br><center><p style="color: white;">Orginized by <a href='https://www.linkedin.com/in/romijulianto/' title='github.com/romijulianto' target='_blank'>Romi Julianto</a></p></center>
			</div>
		</div>
</div>
