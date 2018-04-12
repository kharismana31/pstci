<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social" data-pages="social">
				<!-- START JUMBOTRON -->
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					<div class="cover-photo">
						<img alt="Cover photo" src="<?php echo base_url('assets/');?>images/bg-product.jpg" />
					</div>
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h5 class="text-white no-margin"><span class="semi-bold">Great Products</span> comes with <span class="semi-bold">Great Responsibilites</span></h5>
								<h1 class="text-white no-margin">Fill the form below to start selling you <span class="semi-bold">Great Products</span></h1>
							</div>
						</div>
						<div class="top-left m-t-80 m-l-30">
							<img src="<?php echo base_url('assets/');?>images/mitologo2.png" />
						</div>
					</div>
				</div>
				
				<div class="feed" style="overflow:hidden;">
					<div class="day no-margin">
						<div class="card no-border full-width">
							<div class="row">
								<div class="bg-master-lightest">
									<div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
										<div class="inner">
											<h3 class="p-l-100">Entry a Product</h3>
											<form id="form_Add" action="<?php echo site_url('admin/C_listing/add_product')?>" role="form" method="POST">
												<div id="rootwizard">
													<div class="panel panel-transparent m-t-50 m-l-100 m-r-100 m-b-10">
														<ul class="nav nav-tabs nav-tabs-fillup" data-init-responsive-tabs="dropdownfx">
															<li class="active">
																<a data-toggle="tab" href="#general"><span><i class="fa fa-cog tab-icon"></i>General</span></a>
															</li>
															<li>
																<a data-toggle="tab" href="#grade"><span><i class="fa fa-graduation-cap tab-icon"></i>Grade</span></a>
															</li>
															<li>
																<a data-toggle="tab" href="#connection"><span><i class="fa fa-circle-o-notch tab-icon"></i>Connection</span></a>
															</li>
															<li>
																<a data-toggle="tab" href="#location"><span><i class="fa fa-map-marker tab-icon"></i>Location</span></a>
															</li>
															<li>
																<a data-toggle="tab" href="#price"><span><i class="fa fa-credit-card tab-icon"></i>Price & Certificate Details</span></a>
															</li>
															<li>
																<a data-toggle="tab" href="#complete"><span><i class="fa fa-check tab-icon"></i>Complete</span></a>
															</li>
														</ul>
														
														<div class="tab-content">
															
															<div class="tab-pane slide-left active" id="general">
																
																<h4>Tell us what pipe do you want to sell</h4><hr />
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required" data-toggle="tooltip" title="" data-placement="right">
																			<label>Product Type</label>
																			<select class="full-width" data-init-plugin="select2" name="product" required>
																				<option value="casing">Casing</option>
																				<option value="tubing">Tubing</option>
																				<option value="pupjoints">Pup Joints</option>
																				<option value="couplings">Couplings</option>
																			</select>
																		</div>
																	</div> 
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>OD</label>
																			<input type="text" class="form-control" name="od" placeholder="OD" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Weight</label>
																			<input type="text" class="form-control" name="weight" placeholder="Weight" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Range</label>
																			<select class="full-width" data-init-plugin="select2" name="range">
																				<option value="R1">R1</option>
																				<option value="R2">R2</option>
																				<option value="R3">R3</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Special Condition</label>
																			<select class="full-width" data-init-plugin="select2" name="special">
																				<option value="PSL1">PSL1</option>
																				<option value="PSL2">PSL2</option>
																				<option value="Special Drift">Special Drift</option>
																				<option value="Special Bevel">Special Bevel</option>
																			</select>
																		</div>
																	</div>
																</div>
																
															</div>
															
															<div class="tab-pane slide-left" id="grade">
																<h4>Specify your pipe's Grade</h4><hr />
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Yield Strength</label>
																			<input type="text" class="form-control" placeholder="Yield Strength" name="yield" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group p-l-10 b-t b-dashed b-grey p-t-5">
																			<label>Steel Type :</label>
																			<div class="radio radio-success">
																				<input type="radio" id="carbon" value="carbon" name="optionsteel" />
																				<label for="carbon">Carbon</label>
																				<input type="radio" id="cra" value="cra" name="optionsteel" />
																				<label for="cra">CRA</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-3">
																		<div class="form-group p-l-10 b-t b-dashed b-grey p-t-5">
																			<label>Grade Type :</label>
																			<div class="radio radio-success">
																				<input type="radio" id="api" value="api" name="optiongrade" />
																				<label for="api">API</label>
																				<input type="radio" id="proprietary" value="proprietary" name="optiongrade" />
																				<label for="proprietary">Propietary</label>
																				<input type="radio" id="other" value="other" name="optiongrade" />
																				<label for="other">Other</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>API/Propietary</label>
																			<select class="full-width" data-init-plugin="select2" name="api1" required>
																				<option value="Carbon">Carbon</option>
																				<option value="CRA">CRA</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group p-l-10 b-t b-dashed b-grey p-t-5">
																			<label>Sour Classification</label>
																			<div class="radio radio-success">
																				<input type="radio" id="sour" name="gradesour" value="sour" />
																				<label for="sour">Sour</label>
																				<input type="radio" id="nonsour" name="gradesour" value="nonsour" />
																				<label for="nonsour">Non-Sour</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group p-l-10 b-t b-b b-dashed b-grey p-t-5">
																			<label>Chrome Content Classification</label>
																			<div class="radio radio-success">
																				<input type="radio" id="chromeyes" name="gradechrome" value="yes" />
																				<label for="chromeyes">Yes</label>
																				<input type="radio" id="chromeno" name="gradechrome" value="no" />
																				<label for="chromeno">No</label>
																			</div>
																		</div>  
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Speciality</label>
																			<select class="full-width" data-init-plugin="select2" name="speciality[]" multiple>
																				<option value="High Collapse">High Collapse</option>
																				<option value="High Temperature">High Temperature</option>
																				<option value="High Ductility">High Ductility</option>
																				<option value="High Pressure">High Pressure</option>
																				<option value="High Strength">High Strength</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
															</div>
															
															<div class="tab-pane slide-left" id="connection">
																
																<h4>Specify your pipe's Connection</h4><hr />
																
																<div class="row">
																	<div class="col-md-3 p-l-10">
																		<div class="form-group">
																			<label>Connection Standard :</label>
																			<div class="radio radio-success">
																				<input type="radio" id="connectionapi" value="api" name="optionconnection" />
																				<label for="connectionapi">API</label>
																				<input type="radio" id="connectionproprietary" value="proprietary" name="optionconnection" />
																				<label for="connectionproprietary">Propietary</label>
																				<input type="radio" id="connectionother" value="other" name="optionconnection" />
																				<label for="connectionother">Other</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3">
																		<div class="form-group form-group-default form-group-default-select2">
																			<label>API/Propietary</label>
																			<select class="full-width" name="api2" data-init-plugin="select2">
																				<option value="SC">SC</option>
																				<option value="LC">LC</option>
																				<option value="BC">BC</option>
																				<option value="NU">NU</option>
																				<option value="EU">EU</option>
																				<option value="IJ">IJ</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2">
																			<label>API/Propietary</label>
																			<select class="full-width" name="api3" data-init-plugin="select2">
																				<option value="Integral">Integral</option>
																				<option value="Flush">Flush</option>
																				<option value="Thread and Couple">Thread and Couple</option>
																				<option value="Conductor">Conductor</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default">
																			<label>Connection Owner : </label>
																			<input type="text" value="<?php echo $this->session->userdata('fname');?>" class="form-control"  disabled/>
																		</div>
																	</div>
																</div>
																
															</div>
															
															<div class="tab-pane slide-left" id="location">
																<h4>Your sales Location</h4><hr />
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Country</label>
																			<select class="full-width" data-init-plugin="select2" name="country" required>
																				<optgroup label="Asia">
																					<option value="Indonesia">Indonesia</option>
																					<option value="Malaysia">Malaysia</option>
																				</optgroup>
																				<optgroup label="Europe">
																					<option value="Holland">Holland</option>
																					<option value="Germany">Germany</option>
																					<option value="Argentina">Argentina</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>State</label>
																			<select class="full-width" data-init-plugin="select2" name="state" required>
																				<optgroup label="Java">
																					<option value="East Java">East Java</option>
																					<option value="DKI Jakarta">DKI Jakarta</option>
																					<option value="West Java">West Java</option>
																				</optgroup>
																				<optgroup label="Sumatera">
																					<option value="West Sumatera">West Sumatera</option>
																					<option value="North Sumatera">North Sumatera</option>
																					<option value="South Sumatera">South Sumatera</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Location</label>
																			<input type="text" class="form-control" name="location" placeholder="Location Name" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default">
																			<label>Street Address</label>
																			<input type="text" class="form-control" name="street" placeholder="Streed Address" />
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Post Code</label>
																			<input type="text" class="form-control" name="post" placeholder="Post Code" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<h4>Details of your Manufacturer</h4><hr />
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Manufacturer Name</label>
																			<select class="full-width" data-init-plugin="select2" name="manufact_name" required>
																				<option selected disabled value="none">Main Mills Only</option>
																				<option value="Inosoft">Inosoft</option>
																				<option value="Inosoft">Inosoft</option>
																				<option value="Inosoft">Inosoft</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Other</label>
																			<input type="text" class="form-control" name="other" placeholder="Other Mill" required />
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Manufacturing Country</label>
																			<select class="full-width" data-init-plugin="select2" name="manufact_country" required>
																				<optgroup label="Asia">
																					<option value="Indonesia">Indonesia</option>
																					<option value="Malaysia">Malaysia</option>
																				</optgroup>
																				<optgroup label="Europe">
																					<option value="Holland">Holland</option>
																					<option value="Germany">Germany</option>
																					<option value="Argentina">Argentina</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group form-group-default form-group-default-select2 required">
																			<label>Year of Manufacture</label>
																			<select class="full-width" data-init-plugin="select2" name="manufact_year" required>
																				<option value="2013">2013</option>
																				<option value="2014">2014</option>
																				<option value="2015">2015</option>
																				<option value="2016">2016</option>
																				<option value="2017">2017</option>
																			</select>
																		</div>
																	</div>
																</div>
																
															</div>
															
															<div class="tab-pane slide-left" id="price">
																
																<h4>Specify your price details</h4><hr />
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Price</label>
																			<input type="text" placeholder="Price" name="price" class="form-control" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group form-group-default required">
																			<label>Quantity</label>
																			<input type="text" placeholder="Quantity" name="quantity" class="form-control" required />
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																
																<div class="row">
																	<h4>Certificate Details</h4><hr />
																	
																	<div class="col-md-4">
																		<div class=" form-group form-group-default">
																			<label>Material Certificate</label>
																			<input type="file" class="form-control" name="material" multiple/>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class=" form-group form-group-default">
																			<label>Inspection Report</label>
																			<input type="file" class="form-control" name="report" multiple/>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class=" form-group form-group-default">
																			<label>Photos</label>
																			<input type="file" class="form-control" name="photos" multiple />
																		</div>
																	</div>
																	
																</div>
																
															</div>
															
															<div class="tab-pane slide-left" id="complete">
																<h3>You have completed your listing form. Click "Submit" to publish your listing</h3>
															</div>
															
															<div class="padding-20 bg-white">
																<ul class="pager wizard">
																	<li class="next">
																		<button class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" type="button">
																			<span>Next</span>
																		</button>
																	</li>
																	<li class="next finish">
																		<button class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" type="submit">
																			<span>Finish</span>
																		</button>
																	</li>
																	<li class="previous first hidden">
																		<button class="btn btn-default btn-cons btn-animated from-left fa fa-arrow-left pull-right" type="button">
																			<span>First</span>
																		</button>
																	</li>
																	<li class="previous">
																		<button class="btn btn-default btn-cons pull-right" type="button">
																			<span>Previous</span>
																		</button>
																	</li>
																</ul>
															</div>
														</div>
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
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#finish").click(function(){
		e.preventDefault();
			$.ajax({
				type: 'POST',
				url: "<?php echo site_url('admin/C_listing/add_product')?>",
				data: $('#form_Add').serialize(),
				dataType: "JSON",
				processData: false,
				contentType: false,
				success: function(data) {
					alert("test");
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error deleting data');
				}
			});
		});
	});
</script> -->