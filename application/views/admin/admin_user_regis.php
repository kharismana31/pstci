<div class="content">
    <div class="social-wrapper">
		<div class="social " data-pages="social">
			<div class="jumbotron" data-pages="parallax" data-social="cover">
				<div class="cover-photo">
					<img alt="Cover photo" src="<?php echo site_url() ?>assets/images/discuss.png" />
				</div>
				<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
					<div class="inner">
						<div class="pull-bottom bottom-left m-b-40">
							<h1 class="text-white no-margin">Manage your <span class="semi-bold">Users</span> here</h1>
						</div>
					</div>
					<div class="top-left m-t-80 m-l-30">
						<img src="<?php echo site_url() ?>assets/images/mitologo2.png" />
					</div>
				</div>
			</div>
			<div class="feed" style="overflow: hidden;">
				<div class="day no-margin">
					<div class="card no-border full-width">
						<div class="row">
							<div class="bg-master-lightest">
								<div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
									<div class="inner">
										<h3 class="m-l-60">Register User</h3><hr />
										
										<div class="bg-master-lighter m-b-20">
											<p class="p-t-40 p-l-50 p-b-40 fs-16 font-heading">Sign up an Account</p>
											
											<form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" action="<?php echo site_url();?>admin/C_user/add_register" method="post">
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-group-default required">
															<label>First Name</label>
															<input type="text" class="form-control" placeholder="First Name" name="firstname" required />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default required">
															<label>Surname</label>
															<input type="text" class="form-control" placeholder="Surname" name="surname" required />
														</div>
													</div>
												</div>
												<div class="form-group form-group-default required">
													<label>Company</label>
													<div class="controls">
														<input type="text" class="form-control" placeholder="Company" name="company" required />
													</div>
												</div>
												<div class="form-group form-group-default form-group-default-select2">
													<label>Business Type</label>
													<select class="full-width" data-init-plugin="select2" name="bisnis">
														<option>Oil & Gas Operator</option>
														<option>Trader</option>
														<option>Mill/Manufacturer</option>
													</select>
												</div>
												<div class="form-group form-group-default form-group-default-select2 required">
													<label>Country</label>
													<select class="full-width" data-init-plugin="select2" name="country" required>
														<optgroup label="Asia">
															<option>Indonesia</option>
															<option>Malaysia</option>
														</optgroup>
														<optgroup label="Europe">
															<option>Holland</option>
															<option>Germany</option>
															<option>Argentina</option>
														</optgroup>
													</select>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-group-default required">
															<label>Contact No: Country Code</label>
															<input type="number" class="form-control" placeholder="e.g.60199" name="ccode" required />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default required">
															<label>Contact No: Phone Number</label>
															<input type="number" class="form-control" placeholder="e.g.+62xxxxxxxxxxx" name="pnumber" required />
														</div>
													</div>
												</div>
												<div class="form-group form-group-default required">
													<label>Email</label>
													<input type="mail" name="email" class="form-control" placeholder="admin@default.com" name="email" required />
												</div>
												<div class="form-group form-group-default required">
													<label>Password</label>
													<input type="password" class="form-control" name="password" required />
												</div>
												<div class="row">
													<div class="col-md-12 no-padding">
														<div class="checkbox check-primary">
															<input type="checkbox" value="1" id="checkbox1" required />
															<label for="checkbox1" class="text-master">Accept Terms & Conditions</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<button type="submit" class="btn btn-primary">Sign Up</button>
														</div>
													</div>
													<div class="row">
														&nbsp;
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>