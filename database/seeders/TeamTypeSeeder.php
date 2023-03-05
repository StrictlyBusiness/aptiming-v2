<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeamTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('team_type')->delete();

    DB::table('team_type')->insert(array(
      array('id' => 1, 'name' => 'Other'),
      array('id' => 2, 'name' => 'Religious'),
      array('id' => 3, 'name' => 'Corporate'),
      array('id' => 4, 'name' => 'Educational')
    ));
  }

}
?>
