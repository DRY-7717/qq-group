<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'categorynews'];

 


    public function categorynews()
    {
        return $this->belongsTo(Categorynews::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
