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
							<h1 class="text-white no-margin">Setting</h1>
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
										<h3 class="m-l-60">Setting your website</h3><hr />
										
										<div class="bg-master-lighter m-b-20">
											<p class="p-t-40 p-l-50 p-b-20 fs-16 font-heading">Configure here</p>
											
											<form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" action="<?php echo site_url();?>admin/Setting/update" method="post">


                                                <div class="form-group form-group-default required">
                                                    <label>Term & Condition</label>
                                                    <div class="controls">
                                                        <textarea style="height:144px" class="form-control" name="tc" cols="50" rows="50"><?= $tc->value ?></textarea>
                                                    </div>
                                                </div>
												<div class="row">
													<div class="row">
														<div class="col-md-12">
															<button type="submit" class="btn btn-primary">Save</button>
														</div>
													</div>
													<div class="row">
														&nbsp;
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
    function ChangeCountry(that) {
        var cc = $(that).find(':selected').data('cc');
        $('input[name=ccode]').val(cc);
    }
</script>