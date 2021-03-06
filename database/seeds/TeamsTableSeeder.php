<?php

use Illuminate\Database\Seeder;

use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();
        Team::create(['id' => '1',  'name' => 'Team Achievers', 'goal' => 250,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'organization_id'=>'1','campaign_id'=>'1','title'=>'Welcome to Team Achievers!','content'=>'Test content','user_id'=>'1', 'token'=>str_random(15)]);
        Team::create([ 'id'=> '2', 'name' => 'Team ABC', 'goal' => 300,
        'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'organization_id'=>'2','campaign_id'=>'2','title'=>'Welcome to Team ABC!','content'=>'Test content','user_id'=>'2', 'token'=>str_random(15)]);
        Team::create([  'id' => '3','name' => 'Team XYZ', 'goal' => 275,
        'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'organization_id'=>'3','campaign_id'=>'1','title'=>'Welcome to Team XYZ!','content'=>'Test content','user_id'=>'3', 'token'=>str_random(15)]);

    }
}
