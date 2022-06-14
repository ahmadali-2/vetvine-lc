<?php

namespace App\Models\Admins\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryForum extends Model
{
    use HasFactory;
    protected $fillable=['id','category_title'];

    public function forums()
    {
        return $this->hasMany(Forum::class,'category_id','id');
    }
}
