<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FileTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file')->delete();
        DB::table('file_type')->delete();

        DB::table('file_type')->insert(array(
            array('id' => 1, 'name' => 'Race Logo'),
            array('id' => 2, 'name' => 'Race Form'),
            array('id' => 3, 'name' => 'GPS'),
            array('id' => 4, 'name' => 'Giveaway'),
            array('id' => 5, 'name' => 'Charity Logo'),
            array('id' => 6, 'name' => 'Sponsor Logo'),
            array('id' => 7, 'name' => 'Photo'),
            array('id' => 8, 'name' => 'Ad'),
            array('id' => 9, 'name' => 'Tax Exempt Certificate'),
            array('id' => 10, 'name' => 'Results PDF File'),
            array('id' => 11, 'name' => 'Zipped Archive'),
            array('id' => 12, 'name' => 'Team Scores')
        ));
    }

}
?>
