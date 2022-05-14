<?php

namespace App\Models\Admins\Webinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_type',
        'category_id',
        'event_title',
        'tags',
        'event_add_ytlink',
        'event_add_vimeolink',
        'event_add_video',
        'sponser_one',
        'sponser_two',
        'sponser_three',
        'date',
        'time',
        'presenter_one',
        'presenter_one_url',
        'presenter_two',
        'presenter_two_url',
        'presenter_three',
        'presenter_three_url',
        'event_description',
        'pdf_file',
        'main_photo',
        'Vet_Pet_Prof_Fee',
        'Pet_Owner_Premium_Fee',
        'Pet_Owner_Fee',
        'Vet_Pet_Prof_Premium',
        'status',
    ];
    public function events()
    {
        return $this->belongsTo(CategoryEvent::class,"category_id");
    }
}
