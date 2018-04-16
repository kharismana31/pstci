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

                                        <div class="bg-master-lighter m-b-20">
                                            <p class="p-t-40 p-l-50 p-b-40 fs-16 font-heading"><?= $tipe ?> Main Mill</p>

                                            <form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" action="<?= $url ?>" method="post">

                                                <div class="form-group form-group-default required">
                                                    <label>Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" placeholder="Name" name="name" required value="<?= (isset($mill)) ? $mill->name : '' ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-default form-group-default-select2 required">
                                                    <label>Country</label>
                                                    <select class="full-width" data-init-plugin="select2" name="country" onchange="ChangeCountry(this)"  required>
                                                        <?php
                                                        foreach(M_country::orderBy('name', 'ASC')->get() as $country):
                                                            ?>
                                                        <?php if(isset($mill)): ?>
                                                            <option data-cc="<?= $country['phonecode'] ?>" value="<?= $country['name'] ?>" <?= ($mill->country == $country['name']) ? 'selected' : '' ?>><?= $country['name'] ?></option>
                                                        <?php else: ?>
                                                            <option data-cc="<?= $country['phonecode'] ?>" value="<?= $country['name'] ?>"><?= $country['name'] ?></option>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default required">
                                                    <label>Year</label>
                                                    <div class="controls">
                                                        <input type="number" min="0" class="form-control" placeholder="Year" name="year" required  value="<?= (isset($mill)) ? $mill->year : '' ?>"/>
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
    function ChangeCountry(that) {
        var cc = $(that).find(':selected').data('cc');
        $('input[name=ccode]').val(cc);
    }
</script>