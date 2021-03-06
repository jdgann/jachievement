<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\EducatorInterestForm;
use App\VolunteerInterestForm;
use Log;
use Excel;
use DB;
use App\State;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
        $this->educatorInterestForms = EducatorInterestForm::all();

        $this->viewData = ['educatorInterestForms' => $this->educatorInterestForms];
    }

    public function listEducatorForm()
    {
        Log::info('AdminController.listEducatorForm: ');
        $educatorInterestForms = EducatorInterestForm::all();
        $this->viewData['educatorInterestForms'] = $educatorInterestForms;

        return view('admin.educator_form_index', $this->viewData);
    }

    public function listVolunteerForm()
    {
        Log::info('AdminController.listEducatorForm: ');
        $volunteerInterestForms = VolunteerInterestForm::all();
        $this->viewData['volunteerInterestForms'] = $volunteerInterestForms;

        return view('admin.volunteer_form_index', $this->viewData);
    }

    public function showEducatorDetails($id)
    {
        Log::info('AdminController.showEducatorDetails: ');
        $educatorInterestForm = EducatorInterestForm::where('id', '=', $id)->firstOrFail();
        $school_state_id = $educatorInterestForm->school_state_id;
        if ($school_state_id != null) {
            $state = State::where('id', "=", $school_state_id)->firstOrFail();
            $educatorInterestForm->school_state = $state->name;
        }

        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function showVolunteerDetails($id)
    {

        Log::info('AdminController.showVolunteerDetails: ');
        $volunteerInterestForm = DB::select("select sch.school_name as school_preference, vif.first_name, vif.last_name, vif.company_name, vif.company_address, vif.company_city, s1.name as company_state, vif.company_zip, vif.company_phone, vif.home_phone, vif.home_address, vif.home_city, s2.name as home_state, vif.home_zip, vif.email, vif.created_at, vif.mode_of_contact from volunteer_interest_forms vif left join states s1 on s1.id = vif.company_state_id left join states s2 on s2.id = vif.home_state_id left join schools sch on sch.id = vif.school_preference_id where vif.id = " . $id);

        $volunteerInterestForm = $volunteerInterestForm[0];

        $volunteer_programs = DB::table('volunteer_programs')
            ->select(DB::raw('array_to_string(array_agg(programs.name), \', \') as name'))
            ->join('programs', 'volunteer_programs.program_id', '=', 'programs.id')
            ->where('volunteer_programs.volunteerform_id', '=', $id)
            ->get();
        return view('admin.volunteer_form_show', compact('volunteerInterestForm', 'volunteer_programs'));
    }

    public function destroyEducatorForm($id)
    {
        Log::info('AdminController.destroyEducatorForm: ');
        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function destroyVolunteerForm($id)
    {
        Log::info('AdminController.destroyEducatorForm: ');
        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function downloadVolunteerReport()
    {

        Log::info('AdminController.downloadVolunteerReport: ');

        $data = array();
        $volunteerInterestForms = DB::table('volunteer_programs')
            ->select(DB::raw('schools.school_name,volunteer_interest_forms.first_name,
                volunteer_interest_forms.last_name,volunteer_interest_forms.company_name,
                volunteer_interest_forms.company_address,volunteer_interest_forms.company_city,
                states1.name as company_state,volunteer_interest_forms.company_zip,volunteer_interest_forms.company_phone,
                volunteer_interest_forms.home_phone,volunteer_interest_forms.home_address,volunteer_interest_forms.home_city,
                states2.name as home_state,volunteer_interest_forms.home_zip,volunteer_interest_forms.email,
                volunteer_interest_forms.created_at,volunteer_interest_forms.mode_of_contact, array_to_string(array_agg(programs.name), \',\') as program_preference'))
            ->join('volunteer_interest_forms', 'volunteer_interest_forms.id', '=', 'volunteer_programs.volunteerform_id')
            ->join('programs', 'volunteer_programs.program_id', '=', 'programs.id')
            ->join('states as states1', 'states1.id', '=', 'volunteer_interest_forms.company_state_id')
            ->join('states as states2', 'states2.id', '=', 'volunteer_interest_forms.home_state_id')
            ->join('schools', 'schools.id', '=', 'volunteer_interest_forms.school_preference_id')
            ->groupBy('schools.school_name', 'volunteer_interest_forms.first_name',
                'volunteer_interest_forms.last_name', 'volunteer_interest_forms.company_name',
                'volunteer_interest_forms.company_address', 'volunteer_interest_forms.company_city',
                'states1.name', 'volunteer_interest_forms.company_zip', 'volunteer_interest_forms.company_phone',
                'volunteer_interest_forms.home_phone', 'volunteer_interest_forms.home_address', 'volunteer_interest_forms.home_city',
                'states2.name', 'volunteer_interest_forms.home_zip', 'volunteer_interest_forms.email',
                'volunteer_interest_forms.created_at', 'volunteer_interest_forms.mode_of_contact')
            ->get();

        foreach ($volunteerInterestForms as $volunteerInterestForm) {
            $created_date = $volunteerInterestForm->created_at;
            $timestamp = strtotime($created_date);
            $volunteerInterestForm->created_at = date('m/d/Y', $timestamp);
            $data[] = (array)$volunteerInterestForm;
        }
        Excel::create('report', function ($excel) use ($data) {
            $excel->sheet('Volunteer Records', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('xls');
    }

    public function downloadEducatorReport()
    {
        Log::info('AdminController.downloadEducatorReport: ');

        $data = array();
        $educatorInterestForms = DB::table('educator_interest_forms')
            ->select('educator_interest_forms.first_name',
                'educator_interest_forms.last_name', 'educator_interest_forms.school_name',
                'educator_interest_forms.school_phone', 'educator_interest_forms.school_address',
                'educator_interest_forms.school_city',
                'states.name as school_state', 'educator_interest_forms.school_zip', 'educator_interest_forms.email', 'educator_interest_forms.grade',
                'educator_interest_forms.program_theme', 'educator_interest_forms.planning_time', 'educator_interest_forms.cell_phone',
                'educator_interest_forms.comments_requests', 'educator_interest_forms.no_of_classes', 'educator_interest_forms.no_of_students_per_class',
                'educator_interest_forms.created_at')
            ->join('states', 'states.id', '=', 'educator_interest_forms.school_state_id')
            ->get();

        foreach ($educatorInterestForms as $educatorInterestForm) {
            $created_date = $educatorInterestForm->created_at;
            $timestamp = strtotime($created_date);
            $educatorInterestForm->created_at = date('m/d/Y', $timestamp);
            $data[] = (array)$educatorInterestForm;

        }

        Excel::create('report', function ($excel) use ($data) {
            $excel->sheet('Educator Records', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
}
