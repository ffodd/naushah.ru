<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class TicketCustomer extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone'];

    public function orders()
    {
      return $this->hasMany(Order::class, 'id_ticket_customers');
    }
}
