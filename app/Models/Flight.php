<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
      'code', 'type', 'departure_id', 'destination_id', 'departure_time',
      'arrival_time', 'airline_id'
    ];

    public function airportDeparture()
    {
      return $this->hasOne(Airport::class,  'id', 'departure_id');
    }

    public function airportArrival()
    {
      return $this->hasOne(Airport::class,  'id', 'destination_id');
    }

    public function airline()
    {
      return $this->hasOne(Airline::class,  'id', 'airline_id');
    }

      
}
