<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'god',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'editor',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
