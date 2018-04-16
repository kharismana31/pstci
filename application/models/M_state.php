<?php 
	
	class M_state extends EloquentModel {
        protected $table = 'states';

        public function country()
        {
            return $this->hasOne('M_country', 'id', 'id_country');
        }
	}							