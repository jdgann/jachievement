<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class InterestformsController extends Controller
{
    public function interestform()
    {

        Log::info('InterestformsController.form: ');
        $this->viewData['heading'] = "Volunteer Interest Form";
        return view('volunteers.interestform', $this->viewData);
    }

    public function store() {

    }
}