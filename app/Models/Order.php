<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Order extends Model
{
    protected $fillable = ['id_status', 'id_ticket_customers ', 'payment_id', 'customer_name', 'customer_phone', 'customer_email'];

    public function tickets()
    {
      return $this->hasMany(Ticket::class, 'id_order');
    }
}
