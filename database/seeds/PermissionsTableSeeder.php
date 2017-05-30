<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'list.user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'edit.user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'create.user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'delete.user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'list.website',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'edit.website',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'create.website',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'delete.website',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
