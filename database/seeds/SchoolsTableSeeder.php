<?php

use Illuminate\Database\Seeder;

use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->delete();
        School::create(['school_name' => 'Pine Creek Elementary School','school_address' => '7801 N HWS Cleveland Blvd', 'school_city' => 'Bennington', 'school_state_id' => 28, 'school_zip' => '68007', 'school_latitude' => '41.330086', 'school_longitude' => '-96.167939', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Fire Ridge Elementary School','school_address' => '19660 Farnam St', 'school_city' => 'Elkhorn', 'school_state_id' => 28, 'school_zip' => '68022', 'school_latitude' => '41.258039', 'school_longitude' => '-96.2225479', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hillside Elementary School','school_address' => '7500 Western Ave', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.271576', 'school_longitude' => '-96.029346', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Manchester Elementary School','school_address' => '2750 N HWS Cleveland Blvd', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68116', 'school_latitude' => '41.283851', 'school_longitude' => '-96.186273', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Sagewood Elementary School','school_address' => '4910 N 177th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68116', 'school_latitude' => '41.3032568', 'school_longitude' => '-96.1924904', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Skyline Elementary School','school_address' => '400 S 210th St', 'school_city' => 'Elkhorn', 'school_state_id' => 28, 'school_zip' => '68022', 'school_latitude' => '41.254594', 'school_longitude' => '-96.244623', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Spring Ridge Elementary School','school_address' => '17830 Shadow Ridge Dr', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68130', 'school_latitude' => '41.2449276', 'school_longitude' => '-96.1938537', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'West Bay Elementary School','school_address' => '3220 S 188th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68135', 'school_latitude' => '41.2293346', 'school_longitude' => '-96.2115295', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Cottonwood Elementary School','school_address' => '615 Piedmont Dr', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68154', 'school_latitude' => '41.2536246', 'school_longitude' => '-96.155475', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Gretchen Reeder Elementary School','school_address' => '19202 Chandler St', 'school_city' => 'Gretna', 'school_state_id' => 28, 'school_zip' => '68028', 'school_latitude' => '41.1842489', 'school_longitude' => '-96.2166169', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hitchcock Elementary School','school_address' => '5809 S 104th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.1987866', 'school_longitude' => '-96.0761318', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Montclair Elementary School','school_address' => '2405 S 138th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.237778', 'school_longitude' => '-96.12774', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Rohwer Elementary School','school_address' => '17701 F St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68135', 'school_latitude' => '41.2184379', 'school_longitude' => '-96.1927942', 'updated_at' => date_create(),'created_at'=>date_create()]);

        School::create(['school_name' => 'Belle Ryan Elementary School','school_address' => '5616 L St. Omaha', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68117', 'school_latitude' => '41.2145655', 'school_longitude' => '-96.0023713', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Catlin Magnet','school_address' => '12736 Marinda St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.2394739', 'school_longitude' => '-96.1136464', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Crestridge Magnet','school_address' => '818 Crestridge Road Omaha', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68153', 'school_latitude' => '41.2526514', 'school_longitude' => '-96.0961027', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hartman Elementary','school_address' => '5530 N 66th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68104', 'school_latitude' => '41.309408', 'school_longitude' => '-96.015336', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Skinner Magnet','school_address' => '4304 N 33rd St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68111', 'school_latitude' => '41.2984179', 'school_longitude' => '-95.9622333', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Wilson Focus Magnet','school_address' => '5141 F St Omaha', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68117', 'school_latitude' => '41.2186492', 'school_longitude' => '-95.9942996', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Mary Our Queen','school_address' => '3535 S 119th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.224816', 'school_longitude' => '-96.0992442', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Cecilia','school_address' => '701 N 40th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68131', 'school_latitude' => '41.2665191', 'school_longitude' => '-95.9722337', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Gerald','school_address' => '7857 Lakeview St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.208673', 'school_longitude' => '-96.036226', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Patrick’s Elkhorn','school_address' => '20500 W Maple Rd', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68022', 'school_latitude' => '41.2932034', 'school_longitude' => '-96.2356043', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Robert Bellarmine','school_address' => '11802 Pacific St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68154', 'school_latitude' => '41.2496205', 'school_longitude' => '-96.0979832', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Stephen the Martyr','school_address' => '16701 S St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68135', 'school_latitude' => '41.202616', 'school_longitude' => '-96.175362', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Vincent de Paul','school_address' => '14330 Eagle Run Dr', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68164', 'school_latitude' => '41.2891692', 'school_longitude' => '-96.137309', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Wenceslaus','school_address' => '15353 Pacific St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68154', 'school_latitude' => '41.2462271', 'school_longitude' => '-96.1538501', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Mockingbird Elementary','school_address' => '5100 S 93rd St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.2062669', 'school_longitude' => '-96.05729', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hillside Elementary','school_address' => '7500 Western Ave', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.271576', 'school_longitude' => '-96.029346', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Loveland Elementary','school_address' => '8201 Pacific St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.248423', 'school_longitude' => '-96.040298', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Oakdale Elementary','school_address' => '9801 W Center Rd', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68124', 'school_latitude' => '41.2334895', 'school_longitude' => '-96.0650387', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Paddock Road Elementary','school_address' => '3535 Paddock Rd', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68124', 'school_latitude' => '41.226005', 'school_longitude' => '-96.056424', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Rockbrook Elementary','school_address' => '2514 S 108th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.236677', 'school_longitude' => '-96.08215', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Swanson Elementary','school_address' => '8601 Harney St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.2572345', 'school_longitude' => '-96.0455628', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Treynor Elementary & Middle','school_address' => '102 E Main St', 'school_city' => 'Treynor', 'school_state_id' => 16, 'school_zip' => '51575', 'school_latitude' => '41.231237', 'school_longitude' => '-95.603883', 'updated_at' => date_create(),'created_at'=>date_create()]);
        

        School::create(['school_name' => 'Beveridge Middle School','school_address' => '1616 S 120th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.242235', 'school_longitude' => '-96.102462', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Nathan Hale Middle School','school_address' => '6143 Whitmore St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68152', 'school_latitude' => '41.3198483', 'school_longitude' => '-96.0071841', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Holy Cross School','school_address' => '1502 S 48th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68106', 'school_latitude' => '41.2446934', 'school_longitude' => '-95.9857312', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Gerald School','school_address' => '7857 Lakeview St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.2086734', 'school_longitude' => '-96.0362264', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Joan of Arc School','school_address' => '7430 Hascall St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68124', 'school_latitude' => '41.2295069', 'school_longitude' => '-96.0280742', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'St. Margaret Mary School','school_address' => '123 N 61st St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68132', 'school_latitude' => '41.2650328', 'school_longitude' => '-96.0075461', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Ralston Middle School','school_address' => '8202 Lakeview St', 'school_city' => 'Ralston', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.2089312', 'school_longitude' => '-96.0408261', 'updated_at' => date_create(),'created_at'=>date_create()]);


        School::create(['school_name' => 'Central High School','school_address' => '124 N 20th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68102', 'school_latitude' => '41.2608485', 'school_longitude' => '-95.9436551', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'North High School','school_address' => '4410 N 36th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68111', 'school_latitude' => '41.29789', 'school_longitude' => '-95.967362', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Creighton Prep High School','school_address' => '7400 Western Ave', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.271727', 'school_longitude' => '-96.026241', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Gross Catholic High School','school_address' => '7700 S 43rd St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68147', 'school_latitude' => '41.1831708', 'school_longitude' => '-95.9795706', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Marian High School','school_address' => '7400 Military Ave', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68134', 'school_latitude' => '41.300768', 'school_longitude' => '-96.0290498', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Papillion/LaVista South High School','school_address' => '10799 NE-370', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68046', 'school_latitude' => '41.1430054', 'school_longitude' => '-96.0789623', 'updated_at' => date_create(),'created_at'=>date_create()]);

    }
}
