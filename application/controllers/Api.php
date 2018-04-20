<?php
/**
 * Dibuat dengan PhpStorm.
 * Oleh: Miftahul Huda (mcmonroew)
 * Pada: 11/04/18
 * Jam: 13:05
 */

class Api extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function toJson($data){
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function get_od_normal()
    {
        $data = M_dimension::where('id_product_type', $this->input->post('id_product_type'))
                ->groupBy('dm_od_imperial')
                ->get();
        $this->toJson(['dimensions' => $data]);
    }

    public function get_od()
    {
        $this->datatables->select('dm_od_label, dm_od_imperial, dm_od_metric');
        $this->datatables->where('id_product_type',$this->input->post('id_product_type'));
        $this->datatables->group_by('dm_od_label');

        $this->datatables->add_column('dm_od_label', "$1", 'dm_od_label');
        $this->datatables->add_column('dm_od_imperial', "$1", 'dm_od_imperial');
        $this->datatables->add_column('dm_od_metric', "$1", 'dm_od_metric');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('dimensions');
        return print_r($this->datatables->generate());
    }

    public function get_weight()
    {
        $this->datatables->select('dm_uw_imperial, dm_uw_metric');
        $this->datatables->where('dm_od_label',$this->input->post('od'));
        $this->datatables->where('dm_uw_imperial != ""');
        $this->datatables->group_by('dm_uw_imperial');

        $this->datatables->add_column('dm_uw_imperial', "$1", 'dm_uw_imperial');
        $this->datatables->add_column('dm_uw_metric', "$1", 'dm_uw_metric');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('dimensions');
        return print_r($this->datatables->generate());
    }

    public function get_wall_thickness()
    {
        $this->datatables->select('dm_wt_imperial, dm_wt_metric');
        $this->datatables->where('dm_od_label',$this->input->post('od'));
        $this->datatables->where('dm_wt_imperial != ""');

        $this->datatables->add_column('dm_wt_imperial', "$1", 'dm_wt_imperial');
        $this->datatables->add_column('dm_wt_metric', "$1", 'dm_wt_metric');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('dimensions');
        return print_r($this->datatables->generate());
    }

    public function get_grade_name()
    {
        switch ($this->input->post('grade_type')):
            case 'api':
                $data = M_grade::where('owner', 'API')->where('product_type', 'LIKE', '%'.$this->input->post('product_type').'%')->orderBy('name', 'ASC')->get();
                $this->toJson(['grade' => $data]);
                break;
            case 'proprietary':
                $data = M_grade::where('owner', '!=', 'API')->where('product_type', 'LIKE', '%'.$this->input->post('product_type').'%')->orderBy('name', 'ASC')->get();
                $this->toJson(['grade' => $data]);
                break;
            endswitch;
    }

    public function get_yield_strength()
    {
        $this->datatables->select('name, min_yl_metric, min_yl_imperial');
        if($this->input->post('grade_type') == 'api'){
            $this->datatables->where('owner',$this->input->post('grade_type'));
        } else {
            $this->datatables->where('owner !=',"API");
        }

        $this->datatables->like("product_type", $this->input->post('product_type'));
        $this->datatables->add_column('name', "$1", 'name');
        $this->datatables->add_column('min_yl_metric', "$1", 'min_yl_metric');
        $this->datatables->add_column('min_yl_imperial', "$1", 'min_yl_imperial');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('grades');
        return print_r($this->datatables->generate());
    }

    public function get_sour_and_chromecontent()
    {
        $data = M_grade_application::where('id_grade', $this->input->post('idgrade'))->orderBy('name', 'ASC')->get();
        $this->toJson(['specialities' => $data]);
    }

    public function get_grade()
    {
        $this->datatables->select('name, type, standard, owner, min_yl_metric, min_yl_imperial');
        $this->datatables->like("product_type", $this->input->post('product_type'));

        $this->datatables->add_column('name', "$1", 'name');
        $this->datatables->add_column('type', "$1", 'type');
        $this->datatables->add_column('min_yl_metric', "$1", 'min_yl_metric');
        $this->datatables->add_column('min_yl_imperial', "$1", 'min_yl_imperial');
        $this->datatables->add_column('standard', "$1", 'standard');
        $this->datatables->add_column('owner', "$1", 'owner');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('grades');
        return print_r($this->datatables->generate());
    }

    public function get_connection()
    {
        $this->datatables->select('name, type, standard, owner, additional_feature');

        $this->datatables->add_column('name', "$1", 'name');
        $this->datatables->add_column('type', "$1", 'type');
        $this->datatables->add_column('standard', "$1", 'standard');
        $this->datatables->add_column('owner', "$1", 'owner');
        $this->datatables->add_column('additional_feature', "$1", 'additional_feature');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('connections');
        return print_r($this->datatables->generate());
    }

    public function get_manufacturer()
    {
        $this->datatables->select('name, country, year');

        $this->datatables->add_column('name', "$1", 'name');
        $this->datatables->add_column('country', "$1", 'country');
        $this->datatables->add_column('year', "$1", 'year');
        $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-check'></i></button>", 'btn');

        $this->datatables->from('manufacturers');
        return print_r($this->datatables->generate());
    }

    public function get_connection_name()
    {
        switch ($this->input->post('con_owner')):
            case 'API':
                $data = M_connection::where('owner', 'API')
                        ->where('type', $this->input->post('con_type'))
                        ->orderBy('name', 'ASC')->get();
                $this->toJson(['connection' => $data]);
                break;
            case 'Proprietary':
                $data = M_connection::where('owner', '!=', 'API')
                        ->where('type', $this->input->post('con_type'))
                        ->orderBy('name', 'ASC')->get();
                $this->toJson(['connection' => $data]);
                break;
        endswitch;
    }

    public function get_state()
    {
        $data = M_state::where('id_country', $this->input->post('idcountry'))->get();
        return $this->toJson(['states' => $data]);
    }

    public function get_similar_product()
    {
        $this->datatables->select('product_type, od, price, api_pro_1');
        $this->datatables->where('id !=',$this->input->post('id'));
        $this->datatables->where('od',$this->input->post('od'));
        $this->datatables->where('api_pro_1',$this->input->post('api_pro_1'));
//        if($this->input->post('grade_type') == 'api'){
//        } else {
//            $this->datatables->where('owner !=',"API");
//        }

        $this->datatables->add_column('product_type', "$1", 'product_type');
        $this->datatables->add_column('od', "$1", 'od');
        $this->datatables->add_column('grade', "$1", 'api_pro_1');
        $this->datatables->add_column('price', "$$1", 'price');

        $this->datatables->from('product_listing');
        return print_r($this->datatables->generate());
    }

}