<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use Excel;
use App\Http\Requests;
use DateTime;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
    }


    public function DonationReporting()
    {
      Log::info('ReportsController: ');
      $donors= DB::table('donors')
            ->join('donations','donors.id','=','donations.donor_id')
            ->select(DB::raw('donors.last_name as lastname,donors.first_name as firstname, 
                              donations.amount as amount,donations.status as status,donations.created_at'))
            
            ->orderBy('donations.created_at', 'DESC')
            ->get();

         $chart_data= DB::table('donations')
            ->select(DB::raw('SUM(donations.amount) as sum, EXTRACT(MONTH from donations.created_at) as mon'))
             ->groupBy(DB::raw('mon'))
             ->orderBy(DB::raw('mon', 'ASC'))
             ->get();


            $data=array();

            $month_results = array_column($data, 'sum');

            for ($i = 0; $i < 12; $i++) {
                $chart_months[] = 0;
                $chart_results[] = 0;
            } 

            foreach($chart_data as $chart_values)
            {
                $chart_results[$chart_values->mon - 1] = $chart_values->sum;
            }


        return view('reports.donation',compact('donors'))->with('chart_results',json_encode($chart_results))->with('chart_months',json_encode($chart_months));

    }

     public function downloadDonations()
    {
        Log::info('ReportsController.downloadDonationReports: ');

        $data = array();
        $donationReports =  DB::table('donors')
            ->select('donors.last_name','donors.first_name','donors.email', 'donations.amount',  'donations.status',  'donations.created_at')
            ->join('donations','donors.id','=','donations.donor_id')
            ->get();


        foreach ($donationReports as $donationReport) {
            $created_date = $donationReport->created_at;
            $timestamp = strtotime($created_date);
            $donationReport->created_at = date('m/d/Y',$timestamp );
            $data[] = (array)$donationReport;
        }

        Excel::create('donation_report', function($excel) use($data) {
            $excel->sheet('Donation Records', function($sheet) use($data) {
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
}
