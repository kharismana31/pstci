<div class="page-content-wrapper">
  <div class="content">
    <div class="social-wrapper">
      <div class="social " data-pages="social">
        <div class="jumbotron" data-pages="parallax" data-social="cover">
          <div class="cover-photo">
            <img alt="Cover photo" src="<?php echo base_url('assets/');?>images/bg-green.jpg" />
          </div>
          <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <div class="inner">
              <div class="pull-bottom bottom-left m-b-40">
                <h1 class="text-white no-margin">Manage your <span class="semi-bold">Listings</span> here</h1>
              </div>
            </div>
            <div class="top-left m-t-80 m-l-30">
              <img src="<?php echo base_url('assets/');?>images/mitologo2.png" />
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
                      <h3 class="m-l-100">Manage Your User's Listing</h3><hr />
                      
                      <div class="panel panel-featured m-r-20">
                        <div class="panel-heading">
                          <div class="panel-title">
                            Listings
                          </div>
                          <div class="btn-group pull-right m-b-10">
                            <button class="btn btn-default" id="delete_listing">Delete listing <span class="fa fa-trash"></span></button>
                            <button class="btn btn-default" id="update_listing">Edit listing <span class="fa fa-pencil"></span></button>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
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
                                  <th style="width:10%">User</th>
                                  <th style="width:10%">Product Type</th>
                                  <th style="width:10%">OD</th>
                                  <th style="width:10%">Weight</th>
                                  <th style="width:10%">Grade</th>
                                  <th style="width:10%">Connection</th>
                                  <th style="width:10%">Range</th>
                                  <th style="width:10%">Special Condition</th>
                                  <th style="width:10%">Manufaturer</th>
                                  <th style="width:10%">Country</th>
                                  <th style="width:10%">State</th>
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

