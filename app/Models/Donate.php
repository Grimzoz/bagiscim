<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;

class Donate extends Model
{
    use HasFactory;
 //   use Sluggable;

    protected $fillable=['title','name','description','blood_type','city_id','hospital','contact'];
    /*public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }*/
}
