<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Orchid\Platform\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $defaultRoles = [
            [
                'slug' => 'admins',
                'name' => 'Администраторы',
                'permissions' => null,
            ],
            [
                'slug' => 'users',
                'name' => 'Пользователи',
                'permissions' => null,
            ],

        ];
        foreach ($defaultRoles as $role ) {
            echo PHP_EOL. Role::create($role) . PHP_EOL;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
};