<!-- <script type="text/javascript">
  $(document).ready(function(){
    table = $('#Data_table').DataTable({ 
      // Load data for the table's content from an Ajax source
      "order": [],
      "autoWidth": false,
      "ajax": {
        "url": '<?php echo site_url('member/C_/table_list'); ?>',
        "type": "POST"
      },
      "columns": [
      {"data": "id",width:10},
      {"data": "connect_owner",width:0},
      {"data": "product_type",width:0},
      {"data": "od",width:0},
      {"data": "weight",width:0},
      {"data": "grade_type",width:0},
      {"data": "connect_stand",width:0},
      {"data": "range_gen"},
      {"data": "spcl_condition",width:0},
      {"data": "manufact_name",width:0},
      {"data": "country",width:0},
      {"data": "state",width:0}
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
    
    $('#delete_listing').click(function(){
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
              url:'<?php echo site_url('admin/View_listing/delete_listing')?>',
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
                    message: "Delete Listing Product"
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
    
    $('#update_listing').click(function(){
      var id = [];
      $(':checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      
      if(id.length === 0){
        $(document).ready(function(){
          $.notify({
            title: '<strong>Warning</strong><br/>',
            icon: 'fa fa-warning',
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
        if(id.length > 1){
          $(document).ready(function(){
            $.notify({
              title: '<strong>Warning</strong><br/>',
              icon: 'fa fa-warning',
              message: "update can not be more than one"
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
        }
        else{
          $.ajax({
            success:function()
            {
              for(var i=0; i<id.length; i++)
              {
                $('tr#'+id[i]+'').css('background-color', '#ccc');
                $('tr#'+id[i]+'').fadeOut('slow');
              }
              edit_listing(id);
            }
          });
        }
      }
    });
    
    $('#update_product_listing').click(function(){
      $.ajax({
        url: "<?php echo site_url('admin/View_listing/update_listing');?>",
        type: "POST",
        data: $('#form_listing').serialize(),
        success:function(){
          reload_table();
          $("#modal_form").modal('hide');
          $(document).ready(function(){
            $.notify({
              title: '<strong>Success</strong><br/>',
              icon: 'fa fa-check',
              message: "Update Product Listing"
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
    });
    
  });
  
  function reload_table()
  {
    table.ajax.reload(null,false); //reload datatable ajax 
  }
  
  function edit_listing(id)
  {
    $('#form_listing')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    
    //Ajax Load data from ajax
    $.ajax({
      url : "<?php echo site_url('admin/View_listing/get_id_listing/')?>/" + id,
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
        
        $('[name="id"]').val(data.id);
        $('[name="product"]').val(data.product_type).trigger('change');
        $('[name="od"]').val(data.od);
        $('[name="weight"]').val(data.weight);
        $('[name="range"]').val(data.range_gen).trigger('change');
        $('[name="special"]').val(data.spcl_condition).trigger('change');
        $('[name="optiongrade"][value="' + data.grade_type + '"]').attr( 'checked', true );
        $('[name="optionconnection"][value="' + data.connect_stand + '"]').attr( 'checked', true );
        $('[name="country"]').val(data.country).trigger('change');
        $('[name="state"]').val(data.state).trigger('change');
        $('[name="manufact_name"]').val(data.manufact_name).trigger('change');
        
        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
        
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }
</script> -->

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Edit Listing</h3>
        <br/>
      </div>
      <div class="modal-body form">
        <form action="#" id="form_listing" class="form-horizontal" method="POST">
          <input type="hidden" value="" name="id"/> 
          <div class="form-body">
            <div id="rootwizard">
              <div class="panel panel-transparent">
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
                    <a data-toggle="tab" href="#complete"><span><i class="fa fa-map-marker tab-icon"></i>Location</span></a>
                  </li>
                </ul>
                
                <div class="tab-content">
                  
                  <div class="tab-pane slide-left active" id="general">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Product Type</label>
                        <select class="full-width" data-init-plugin="select2" name="product" required>
                          <option value="casing">Casing</option>
                          <option value="tubing">Tubing</option>
                          <option value="pupjoints">Pup Joints</option>
                          <option value="couplings">Couplings</option>
                        </select>
                      </div> 
                      <div class="col-md-6">
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-6">
                        <label>OD</label>
                        <input type="text" class="form-control" name="od" placeholder="OD" required />
                      </div>
                      <div class="col-md-6">
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Weight</label>
                        <input type="text" class="form-control" name="weight" placeholder="Weight" required />
                      </div>
                      <div class="col-md-6">
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Range</label>
                        <select class="full-width" data-init-plugin="select2" name="range">
                          <option value="R1">R1</option>
                          <option value="R2">R2</option>
                          <option value="R3">R3</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label>Special Condition</label>
                        <select class="full-width" data-init-plugin="select2" name="special">
                          <option value="PSL1">PSL1</option>
                          <option value="PSL2">PSL2</option>
                          <option value="Special Drift">Special Drift</option>
                          <option value="Special Bevel">Special Bevel</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="tab-pane slide-left" id="grade">
                    <div class="row">
                      <div class="col-md-12">
                        <label>Grade Type :</label>
                        <div class="radio radio-success">
                          <input type="radio" id="api" value="api" name="optiongrade" />
                          <label for="api">API</label>
                          <input type="radio" id="proprietary" value="proprietary" name="optiongrade"/>
                          <label for="proprietary">Propietary</label>
                          <input type="radio" id="other" value="other" name="optiongrade" />
                          <label for="other">Other</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="tab-pane slide-left" id="connection">
                    <div class="row">
                      <div class="col-md-12">
                        <label>Connection Standard :</label>
                        <div class="radio radio-success">
                          <input type="radio" id="connectionapi" value="api" name="optionconnection"/>
                          <label for="connectionapi">API</label>
                          
                          <input type="radio" id="connectionproprietary" value="proprietary" name="optionconnection" />
                          <label for="connectionproprietary">Propietary</label>
                          
                          <input type="radio" id="connectionother" value="other" name="optionconnection" />
                          <label for="connectionother">Other</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                      </div>
                    </div>
                  </div>
                  
                  <div class="tab-pane slide-left" id="complete">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Country</label>
                        <select class="full-width" data-init-plugin="select2" name="country" required>
                          <optgroup label="Asia">
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                          </optgroup>
                          <optgroup label="Europe">
                            <option value="Holland">Holland</option>
                            <option value="Germany">Germany</option>
                            <option value="Argentina">Argentina</option>
                          </optgroup>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label>State</label>
                        <select class="full-width" data-init-plugin="select2" name="state" required>
                          <optgroup label="Java">
                            <option value="East Java">East Java</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="West Java">West Java</option>
                          </optgroup>
                          <optgroup label="Sumatera">
                            <option value="West Sumatera">West Sumatera</option>
                            <option value="North Sumatera">North Sumatera</option>
                            <option value="South Sumatera">South Sumatera</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    
                    <div class="row">
                      <hr/>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <label>Manufacturer Name</label>
                        <select class="full-width" data-init-plugin="select2" name="manufact_name" required>
                          <option selected disabled value="none">Main Mills Only</option>
                          <option value="Inosoft">Inosoft</option>
                          <option value="Inosoft">Inosoft</option>
                          <option value="Inosoft">Inosoft</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="padding-20 bg-white">
                    <ul class="pager wizard">
                      <li class="next">
                        <button class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" type="button">
                          <span>Next</span>
                        </button>
                      </li>
                      <li class="next finish">
                        <button class="btn btn-success btn-cons btn-animated from-left fa fa-arrow-right pull-right" type="button" id="update_product_listing">
                          <span>Finish</span>
                        </button>
                      </li>
                      <li class="previous first hidden">
                        <button class="btn btn-default btn-cons btn-animated from-left fa fa-arrow-left pull-right" type="button">
                          <span>First</span>
                        </button>
                      </li>
                      <li class="previous">
                        <button class="btn btn-default btn-cons pull-right" type="submit">
                          <span>Previous</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
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