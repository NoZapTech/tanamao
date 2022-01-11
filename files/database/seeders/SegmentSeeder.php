<?php

namespace Database\Seeders;

use App\Models\Segment;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $segments = [
            [ 'name' => '🍎 Supermercados e Similares'],
            [ 'name' => '🍴 Bares e restaurantes'],
            [ 'name' => '🍞 Padaria, confeitaria, doceria, açaiteria'],
            [ 'name' => '👶 Infantil'],
            [ 'name' => '🍻 Depósitos: bebidas, água e gás'],
            [ 'name' => '✏ Papelaria'],
            [ 'name' => '🏢 Hospedagem'],
            [ 'name' => '👗 Moda'],
            [ 'name' => '💊 Farmácias e drogarias'],
            [ 'name' => '💉 Estética'],
            [ 'name' => '➕ Saúde'],
            [ 'name' => '🏋 Fitness'],
            [ 'name' => '🐶 Veterinárias e petshops'],
            [ 'name' => '💋 Beleza'],
            [ 'name' => '🔨 Construção'],
            [ 'name' => '💼 Profissionais liberais'],
            [ 'name' => '🏍 Automóveis, embarcações e motos'],
            [ 'name' => '🔍 Exames'],
            [ 'name' => 'Outros'],
        ];
        foreach($segments as $segment) {
            Segment::create($segment);
        }
    }
}
