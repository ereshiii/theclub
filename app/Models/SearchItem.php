<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchItem extends Model
{
    protected $fillable = ['title', 'blurb', 'url', 'keywords'];
}
