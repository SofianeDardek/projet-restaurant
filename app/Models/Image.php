<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Image extends Model
{
    public function new(){
        return $this->belongsTo(News::class);
    }
}
