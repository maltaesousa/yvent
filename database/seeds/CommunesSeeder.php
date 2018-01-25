<?php

use Illuminate\Database\Seeder;

class CommunesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        // communes
        DB::statement("TRUNCATE TABLE communes RESTART IDENTITY CASCADE");
        
        DB::table('communes')->insert([
            'name' => "Yverdon-les-Bains"
        ]);
        DB::table('communes')->insert([
            'name' => "Orbe"
        ]);
        DB::table('communes')->insert([
            'name' => "Chamblon"
        ]);
        DB::table('communes')->insert([
            'name' => "Cheseaux-Noréaz"
        ]);
        DB::table('communes')->insert([
            'name' => "Ependes"
        ]);
        DB::table('communes')->insert([
            'name' => "Mathod"
        ]);
        DB::table('communes')->insert([
            'name' => "Montcherand"
        ]);
        DB::table('communes')->insert([
            'name' => "Pomy"
        ]);
        DB::table('communes')->insert([
            'name' => "Suchy"
        ]);
        DB::table('communes')->insert([
            'name' => "Suscévaz"
        ]);
        DB::table('communes')->insert([
            'name' => "Treycovagnes"
        ]);
        
        // eventtypes
        DB::statement("TRUNCATE TABLE eventtypes RESTART IDENTITY CASCADE");
        
        DB::table('eventtypes')->insert([
            'name' => 'Projet d\'un service',
            'name_plural' => 'Projets de services'
        ]);
        DB::table('eventtypes')->insert([
            'name' => 'Événement',
            'name_plural' => 'Événements'
        ]);
        DB::table('eventtypes')->insert([
            'name' => 'Dispositif police',
            'name_plural' => 'Dispositifs police'
        ]);
        DB::table('eventtypes')->insert([
            'name' => 'Chantier',
            'name_plural' => 'Chantiers'
        ]);
        
        // slottypes (added)
        DB::table('slottypes')->insert([
            'name' => 'Dispositif 1'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Dispositif 2'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Dispositif 3'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Études préliminaires'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Étude du projet'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Appel d\'offres'
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Réalisation'
        ]);
        
        // services (added)
        DB::table('services')->insert([
            'name' => 'PNV Opérationnel'
        ]);
        DB::table('services')->insert([
            'name' => 'SEY'
        ]);
        DB::table('services')->insert([
            'name' => 'SSP Mobilité'
        ]);
        DB::table('services')->insert([
            'name' => 'SSP Unité technique'
        ]);
        DB::table('services')->insert([
            'name' => 'STE'
        ]);
        DB::table('services')->insert([
            'name' => 'URBAT'
        ]);
        
        // status (added)
        DB::table('status')->insert([
            'name' => 'Projet',
            'description' => 'Dispositif projeté',
            'color1' => '#64B9E3',
            'color2' => '#64B9E3',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Confirmé',
            'description' => 'Dispositif confirmé',
            'color1' => '#0076BD',
            'color2' => '#0076BD',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Projet',
            'description' => 'Chantier projeté',
            'color1' => '#CF346C',
            'color2' => '#CF346C',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Confirmé',
            'description' => 'Chantier confirmé',
            'color1' => '#933589',
            'color2' => '#933589',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
    }
}
