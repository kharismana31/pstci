/**
 * @var of GENERAL TAB
 */
var sel_product_type    = $('select[name="product_type"]');
var sel_steel_type      = $('select[name="steel_type"]');

var sel_unit_of_measure = $('select[name="unit_of_measure"]');

var sel_od              = $('select[name="od"]');

var inp_weight          = $('input[name="weight"]');
var cl_weight           = $('.weight');

var inp_wall_thickness  = $('input[name="wall_thickness"]');
var cl_wall_thickness   = $('.wall_thickness');

var inp_length          = $('input[name="length"]');


$(document).ready(function () {
    setDefault();
});

function setDefault() {
    cl_wall_thickness.hide(); // show: CONDUCTOR

    // setDefaultVal();
    // grabConnection(); // Load just 1x
    // grabManufacturer(); // Load just 1x
}

/**
 * Ketika select product type dipilih
 * @param input
 */
function setProductType(input) {
    // setDefaultVal();

    if(sel_product_type.find(":selected").text() == 'CONDUCTOR'){
        cl_weight.hide();

        // sel_range.html('');
        // sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        // sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        // sel_range.append(new Option("R3", "R3", false, false)).trigger('change');
        // sel_range.append(new Option("OTHER", "OTHER", false, false)).trigger('change');
        // cl_range_manual.hide();

        cl_wall_thickness.show();
    }

    if(sel_product_type.find(":selected").text() == 'CASING'){
        cl_weight.show();

        // sel_range.html('');
        // sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        // sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        // sel_range.append(new Option("R3", "R3", false, false)).trigger('change');
        //
        // cl_range.show();
        // cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'TUBING') {
        cl_weight.show();

        // sel_range.html('');
        // sel_range.append(new Option("R1", "R1", false, false)).trigger('change');
        // sel_range.append(new Option("R2", "R2", false, false)).trigger('change');
        // sel_range.append(new Option("R4", "R4", false, false)).trigger('change');
        //
        // cl_range.show();
        // cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'PUP JOINTS'){
        cl_weight.show();

        // cl_range.hide();
        // cl_range_manual.show();

        cl_wall_thickness.hide();
    }

    if(sel_product_type.find(":selected").text() == 'COUPLING'){
        cl_weight.show();

        // cl_range.hide();
        // cl_range_manual.hide();

        cl_wall_thickness.hide();
    }

    grabOD();
    // grabGrade(); //Affected: GRADE PRODUCT TYPE APPLICATION
}



/**
 * Load Datatable to OD Table
 */
function grabOD() {
    var id = sel_product_type.find(':selected').data('id');
    $.ajax({
        url: base_url + "api/get_od_normal",
        method: "POST",
        data: {id_product_type: id}
    })
        .done(function (data) {
            sel_od.html('');
            var od = data.dimensions;
            console.log(data.dimensions);
            var option = "";
            for(var i = 0; i < od.length; i++) {
                option += "<option value='" + od[i]['dm_od_imperial'] + "'>" + od[i]['dm_od_imperial'] + "</option>";
            }
            sel_od.append(option);
        });
}