<?php

namespace Database\Seeders;

use App\Models\Organization;
use Carbon\Carbon;
use Illuminate\Database\Seeder;


class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('organizations')->insert(
        //     [
        //         'name' => 'LMA',
        //         'generation' => 2019,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'LCC',
        //         'generation' => 2020,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        $organizations = [
            [
                'name' => 'LMA',
                'generation' => 2019,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'LCC',
                'generation' => 2020,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        Organization::insert($organizations);
    }
}
