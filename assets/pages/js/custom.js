/**
 * Created by mcmonroew on 18/04/18.
 */

/**
 * @var of GENERAL TAB
 */
var sel_product_type    = $('select[name="product_type"]');

var inp_od              = $('input[name="od"]');
var tbl_od              = $('.table-od');
var mdl_od              = $("#od-modal");

var cl_weight           = $('.weight');
var inp_weight          = $('input[name="weight"]');
var tbl_weight          = $('.table-weight');
var mdl_weight          = $('#weight-modal');

var cl_wall_thickness   = $('.wall_thickness');
var inp_wall_thickness  = $('input[name="wall_thickness"]');
var tbl_wall_thickness  = $('.table-wall_thickness');
var mdl_wall_thickness  = $('#wall_thickness-modal');

var sel_range           = $('select[name="range"]');
var cl_range            = $('.range');

var inp_range_manual    = $('input[name="range-manual"]');
var cl_range_manual     = $('.range-manual');

var sel_special         = $('select[name="special"]');

var inp_grade           = $('input[name="grade"]');
var tbl_grade           = $('.table-grade');
var mdl_grade           = $('#grade-modal');

var inp_connection      = $('input[name="connection"]');
var tbl_connection      = $('.table-connection');
var mdl_connection      = $('#connection-modal');

var inp_manufacturer    = $('input[name="manufacturer"]');
var tbl_manufacturer    = $('.table-manufacturer');
var mdl_manufacturer    = $('#manufacturer-modal');

var sel_country         = $('select[name="country"]');
var sel_state           = $('select[name="state"]');
var inp_location        = $('input[name="location"]');
var inp_address         = $('input[name="street_address"]');
var inp_post_code       = $('input[name="post_code"]');

var inp_price           = $('input[name="price"]');
var tbl_price           = $('.table-price');
var mdl_price           = $('#price-modal');

var inp_quantity        = $('input[name="quantity"]');
var inp_availability    = $('input[name="availability"]');


$(document).ready(function () {
    setDefault();
});

/**
 * Fungsi Default
 */
function setDefault() {
    cl_range_manual.hide(); // show: CONDUCTOR / PUP JOINTS
    cl_wall_thickness.hide(); // show: CONDUCTOR

    setDefaultVal();
    grabConnection(); // Load just 1x
    grabManufacturer(); // Load just 1x
}

/**
 * Menset value "" di input
 */
function setDefaultVal() {
    inp_range_manual.val("");
    inp_wall_thickness.val("");
    inp_od.val("");
    inp_weight.val("");
}

/**
 * Ketika select product type dipilih
 * @param input
 */
function setProductType(input) {
    setDefaultVal();

    if(sel_product_type.find(":selected").text() == 'CONDUCTOR'){
        cl_weight.hide();

        sel_range.html('');
        sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        sel_range.append(new Option("R3", "R3", false, false)).trigger('change');
        sel_range.append(new Option("OTHER", "OTHER", false, false)).trigger('change');

        cl_range_manual.hide();

        cl_wall_thickness.show();
    }

    if(sel_product_type.find(":selected").text() == 'CASING'){
        cl_weight.show();

        sel_range.html('');
        sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        sel_range.append(new Option("R3", "R3", false, false)).trigger('change');

        cl_range.show();
        cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'TUBING') {
        cl_weight.show();

        sel_range.html('');
        sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        sel_range.append(new Option("R4", "R4", false, false)).trigger('change');

        cl_range.show();
        cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'PUP JOINTS'){
        cl_weight.show();

        cl_range.hide();
        cl_range_manual.show();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'COUPLING'){
        cl_weight.show();

        cl_range.hide();
        cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    grabOD();
    grabGrade(); //Affected: GRADE PRODUCT TYPE APPLICATION
}


/**
 * Ketika select range dipilih
 * @param input
 */
function setRange(input) {
    if((sel_product_type.find(":selected").text() == 'CONDUCTOR') && (sel_range.find(":selected").text() == "OTHER")){
        sel_range.hide();
        cl_range_manual.show();
    } else {
        sel_range.show();
        cl_range_manual.hide();
    }
}

/**
 * Load Datatable to OD Table
 */
function grabOD() {
    var id = sel_product_type.find(':selected').data('id');
    var table = tbl_od.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_od",
            "data": {
                "id_product_type": id
            },
            "type": "POST"
        },
        "columns": [
            {"data": "dm_od_label",width:0},
            {"data": "dm_od_imperial",width:0},
            {"data": "dm_od_metric",width:0},
            {"data": "btn",width:0}
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

    tbl_od.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_od.val(table.row(index).data().dm_od_label);
            inp_od.focus();
            mdl_od.modal('hide');
        }

        grabWeight()
        grabWallThickness()
    });
}



