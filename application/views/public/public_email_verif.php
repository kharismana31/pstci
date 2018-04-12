<div class="content">  
	<div class="jumbotron bg-form1 m-t-60">
		<div class="col-md-1">        
		</div>
		<div class="col-md-5">
			<div class="form-transparent m-t-100">
				<div class="p-l-20 m-l-20 p-r-50 m-t-20 sm-p-l-15 sm-p-r-15 sm-p-t-40 p-b-20">
					<p class="p-t-35" style="font-size:25px;">Success Verification Email</p>
					<!-- START Login Form -->
					<form id="form-login" class="p-t-15 p-d-20" role="form" action="">
						<!-- START Form Control-->
						<div class="form-group">
							<div class="controls" style="background-color: rgba(98, 98, 98, 0.4);border-radius: 5px;">
								<h5 style="color:white;">Firstname : <?php echo $fname;?></h5> 
							</div>
						</div>
						<!-- END Form Control-->
						
						<!-- START Form Control-->
						<div class="form-group">
							<div class="controls" style="background-color: rgba(98, 98, 98, 0.4);border-radius: 5px;">
								<h5 style="color:white;">Surname : <?php echo $surname;?></h5> 
							</div>
						</div>
						<!-- END Form Control-->
						
						<!-- START Form Control-->
						<div class="form-group">
							<div class="controls" style="background-color: rgba(98, 98, 98, 0.4);border-radius: 5px;">
								<h5 style="color:white;">Email : <?php echo $email;?></h5> 
							</div>
						</div>
						<!-- END Form Control-->
						<a href="<?php echo site_url('C_auth/login');?>" class="btn btn-primary btn-cons m-t-10">Home</a>
					</form>
				</div>
				<!--END Login Form-->
			</div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>