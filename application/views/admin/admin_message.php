<style>
    .copyright {
        border: none;
    }
</style>
<div class="bg-master-lightest">
    <div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
        <h3 class="m-l-60">Create Message</h3>
        <hr/>
        <form id="form-login" role="form" method="post"
              action="<?php echo site_url('admin/Broadcasting/send_message') ?>">
            <div class="col-md-4">
                <div class="panel panel-bordered bg-info-lighter">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Choose a contact first
                        </div>
                        <div class="btn-group pull-right m-b-10">
                            <a type="button" class="btn btn-primary btn-sm"
                               href="<?php echo site_url('admin/Broadcasting/') ?>">View Inboxes <span
                                        class="pg-inbox"></span></a>
                            <!--<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings</a>
                                </li>
                                <li><a href="#">Help</a>
                                </li>
                            </ul>-->
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
                                        <th style="width:20%">Select The Users</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($user as $key) { ?>
                                        <tr>
                                            <td class="v-align-middle">
                                                <div class="checkbox ">
                                                    <input type="checkbox" name="name[]"
                                                           value="<?php echo $key->fname; ?>"
                                                           id="<?php echo $key->id; ?>">
                                                    <label for="<?php echo $key->id; ?>"></label>
                                                </div>
                                            </td>

                                            <td class="v-align-middle ">
                                                <p><?php echo $key->fname; ?></p>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);transition: all 0.3s cubic-bezier(.25,.8,.25,1);background: #fff;padding:2em">
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <textarea name="sbj" placeholder="Subject Message" class="form-control" required/></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea name="msg" placeholder="Enter Your Message" class="form-control"
                                      style="min-height: 300px;" required/></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success btn-cons"><h4 class="text-white semi-bold">Send</h4>
                </button>
            </div>
        </form>

        <br><br>


        <script type="text/javascript">
            $(document).ready(function () {
                table = $('#Data_table').DataTable({
                    "bInfo": false,
                    "bLengthChange": false,
                    "bAutoWidth": false,
                    "bPaginate": false
                });

                $('div.dataTables_filter').css("margin-left", "-100%").css("width", "100%");

                $('#checkbox').change(function () {
                    cells = table.cells().nodes();
                    $(cells).find(':checkbox').prop('checked', $(this).is(':checked'));
                });
            });
        </script>