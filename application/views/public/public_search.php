<div class="jumbotron bg-search5 m-t-60 p-l-100 p-t-100 p-r-100 p-b-100">
	<div class="jumbotron bg-form" style="border-radius: 20px; border: solid 1px grey;">
		<div class="m-t-40 m-l-40 m-r-40 m-b-40">
            <h3 class="p-t-20 p-l-20 p-b-20 text-white">Search</h3>
            <form id="form-search" class="p-l-20 p-r-20" role="form" action="<?php echo site_url('public/C_public/result');?>">
                <div class="row">
                    <div class="col-md-4">
						<div class="form-group form-group-default form-group-default-select2">
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
                    <div class="col-md-4">
                        <div class="form-group form-group-default form-group-default-select2">
                            <label>Steel Type</label>
                            <select class="full-width" data-init-plugin="select2" name="steel_type">
                                <option value="Carbon">Carbon</option>
                                <option value="CRA">CRA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-group-default form-group-default-select2">
                            <!-- Buat nentuin ukuran OD sama Weightnya pakai yg mana -->
                            <label>Unit of Measure</label>
                            <select class="full-width" data-init-plugin="select2" name="unit_of_measure" multiple>
                                <optgroup label="Unit of Measure OD">
                                    <option value="inches">inches</option>
                                    <option value="mm">mm</option>
                                </optgroup>
                                <optgroup label="Unit of Measure Weight">
                                    <option value="ppf">ppf</option>
                                    <option value="kg/m">kg/m</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
				</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-default form-group-default-select2">
                            <label>OD</label>
                            <select class="full-width" data-init-plugin="select2" name="od">
                                <option>Select Product Type First</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 weight">
                        <div class="form-group form-group-default required">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight" placeholder="Weight" />
                        </div>
                    </div>
                    <div class="col-md-4 wall_thickness">
                        <div class="form-group form-group-default required">
                            <label>Wall Thickness</label>
                            <input type="text" class="form-control" name="wall_thickness" placeholder="Wall Thickness" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-group-default required">
                            <label>Length</label>
                            <input type="text" class="form-control" name="length" placeholder="Length" />
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