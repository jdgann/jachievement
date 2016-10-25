<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\TeamMemberRequest;
use App\TeamMember;
use App\Team;
use App\User;
use Log;
use DB;

use Auth;
use Session;

class CampaignController extends Controller
{
  public function teammember($id)
  {
      Log::info('CampaignController.teammember: ');

      $teamMember = TeamMember::findOrFail($id);
      $team_id = $teamMember->team_id;

      $teammemberDonation = DB::table('donations')
          ->select(DB::raw('sum(donations.amount) as donation_amount'))
          ->join('team_members', 'donations.team_member_id', '=', 'team_members.id')
          ->where('team_members.id', '=' ,$id)
          ->get();

      $teamMembers= DB::table('team_members')
          ->select('users.name', 'team_members.goal', 'team_members.id', DB::raw(
              'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
          ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
          ->join('users', 'team_members.user_id', '=', 'users.id')
          ->where('team_members.team_id', '=', $id)
          ->groupBy('users.name', 'team_members.goal', 'team_members.id')
          ->orderBy('per_raised')
          ->get();

      return view('campaign.teammember', compact('teamMember','teamMembers','teammemberDonation'));
      
  }


  public function joinTeam($teamId)
  {
      Log::info('CampaignController.joinTeam: ');
      $data['teamId'] = $teamId;
      $data['action'] = 'join';
      $data['heading'] = 'Join a Campaign Team';

      $teamInfo = DB::table('teams')
                  ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
                  ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
                  ->select('teams.name as teamName', 'organizations.name as orgName', 'campaigns.name as campName')
                  ->where('teams.id', '=', $data['teamId'])
                  ->first();

      $data['teamInfo'] = $teamInfo;

      return view('campaign.jointeam', $data);
      
  }

  public function createTeam($campaignId)
  {
      Log::info('CampaignController.createTeam: ');
      $data['campaignId'] = $campaignId;
      $data['action'] = 'create';
      $data['heading'] = 'Create a Campaign Team';


      $campaignInfo = DB::table('campaigns')
                      ->select('campaigns.name as campName')
                      ->where('campaigns.id', '=', $data['campaignId'])
                      ->first();

      $data['campaignInfo'] = $campaignInfo;

      $organizationList = DB::table('organizations')
                          ->whereNull('organizations.deleted_at')
                          ->lists('name', 'id');

      $data['organizationList'] = $organizationList;

      return view('campaign.jointeam', $data);
      
  }

    public function team($id)
    {
        Log::info('CampaignController.team: ');
        $team = Team::findOrFail($id);

        $teamDonation = DB::table('donations')
            ->select(DB::raw('sum(donations.amount) as donation_amount'))
            ->join('teams', 'donations.team_id', '=', 'teams.id')
            ->where('teams.id', '=' ,$id)
            ->get();

        $teamMembers= DB::table('team_members')
            ->select('users.name', 'team_members.goal', 'team_members.id', DB::raw(
                'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
            ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
            ->join('users', 'team_members.user_id', '=', 'users.id')
            ->where('team_members.team_id', '=', $id)
            ->groupBy('users.name', 'team_members.goal', 'team_members.id')
            ->orderBy('per_raised')
            ->get();


        return view('campaign.team', compact('teamMembers','team','teamDonation'));

    }

  public function joinTeamStore(TeamMemberRequest $request)
  {
      Log::info('CampaignController.joinTeamStore - Start: ');
      $input = $request->all();
      $user = Auth::user();

      if ($user) {
          $input['user_id'] = $user->id;
      }
      $this->populateCreateFields($input);


      $object = TeamMember::create($input);

      Session::flash('flash_message', 'You have successfully joined the team!');
      Log::info('CampaignController.store - End: ' . $object->id);
      return redirect()->action('CampaignController@teammember', ['id' => $object->id]);
  }

  public function createTeamStore(TeamRequest $request)
  {
      Log::info('CampaignController.createTeamStore - Start: ');
      $input = $request->all();
      $user = Auth::user();

      if ($user) {
          $input['user_id'] = $user->id;
      }
      $this->populateCreateFields($input);


      $object = Team::create($input);

      Session::flash('flash_message', 'You have successfully created a team!');
      Log::info('CampaignController.store - End: ' . $object->id);
      return redirect()->action('CampaignController@team', ['id' => $object->id]);
  }
  
  public function active()
  {
		Log::info('CampaignController.active: ');
		
		$activecampaigns = DB::table('campaigns')
					->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.description as description, campaigns.start_date as start_date, campaigns.end_date as end_date'))
					->where('active', '=','1')
					->get();
		
		
       //$this->viewData['heading'] = "Active Campaigns";
       return view('campaign.activecampaign',compact('activecampaigns'));


  }
}

