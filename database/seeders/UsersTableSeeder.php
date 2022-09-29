<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Broker Vision',
                'email' => 'admin@brokervision.com',
                'phone' => '12345678',
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => Hash::make('12345678'),
                'picture' => NULL,
                'type' => 1,
                'remember_token' => 'nSpDpRZVztTw763gReuPXaQoXMajmY2knqw8wFaPP57Kd3Q17mzcswJ6IERE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Broker Vision',
                'email' => 'user@brokervision.com',
                'phone' => '12345678',
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => Hash::make('12345678'),
                'picture' => NULL,
                'type' => 2,
                'remember_token' => 'nSpDpRZVztTw763gReuPXaQoXMajmY2knqw8wFaPP57Kd3Q17mzcswJ6IERE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
        ));


    }
}
