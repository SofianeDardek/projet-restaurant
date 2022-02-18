<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class News extends Model
{
    public function image() {
        return $this->hasOne(Image::class, 'new_id');
    }
}
