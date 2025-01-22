<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderStatus extends Model
{
    public function orders()
    {
      return $this->hasMany(Order::class, 'id_status');
    }
}
