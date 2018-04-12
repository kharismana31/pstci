<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="content">
    <div class="social-wrapper">
      <div class="social" data-pages="social">
        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax" data-social="cover">
          <div class="cover-photo">
            <img alt="Cover photo" src="<?php echo site_url('') ?>assets/images/bg-product.jpg" />
          </div>
          <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <div class="inner">
              <div class="pull-bottom bottom-left m-b-40">
                <h5 class="text-white no-margin"><span class="semi-bold">Great Products</span> comes with <span class="semi-bold">Great Responsibilites</span></h5>
                <h1 class="text-white no-margin">Fill the form below to start selling you <span class="semi-bold">Great Products</span></h1>
              </div>
            </div>
            <div class="top-left m-t-80 m-l-30">
                <img src="<?php echo site_url() ?>assets/images/mitologo2.png" />
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
                  <?php echo validation_errors(); ?>

                      <form id="form-login" action="" role="form">
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
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>Product Type</label>
                                        <select class="full-width" data-init-plugin="select2" name="type_item" required>
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
                                        <input type="number" class="form-control" placeholder="OD" name="od_item" required />
                                      </div>
                                   
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default required">
                                        <label>Weight</label>
                                        <input type="number" class="form-control" placeholder="Weight" name="weight_item" required />
                                      </div>
                                      
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>Range</label>
                                        <select class="full-width" data-init-plugin="select2" name="rage">
                                          <option>R1</option>
                                          <option>R2</option>
                                          <option>R3</option>
                                        </select>
                                      </div>
                                         
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>Special Condition</label>
                                        <select class="full-width" data-init-plugin="select2" name="special_condition">
                                          <option>PSL1</option>
                                          <option>PSL2</option>
                                          <option>Special Drift</option>
                                          <option>Special Bevel</option>
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
                                        <input type="text" class="form-control" placeholder="Yield Strength" name="yield_strengt" required />
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
                                          <input type="radio" id="carbon" value="carbon" name="steel_type" />
                                          <label for="carbon">Carbon</label>
                                          <input type="radio" id="cra" value="cra" name="steel_type" />
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
                                          <input type="radio" id="api" value="api" name="grade_type" />
                                          <label for="api">API</label>
                                          <input type="radio" id="proprietary" value="proprietary" name="grade_type" />
                                          <label for="proprietary">Propietary</label>
                                          <input type="radio" id="other" value="other" name="grade_type" />
                                          <label for="other">Other</label>
                                        </div>
                                      </div>
                                  
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>API/Propietary</label>
                                        <select class="full-width" data-init-plugin="select2" name="api1"required>
                                          <option>Carbon</option>
                                          <option>CRA</option>
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
                                        <input type="radio" id="sour" name="sour_classificasion" value="sour" />
                                        <label for="sour">Sour</label>
                                        <input type="radio" id="nonsour" name="sour_classificasion" value="nonsour" />
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
                                        <input type="radio" id="chromeyes" name="chrome_content" value="yes" />
                                        <label for="chromeyes">Yes</label>
                                        <input type="radio" id="chromeno" name="chrome_content" value="no" />
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
                                        <select class="full-width" data-init-plugin="select2" name="speciality" multiple>
                                          <option>High Collapse</option>
                                          <option>High Temperature</option>
                                          <option>High Ductility</option>
                                          <option>High Pressure</option>
                                          <option>High Strength</option>
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
                                          <input type="radio" id="connectionapi" value="api" name="conection_standart" />
                                          <label for="connectionapi">API</label>
                                          <input type="radio" id="connectionproprietary" value="proprietary" name="conection_standart" />
                                          <label for="connectionproprietary">Propietary</label>
                                          <input type="radio" id="connectionother" value="other" name="conection_standart" />
                                          <label for="connectionother">Other</label>
                                        </div>
                                      </div>
                                     
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group form-group-default form-group-default-select2">
                                        <label>API/Propietary</label>
                                        <select class="full-width" data-init-plugin="select2" name="api2">
                                          <option>SC</option>
                                          <option>LC</option>
                                          <option>BC</option>
                                          <option>NU</option>
                                          <option>EU</option>
                                          <option>IJ</option>
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
                                        <select class="full-width" data-init-plugin="select2" name="api3">
                                          <option>Integral</option>
                                          <option>Flush</option>
                                          <option>Thread and Couple</option>
                                          <option>Conductor</option>
                                        </select>
                                      </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Connection Owner : </label>
                                        <input type="text" value="Based on the Connection Name" class="form-control" name="conection_owner" disabled />
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
                                        <select class="full-width" name="country" data-init-plugin="select2" required>
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
                                     
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>State</label>
                                        <select class="full-width" data-init-plugin="select2" name="state" required>
                                          <optgroup label="Java">
                                            <option>East Java</option>
                                            <option>DKI Jakarta</option>
                                            <option>West Java</option>
                                          </optgroup>
                                          <optgroup label="Sumatera">
                                            <option>West Sumatera</option>
                                            <option>North Sumatera</option>
                                            <option>South Sumatera</option>
                                          </optgroup>
                                        </select>
                                      </div>
                                    
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default required">
                                        <label>Location</label>
                                        <input type="text" class="form-control" placeholder="Location Name" name="location" required />
                                      </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default">
                                        <label>Street Address</label>
                                        <input type="text" class="form-control" placeholder="Streed Address" name="street_addres" />
                                      </div>
                                 
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default required">
                                        <label>Post Code</label>
                                        <input type="number" class="form-control" placeholder="Post Code" name="post_code" required />
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
                                        <select class="full-width" data-init-plugin="select2" name="manufacturer_name" required>
                                          <option selected disabled value="none">Main Mills Only</option>
                                          <option>Inosoft</option>
                                          <option>Inosoft</option>
                                          <option>Inosoft</option>
                                        </select>
                                      </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default required">
                                        <label>Other</label>
                                        <input type="text" class="form-control" placeholder="Other Mill" name="manufacturer_other" required />
                                      </div>
                                
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>Manufacturing Country</label>
                                        <select class="full-width" data-init-plugin="select2" name="manufacturing_country"required>
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
                                   
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default form-group-default-select2 required">
                                        <label>Year of Manufacture</label>
                                        <select class="full-width" data-init-plugin="select2" name="year_manufacture" required>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
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
                                        <input type="number" placeholder="Price" class="form-control" name="price" required />
                                      </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group form-group-default required">
                                        <label>Quantity</label>
                                        <input type="text" placeholder="Quantity" class="form-control" name="quantity" required />
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
                                        <input type="file" class="form-control" name="mcertificate" />
                                      </div>
                                    
                                    </div>
                                    <div class="col-md-4">
                                      <div class=" form-group form-group-default">
                                        <label>Inspection Report</label>
                                        <input type="file" class="form-control" name="icertificate" />
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
                                  <h3>You have completed your listing form. Click "Finish" to publish your listing</h3>
                                </div>

                                <div class="padding-20 bg-white">
                                    <ul class="pager wizard">
                                      <li class="next">
                                        <button class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" type="button">
                                          <span>Next</span>
                                        </button>
                                      </li>
                                      <li class="next finish">
                                        <button type="submit" class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" value="upload">
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
