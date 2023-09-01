<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'Consumindo',
                'handler' => Status::CONSUMINDO
            ],
            [
                'name' => 'Pra Ontem',
                'handler' => Status::PRIORIDADE
            ],
            [
                'name' => 'Tá na Lista',
                'handler' => Status::LISTA
            ],
            [
                'name' => 'Concluído',
                'handler' => Status::CONCLUIDO
            ],
            [
                'name' => 'Dropado',
                'handler' => Status::DROPADO
            ],
        ];

        foreach ($statuses as $key => $status) {
            Status::firstOrCreate($status);
        }
    }
}
