<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResultColumnTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('result_column_type')->delete();

    DB::table('result_column_type')->insert(array(
      array('id' => 1, 'name' => 'Integer', 'description' => 'Whole Numbers (0, 1, 2, 3)'),
      array('id' => 2, 'name' => 'Decimal', 'description' => 'Numbers With a Decimal (1.5, 2.499, 3.71)'),
      array('id' => 3, 'name' => 'Small Text', 'description' => 'Text Smaller than 100 Characters'),
      array('id' => 4, 'name' => 'Medium Text', 'description' => 'Text Smaller than 500 Characters'),
      array('id' => 5, 'name' => 'Large Text', 'description' => 'Text Smaller than 4000 Characters'),
      array('id' => 6, 'name' => 'Time', 'description' => 'Time Field in the HH:MM:SS Format')
    ));
  }
  
}
?>
