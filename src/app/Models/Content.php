<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'content', 'created_at', 'updated_at'];

    public function hours()
    {
        return $this->belongsToMany(Hour::class, 'hour_content', 'content_id', 'hour_id')->withPivot('content_hour');
    }
}
