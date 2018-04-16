<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social " data-pages="social">
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					<div class="cover-photo">
						<img alt="Cover photo" src="<?php echo site_url() ?>assets/images/discuss.png" />
					</div>
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h1 class="text-white no-margin">Manage your <span class="semi-bold">Main Mills</span> here</h1>
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
										<div class="inner">
											<h3 class="m-l-100">Main Mills</h3><hr />
											
											<div class="panel panel-featured m-r-20">
												<div class="panel-heading">
													<div class="panel-title">
														Main Mills List
													</div>
													<div class="btn-group pull-right m-b-10">
                                                        <a class="btn btn-default" href="<?= base_url('admin/Manufacturer/add') ?>"><span class="fa fa-plus"></span> Add Mill</a>
                                                        <a class="btn btn-default" id="edit_check"><span class="fa fa-edit"></span> Edit Mill</a>
                                                        <button class="btn btn-default" id="delete_check"><span class="fa fa-trash"></span> Delete Mill</button>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover" id="Data_table">
															<thead>
																<tr>
																	<!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
																		Comman Practice Followed
																	-->
																	<th style="width:1%">
																		<div class="checkbox">
																			<input type="checkbox" name="checkbox" value="checkbox" id="checkbox">
																			<label for="checkbox"></label>
																		</div>
																	</th>
																	<th style="width:10%">Name</th>
																	<th style="width:10%">Country</th>
																	<th style="width:10%">Year</th>
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
	</div>	
</div>


<script type="text/javascript">
	$(document).ready(function(){
		table = $('#Data_table').DataTable({ 
			// Load data for the table's content from an Ajax source
			"order": [],
			"autoWidth": false,
			"ajax": {
				"url": '<?php echo site_url('admin/Manufacturer/table_list'); ?>',
				"type": "POST"
			},
			"columns": [
			{"data": "id",width:0},
			{"data": "name",width:0},
			{"data": "country",width:0},
			{"data": "year",width:0}
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

		$('#edit_check').click(function () {
            var id = [];

            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });

            if(id.length === 0) //tell you if the array is empty
            {
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
            else if(id.length > 1)
            {
                $(document).ready(function(){
                    $.notify({
                        title: '<strong>Warning</strong><br/>',
                        icon: 'fa fa-warning',
                        // exclamation
                        message: "maximum edit just for one checkbox"
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
            } else {
                window.location.href = "<?= base_url('admin/Manufacturer/edit/') ?>" + id;
            }
        });
		
		$('#delete_check').click(function(){
			var id = [];
			
			$(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			});
			
			if(id.length === 0) //tell you if the array is empty
			{
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
			else
			{
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
							url:'<?php echo site_url('admin/Manufacturer/delete_check')?>',
							method:'POST',
							data:{id:id},
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
										message: "Delete Mill"
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
	
	function reload_table()
	{
		table.ajax.reload(null,false); //reload datatable ajax 
	}
</script>

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