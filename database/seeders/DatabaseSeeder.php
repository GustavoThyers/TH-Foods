<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Categoria::factory(5)->create();
        // \App\Models\Produto::factory(5)->create();
        // \App\Models\User::factory(5)->create();
        /// \App\Models\Tipo_evento::factory(5)->create();
        // \App\Models\Evento::factory(5)->create();

         \App\Models\Pedido::factory(400)->create();

        // \App\Models\User::factory(1)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'admin' => 1
        // ]);
    }
}
