 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Register User</title>
	<style>
		.login-page {
			display: flex;
			align-items: center;
			justify-content:  center;
			height: 100vh;
		}
	</style>
</head>
<body class="login-page">
	<div class="card">
		<div class="card-header text-center">Register</div>
		<div class="card-body">
			<form action="<?php echo site_url('home/prosesdaftar') ?>" method="post" enctype="multipart/form-data">
				<label class="label">Username</label>
				<input type="text" class="form-control" name="username" required>
				<label class="label">Password</label>
				<input type="password" class="form-control" name="password" required>
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" required>
				
				<br>
				<input type="submit" class="btn btn-primary float-right" value="Register">
			</form>
		</div>
		<div class="card-footer text-center">
			<br><a href="<?php site_url('home/') ?>">Sign In</a>
		</div>
	</div>
</body>
</html>
