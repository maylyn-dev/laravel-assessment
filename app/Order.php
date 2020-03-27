<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
