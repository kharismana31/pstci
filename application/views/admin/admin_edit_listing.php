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
                                <h1 class="text-white no-margin">Edit your product detail</h1>
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
                                            <h3 class="p-l-100">Edit a Product</h3>
                                            <form id="form_Add" action="<?php echo site_url('admin/Listing/update/'.$listing->id)?>" role="form" enctype="multipart/form-data" method="POST">
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
                                                                            <select class="full-width" onchange="changeProductType(this)" data-init-plugin="select2" name="product" required>
                                                                                <option>Select Product Type</option>
                                                                                <?php
                                                                                foreach($product_types as $type): ?>
                                                                                    <option data-id="<?= $type->id ?>" value="<?= strtolower($type->name) ?>" <?= ($listing->product_type == strtolower($type->name)) ? 'selected' : '' ?>><?= $type->name ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <!--                                                                        <div class="form-group form-group-default form-group-default-select2 required" data-toggle="tooltip" title="" data-placement="right">-->
                                                                        <!--                                                                            <label>OD <span class="text-muted" style="color: #aaa;text-transform: lowercase">in Fraction</span></label>-->
                                                                        <!--                                                                            <select class="full-width" data-init-plugin="select2" placeholder="OD" name="od" required>-->
                                                                        <!--                                                                            </select>-->
                                                                        <!--                                                                        </div>-->
                                                                        <div class="form-group form-group-default required">
                                                                            <label>OD <span class="text-muted" style="color: #aaa;text-transform: lowercase">in Fraction</span></label>
                                                                            <input type="text" class="form-control" name="od" placeholder="OD" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#od-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <div class="col-md-6">

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Weight <span class="text-muted" style="color: #aaa;text-transform: lowercase">in ppf</span></label>
                                                                            <input type="text" class="form-control" name="weight" placeholder="Weight" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#weight-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required range">
                                                                            <label>Range</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="range">
                                                                                <option value="R1">R1</option>
                                                                                <option value="R2">R2</option>
                                                                                <option value="R3">R3</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group form-group-default required range-manual">
                                                                            <label>Range</label>
                                                                            <input type="text" class="form-control" name="range-manual" placeholder="Specify Length in Meter / Feet" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>Special Condition</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="special">
                                                                                <option value="PSL1" <?= ($listing->spcl_condition == "PSL1") ? 'selected' : '' ?>>PSL1</option>
                                                                                <option value="PSL2" <?= ($listing->spcl_condition == "PSL2") ? 'selected' : '' ?>>PSL2</option>
                                                                                <option value="Special Drift" <?= ($listing->spcl_condition == "Special Drift") ? 'selected' : '' ?>>Special Drift</option>
                                                                                <option value="Special Bevel" <?= ($listing->spcl_condition == "Special Bevel") ? 'selected' : '' ?>>Special Bevel</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <a href="javascript:void(0)" onclick="toogleRange()" class="btn-range-manual">Input Range manual</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="tab-pane slide-left" id="grade">
                                                                <h4>Specify your pipe's Grade</h4><hr />

                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Yield Strength</label>
                                                                            <input type="text" class="form-control" placeholder="Yield Strength" name="yield" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#yieldstrength-modal"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group p-l-10 b-t b-dashed b-grey p-t-5">
                                                                            <label>Steel Type :</label>
                                                                            <div class="radio radio-success">
                                                                                <input type="radio" id="carbon" value="carbon" name="optionsteel" <?= ($listing->steel_type == 'carbon') ? 'checked' : '' ?>/>
                                                                                <label for="carbon">Carbon</label>
                                                                                <input type="radio" id="cra" value="cra" name="optionsteel" <?= ($listing->steel_type == 'cra') ? 'checked' : '' ?> />
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
                                                                                <input type="radio" id="api" value="api" name="optiongrade" onclick="changeGradeName()"/>
                                                                                <label for="api">API</label>
                                                                                <input type="radio" id="proprietary" value="proprietary" name="optiongrade" onclick="changeGradeName()"/>
                                                                                <label for="proprietary">Proprietary</label>
                                                                                <input type="radio" id="other" value="other" name="optiongrade" onclick="changeGradeName()"/>
                                                                                <label for="other">Other</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group form-group-default form-group-default-select2 required api1">
                                                                            <label>API/Propietary</label>
                                                                            <select class="full-width" data-init-plugin="select2" onchange="checkSourAndChromeContent(this)" name="api1">
                                                                                <option value="Carbon">Carbon</option>
                                                                                <option value="CRA">CRA</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group form-group-default required api1_manual">
                                                                            <label>API/Propietary</label>
                                                                            <input type="text" class="form-control" name="api1_manual" placeholder="API/Propiertary" value="<?= $listing->api_pro_1 ?>"/>
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
                                                                                <input type="radio" id="sour" name="gradesour" value="sour"/>
                                                                                <label for="sour">Sour</label>
                                                                                <input type="radio" id="nonsour" name="gradesour" value="nonsour"/>
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
                                                                                <input type="radio" id="chromeyes" name="gradechrome" value="yes" <?= ($listing->chrome_content == "yes") ? 'checked' : '' ?>/>
                                                                                <label for="chromeyes">Yes</label>
                                                                                <input type="radio" id="chromeno" name="gradechrome" value="no" <?= ($listing->chrome_content == "no") ? 'checked' : '' ?> />
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
                                                                                <input type="radio" id="connectionapi" value="api" name="optionconnection" onchange="changeConnectionName()" <?= ($listing->connect_stand == "api") ? 'checked' : '' ?> />
                                                                                <label for="connectionapi">API</label>
                                                                                <input type="radio" id="connectionproprietary" value="proprietary" name="optionconnection" onchange="changeConnectionName()" <?= ($listing->connect_stand == "proprietary") ? 'checked' : '' ?> />
                                                                                <label for="connectionproprietary">Propietary</label>
                                                                                <input type="radio" id="connectionother" value="other" name="optionconnection" onchange="changeConnectionName()" <?= ($listing->connect_stand == "other") ? 'checked' : '' ?>  />
                                                                                <label for="connectionother">Other</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group form-group-default form-group-default-select2 api2">
                                                                            <label>API/Propietary</label>
                                                                            <select class="full-width" name="api2" data-init-plugin="select2"  onchange="changeConnectionOwner(this)">
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group form-group-default required api2_manual">
                                                                            <label>API/Propietary</label>
                                                                            <input type="text" class="form-control" name="api2_manual" placeholder="API/Propiertary" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2">
                                                                            <label>API/Propietary</label>
                                                                            <select class="full-width" name="api3" data-init-plugin="select2" onchange="changeConnectionName()">
                                                                                <?php
                                                                                foreach(M_connection::select('type')->groupBy('type')->get() as $con):
                                                                                    ?>
                                                                                    <option value="<?= $con->type ?>" <?= ($con->type == $listing->api_pro_3) ? 'selected' : '' ?>><?= $con->type ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Connection Owner : </label>
                                                                            <input type="text" placeholder="Connection Owner" class="form-control"  name="connect_owner" value="<?= $listing->connect_owner ?>"/>
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
                                                                            <select class="full-width" data-init-plugin="select2" name="country" onchange="changeState()" required>
                                                                                <?php
                                                                                foreach(M_country::select('name','id')->orderBy('name', 'ASC')->get() as $country):
                                                                                    ?>
                                                                                    <option value="<?= $country->name ?>" data-id="<?= $country->id ?>" <?= ($listing->country == $country->name) ? 'selected' : '' ?>><?= $country->name ?></option>
                                                                                <?php endforeach; ?>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>State</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="state" required>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Location</label>
                                                                            <input type="text" class="form-control" name="location" placeholder="Location Name" required value="<?= $listing->location ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Street Address</label>
                                                                            <input type="text" class="form-control" name="street" placeholder="Street Address" value="<?= $listing->street_address ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Post Code</label>
                                                                            <input type="text" class="form-control" name="post" placeholder="Post Code" required value="<?= $listing->post_code ?>"/>
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
                                                                            <select class="full-width" data-init-plugin="select2" name="manufact_name"  onchange="changeManufacturer(this)">
                                                                                <option selected disabled value="none">Main Mills Only</option>
                                                                                <?php foreach($mainmills as $mill): ?>
                                                                                    <option data-country="<?= $mill->country ?>" data-year="<?= $mill->year ?>" value="<?= $mill->name ?>" <?= ($mill->name == $listing->manufact_name) ? 'selected' : '' ?>><?= $mill->name ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Other</label>
                                                                            <input type="text" class="form-control" name="other" placeholder="Other Mill" value="<?= $listing->other ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>Manufacturing Country</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="manufact_country" required>
                                                                                <!--<optgroup label="Asia">
                                                                                    <option value="Indonesia">Indonesia</option>
                                                                                    <option value="Malaysia">Malaysia</option>
                                                                                </optgroup>
                                                                                <optgroup label="Europe">
                                                                                    <option value="Holland">Holland</option>
                                                                                    <option value="Germany">Germany</option>
                                                                                    <option value="Argentina">Argentina</option>
                                                                                </optgroup>-->
                                                                                <?php
                                                                                foreach(M_country::select('name','id')->orderBy('name', 'ASC')->get() as $country):
                                                                                    ?>
                                                                                    <option value="<?= $country->name ?>" data-id="<?= $country->id ?>"  <?= ($listing->manufact_country == $country->name) ? 'selected' : '' ?>><?= $country->name ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default form-group-default-select2 required">
                                                                            <label>Year of Manufacture</label>
                                                                            <select class="full-width" data-init-plugin="select2" name="manufact_year" required>
                                                                                <?php
                                                                                $startDate = date('Y') - 20;
                                                                                $endDate = Date('Y');
                                                                                $dates = range($endDate, $startDate);
                                                                                foreach($dates as $date):
                                                                                    ?>
                                                                                    <option value="<?= $date ?>" <?= ($listing->y_manufact == $date) ? 'selected' : '' ?>><?= $date ?></option>
                                                                                <?php
                                                                                endforeach;
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="tab-pane slide-left" id="price">

                                                                <h4>Specify your price details</h4><hr />

                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Price <span class="text-muted" style="color: #aaa;text-transform: lowercase">in per meter or foot or Metric Tonne or piece</span></label>
                                                                            <input type="text" placeholder="Price (USD)" name="price" class="form-control" required value="<?= $listing->price ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <a style="background:#343B45;border-color:#343B45;width:100%" class="btn btn-primary" data-toggle="modal" data-target="#price-modal" onclick="similarPrice()"><i style="padding:13px 0px" class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default required">
                                                                            <label>Quantity  <span class="text-muted" style="color: #aaa;text-transform: lowercase">in joints or meter or feet</span></label>
                                                                            <input type="text" placeholder="Quantity" name="quantity" class="form-control" required value="<?= $listing->quantity ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <h4>Certificate Details</h4><hr />

                                                                    <div class="col-md-4">
                                                                        <div class=" form-group form-group-default">
                                                                            <label>Material Certificate <span class="text-muted" style="color: #aaa;text-transform: lowercase">upload new pdf file</span></label>
                                                                            <input type="file" class="form-control" name="material" multiple/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class=" form-group form-group-default">
                                                                            <label>Inspection Report <span class="text-muted" style="color: #aaa;text-transform: lowercase">upload new pdf file</span></label>
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
<script>
    var base_url = "<?= base_url() ?>";

    $(document).ready(function () {
        $('.api1_manual').hide();
        $('.api2_manual').hide();

        /**
         *  GENERAL tab
         **/
        changeProductType($('select[name="product"]'));
        $('input[name="od"]').val("<?= $listing->od ?>");
        changeUW("<?= $listing->od ?>");
        $('input[name="weight"').val("<?= $listing->weight ?>");
        var range = "<?= $listing->range_gen ?>";
        if(range=="R1" || range == "R2" || range == "R3"){
            $(".btn-range-manual").hide();
            $(".range-manual").hide();
            $('select[name="range"]').val(range);
        } else {
            $(".range").hidden();
            $('input[name="range"]').val(range);
        }

        /**
         *  GRADE tab
         **/
        $('input[name="yield"]').val("<?= $listing->yield ?>");
        $('input[name="optiongrade"][value="<?= $listing->grade_type ?>"]').prop('checked', true)
        changeGradeName();
        if("<?= $listing->sour_class ?>" == 'sour'){
            $('[name="gradesour"][value="sour"]').prop('checked', true); //Men-deselect GRADE TYPE
        } else if ("<?= $listing->sour_class ?>" == 'nonsour'){
            $('[name="gradesour"][value="nonsour"]').prop('checked', true); //Men-deselect GRADE TYPE
        }

        /**
         *  CONNECTION tab
         **/
        if("<?= $listing->connect_stand ?>"=="other"){
            $(".api2").hide();
            $('input[name="api2_manual"]').val("<?= $listing->api_pro_2 ?>");
        }
        changeConnectionName()

        /**
         *  LOCATION tab
         **/
        changeState()
    });


    function toogleRange() {
        if ($(".range").is(':hidden')) {
            $(".range").show();
            $(".range-manual").hide();
            $('.btn-range-manual').text('Input Range manual');
        } else {
            $(".range").hide();
            $(".range-manual").show();
            $('.btn-range-manual').text('Toggle select Range');
        }
    }

    function changeProductType(that) {
        $('input[name="od"]').val(''); //Default kosong
        $('select[name="api1"]').html(''); //Mengembalikan API/PROPIERTARY ke select default
        $('[name="optiongrade"]').prop('checked', false); //Men-deselect GRADE TYPE
        $('[name="gradesour"]').prop('checked', false); //Men-deselect GRADE TYPE
        $('select[name="speciality[]"]').html(''); //Default list kosong
        $('input[name="yield"]').val(''); //Default YIELD STRENGTH kosong
        $('input[name="od"]').val(''); //Default OD kosong
        $('input[name="weight"]').val(''); //Default WEIGHT kosong


        if($(that).find(":selected").text() == 'CONDUCTOR'){
            $('input[name="weight"]').prop('disabled', true);
            $(".btn-range-manual").show();
            $('a[data-target="#weight-modal"]').prop('disabled', true);
            // $('input[name="weight_type"]').prop('disabled', true);
        } else {
            $('input[name="weight"]').prop('disabled', false);
            $(".btn-range-manual").hide();
            $('a[data-target="#weight-modal"]').prop('disabled', false);
            // $('select[name="weight_type"]').prop('disabled', false);
        }


        if($(that).find(":selected").text() == 'COUPLING'){
            $('select[name="range"]').prop('disabled', true);
        } else {
            $('select[name="range"]').prop('disabled', false);
        }

        if($(that).find(":selected").text() == 'PUP JOINTS'){
            $('select[name="range"]').html('');
            $('select[name="range"]').append(new Option("SPECIFY LENGTH in Meter / Feet", 0, false, false)).trigger('change');
            $(".range").hide();
            $(".range-manual").show();
        } else {
            $(".range").show();
            $(".range-manual").hide();

            if($(that).find(":selected").text() == 'CASING' || $(that).find(":selected").text() == 'TUBING'){
                $('select[name="range"]').html('');
                $('select[name="range"]').append(new Option("R1", "R1", false, false)).trigger('change');
                $('select[name="range"]').append(new Option("R2", "R2", false, false)).trigger('change');
                $('select[name="range"]').append(new Option("R3", "R3", false, false)).trigger('change');

            } else {
                $('select[name="range"]').html('');
                $('select[name="range"]').append(new Option("R1", "R1", false, false)).trigger('change');
                $('select[name="range"]').append(new Option("R2", "R2", false, false)).trigger('change');
                $('select[name="range"]').append(new Option("R3", "R3", false, false)).trigger('change');
            }
        }

        // Kalau yg kepilih itu product type-nya
        if($(that).find(":selected").data('id') != undefined){
            changeOD();
        }
    }

    /**
     * Untuk ngerubah OD / Outside Diameter
     */
    function changeOD(){
        var idtipe = $('select[name="product"]').find(':selected').data('id');
        // Load data for the table's content from an Ajax source
        var table = $('.table-od').DataTable({
            "order": [],
            "bDestroy":true,
            "autoWidth": false,
            "ajax": {
                "url": base_url + "api/get_od",
                "data": {
                    "id_product_type": idtipe
                },
                "type": "POST"
            },
            "columns": [
                {"data": "dm_od_label",width:0},
                {"data": "dm_od_imperial",width:0},
                {"data": "dm_od_metric",width:0},
                {"data": "btn",width:0}
            ],

            "columnDefs": [
                {
                    "targets": [], //last column
                    "orderable": false, //set not orderable
                }
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "infoFiltered":"",
                "processing": ""
            },
        });
        //Handle click
        $(".table-od tbody").on('click', 'tr', function() {
            var index = table.row(this).index();

            if(table.row(index).data() != undefined){
                var od = table.row(index).data().dm_od_label;
                $("input[name='od']").val(od);
                $("input[name='od']").focus();
                $("#od-modal").modal('hide');
            }

            changeUW(od)
        });
    }

    /**
     * Untuk ngerubah UNIT WEIGHT
     */
    function changeUW(od) {
        $("input[name='weight']").val("");
        var table = $('.table-weight').DataTable({
            "order": [],
            "bDestroy":true,
            "autoWidth": false,
            "ajax": {
                "url": base_url + "api/get_weight",
                "data": {
                    "od": od
                },
                "type": "POST"
            },
            "columns": [
                {"data": "dm_uw_imperial",width:0},
                {"data": "dm_uw_metric",width:0},
                {"data": "btn",width:0}
            ],

            "columnDefs": [
                {
                    "targets": [], //last column
                    "orderable": false, //set not orderable
                }
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "infoFiltered":"",
                "processing": ""
            },
        });
        //Handle click
        $(".table-weight tbody").on('click', 'tr', function() {
            var index = table.row(this).index();

            if($("select[name='product']").find(':selected').text() != "CONDUCTOR"){
                if(table.row(index).data() != undefined){
                    var od = table.row(index).data().dm_uw_imperial;
                    $("input[name='weight']").val(od);
                    $("input[name='weight']").focus();
                    $("#weight-modal").modal('hide');
                }
            }
        });
    }

    /**
     * Kalau ngerubah GRADE TYPE
     */
    function changeGradeName(){
        var target = $('input[type=radio][name=optiongrade]:checked');
        switch(target.val()) {
            case 'api':
            case 'proprietary':
                $('.api1').show();
                $('.api1_manual').hide();

                changeYieldStrength(target);
                $('select[name="speciality[]"]').html('');

                $.ajax({
                    url: 		base_url + "api/get_grade_name",
                    method: 	"POST",
                    data:  		{grade_type: target.val(), product_type: $('select[name="product"]').find(':selected').text()}
                })
                    .done(function(data){
                        $('select[name="api1"]').html('');
                        var grades = data.grade;
                        var option = "";
                        var isCarbon = "";
                        for(var i = 0; i < grades.length; i++) {
                            if(grades[i]["type"] == "Carbon"){
                                isCarbon = "Carbon";
                            } else {
                                isCarbon = "CRA";
                            }
                            //selected
                            var isSelected = "";
                            if(grades[i]['name'] == "<?= $listing->api_pro_1 ?>"){
                                isSelected = "selected";
                            }
                            option += "<option  data-yield='"+ grades[i]['min_yl_metric'] +"' data-id='"+ grades[i]['id'] +"' value='" + grades[i]['name'] + "'" + isSelected + ">" + grades[i]['name'] + " &mdash; " + isCarbon + "</option>";
                        }
                        $('select[name="api1"]').append(option);
                        checkSourAndChromeContent($('select[name="api1"]'));
                    });
                break;
            case 'other':
                $('.api1').hide();
                $('.api1_manual').show();
                $('.api1_manual').val("");
                break;
        }
    }

    /**
     * Untuk ngerubah YIELD STRENGTH berdasarkan API/PROPIETARY
     */
    function changeYieldStrength(that) {
        var table = $('.table-yieldstrength').DataTable({
            "order": [],
            "bDestroy":true,
            "autoWidth": false,
            "ajax": {
                "url": base_url + "api/get_yield_strength",
                "data": {
                    "grade_type": $(that).val(),
                    "product_type": $('select[name="product"]').find(':selected').text()
                },
                "type": "POST"
            },
            "columns": [
                {"data": "name",width:0},
                {"data": "min_yl_metric",width:0},
                {"data": "min_yl_imperial",width:0},
                {"data": "btn",width:0}
            ],

            "columnDefs": [
                {
                    "targets": [], //last column
                    "orderable": false, //set not orderable
                }
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "infoFiltered":"",
                "processing": ""
            },
        });
        //Handle click
        $(".table-yieldstrength tbody").on('click', 'tr', function() {
            var index = table.row(this).index();

            if(table.row(index).data() != undefined){
                var od = table.row(index).data().min_yl_metric;
                $("input[name='yield']").val(od);
                $("input[name='yield']").focus();
                $("#yieldstrength-modal").modal('hide');
            }
        });
    }

    /**
     * Mengambil data apakah GRADE itu sour apa enggak
     * @param that
     */
    function checkSourAndChromeContent(that) {
        $('input[name="yield"]').val($(that).find(':selected').data('yield')); //select option
        var idgrade = $(that).find(':selected').data('id');
        $.ajax({
            url: 		base_url + "api/get_sour_and_chromecontent",
            method: 	"POST",
            data:  		{idgrade: idgrade}
        })
            .done(function(data){
                $('select[name="speciality[]"]').html('');
                var speciality = data.specialities;
                var option = "";
                var speciality_text = "";
                for(var i = 0; i < speciality.length; i++) {
                    //selected
                    var isSelected = "";
                    if("<?= $listing->speciality ?>".includes(speciality[i]['name'])){
                        isSelected = "selected";
                    }
                    option += "<option value='" + speciality[i]['name'] + "' " + isSelected + ">" + speciality[i]['name'] + "</option>";
                    speciality_text += " " + speciality[i]['name'];
                }
                $('select[name="speciality[]"]').append(option);

                if(speciality_text.includes("Sour")){
                    $('input[type=radio][name=gradesour][value=sour]').prop('checked', 'checked');
                } else {
                    $('input[type=radio][name=gradesour][value=nonsour]').prop('checked', 'checked');
                }
            });
    }

    /**
     * Mengambil data CONNECTION NAME
     */
    function changeConnectionName() {
        switch($("input[type=radio][name=optionconnection]:checked").val()) {
            case 'api':
            case 'proprietary':
                $('.api2').show();
                $('.api2_manual').hide();

                $.ajax({
                    url: 		base_url + "api/get_connection_name",
                    method: 	"POST",
                    data:  		{con_owner: $("input[type=radio][name=optionconnection]:checked").val(), con_type: $('select[name="api3"]').find(':selected').val()}
                })
                    .done(function(data){
                        $('select[name="api2"]').html('');
                        var con = data.connection;
                        var option = "";
                        for(var i = 0; i < con.length; i++) {
                            //selected
                            var isSelected = "";
                            if(con[i]['name'] == "<?= $listing->api_pro_2 ?>"){
                                isSelected = "selected";
                            }
                            option += "<option data-owner='"+ con[i]['owner'] +"' value='" + con[i]['name'] + "'" + isSelected + ">" + con[i]['name'] + "</option>";
                        }
                        $('select[name="api2"]').append(option);
                        changeConnectionOwner($('select[name="api2"]'));
                    });
                break;
            case 'other':
                $('.api2').hide();
                $('.api2_manual').show();
                $('.api2_manual').val("");
                break;
        }
    }

    /**
     * Mengambil data CONNECTION OWNER
     * @param that
     */
    function changeConnectionOwner(that) {
        console.log($(that).find(':selected').data('owner'));
        $("input[name='connect_owner']").val($(that).find(':selected').data('owner'));
    }

    /**
     * Mengambil STATE dari COUNTRY
     */
    function changeState() {
        var country = $("select[name='country']").find(':selected').data('id');
        $.ajax({
            url: base_url + "api/get_state",
            method: "POST",
            data: {idcountry: country}
        })
            .done(function (data) {
                $('select[name="state"]').html('');
                var state = data.states;
                var option = "";
                for(var i = 0; i < state.length; i++) {
                    var isSelected = "";
                    if(state[i]['name'] == "<?= $listing->state ?>"){
                        isSelected = "selected";
                    }
                    option += "<option value='" + state[i]['name'] + "'" + isSelected + ">" + state[i]['name'] + "</option>";
                }
                $('select[name="state"]').append(option);
            });
    }

    function changeManufacturer(that) {
        var manufac = $(that).find(':selected');
        console.log(manufac.data('country'));
        $('select[name="manufact_country"]').val(manufac.data('country')).trigger('change');
        $('select[name="manufact_year"]').val(manufac.data('year')).trigger('change');
    }
    
    function similarPrice() {
        var od = $('input[name="od"]').val();
        var table = $('.table-price').DataTable({
            "order": [],
            "bDestroy":true,
            "autoWidth": false,
            "ajax": {
                "url": base_url + "api/get_similar_product",
                "data": {
                    "id": "<?= $listing->id ?>",
                    "od": od,
                    "api_pro_1": $('select[name="api1"]').find(':selected').val()
                },
                "type": "POST"
            },
            "columns": [
                {"data": "product_type",width:0},
                {"data": "od",width:0},
                {"data": "price",width:0}
            ],

            "columnDefs": [
                {
                    "targets": [], //last column
                    "orderable": false, //set not orderable
                }
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "infoFiltered":"",
                "processing": ""
            },
        });
    }
</script>

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
<div class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="yieldstrength-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Yield Strength
                    <br>
                    <small class="text-muted">Choose GRADE TYPE first, then click button to select yield strength</small>
                </h4>
                <hr>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-yieldstrength">
                    <thead>
                    <tr>
                        <th>Grade</th>
                        <th>Minimum Yields Metric (Mpa)</th>
                        <th>Minimum Yields Imperial (ksi)</th>
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
