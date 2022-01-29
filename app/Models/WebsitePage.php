<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitePage extends Model
{
    use HasFactory;
    protected $fillable = ['page'];

    public function informations()
    {
        return $this->hasMany(WebsiteInfo::class);
    }

    public function getNameAttribute()
    {
        return $this->page;
    }
}
