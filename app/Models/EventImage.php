<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventName;

class EventImage extends Model
{
    public function eventName()
    {
      return $this->belongsTo(EventName::class);
    }
}
