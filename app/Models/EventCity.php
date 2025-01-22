<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventName;

class EventCity extends Model
{
    public function eventNames()
    {
      return $this->hasMany(EventName::class, 'id_city');
    }
}