/**
 * Load Datatable to OD Table
 */
function grabWallThickness() {
    var table = tbl_wall_thickness.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_wall_thickness",
            "data": {
                "id_product_type": sel_product_type.find(':selected').data('id'),
                "od": inp_od.val()
            },
            "type": "POST"
        },
        "columns": [
            {"data": "dm_wt_imperial",width:0},
            {"data": "dm_wt_metric",width:0},
            {"data": "btn",width:0}
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

    tbl_wall_thickness.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_wall_thickness.val(table.row(index).data().dm_wt_imperial);
            inp_wall_thickness.focus();
            mdl_wall_thickness.modal('hide');
        }});
}

/**
 * Load Datatable to Weight Table
 */
function grabWeight() {
    var table = tbl_weight.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_weight",
            "data": {
                "od": inp_od.val()
            },
            "type": "POST"
        },
        "columns": [
            {"data": "dm_uw_imperial",width:0},
            {"data": "dm_uw_metric",width:0},
            {"data": "btn",width:0}
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

    tbl_weight.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_weight.val(table.row(index).data().dm_uw_imperial);
            inp_weight.focus();
            mdl_weight.modal('hide');
        }
    });
}

/**
 * Load Datatable to Grade Table
 */
function grabGrade() {
    var table = tbl_grade.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_grade",
            "data": {
                "product_type": sel_product_type.find(':selected').val()
            },
            "type": "POST"
        },
        "columns": [
            {"data": "name",width:0},
            {"data": "type",width:0},
            {"data": "min_yl_metric",width:0},
            {"data": "min_yl_imperial",width:0},
            {"data": "standard",width:0},
            {"data": "owner",width:0},
            {"data": "btn",width:0}
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

    tbl_grade.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_grade.val(table.row(index).data().name);
            inp_grade.focus();
            mdl_grade.modal('hide');
        }
    });
}

/**
 * Load Datatable to Connection Table
 */
function grabConnection() {
    var table = tbl_connection.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_connection",
            "data": {},
            "type": "POST"
        },
        "columns": [
            {"data": "name",width:0},
            {"data": "type",width:0},
            {"data": "standard",width:0},
            {"data": "owner",width:0},
            {"data": "additional_feature",width:0},
            {"data": "btn",width:0}
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

    tbl_connection.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_connection.val(table.row(index).data().name);
            inp_connection.focus();
            mdl_connection.modal('hide');
        }
    });
}

/**
 * Load Datatable to Manufacturer Table
 */
function grabManufacturer() {
    var table = tbl_manufacturer.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_manufacturer",
            "data": {},
            "type": "POST"
        },
        "columns": [
            {"data": "name",width:0},
            {"data": "country",width:0},
            {"data": "year",width:0},
            {"data": "btn",width:0}
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

    tbl_manufacturer.find('tbody').on('click', 'tr', function() {
        var index = table.row(this).index();

        if(table.row(index).data() != undefined){
            inp_manufacturer.val(table.row(index).data().name);
            inp_manufacturer.focus();
            mdl_manufacturer.modal('hide');
        }
    });
}

/**
 * Mengambil daftar provinsi
 */
function grabState() {
    $.ajax({
        url: base_url + "api/get_state",
        method: "POST",
        data: {idcountry: sel_country.find(':selected').data('id')}
    })
        .done(function (data) {
            sel_state.html('');
            var state = data.states;
            var option = "";
            for(var i = 0; i < state.length; i++) {
                option += "<option value='" + state[i]['name'] + "'>" + state[i]['name'] + "</option>";
            }
            sel_state.append(option);
        });
}

/**
 * Mengambil daftar harga yang mirip
 */
function grabPrice() {
    var table = tbl_price.DataTable({
        "order": [],
        "bDestroy":true,
        "autoWidth": false,
        "ajax": {
            "url": base_url + "api/get_similar_product",
            "data": {
                "id": "",
                "od": inp_od.val(),
                "api_pro_1": inp_grade.val()
            },
            "type": "POST"
        },
        "columns": [
            {"data": "product_type",width:0},
            {"data": "od",width:0},
            {"data": "grade",width:0},
            {"data": "price",width:0}
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
}