<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DistanceUnitSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('event')->delete();
    DB::table('distance_unit')->delete();

    DB::table('distance_unit')->insert(array(
      array('id' => 1, 'name' => 'Kilometers'),
      array('id' => 2, 'name' => 'Miles'),
      array('id' => 3, 'name' => 'Meters'),
      array('id' => 4, 'name' => 'Yards'),
      array('id' => 5, 'name' => 'Feet')
    ));
  }

}
?>
