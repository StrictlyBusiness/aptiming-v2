<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('user')->delete();
    DB::table('user_role')->delete();
    
    DB::table('user_role')->insert(array(
      array('id' => 1, 'name' => 'Admin'),
      array('id' => 2, 'name' => 'Timing Assistant'),
      array('id' => 3, 'name' => 'Race Director'),
      array('id' => 4, 'name' => 'User')
    ));
  }

}
?>
