
	<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="loginForm" method="POST">
					<div class="modal-header">
						<a href="index.php">
							<h1 class="caption-body fw-bold mt-3">Login</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</a>
					</div>
					<div class="modal-body">
						<div class="container">
							<!-- <h4 class="mb-3 fw-bold  text-center">Login to your account</h4> -->
							<!-- div for error input-->
							<div class="alert alert-danger" style="display:none;" id="invalidInput">Invalid Email or Password</div>
							<label for="email" class="form-label">Email address</label>
							<div class="input-group flex-nowrap mb-3">
								<input type="email" class="form-control" placeholder="Email" id="emailLogin" name="email" value="" required>
								<label class="input-group-text" id="addon-wrapping" for="email"><i class="fas fa-user fa-1x p-2"></i></label>
							</div>
							<label for="password" class="form-label">Password</label>
							<div class="input-group flex-nowrap mb-3">
								<input type="password" class="form-control" placeholder="Password" id="passwordLogin" name="password" value="" required>
								<label class="input-group-text" id="addon-wrapping" for="password"><i class="fas fa-lock fa-1x p-2"></i></label>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-between mx-3 my-2">
						<a href="register.php" class="text-decoration-underline fst-italic">Register new Account</a>
						<button type="submit" class="btn btnSquare" id="loginBtn" name="login">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<script>
//onsubmit function
$("#loginForm").bind('submit', function(e){
	var record = [$("#emailLogin").val(),$("#passwordLogin").val()];
	 validatePatient(record);
	if(!isValid){
		$("#invalidInput").show();
	}
	return false;
});
//validateInput;
function validatePatient(record) {
	var tite= "tite";
	$.ajax({
		'url': "endpoints/validatePatient.php",
		'type': "POST",
		'data': {
			'email': record[0],
			'password': record[1]
		},
		success: function(response) {

			response = JSON.parse(response);
			if (response.code != 400) {
				for (let row of response){
					Cookies.set('id', row.patient_id);
					break;
				}
				Cookies.set('type', "patient");
				window.location.reload();
			} else {
				console.log(response.code);
			}
		}

	});
	return false;
}	
</script>
