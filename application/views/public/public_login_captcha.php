<div class="content">  
	<div class="jumbotron bg-form1 m-t-60">
		<div class="col-md-1">        
		</div>
		<div class="col-md-5">
			<div class="form-transparent m-t-100">
				<div class="p-l-20 m-l-20 p-r-50 m-t-20 sm-p-l-15 sm-p-r-15 sm-p-t-40 p-b-20">
					<p class="p-t-35 fs-16">Sign into your account</p>
					<!-- START Login Form -->
					<form method="post" action="<?php echo site_url('C_auth/sess'); ?>" class="p-t-15 p-d-20" id="form-login" role="form-login">
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Login</label>
							<div class="controls">
								<input type="email" name="email" placeholder="Email" id="email" class="form-control" required>
							</div>
						</div>
						<!-- END Form Control-->
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Password</label>
							<div class="controls">
								<input type="password" class="form-control" name="password" id="password" placeholder="Credentials" required>
							</div>
						</div>
						<!-- START Form Control-->
						<div class="form-group">
							<?php echo $captcha;?>
						</div>
						<!-- END Form Control-->
						<button type="submit" name="submit" class="btn btn-primary btn-cons m-t-10" value="form-login">Sign in</button>
					</form>
				</div>
				<!--END Login Form-->
			</div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>
<script>
	$(function() {
		if (localStorage.chkbx && localStorage.chkbx != '') {
			$('#checkbox1').attr('checked', 'checked');
			$('#email').val(localStorage.usrname);
			$('#password').val(localStorage.pass);
			} else {
			$('#checkbox1').removeAttr('checked');
			$('#email').val('');
			$('#password').val('');
		}
		
		$('#checkbox1').click(function() {
			
			if ($('#checkbox1').is(':checked')) {
				// save email and password
				localStorage.usrname = $('#email').val();
				localStorage.pass = $('#password').val();
				localStorage.chkbx = $('#checkbox1').val();
			} 
			else {
				localStorage.usrname = '';
				localStorage.pass = '';
				localStorage.chkbx = '';
			}
		});
	});
</script>
