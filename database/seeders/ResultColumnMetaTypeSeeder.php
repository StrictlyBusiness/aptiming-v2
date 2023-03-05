<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResultColumnMetaTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('result_column_meta_type')->delete();

    DB::table('result_column_meta_type')->insert(array(
      array('id' => 1, 'name' => 'First Name'),
      array('id' => 2, 'name' => 'Last Name'),
      array('id' => 3, 'name' => 'Age'),
      array('id' => 4, 'name' => 'Gender'),
      array('id' => 5, 'name' => 'Pace'),
      array('id' => 6, 'name' => 'Time'),
      array('id' => 7, 'name' => 'Place'),
      array('id' => 8, 'name' => 'Division'),
      array('id' => 9, 'name' => 'Bib Number'),
      array('id' => 10, 'name' => 'Video Time'),
      array('id' => 11, 'name' => 'Team'),
      array('id' => 12, 'name' => 'Grade')
    ));
  }
  
}
?>
