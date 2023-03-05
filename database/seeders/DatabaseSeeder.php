<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CustomFieldTypeSeeder::class,
            DistanceUnitSeeder::class,
            FileTypeSeeder::class,
            PaymentTypeSeeder::class,
            RaceTypeSeeder::class,
            ResultColumnTypeSeeder::class,
            ResultColumnMetaTypeSeeder::class,
            TeamTypeSeeder::class,
            UserRoleSeeder::class,
            UserSeeder::class,
            StateSeeder::class,
            RaceWaiverSeeder::class    
        ]);

		$this->command->info('Tables successfully seeded.');

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
