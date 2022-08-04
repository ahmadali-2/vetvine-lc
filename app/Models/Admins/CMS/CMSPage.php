<?php

namespace App\Models\Admins\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMSPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','slug','content'
    ];
}
