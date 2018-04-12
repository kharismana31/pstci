<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social " data-pages="social">
				
				
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					<div class="cover-photo">
						<img alt="Cover photo" src="<?php echo site_url('') ?>assets/images/discuss.png" />
					</div>
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h5 class="text-white no-margin">Get in touch with our network in no time</h5>
								<h1 class="text-white no-margin">Manage your <span class="semi-bold">Messages</span> here</h1>
							</div>
						</div>
						<div class="top-left m-t-80 m-l-30">
							<img src="<?php echo site_url('') ?>assets/images/mitologo2.png" />
						</div>
					</div>
				</div>
				
				<div class="feed" style="overflow: hidden;">
					<div class="day no-margin">
						<div class="card no-border full-width">
							<div class="row">
								<div class="bg-master-lightest">
									<div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
										<form id="form-login" role="form" method="post" action="<?php echo site_url('member/C_message/create_message') ?>">
											<div class="col-md-4">
												<div class="panel panel-bordered bg-info-lighter">
													<div class="panel-heading">
														<div class="panel-title">
															Choose a contact first
														</div>
														<div class="btn-group pull-right m-b-10">
															<a type="button" class="btn btn-default btn-sm" href="<?php echo base_url('member/C_view_message')?>">View Inboxes <span class="pg-inbox"></span></a>
															<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Settings</a>
																</li>
																<li><a href="#">Help</a>
																</li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-body">
														<div class="contact-wrapper">
															<div class="table-responsive">
																<table class="table table-hover" id="Data_table">
																	<thead>
																		<tr>
																			<th style="width:1%">
																				<div class="checkbox">
																					<input type="checkbox" name="checkbox" value="checkbox" id="checkbox">
																					<label for="checkbox"></label>
																				</div>
																			</th>
																			<th style="width:20%">Select The Users </th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php foreach($users as $user) { ?>
																			<tr>
																				<td class="v-align-middle">
																					<div class="checkbox ">
																						<input type="checkbox" name="name[]" value="<?php echo $user->fname ;?>" id="<?php echo $user->id ;?>">
																						<label for="<?php echo $user->id ;?>"></label>
																					</div>
																				</td>
																				<td class="v-align-middle ">
																					<p><?php echo $user->fname?></p>
																				</td>
																			</tr>
																		<?php  }?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="form-group">
														<label class="control-label">Subject</label>
														<textarea name="subject" placeholder="Subject Message" class="form-control" ></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Message</label>
														<textarea name="text" placeholder="Enter Your Message" class="form-control" style="min-height: 380px;" ></textarea>
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<button type="submit" class="btn btn-success btn-cons"><h4 class="text-white semi-bold">Send</h4></button>
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

<div class="container-fluid container-fixed-lg footer">
	<div class="clearfix"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		table = $('#Data_table').DataTable({
			"bInfo": false,
			"bLengthChange": false,
			"bAutoWidth": false,
			"bPaginate":false
		});		
		
		$('div.dataTables_filter').css("margin-left","-100%").css("width","100%");
		
		$('#checkbox').change(function(){
			cells = table.cells().nodes();
			$(cells).find(':checkbox').prop('checked', $(this).is(':checked'));
		});
	});
</script>				