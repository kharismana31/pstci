<div class="jumbotron bg-search5 m-t-60 p-l-100 p-t-100 p-r-100 p-b-100">
	<div class="jumbotron bg-form" style="border-radius: 20px; border: solid 1px grey;">
		<div class="m-t-40 m-l-40 m-r-40 m-b-40">
            <h3 class="p-t-20 p-l-20 p-b-20 text-white">Search</h3>
            <form id="form-search" class="p-l-20 p-r-20" role="form" action="<?php echo site_url('public/C_public/result');?>">
                <div class="row">
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label>Product Type</label>
							<select class="full-width" data-init-plugin="select2" id="product" name="product">
								<option></option>
								<option value="conductor">Conductor</option>
								<option value="casing">Casing</option>
								<option value="tubing">Tubing</option>
								<option value="popjoints">Pop Joints</option>
								<option value="couplings">Couplings</option>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
                            <label>OD</label>
                            <select class="full-width" data-init-plugin="select2" id="od" name="od">
                                <option value="2.0">2.0</option>
                                <option value="3.0">3.0</option>
                                <option value="3.5">3.5</option>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
						<div id="one" class="form-group form-group-default form-group-default-select2">
							<label>Weight</label>
							<select class="full-width" data-init-plugin="select2" id="weigth" name="weigth"
							disabled="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option valuse="3">3</option>
							</select>
						</div>
						<div id="two" class="form-group form-group-default hidden">
							<label>Weight</label>
							<div class="controls">
								<input type='text' class="form-control" placeholder="ppf" id="other" name="other" />
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-4">
						<div class="form-group form-group-default required">
							<label>Company</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Company" required />
							</div>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default required">
							<label>Grade</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Grade" required />
							</div>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default required">
							<label>Connection</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Connection" required />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div>&nbsp;</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary btn-cons pull-right">Search</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#product").change(function() {
			var el = $(this).val() ;

			if(el === "casing" || el === "tubing" || el === "popjoints")
			{
				$("#one").val("").removeClass("hidden");
				$("#two").val("").addClass("hidden");
				$("#weigth").prop("disabled", false);
			}
			else if(el === "couplings")
			{
				$("#two").val("").removeClass("hidden");
				$("#one").val("").addClass("hidden");
			}
			else
			{
				$("#weigth").prop("disabled", true);	
				/*$("#other").val("").addClass("hidden");*/
				/*$("#weigth").prop("disabled", true);*/
				/*$("#weigth").val("").removeClass("hidden");*/
			}
		});
	});
</script>
<style type="text/css">
	.hidden
	{
		display:none;
	}
</style>