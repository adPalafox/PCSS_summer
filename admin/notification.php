<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_COOKIE["type"]))
	if ($_COOKIE["type"] == "patient")
		header("location:logout.php");

if (!isset($_COOKIE["id"])) {
	header("location:index.php");
}
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="maximum-scale=1.0, width=device-width, initial-scale=1.0">
	<title>PCSS admin</title>

	<?php include 'assets/links.php'; ?>

</head>

<body>
	<div class="" id="pageNotifications">
		<?php include 'templates/side-nav.php'; ?>
	</div>
	<div class="content" id="mainContainer">
		<?php include 'templates/header.php'; ?>
		<hr>
		
		<!-- page content -->
		<div class="container">
			<label class="caption-body">Consultation Notification</label>
			<div class="row">
				<div class="col">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="messagePatient" checked>
						<label class="form-check-label" for="messagePatient">
							Send an email message to Patient on the day of consultation
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="messageConsultant" checked>
						<label class="form-check-label" for="messageConsultant">
							Send an email message to Consultant on the day of consultation
						</label>
					</div>


					<button class="btn btnSquare">Save</button>
				</div>
				<div class="col ">
					<div class="container text-center">
						<p>Send them an email</p>
						<a href="https://mail.google.com/" target="_blank">
							<button class="btn btnSquare fw-bold">
								<i class="fas fa-envelope">
								</i> Send a custom message
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php include 'templates/bottom-nav.php'; ?>
	</div>
</body>

</html>