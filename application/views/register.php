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

	<div class="container topspace_register">

		<div class="row">
			<div class="col s12 m6 offset-m3 l6 offset-l3">
				<div class="card lightblue hoverable">
					<div class="card-content">
						<form action="/main/register_new_user" method="post" class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input name="first_name" type="text" class="validate">
									<label for="first_name">First Name</label>
								</div>
								<div class="input-field col s6">
									<input name="last_name" type="text" class="validate">
									<label for="last_name">Last Name</label>
								</div>
							</div>
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
							<div class="row">
								<div class="input-field col s12">
									<input name="password_confirm" type="password" class="validate">
									<label for="password_confirm">Confirm Password</label>
								</div>
							</div>
							<div class="center-align section">
								<button class="waves-effect waves-light btn" type="submit">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<?php
					if ($this->session->flashdata())
					{
						foreach ($this->session->flashdata("errors") as $error)
						{
							echo $error;
						}						
					}
				?>

			</div>
		</div>
	</div>

</body>