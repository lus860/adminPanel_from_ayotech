<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeCatalogueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('home_catalogue')->insert([
            [
                'id'=>1,
                'size'=>2,
                'sort'=>0,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'id'=>2,
                'size'=>1,
                'sort'=>1,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'id'=>3,
                'size'=>1,
                'sort'=>2,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'id'=>4,
                'size'=>1,
                'sort'=>3,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'id'=>5,
                'size'=>1,
                'sort'=>4,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
        ]);
    }
}
