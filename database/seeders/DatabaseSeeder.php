<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Doadores::factory(2)->create();

        DB::table('doadores')->insert([
            'nome' => 'Test User',
            'email' => 'test@example.com',
            'cpf'=>'304555222111',
            'telefone'=>'+5535999552',
            'dt_nascimento'=>'2000-01-01',
            'dt_cadastro'=>'2023-01-05',
            'intervalo_doacao'=>'Bimestral',
            'vl_doacao'=>'91.00',
            'forma_pagamento'=>'Débito',
            'endereco'=>'R.Jão de Assis,21,Diamantina,Mg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
