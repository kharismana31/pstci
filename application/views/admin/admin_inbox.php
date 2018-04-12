
<div class="content">
    <div class="social-wrapper">
		<div class="social " data-pages="social">
			<!-- START JUMBOTRON -->
			<div class="jumbotron" data-pages="parallax" data-social="cover">
				<div class="cover-photo">
					<img alt="Cover photo" src="<?php echo site_url() ?>assets/images/shakehands.jpg" />
				</div>
				<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
					<div class="inner">
						<div class="pull-bottom bottom-left m-b-40">
							<h5 class="text-white no-margin">Get in touch with our network in no time</h5>
							<h1 class="text-white no-margin">Manage your <span class="semi-bold">Messages</span> here</h1>
						</div>
					</div>
					<div class="top-left m-t-80 m-l-30">
						<img src="<?php echo site_url() ?>assets/images/mitologo2.png" />
					</div>
				</div>
			</div>
			
			<div class="feed" style="overflow: hidden;">
				<div class="day no-margin">
					<div class="card no-border full-width">
						<div class="row">
							<div class="bg-master-lightest">
								<div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
									<div class="panel panel-transparent">
										<div class="panel-heading">
											<div class="panel-title">
												View your message here
											</div>
											<div class="btn-group pull-right m-b-10 btn-group">
												<button class="btn btn-default" id="delete_check"> Delete Message <span class="fa fa-trash"></span></button>
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
											<div class="table-responsive">
												<table class="table table-hover" id="Data_table">
													<thead>
														<tr>
															<th style="width:1%">
																<div class="checkbox ">
																	<input type="checkbox" value="checkbox" name="checkbox" id="checkbox">
																	<label for="checkbox"></label>
																</div>
															</th>
															<th style="width:18%">Subject</th>
															<th style="width:20%">From</th>
															<th style="width:15%">Status</th>
															<th style="width:15%">Date</th>
															<th style="width: 8%">View</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
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
</div>

<script type="text/javascript">
	$(document).ready(function(){
		table = $('#Data_table').DataTable({
			// Load data for the table's content from an Ajax source
			"order": [],
			"autoWidth": false,
			"ajax": {
				"url": '<?php echo site_url('admin/C_inbox/table_list'); ?>',
				"type": "POST"
			},
			"columns": [
			{"data": "id",width:0},
			{"data": "subject",width:0},
			{"data": "from",width:0},
			{"data": "status",width:0},
			{"data": "date",width:5},
			{"data": "view",width:0}
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
		
		$('#checkbox').change(function(){
			cells = table.cells().nodes();
			$(cells).find(':checkbox').prop('checked', $(this).is(':checked'));
		});
		
		$('#delete_check').click(function(){
			var id = [];
			
			$(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			});
			
			if(id.length === 0){
				$(document).ready(function(){
					$.notify({
						title: '<strong>Warning</strong><br/>',
						icon: 'fa fa-warning',
						// exclamation
						message: "minimum add one checkbox"
						},{
						type: 'warning',
						animate: {
							enter: 'animated fadeIn',
							exit: 'animated fadeOutRight'
						},
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 1031,
						delay: 2000,
						timer: 1000
					});
				});
				
				return false;
			}
			else{
				
				var modalConfirm = function(callback){
					$("#confirm-modal").modal('show');
					
					$("#modal-btn-yes").on("click", function(){
						callback(true);
						$("#confirm-modal").modal('hide');
					});
					
					$("#modal-btn-no").on("click", function(){
						callback(false);
						$("#confirm-modal").modal('hide');
					});
				};
				
				modalConfirm(function(confirm){
					if(confirm){
						$.ajax({
							url:'<?php echo site_url('admin/C_inbox/delete_check')?>',
							method:'POST',
							data:{id_message:id},
							success:function()
							{
								for(var i=0; i<id.length; i++)
								{
									$('tr#'+id[i]+'').css('background-color', '#ccc');
									$('tr#'+id[i]+'').fadeOut('slow');
								}
								$('[name="checkbox"][value="checkbox"]').attr( 'checked', false );
								reload_table();
								$(document).ready(function(){
									$.notify({
										title: '<strong>Success</strong><br/>',
										icon: 'fa fa-check',
										message: "Delete Messages"
										},{
										type: 'success',
										animate: {
											enter: 'animated fadeIn',
											exit: 'animated fadeOutRight'
										},
										placement: {
											from: "top",
											align: "right"
										},
										offset: 20,
										spacing: 10,
										z_index: 1031,
										delay: 2000,
										timer: 1000
									});
								});
							} 
						});
					}
					else{
						$("#confirm-modal").modal('hide');
						return false;
					}
				});
				
			}
		});
		
	});
	
	function view_messages(id)
	{
		$('#form_messages')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		
		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('admin/C_inbox/get_id_messages/')?>/" + id,
			type: "POST",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="subject"]').val(data.subject);
				$('[name="message"]').val(data.text);
				
				if (data.status == 'a') {
					$('[name="status"]').val("Admin");
				}
				else if (data.status == 'm'){
					$('[name="status"]').val("Member");
				}
				else {
					$('[name="status"]').val("Public");
				}
				
				$('[name="date"]').val(data.date);
				
				$('.m-title').text('View Messages From '+ data.from + '');
				
				
				$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}
	
	function reload_table()
	{
		table.ajax.reload(null,false); //reload datatable ajax 
	}
</script>	

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title m-title"></h3>
				<br/>
			</div>
			<div class="modal-body form">
				<form action="javascript:void(0)" id="form_messages" class="form-horizontal">
					<div class="col-md-12">
						<div class="row">
							<div class="form-group">
								<label class="control-label" style="color: #2c2c2c;">Subject</label>
								<input type="text" class="form-control" name="subject" readonly style="color: #2c2c2c;">
								
								<label class="control-label" style="color: #2c2c2c;">Message</label>
								<textarea name="message" class="form-control" readonly style="color: #2c2c2c;"></textarea>
								
								<label class="control-label" style="color: #2c2c2c;">Status</label>
								<input type="text" class="form-control" name="status" readonly style="color: #2c2c2c;">
								
								<label class="control-label" style="color: #2c2c2c;">Date</label>
								<input type="text" class="form-control" name="date" readonly style="color: #2c2c2c;">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->		

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm-modal">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to delete this?</h4>
			</div>
			<br/>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" id="modal-btn-yes">Yes</button>
				<button type="button" class="btn btn-default" id="modal-btn-no">No</button>
			</div>
		</div>
	</div>
</div>