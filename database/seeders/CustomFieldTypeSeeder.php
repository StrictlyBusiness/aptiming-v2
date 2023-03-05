<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomFieldTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 */
  public function run() : void
  {
    DB::table('custom_field_type')->delete();

    DB::table('custom_field_type')->insert(array(
      array('id' => 1, 'name' => 'Small Text Field'),
      array('id' => 2, 'name' => 'Large Text Field'),
      array('id' => 3, 'name' => 'Checkbox')
    ));
  }

}
?>
