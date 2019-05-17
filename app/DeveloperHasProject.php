<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeveloperHasProject extends Model
{
    protected $table = 'developer_has_project';

    protected $fillable = [
        'project_id',
        'developer_id'
    ];
}
