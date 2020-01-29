<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'full_name_ar' => 'admin',
            'phone' => '5367711855',
            'company_name_ar' => 'IBDA',
            'year_founded' => '2020',
            'main_location_ar' => 'Istanbul',
            'main_address_ar' => 'istanbul',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed' => true,
        ]);

        User::create([
            'full_name_ar' => 'user',
            'phone' => '5367711855',
            'company_name_ar' => 'IBDA',
            'year_founded' => '2020',
            'main_location_ar' => 'Istanbul',
            'main_address_ar' => 'istanbul',
            'email' => 'user@user.com',
            'password' => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed' => true,
        ]);

        $this->enableForeignKeys();
    }
}
