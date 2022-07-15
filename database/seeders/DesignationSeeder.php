<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designation = new Designation();
        $designation->name= "Chariman";
        $designation->save();

        $designation = new Designation();
        $designation->name= "Member";
        $designation->save();
    }
}
