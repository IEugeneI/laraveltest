<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CITY extends Model
{
    //
    protected $table = 'CITY';
    public $primaryKey='CITY_ID';

    public function COUNTRY()
    {
        return $this->belongs_to('CITY');
    }
}
