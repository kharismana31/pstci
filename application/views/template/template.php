<!DOCTYPE html>
<head>
	<title>
		<?php 
			if(!empty($this->session->userdata('access') == 'a')){
				echo 'Admin - Dashboard';
			}
			elseif(!empty($this->session->userdata('access') == 'm')){
				echo 'User - Dashboard';
			}
			else{
				echo 'Join Us Now - Login';
			}
		?>
	</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	
	<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/pages/ico/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/pages/ico/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/pages/ico/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/pages/ico/152.png">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/favicon.ico" />
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<link href="<?php echo base_url()?>assets/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url()?>assets/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url()?>assets/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
	
	<!-- Data Tables -->
	<link href="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
	
	<link href="<?php echo base_url()?>assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url()?>assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="<?php echo base_url()?>assets/pages/css/pages.css" rel="stylesheet" type="text/css" />

	<link class="main-stylesheet" href="<?php echo base_url()?>assets/assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
	
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
	
	<style type="text/css">
		.select2-dropdown {
		z-index: 100000;
		}
	</style>
	
</head>
<body class="fixed-header">
	
	<div class="header bg-info-dark">
		<div class="container-fluid relative">
			<div class="pull-left hidden-md hidden-lg m-t-10 m-r-15">
				<a href="<?php echo site_url()?>"><img src="<?php echo base_url()?>assets/assets/img/dashboardinactive.png" /></a>
			</div>
			<div class="pull-left sm-table hidden-xs hidden-sm m-t-10 m-r-15">
				<a href="<?php echo site_url()?>"><img src="<?php echo base_url()?>assets/assets/img/dashboardinactive.png" /></a>
			</div>
			
			<?php 
				if(!empty($this->session->userdata('access') == 'a')){
				?>
				<div class="pull-left m-t-20 m-r-10">
					<a href="<?= base_url('public/C_public/search') ?>" class="text-white"><span class="pg-search"></span> Search</a>
				</div>
				
				<div class="pull-left">
					<a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Administrative <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo site_url('admin/Admin') ?>">Admin</a></li>
						<li><a href="<?php echo site_url('admin/User') ?>">User Registration</a></li>
						<li><a href="<?php echo base_url('admin/Statistic');?>">Site Statistic</a></li>
						<li><a href="<?php echo site_url('admin/Broadcasting') ?>">Broadcasting</a></li>
						<li><a href="<?php echo base_url('admin/Registered');?>">Registered User</a></li>
					</ul>
				</div>
				<div class="pull-left">
					<a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Listing <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo site_url('admin/Listing')?>">Entry a Product</a></li>
						<li><a href="<?php echo site_url('admin/View_listing');?>">View Products (by customer)</a></li>
                        <li><a href="<?php echo base_url('admin/Approval');?>">Approval to Publish
                                <?php
                                $ci =& get_instance();
                                $ci->load->model('m_listing');
                                ?>
                                <label class="label label-danger"><?= $ci->m_listing->active_record() ?></label>
                            </a>
                        </li>
<!--						<li><a href="admin_mill_entry.html">Mill Entry Form</a></li>-->
					</ul>
				</div>
                    <div class="pull-left">
                        <a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Master <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('admin/Manufacturer')?>">Main Mill</a></li>
                            <li><a href="<?php echo site_url('admin/Connection')?>">Connection</a></li>
                            <li><a href="<?php echo site_url('admin/Grade')?>">Grade</a></li>
                            <li><a href="<?php echo site_url('admin/Dimension')?>">Dimension</a></li>
                        </ul>
                    </div>

                    <!--
                    MEMBER MENUU
                    -->
				<?php 
				}
				elseif(!empty($this->session->userdata('access') == 'm')){
				?>
				<div class="pull-left m-t-20 m-r-10">
					<a href="user_search.html" class="text-white m-l-10"><span class="pg-search"></span> Search</a>
					<a href="<?php site_url() ?>C_listing" class="text-white m-l-10"><span class="fa fa-plus-circle p-r-5"></span>Entry a Product</a>
				</div>
				
				<div class="pull-left">
					<a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Message <span class="caret"></span></a>
					<ul class="dropdown-menu text-master" role="menu">
						<li><a href="<?php echo site_url('member/C_message') ?>"><span class="pg-mail p-r-5"></span> Sent a Message</a></li>
						<li><a href="<?php echo site_url('member/Inbox') ?>"><span class="pg-inbox p-r-5"></span> View Inbox</a></li>
					</ul>
				</div>
				<div class="pull-left">
					<a class="dropdown-default btn-dropdown-toggle p-b-10 p-l-5 p-t-20 p-r-15 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Manage your products <span class="caret"></span></a>
					<ul class="dropdown-menu text-master" role="menu">
						<li><a href="<?php site_url() ?>Listing_analysis"><span class="fa fa-area-chart p-r-5"></span> View Listing Analysis</a></li>
						<li><a href="<?php site_url() ?>Listing_product"><span class="fa fa-file p-r-5"></span> View my Products</a></li>
					</ul>
				</div>
				<?php
				}
				else{
				?>
				<div class="pull-left m-t-20 m-r-10">
					<a href="<?php echo site_url('public/C_public/search')?>" class="text-white m-l-10"><span class="pg-search"></span> Search</a>
					<a href="<?php echo site_url('public/C_public')?>" class="text-white m-l-10">Compare</a>
				</div>
				<?php 
				}
			?>
			<div class="dropdown">
				<div class="pull-right">
					<!-- START User Info-->
					<div class="visible-lg visible-md m-t-10">
						<div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
							<span class="semi-bold text-white">
								<?php 
									if(!empty($this->session->userdata('access') == 'a')){
										echo $this->session->userdata('fname');
									}
									elseif(!empty($this->session->userdata('access') == 'm')){
										echo $this->session->userdata('fname');
									}
									else{
										echo 'You are not login yet';
									}
								?>
							</span>
						</div>
						<div class="pull-right">
							<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="thumbnail-wrapper d32 circular inline m-t-5">
									<img src="<?php echo base_url()?>assets/images/user.png" alt="" data-src="<?php echo base_url()?>assets/images/user.png" data-src-retina="<?php echo base_url()?>assets/images/user.png" width="32" height="32">
								</span>
							</button>
							<ul class="dropdown-menu profile-dropdown" role="menu">
								
								<?php 
									if(!empty($this->session->userdata('access') == 'a')){
									?>
									<li>
										<a href="<?php echo site_url('admin/Inbox'); ?>"><i class="pg-mail"></i><span class="number-badge badge badge-dark"></span> Message</a>
									</li>
                                        <li>
                                            <a href="<?php echo site_url('admin/Setting'); ?>"><i class="pg-settings"></i> Settings</a>
                                        </li>
									<?php
									}
									elseif(!empty($this->session->userdata('access') == 'm')){
									?>
									<li>
										<a href="<?php echo site_url('member/Inbox'); ?>"><i class="pg-mail"></i><span class="number-badge badge badge-dark"></span> Message</a>
									</li>									
									<?php
									}
									else{
									}
								?>
								
								<?php 
									if(!empty($this->session->userdata('logged_in'))){
									?>
									<li class="bg-master-lighter">
										
										<a href="<?php echo site_url('C_auth/logout'); ?>" class="clearfix">
											<span class="pull-left">Logout</span>
											<span class="pull-right"><i class="pg-power"></i></span>
										</a>
									</li>
									<?php 
									}
									?>
							</ul>
						</div>
					</div>
					<!-- END User Info-->
				</div>
			</div>
		</div>
	</div>
	
	<?php echo $contents;?>
	
	<div class="page-content-wrapper">
		<div class="content">
		</div>
		<div class="container-fluid container-fixed-lg footer">
			<div class="copyright sm-text-center">
				<p class="small no-margin pull-left sm-pull-reset">
					<span class="pull-left b-r b-dashed b-grey p-r-5"><img src="<?php echo site_url()?>assets/images/icon.png"></span>
					<span class="hint-text p-l-5">Copyright &copy; <?php echo date('Y');?> </span>
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
	</div>
	
	<script src="<?php echo base_url()?>assets/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/select2/js/select2.full.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/classie/classie.js"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/dropzone/dropzone.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
	
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
	
	<!-- Datatables-->
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
	
	<script src="<?php echo base_url()?>assets/assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<!-- END VENDOR JS -->
	<!-- BEGIN CORE TEMPLATE JS -->
	<script src="<?php echo base_url()?>assets/pages/js/pages.min.js"></script>
	<!-- END CORE TEMPLATE JS -->
	<!-- BEGIN PAGE LEVEL JS -->
	<script src="<?php echo base_url()?>assets/assets/js/form_wizard.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/assets/js/scripts.js" type="text/javascript"></script>	
	
	<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
	<?php
		if(isset($script_captcha)){ 
			echo $script_captcha;
		}
	?>
	
	<script type="text/javascript">
		var base_url = "<?= base_url() ?>";
		var url;
		<?php 
			if(!empty($this->session->userdata('access') == 'a')){
			?>
			
			url = '<?php echo site_url('admin/Broadcasting/admin_number'); ?>';
			
			<?php 
			}
			elseif(!empty($this->session->userdata('access') == 'm')){
			?>
			
			url = '<?php echo site_url('member/C_message/member_number'); ?>';
			
			<?php
			}
		?>
		
		setInterval(function() {
			$.ajax({
				url: url,
				type: 'GET',
				success: function(data) {
					$('.number-badge').text(data);
				}
			});
		}, 1000);	
		
	</script>
</body>
</html>	
