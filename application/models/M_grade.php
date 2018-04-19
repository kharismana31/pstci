<?php
/**
 * Dibuat dengan PhpStorm.
 * Oleh: Miftahul Huda (mcmonroew)
 * Pada: 11/04/18
 * Jam: 15:35
 */

class M_grade extends EloquentModel
{
    protected $table = 'grades';

    public function applications()
    {
        return $this->hasMany('M_grade_application', 'id_grade', 'id');
    }
}