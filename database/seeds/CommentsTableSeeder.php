<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        Comment::create(['id' => '1',  'user_id' => 1, 'text' => 'The program was good', 'program_id' => 1,'active' => false, 'created_by' => 'System','updated_by' =>'System','created_at' => date_create(), 'updated_at' => date_create()]);
        Comment::create(['id' => '2',  'user_id' => 1, 'text' => 'The program was good', 'program_id' => 2,'active' => false, 'created_by' => 'System','updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
