<?php
/**
 * Dibuat dengan PhpStorm.
 * Oleh: Miftahul Huda (mcmonroew)
 * Pada: 11/04/18
 * Jam: 15:35
 */

class M_grade_application extends EloquentModel
{
    protected $table = 'grade_applications';

    public function grade()
    {
        return $this->hasOne('M_grade', 'id', 'id_grade');
    }
}