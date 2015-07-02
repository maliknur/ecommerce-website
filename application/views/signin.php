<!DOCTYPE html>
<html lang="en">
<head>
<?php include("partials/header.php"); ?>
<script type="text/javascript" src="/assets/javascript.js"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/assets/style.css">

	<title></title>

</head>
<body>
	<?php include("partials/navbar.php"); ?>

	<div class="container">
		<div class="row registered">
			<!-- Print login error message -->
			<?php if ($this->session->flashdata("login_error")) { ?>
			<div class="col s12 m4 offset-m4 l4 offset-l4">
				<div class="card">
					<a class="btn waves-effect waves-light deep-orange darken-1 tooltipped block" data-position="bottom" data-delay="50" data-tooltip="Invalid email or password!"><i class="material-icons">error_outline</i></a>
				</div>
			</div>
			<?php } ?>
			<!-- ========== END =========== -->

			<!-- Print registration success message -->
			<?php if ($this->session->flashdata("registered")) { ?>
			<div class="col s12 m6 offset-m3 l6 offset-l3">
				<div class="card lightblue hoverable">
					<div class="card-content">
						<p class="center-align"><?= $this->session->flashdata("registered") ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- ============== END ================ -->
		</div>
		<div class="row">
			<div class="col s12 m6 offset-m3 l6 offset-l3">
				<div class="card lightblue hoverable">
					<div class="card-content">
						<form action="/main/check_signin" method="post" class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input name="email" type="email" class="validate">
									<label for="email">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input name="password" type="password" class="validate">
									<label for="password">Password</label>
								</div>
							</div>

							<div class="center-align section">
								<button class="waves-effect waves-light btn" type="submit">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 offset-m3 l6 offset-l3">
				<p class="center-align">New to E-Commerce? <a href="register">Register!</a></p>
			</div>
		</div>
	</div>

</body>