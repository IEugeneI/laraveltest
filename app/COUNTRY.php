<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class COUNTRY extends Model
{
    protected $table = 'COUNTRY';
    public $primaryKey='COUNTRY_ID';
    //
    public function CITY()
    {
        return $this->has_many('COUNTRY');
    }

}
