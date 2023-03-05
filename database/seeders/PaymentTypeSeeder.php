<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('payment_type')->delete();

    DB::table('payment_type')->insert(array(
      array('id' => 1, 'name' => 'Credit Card'),
      array('id' => 2, 'name' => 'PayPal'),
      array('id' => 3, 'name' => 'Apple Pay'),
      array('id' => 4, 'name' => 'Google Wallet'),
      array('id' => 5, 'name' => 'Amazon Payments')
    ));
  }

}
?>
