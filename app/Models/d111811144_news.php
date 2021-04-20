<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d111811144_news extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'img_url', 'sub_desc', 'desc'
    ];
}
