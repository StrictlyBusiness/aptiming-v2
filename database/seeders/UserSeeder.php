<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 */
  public function run(): void
  {
    DB::table('user')->delete();

    DB::table('user')->insert(array(
      ['id' => 1,
      'email' => 'gilbert.smith@sbcs.com',
      'password' => Hash::make('Iamanadmin123!'),
      'first_name' => 'Gilbert',
      'last_name' => 'Smith',
      'birthdate' => '1987-02-05',
      'phone' => '3048406632',
      'user_role_id' => 1]
    ));

    DB::table('user')->insert(array(
        ['id' => 2,
            'email' => 'ricky@aptiming.com',
            'password' => Hash::make('patsucks1'),
            'first_name' => 'Ricky',
            'last_name' => 'Campbell',
            'phone' => '3048078891',
            'user_role_id' => 1]
    ));
  }
}
?>
