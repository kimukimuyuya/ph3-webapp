<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'hours'];

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'hour_content', 'hour_id', 'content_id')->withPivot('content_hour');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'hour_language', 'hour_id', 'language_id')->withPivot('language_hour');
    }
}
