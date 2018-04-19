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
                            <h1 class="text-white no-margin">Manage your <span class="semi-bold">Connection</span> here</h1>
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

                                        <div class="bg-master-lighter m-b-20">
                                            <p class="p-t-40 p-l-50 p-b-40 fs-16 font-heading"><?= $tipe ?> Connection</p>

                                            <form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" action="<?= $url ?>" method="post">
                                                <div class="form-group form-group-default form-group-default-select2 required">
                                                    <label>Standard</label>
                                                    <select class="full-width" data-init-plugin="select2" name="standard"  required onchange="setConName()">
                                                        <option value="API" <?= (isset($con) && $con->standard == "API") ? 'selected' : '' ?>>API</option>
                                                        <option value="Proprietary" <?= (isset($con) && $con ->standard == "Proprietary") ? 'selected' : '' ?>>Proprietary</option>
                                                        <option value="Other" <?= (isset($con) && $con->standard == "Other") ? 'selected' : '' ?>>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default form-group-default-select2 required">
                                                    <label>Type</label>
                                                    <select class="full-width" data-init-plugin="select2" name="type" required  onchange="setConName()">
                                                        <?php
                                                        foreach(M_connection::select('type')->groupBy('type')->get() as $type):
                                                            ?>
                                                            <?php if(isset($con)): ?>
                                                            <option value="<?= $type['type'] ?>" <?= ($con->type == $type['type']) ? 'selected' : '' ?>><?= $type['type'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $type['type'] ?>"><?= $type['type'] ?></option>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group form-group-default form-group-default-select2 required name">
                                                    <label>Name</label>
                                                    <select class="full-width" data-init-plugin="select2" name="name">
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default required name-manual">
                                                    <label>Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" placeholder="Other" name="other" value="<?= (isset($con)) ? $con->name : '' ?>"/>
                                                    </div>
                                                </div>

                                                <div class="form-group form-group-default required">
                                                    <label>Owner</label>
                                                    <div class="controls">
                                                        <input type="text" min="0" class="form-control" placeholder="Owner" name="owner" required  value="<?= (isset($con)) ? $con->owner : '' ?>"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    $(document).ready(function(){
        setDefault();
    })

    function ChangeCountry(that) {
        var cc = $(that).find(':selected').data('cc');
        $('input[name=ccode]').val(cc);
    }
    
    function setDefault() {
        $('.name-manual').hide();
        setConName();
    }

    function setConName() {
        switch($("select[name=standard]").find(':selected').val()) {
            case 'API':
            case 'Proprietary':
                $('.name').show();
                $('.name-manual').hide();

                $.ajax({
                    url: 		"<?= base_url() ?>" + "api/get_connection_name",
                    method: 	"POST",
                    data:  		{con_owner: $("select[name=standard]").find(':selected').val(), con_type: $('select[name="type"]').find(':selected').val()}
                })
                    .done(function(data){
                        $('select[name="name"]').html('');
                        var con = data.connection;
                        console.log(con);
                        var option = "";
                        for(var i = 0; i < con.length; i++) {
                            <?php if(isset($con)): ?>
                                if("<?= $con->name ?>" == con[i]['name']){
                                    option += "<option data-owner='"+ con[i]['owner'] +"' value='" + con[i]['name'] + "' selected>" + con[i]['name'] + "</option>";
                                } else {
                                    option += "<option data-owner='"+ con[i]['owner'] +"' value='" + con[i]['name'] + "'>" + con[i]['name'] + "</option>";
                                }
                            <?php else: ?>
                                option += "<option data-owner='"+ con[i]['owner'] +"' value='" + con[i]['name'] + "'>" + con[i]['name'] + "</option>";
                            <?php endif; ?>
                        }
                        $('select[name="name"]').append(option);
                        setConOwner($('select[name="name"]'));
                    });
                break;
            case 'Other':
                $('.name').hide();
                $('.name-manual').show();
            <?php if(isset($con)): ?>
                $('input[name="other"]').val(<?= $con->name ?>);
                <?php else: ?>
                $('input[name="other"]').val("");
                <?php endif; ?>
                break;
        }
    }

    function setConOwner(that) {
        $("input[name='owner']").val($(that).find(':selected').data('owner'));
    }
</script>