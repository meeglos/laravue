<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note', 'title', 'tags', 'category_id'];
    protected $visible = ['id', 'note', 'title', 'tags', 'category_id'];
}
