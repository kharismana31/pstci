<?php
/**
 * Dibuat dengan PhpStorm.
 * Oleh: Miftahul Huda (mcmonroew)
 * Pada: 11/04/18
 * Jam: 15:26
 */

/**
 * NOTE: Belum digunakan
 */
class EloquentModel extends Illuminate\Database\Eloquent\Model {

    public $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

}