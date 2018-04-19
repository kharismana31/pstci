<?php 
    use Carbon\Carbon;

	class M_statistic extends EloquentModel {
        protected $table = 'statistics';
        protected $date;

        public function __construct()
        {
            $this->date = Date('Y-m-d');
        }

        public function set($table)
        {
            static::whereDate('created_at', $this->date)->increment($table);
        }

        public function today()
        {
            static::whereDate('created_at', $this->date)->first();
        }

        public function monthly($month, $year)
        {
            $data = static::selectRaw("MONTH(created_at) as month,
                            sum(listing) as sum_listing, 
                            sum(registered_user) as sum_regis, 
                            sum(view) as sum_view,
                            sum(enq_open) as sum_enq_open,
                            sum(enq_close) as sum_enq_close,
                            sum(sales) as sum_sales")
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->groupBy('month')
                ->get()->toArray();
            if(count($data) < 1){
                $result['month'] = $month;
                $result['sum_listing'] = 0;
                $result['sum_regis'] = 0;
                $result['sum_view'] = 0;
                $result['sum_enq_open'] = 0;
                $result['sum_enq_close'] = 0;
                $result['sum_sales'] = 0;

                return $result;
            }
            return $data[0];
        }

        public function statisticMonthly()
        {
            $data['stats'][1] = $this->monthly(1, Date('Y'));
            $data['stats'][2] = $this->monthly(2, Date('Y'));
            $data['stats'][3] = $this->monthly(3, Date('Y'));
            $data['stats'][4] = $this->monthly(4, Date('Y'));
            $data['stats'][5] = $this->monthly(5, Date('Y'));
            $data['stats'][6] = $this->monthly(6, Date('Y'));
            $data['stats'][7] = $this->monthly(7, Date('Y'));
            $data['stats'][8] = $this->monthly(8, Date('Y'));
            $data['stats'][9] = $this->monthly(9, Date('Y'));
            $data['stats'][10] = $this->monthly(10, Date('Y'));
            $data['stats'][11] = $this->monthly(11, Date('Y'));
            $data['stats'][12] = $this->monthly(12, Date('Y'));

            return $data;
        }
	}							