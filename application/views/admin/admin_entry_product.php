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
								<h1 class="text-white no-margin">Fill the form below to start selling your <span class="semi-bold">Great Products</span></h1>
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
											<form id="form_Add" action="<?php echo site_url('admin/Listing/add_product')?>" role="form" enctype="multipart/form-data" method="POST">
												<div id="rootwizard">
													<div class="panel panel-transparent m-t-50 m-l-100 m-r-100 m-b-10">
														<ul class="nav nav-tabs nav-tabs-fillup" data-init-responsive-tabs="dropdownfx">
                                                            <!-- TAB DISINI -->
															<li class="active">
																<a data-toggle="tab" href="#general"><span><i class="fa fa-cog tab-icon"></i>General</span></a>
															</li>
                                                            <li>
                                                                <a data-toggle="tab" href="#quantity"><span><i class="fa fa-shopping-cart tab-icon"></i>Quantity</span></a>
                                                            </li>
                                                            <li>
                                                                <a data-toggle="tab" href="#location"><span><i class="fa fa-map-marker tab-icon"></i>Location</span></a>
                                                            </li>
														</ul>

														<div class="tab-content">
                                                            <!--
                                                            =============
                                                            TAB GENERAL
                                                            =============
                                                            -->
															<div class="tab-pane slide-left active" id="general">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <h4>Product Detail</h4><hr />
                                                                    </div>

                                                                    <!--
                                                                    ====================
                                                                    PRODUCT DETAIL-DIV
                                                                    ====================
                                                                    -->
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group form-group-default form-group-default-select2 required" data-toggle="tooltip" title="" data-placement="right">
                                                                                    <label>Product Type</label>
                                                                                    <select class="full-width" onchange="setProductType()" data-init-plugin="select2" name="product_type" required>
                                                                                        <option>Select Product Type</option>
                                                                                        <?php
                                                                                        foreach($product_types as $type): ?>
                                                                                            <option data-id="<?= $type->id ?>" value="<?= strtolower($type->name) ?>"><?= $type->name ?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>OD <span class="text-muted" style="color: #aaa;text-transform: lowercase">in Fraction</span></label>
                                                                                    <input type="text" class="form-control" name="od" placeholder="OD" required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#od-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                        <div class="row weight">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>Weight <span class="text-muted" style="color: #aaa;text-transform: lowercase">in ppf</span></label>
                                                                                    <input type="text" class="form-control" name="weight" placeholder="Weight" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#weight-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                        <div class="row wall_thickness">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>Wall Thickness <span class="text-muted" style="color: #aaa;text-transform: lowercase">in inches</span></label>
                                                                                    <input type="text" class="form-control" name="wall_thickness" placeholder="Wall Thickness" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#wall_thickness-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group form-group-default form-group-default-select2 required range">
                                                                                    <label>Range</label>
                                                                                    <select class="full-width" data-init-plugin="select2" name="range" onchange="setRange(this)">
                                                                                        <option value="R1">R1</option>
                                                                                        <option value="R2">R2</option>
                                                                                        <option value="R3">R3</option>
                                                                                        <option value="OTHER">OTHER</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group form-group-default required range-manual">
                                                                                    <label>Range Manual</label>
                                                                                    <input type="text" class="form-control" name="range-manual" placeholder="Specify Length in Meter / Feet" />
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                    </div>

                                                                    <!--
                                                                    =========================
                                                                    ANOTHER-PRODUCT DETAIL-DIV
                                                                    =========================
                                                                    -->
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>Grade</label>
                                                                                    <input type="text" class="form-control" name="grade" placeholder="Grade" required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#grade-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>Connection</label>
                                                                                    <input type="text" class="form-control" name="connection" placeholder="Connection" required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#connection-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->

                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group form-group-default required">
                                                                                    <label>Manufacturer</label>
                                                                                    <input type="text" class="form-control" name="manufacturer" placeholder="Manufacturer" required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#manufacturer-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div><!-- /.row -->



                                                                        <div class="row">
                                                                            <div class="col-md-12">
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
                                                                        </div><!-- /.row -->

                                                                    </div><!-- /.col-md-6 -->
                                                                </div>

															</div>
                                                            <!--
                                                            =============
                                                            TAB QUANTITY
                                                            =============
                                                            -->
                                                            <div class="tab-pane slide-left" id="quantity">

                                                                <h4>Product Price & Quantity</h4><hr />

                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Price <span class="text-muted" style="color: #aaa;text-transform: lowercase">in per meter or foot or Metric Tonne or piece</span></label>
                                                                            <input type="text" placeholder="Price (USD)" name="price" class="form-control" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#price-modal" onclick="grabPrice()"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Quantity  <span class="text-muted" style="color: #aaa;text-transform: lowercase">    </span></label>
                                                                            <input type="text" placeholder="Quantity" name="quantity" class="form-control" required />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Availability  <span class="text-muted" style="color: #aaa;text-transform: lowercase">No of Month to Cargo Ready</span></label>
                                                                            <input type="text" placeholder="Availability" name="availability" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <h4>Certificate Details</h4><hr />

                                                                    <div class="col-md-4">
                                                                        <div class=" form-group form-group-default">
                                                                            <label>Material Certificate <span class="text-muted" style="color: #aaa;text-transform: lowercase">upload pdf file</span></label>
                                                                            <input type="file" class="form-control" name="material" multiple/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class=" form-group form-group-default">
                                                                            <label>Inspection Report <span class="text-muted" style="color: #aaa;text-transform: lowercase">upload pdf file</span></label>
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
                                                            <!--
                                                            =============
                                                            TAB LOCATION
                                                            =============
                                                            -->
                                                            <div class="tab-pane slide-left" id="location">
                                                                <h4>Your sales Location</h4><hr />

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>Country</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="country" onchange="grabState()" required>
                                                                                <?php
                                                                                foreach(M_country::select('name','id')->orderBy('name', 'ASC')->get() as $country):
                                                                                    ?>
                                                                                    <option value="<?= $country->name ?>" data-id="<?= $country->id ?>"><?= $country->name ?></option>
                                                                                <?php endforeach; ?>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>State</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="state" required>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Location</label>
                                                                            <input type="text" class="form-control" name="location" placeholder="Location Name" required />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Street Address</label>
                                                                            <input type="text" class="form-control" name="street_address" placeholder="Street Address" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Post Code</label>
                                                                            <input type="number" class="form-control" name="post_code" placeholder="Post Code" required />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <!-- TOMBOL NAVIGASI -->
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

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="od-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Dimension
                    <br>
                    <small class="text-muted">Click button to select OD in Fraction</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-od">
                    <thead>
                    <tr>
                        <th>OD in Fraction</th>
                        <th>OD in Inches</th>
                        <th>OD in Metric</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="weight-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Unit Weight
                    <br>
                    <small class="text-muted">Click button to select UW in ppf</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-weight">
                    <thead>
                    <tr>
                        <th>UW in ppf</th>
                        <th>UW in kg/m</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="wall_thickness-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Wall Thickness
                    <br>
                    <small class="text-muted">Click button to select Wall Thickness in inches</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-wall_thickness">
                    <thead>
                    <tr>
                        <th>WT in inches</th>
                        <th>WT in mm</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="grade-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Grade
                    <br>
                    <small class="text-muted">Click button to choose grade</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-grade">
                    <thead>
                    <tr>
                        <th>Grade</th>
                        <th>Grade Type</th>
                        <th>Minimum Yield Metric (Mpa)</th>
                        <th>Minimum Yield Imperial (Ksi)</th>
                        <th>Standard</th>
                        <th>Owner</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="connection-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Connection
                    <br>
                    <small class="text-muted">Click button to choose connection</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-connection">
                    <thead>
                    <tr>
                        <th>Connection</th>
                        <th>Type</th>
                        <th>Standard</th>
                        <th>Owner</th>
                        <th>Additional Feature</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="manufacturer-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Manufacturer
                    <br>
                    <small class="text-muted">Click button to choose manufacturer</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-manufacturer">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Year</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="price-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Similar Items
                    <br>
                    <small class="text-muted">Similar items price guide by OD and Grade</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-price">
                    <thead>
                    <tr>
                        <th>Product Type</th>
                        <th>OD</th>
                        <th>Grade</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->