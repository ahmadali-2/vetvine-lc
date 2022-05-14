<?php

namespace App\Models\Admins\Webinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryEvent extends Model
{
    use HasFactory;
    protected $fillable=['category_title'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

