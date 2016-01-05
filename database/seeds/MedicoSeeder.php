<?php

use Illuminate\Database\Seeder;
use App\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Medico::create([
    		'nome' 			=> 'Dr. Rodney Stratton',
    		'especialidade' => 'Physiotherapist',
    		'celular' 		=> '(985) 123-3410',
    		'descricao'		=> 'Sed tristique turpis a libero malesuada, tincidunt elementum mauris euismod.',
    		'foto'			=> 'team-1.png'
    		]);

        Medico::create(
            [
            'nome'          => 'Dr. Lita White',
            'especialidade' => 'Neurosurgeon',
            'celular'       => '(985) 231-1234',
            'descricao'     => 'Maecenas commodo turpis adipiscing, malesuada ipsum in, molestie magna.',
            'foto'          => 'team-2.png'
            ]);

        Medico::create(
            [
            'nome'          => 'Robert Brown, Prof.',
            'especialidade' => 'Anesthesiologist',
            'celular'       => '(985) 231-1234',
            'descricao'     => 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat',
            'foto'          => 'team-3.png'
            ]);
    }
}
