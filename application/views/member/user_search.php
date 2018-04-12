<!DOCTYPE html>
<html>
<head>
	<title>pst project</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Form Elements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header">

    <div class="header bg-info-dark">
      <div class="container-fluid relative">
        <div class="pull-left hidden-md hidden-lg m-t-10 m-r-15">
          <a href="user.html"><img src="assets/img/dashboardinactive.png" /></a>
        </div>
        <div class="pull-left sm-table hidden-xs hidden-sm m-t-10 m-r-15">
          <a href="user.html"><img src="assets/img/dashboardinactive.png" /></a>
        </div>

        <div class="pull-left m-t-20 m-r-10">
          <a href="user_search.html" class="text-white m-l-10"><span class="pg-search"></span> Search</a>
          <a href="user_create_listing.html" class="text-white m-l-10"><span class="fa fa-plus-circle p-r-5"></span>Entry a Product</a>
        </div>
        
        <div class="dropdown">
          <div class="pull-left">
            <a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Message <span class="caret"></span></a>
            <ul class="dropdown-menu" class="text-master" role="menu">
              <li><a href="user_create_message.html"><span class="pg-mail p-r-5"></span> Sent a Message</a></li>
              <li><a href="user_view_inbox.html"><span class="pg-inbox p-r-5"></span> View Inbox</a></li>
            </ul>
          </div>
          <div class="pull-left">
            <a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Manage your products <span class="caret"></span></a>
              <ul class="dropdown-menu" class="text-master" role="menu">
                <li><a href="user_listing_analysis.html"><span class="fa fa-area-chart p-r-5"></span> View Listing Analysis</a></li>
                <li><a href="user_listing.html"><span class="fa fa-file p-r-5"></span> View my Products</a></li>
              </ul>
          </div>
        <div class="pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold text-white">User</span>
            </div>
            <div class="pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="images/user.png" alt="" data-src="images/user.png" data-src-retina="images/user.png" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                </li>
                <li><a href="#"><i class="pg-signals"></i> Help</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="public_login.html" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
        </div>
      </div>
    </div>

    <div class="jumbotron bg-search5 m-t-60 p-l-100 p-t-100 p-r-100 p-b-100">
        <div class="jumbotron bg-form" style="border-radius: 20px; border: solid 1px grey;">
            <div class="m-t-40 m-l-40 m-r-40 m-b-40">
            <h3 class="p-t-20 p-l-20 p-b-20 text-white">Search</h3>
            <form id="form-search" class="p-l-20 p-r-20" role="form" action="public_result.html">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group form-group-default form-group-default-select2">
                        <label>Product Type</label>
                        <select class="full-width" data-init-plugin="select2">
                            <option>Casing</option>
                            <option>Tubing</option>
                            <option>Couplings</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group form-group-default form-group-default-select2">
                            <label>OD</label>
                            <select class="full-width" data-init-plugin="select2">
                                <option>2.0</option>
                                <option>3.0</option>
                                <option>3.5</option>
                            </select>
                            </div>
                    </div>
                    <div class="col-md-4">
                                <div class="form-group form-group-default form-group-default-select2">
                                <label>Weight</label>
                                <select class="full-width" data-init-plugin="select2" disabled>
                                </select>
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

    
  <div class="container-fluid container-fixed-lg footer">
    <div class="copyright sm-text-center">
      <p class="small no-margin pull-left sm-pull-reset">
        <span class="pull-left b-r b-dashed b-grey p-r-5"><img src="images/icon.png"></span>
        <span class="hint-text p-l-5">Copyright &copy; 2017 </span>
        <span class="font-montserrat">INOSOFT</span>.
        <span class="hint-text">All rights reserved. </span>
        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
      </p>
      <p class="small no-margin pull-right sm-pull-reset">
        <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Heart</span>
      </p>
      <div class="clearfix"></div>
    </div>
  </div>
	


    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
    <script type="text/javascript" src="assets/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <script src="assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
    <script src="assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
    <script src="assets/plugins/handlebars/handlebars-v4.0.5.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/form_elements.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
</body>
</html>