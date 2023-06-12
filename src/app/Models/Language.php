<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'language', 'created_at', 'updated_at'];

    public function hours()
    {
        return $this->belongsToMany(Hour::class, 'hour_language', 'language_id', 'hour_id')->withPivot('language_hour');
    }
}
