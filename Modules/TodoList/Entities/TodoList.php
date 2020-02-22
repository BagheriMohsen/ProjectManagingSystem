<?php

namespace Modules\TodoList\Entities;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = ['user_id','desc'];
}
