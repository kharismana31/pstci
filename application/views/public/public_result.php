<div class="content">
	<div class="social-wrapper">
		<div class="social" data-pages="social">
			<!--START JUMBOTRON-->
			<div class="jumbotron" data-pages="parallax" data-social="cover">
				<div class="cover-photo">
					<img alt="Cover photo" src="<?php echo base_url('assets/');?>images/jia.jpg" />
				</div>
				<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
					<div class="inner">
						<div class="pull-bottom bottom-left m-b-40">
							<h1 class="text-white no-margin">Get in touch with our network in no time</h1>
						</div>
					</div>
					<div class="top-left m-t-80 m-l-30">
						<img src="<?php echo base_url('assets/');?>images/mitologo2.png" />
					</div>
				</div>
			</div>
			<!-- <div class="feed" style="overflow: hidden;">
				<div class="day no-margin">
				<div class="card no-border full-width">
				<div class="row">
				<div class="jumbotron bg-master-lightest" style="min-height: 700px;"></div>
				</div>
				</div>
				</div>
			</div> -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-transparent">
				<div class="panel-heading">
					<div class="panel-title">Advanced Search</div>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Product Type</a>
								</h5>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body">
									<ul class="list-group">
										<li>Product Type</li>
										<ul>
											<li value="Conductor"><a href="<?php echo base_url()?>public/C_public/result_advance/conductor">Conductor</a></li>
											<li value="Casing"><a href="<?php echo base_url()?>public/C_public/result_advance/casing">Casing</a></li>
											<li value="Tubing"><a href="<?php echo base_url()?>public/C_public/result_advance/tubing">Tubing</a></li>
											<li value="Pup Joints"><a href="<?php echo base_url()?>public/C_public/result_advance/pupjoints">Pup Joints</a></li>
											<li value="Couplings"><a href="<?php echo base_url()?>public/C_public/result_advance/couplings">Couplings</a></li>
										</ul>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Size</a>
								</h5>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">
									<li>OD</li>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Grade</a>
								</h5>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="list-group">
										<li><a href="#">2.0</a></li>
										<li><a href="#">3.0</a></li>
										<li><a href="#">4.0</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Connection</a>
								</h5>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="list-group">
										<li><a href="#">2.0</a></li>
										<li><a href="#">3.0</a></li>
										<li><a href="#">4.0</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Manufacturer</a>
								</h5>
							</div>
							<div id="collapse5" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="list-group">
										<li><a href="#">2.0</a></li>
										<li><a href="#">3.0</a></li>
										<li><a href="#">4.0</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Age</a>
								</h5>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="list-group">
										<li><a href="#">2.0</a></li>
										<li><a href="#">3.0</a></li>
										<li><a href="#">4.0</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Location</a>
								</h5>
							</div>
							<div id="collapse7" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="list-group">
										<li><a href="#">2.0</a></li>
										<li><a href="#">3.0</a></li>
										<li><a href="#">4.0</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<table class="table table-hover">
				<thead>
					<tr class="text-black">
						<th>Description</th>
						<th>Quantity</th>
						<th>Length</th>
						<th>Location</th>
						<th>Compare</th>
					</tr>
				</thead>
					
				<tbody class="panel-group" id="accordion">
					<?php
						if($list_result){
							$n=0;
							foreach ($list_result as $result) {
								echo "<tr data-toggle=\"collapse\" data-parent=\"#accordion\" data-target=\"#detail".$n."\" class=\"animasi accordion text-black\"><td>".$result['od']."\" ".$result['weight']."PPF P110 JFELION ".$result['range_gen']."</td><td>".$result['quantity']."</td><td>1000</td><td>".$result['location']."</td><td><button class=\"btn btn-info btn-submit\">Compare</button></td></tr>";
								echo "<tr id=\"detail".$n."\" class=\"collapse text-black\"><td colspan=\"5\">No Picture</td></tr>";
								$n=$n+1;
							}
						}
					?>
					<!-- <tr data-toggle="collapse" data-parent="#accordion" data-target="#collapsedetail1" class="animasi accordion text-black">
						<td>9 5/8” 47 PPF P110 JFELION R3</td>
						<td>100</td>
						<td>1000</td>
						<td>Australia</td>
						<td><button class="btn btn-info btn-submit">Compare</button></td>
					</tr>
					<tr id="collapsedetail1" class="collapse text-black">
						<td><img src="<?php// echo base_url('assets/');?>images/pipa.jpg" width="218px"><br><br><img src="<?php //echo base_url('assets/');?>images/bg4.jpg" width="70px"> <img src="<?php// echo base_url('assets/');?>images/bg8.jpg" width="70px"> <img src="<?php// echo base_url('assets/');?>images/bg11.jpg" width="70px"></td>
						<td colspan="4"><h4>OTHER DETAILS</h4><br><br><h4>PRICE : 7.00 USD</h4></td>
					</tr>
					<tr data-toggle="collapse" data-parent="#accordion" data-target="#collapsedetail2" class="animasi accordion text-black">
						<td>9 5/8” 47 PPF P110 JFELION R3</td>
						<td>200</td>
						<td>2000</td>
						<td>Indonesia</td>
						<td><button class="btn btn-info btn-submit">Compare</button></td>
					</tr>
					<tr id="collapsedetail2" class="collapse text-black">
						<td colspan="5">No Picture</td>
					</tr> -->
				</tbody>
			</table>
		</div>
	</div>
</div>