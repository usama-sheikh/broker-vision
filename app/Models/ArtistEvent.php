<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistEvent extends Model
{
    use HasFactory;

    public function eventTickets() {
        return $this->hasMany(EventTicket::class);
    }
}
