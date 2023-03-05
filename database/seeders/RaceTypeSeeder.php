<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RaceTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('race')->delete();
    DB::table('race_type')->delete();

    DB::table('race_type')->insert(array(
      array('id' => 1, 'name' => 'Run'),
      array('id' => 2, 'name' => 'Bike'),
      array('id' => 3, 'name' => 'Swim'),
      array('id' => 4, 'name' => 'Duathlon'),
      array('id' => 5, 'name' => 'Triathlon'),
      array('id' => 6, 'name' => 'X-Country'),
      array('id' => 7, 'name' => 'Virtual')
    ));
  }

}
?>
