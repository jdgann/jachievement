<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use SoftDeletes;
    protected $table = 'campaigns';
    protected $dates = ['deleted_at'];

    protected $fillable = [
							 'name','description','image','email','phone', 'event_date','venue', 'team_default_content', 'team_member_default_content', 'created_by', 'updated_by','active','create_team'
						  ];
}
