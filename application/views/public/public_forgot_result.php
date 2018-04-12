<div class="content">  
	<div class="jumbotron bg-form1">
		<div class="col-md-1">        
		</div>
		<div class="col-md-5">
			<div class="form-transparent m-t-100">
				<div class="p-l-20 m-l-20 p-r-50 m-t-20 sm-p-l-15 sm-p-r-15 sm-p-t-40 p-b-20">
					<p class="p-t-35 fs-16">Enter Your Password</p>
					<!-- START Login Form -->
					<form id="form-login" class="p-t-15 p-d-20" role="form" action="<?php echo site_url('C_auth/forgot_result');?>" method="post">
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Email</label>
							<div class="controls">
								<input type="text" name="email" class="form-control" style="color:#2c2c2c" value="<?php echo $email; ?>" readonly>
							</div>
						</div>
						<!-- END Form Control-->
						
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Password</label>
							<div class="controls">
								<input type="password" class="form-control" name="password" pattern=".{6}" placeholder="Password" id="password" required title="Min 6 Character">
							</div>
						</div>
						<!-- END Form Control-->
						
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Recheck Password</label>
							<div class="controls">
								<input type="password" name="rpassword" placeholder="Recheck Password" id="confirm_password" class="form-control" required>
							</div>
						</div>
						<p id="nn" style="display:none;">Passwords Don't Match</p>
						<!-- END Form Control-->
						
						<button class="btn btn-primary btn-cons m-t-10" type="submit" id="forgot">Forgot</button>
					</form>
				</div>
				<!--END Login Form-->
			</div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>

<script type="text/javascript">
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");
	
	function validatePassword(){
		if(password.value != confirm_password.value) {
			document.getElementById('nn').style.display = "block";
			<!-- document.getElementById('bl').style.display = "none"; -->
			document.getElementById("forgot").disabled = true; 
		}
		else {
			document.getElementById('nn').style.display = "none";
			<!-- document.getElementById('bl').style.display = "block"; -->
			document.getElementById("forgot").disabled = false; 
			confirm_password.setCustomValidity('');
		}
	}
	
	password.onkeyup = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<!-- 86400 -->