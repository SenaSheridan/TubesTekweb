<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<style>
		.login-page {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
	</style>
</head>
<body class="login-page">
	<div class="card" style="width: 300px">
		<div class="card-reader text-center">Login</div>
		<div class="card-body">
			<form action="<?php echo site_url('home/proseslogin');?>"method="post">
				<label class="label">Username</label>
				<input type="text" class="form-control" name="username" required>
				<label class="label">Password</label>
				<input type="password" class="form-control" name="password" required>
				<br>
				
		</div>
		<div class="card-footer text-center">
		
		</div>
	</div>
</body>
</html>
