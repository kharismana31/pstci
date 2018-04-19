<div class="content">
	<div class="jumbotron bg-form1 m-t-60">
        <div class="col-md-1">
		</div>
        <div class="col-md-6">
			<div class="form-transparent m-t-100 m-b-20">
				<p class="p-t-40 p-l-50 p-b-40 fs-16 font-heading">Sign up your account</p>
				<form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" method="post" action="<?php echo site_url('C_auth/add_register');?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>First Name</label>
								<input type="text" class="form-control" placeholder="First Name" name="fristname" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>Surname</label>
								<input type="text" class="form-control" placeholder="Surname" name="surename" required />
							</div>
						</div>
					</div>
					<div class="form-group form-group-default required">
						<label>Company</label>
						<div class="controls">
							<input type="text" class="form-control" placeholder="Company" required name="company" />
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
						<select class="full-width" data-init-plugin="select2" required name="country" onchange="changeCC(this)">
                            <?php foreach($countries as $country): ?>
                                <option data-cc="<?= $country->phonecode ?>" value="<?= $country->name ?>"><?= $country->name ?></option>
                            <?php endforeach; ?>
<!--							<optgroup label="Asia">-->
<!--								<option>Indonesia</option>-->
<!--								<option>Malaysia</option>-->
<!--							</optgroup>-->
<!--							<optgroup label="Europe">-->
<!--								<option>Holland</option>-->
<!--								<option>Germany</option>-->
<!--								<option>Argentina</option>-->
<!--							</optgroup>-->
						</select>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>Contact No: Country Code</label>
								<input type="number" class="form-control" placeholder="e.g.60199" required name="countrycode" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>Contact No: Phone Number</label>
								<input type="number" class="form-control" placeholder="e.g.+62xxxxxxxxxxx" required name="phonenumber" />
							</div>
						</div>
					</div>
					<div class="form-group form-group-default required">
						<label>Email</label>
						<input type="mail" name="email" class="form-control" placeholder="admin@default.com" required name="email" />
					</div>
					<div class="form-group form-group-default required">
						<label>Password</label>
						<input type="password" class="form-control" required name="password" />
					</div>
					<div class="row">
						<div class="col-md-12 no-padding">
							<div class="checkbox check-primary">
								<input type="checkbox" value="1" id="checkbox1" name="check" required>
								<label for="checkbox1" class="text-white">Accept Terms & Conditions</label>
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
		<div class="col-md-5"></div>
	</div>
</div>

<script>
    function changeCC(that) {
        var cc = $(that).find(':selected').data('cc');
        $('input[name=countrycode]').val(cc);
    }
</script>