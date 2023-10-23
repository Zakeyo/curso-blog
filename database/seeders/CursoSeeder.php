<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor framework de PHP';
        $curso->categoria = 'Desarrollo web';
        $curso->save();

        $curso2 = new Curso();
        $curso2->name = 'JavaScript';
        $curso2->description = 'El mejor lenguaje de programación';
        $curso2->categoria = 'Desarrollo web';
        $curso2->save();

        $curso3 = new Curso();
        $curso3->name = 'React';
        $curso3->description = 'El mejor framework de JS';
        $curso3->categoria = 'Desarrollo web';
        $curso3->save();
    }
}
