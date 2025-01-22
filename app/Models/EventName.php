<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventImage;
use App\Models\EventType;
use App\Models\Ticket;

class EventName extends Model
{
    public function eventImages()
    {
      return $this->hasMany(EventImage::class);
    }

    public function eventType()
    {
      return $this->belongsTo(EventType::class, 'id_type');
    }

    public function tickets()
    {
      return $this->hasMany(Ticket::class, 'id_event_names');
    }
}
