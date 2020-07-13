<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StretchPost extends Model
{
    protected $fillable= ['title', 'source', 'category_id'];
}
