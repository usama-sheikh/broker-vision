<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'origin',
        'genre',
        'members',
        'url',
        'description',
        'image',
        'tracking',
    ];

    public function getArtistImage() {

        if($this->image !== Null) {
            return asset('assets/artist/'.$this->image);
        }else{
            return asset('assets/img/no-image.jpg');
        }
    }

    public function artistEvents() {
        return $this->hasMany(ArtistEvent::class);
    }
}
