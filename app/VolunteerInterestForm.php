<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VolunteerInterestForm extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schoolPreference', 'firstName', 'lastName', 'companyName', 'companyAddress', 'companyCity', 'companyState',
        'companyZip', 'companyPhone', 'homePhone', 'homeAddress', 'homeCity', 'homeState', 'homeZip', 'email', 'user_id',
        'modeOfContact'
    ];

}