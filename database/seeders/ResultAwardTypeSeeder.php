<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResultAwardTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('result_award_type')->delete();

    DB::table('result_award_type')->insert(array(
      array('id' => 1, 'name' => 'Overall'),
      array('id' => 2, 'name' => 'Male Gender'),
      array('id' => 3, 'name' => 'Female Gender'),
      array('id' => 4, 'name' => 'Division'),
      array('id' => 5, 'name' => 'Nonbinary Gender')
    ));
  }
  
}
?>
