<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
</head>
<body>
	<div class="navbar navbar-expand bg-dark navbar-dark">
		<a class="navbar-brand" href="#">UNJANI</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Profil</a>
			</li>
			
			<li>
				<a class="nav-link" href="<?php echo site_url('home/logout');?>">Log Out</a>
			</li>
		</ul>
	</div>
	<br>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			Welcome <?php echo $this->session->userdata('username'); ?>!
			<br>
			
		</div>
	</div>
</body>
</html>
