<div class="jumbotron bg-search5 m-t-60 p-l-100 p-t-100 p-r-100 p-b-100">
	<div class="jumbotron bg-form" style="border-radius: 20px; border: solid 1px grey;">
		<div class="m-t-40 m-l-40 m-r-40 m-b-40">
            <h3 class="p-t-20 p-l-20 p-b-20 text-white">Search</h3>
            <form id="form-search" class="p-l-20 p-r-20" role="form" action="<?php echo site_url('public/C_public/result_search');?>">
                <div class="row">
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label>Product Type</label>
							<select class="full-width" data-init-plugin="select2" id="product" name="product">
								<option value="all">All Product Type</option>
								<?php 
									$n=1;
									foreach ($list_product as $product) {
										echo "<option value=\"".$product['name']."\" id=\"".$n."\">".$product['name']."</option>";
										$n = $n+1;
									}
								?>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label>Steel Type</label>
							<select class="full-width" data-init-plugin="select2" id="steeltype" name="steeltype">
								<option value="all">All Steel Type</option>
								<option value="carbon">Carbon</option>
								<option value="cra">CRA</option>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label>Unit of Measure</label>
							<select class="full-width" data-init-plugin="select2" id="uom" name="uom">
								<option value="metric">Metric</option>
								<option value="imperial">Imperial</option>
							</select>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
                            <label>OD</label>
                            <select class="full-width" data-init-plugin="select2" id="od" name="od">
                            	<option value="0"></option>
                                <?php
                                	foreach ($list_od as $od) {
                                		echo "<option>".$od['dm_od_label']."</option>";
                                	}
                                ?>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
						<div id="one" class="form-group form-group-default form-group-default-select2">
							<label>Weight</label>
							<select class="full-width" data-init-plugin="select2" id="weight" name="weight"
							disabled="">
								<option value="0"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option valuse="3">3</option>
							</select>
						</div>
						<div id="two" class="form-group form-group-default hidden">
							<label>Weight</label>
							<div class="controls">
								<input type='number' class="form-control" placeholder="ppf" id="other" name="other" />
							</div>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-group form-group-default">
							<label>Yield Strength</label>
							<div class="controls">
								<input type="number" class="form-control"/>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#product").change(function() {
			var el = $(this).val() ;

			if(el === "casing" || el === "tubing" || el === "popjoints")
			{
				$("#one").val("").removeClass("hidden");
				$("#two").val("").addClass("hidden");
				$("#weight").prop("disabled", false);
			}
			else if(el === "couplings")
			{
				$("#two").val("").removeClass("hidden");
				$("#one").val("").addClass("hidden");
			}
			else
			{
				$("#weight").prop("disabled", true);	
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