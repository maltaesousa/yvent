<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // services
        DB::statement("TRUNCATE TABLE services RESTART IDENTITY CASCADE");
             
        DB::table('services')->insert([
            'name' => 'PNV',
        ]);
        DB::table('services')->insert([
            'name' => 'Culture',
        ]);
        DB::table('services')->insert([
            'name' => 'Communication',
        ]);
        DB::table('services')->insert([
            'name' => 'JECOS',
        ]);
        
        // status
        DB::statement("TRUNCATE TABLE status RESTART IDENTITY CASCADE");
        
        DB::table('status')->insert([
            'name' => 'Projet',
            'description' => 'Événement projeté.',
            'color1' => '#B1B2B4',
            'color2' => '#B1B2B4',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Annonce',
            'description' => 'Événement annoncé, en attente du formulaire de demande.',
            'color1' => '#F6AA41',
            'color2' => '#F6AA41',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Demande',
            'description' => 'Demande officielle déposée, en attente de décision.',
            'color1' => '#EE824F',
            'color2' => '#EE824F',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Annulé',
            'description' => 'Annulé par l\'organisateur.',
            'color1' => '#FFFFFF',
            'color2' => '#B1B2B4',
            'color3' => '#B1B2B4',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Pris acte',
            'description' => 'Ne nécessite pas d\'autorisation',
            'color1' => '#56AC42',
            'color2' => '#56AC42',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Accepté',
            'description' => 'Demande acceptée.',
            'color1' => '#008E59',
            'color2' => '#008E59',
            'color3' => '#FFFFFF',
            'visible' => true,
        ]);
        DB::table('status')->insert([
            'name' => 'Refusé',
            'description' => 'Demande refusée. Ne se réalisera pas.',
            'color1' => '#FFFFFF',
            'color2' => '#B1B2B4',
            'color3' => '#000000',
            'visible' => true,
        ]);

        // slottypes
        DB::statement("TRUNCATE TABLE slottypes RESTART IDENTITY CASCADE");
             
        DB::table('slottypes')->insert([
            'name' => 'Événement',
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Montage',
        ]);
        DB::table('slottypes')->insert([
            'name' => 'Démontage',
        ]);
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
        
        // communes
        $this->call(CommunesSeeder::class);
        $this->call(NewTablesSeeder::class);
        
        // events
        DB::statement("TRUNCATE TABLE events RESTART IDENTITY CASCADE");
        
        DB::table('events')->insert([
            'title' => 'Concert de clarinette',
            'organisation' => 'SIT Yverdon',
            'contact_name' => 'Thomas Czáka',
            'contact_phone' => '024 423 63 94',
            'security_name' => 'Stéphane Malta e Sousa',
            'security_phone' => '024 423 63 97',
            'comment' => 'Demande au canton en attente',
            'status_id' => 1,
            'announcement_date' => '2018-08-01',
            'decision_date' => '2018-08-04',
            'service_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Assemblée professionnelle',
            'organisation' => 'ASIT VD',
            'contact_name' => 'Xavier Mérour',
            'contact_phone' => '024 423 63 94',
            'security_name' => 'Stéphane Malta e Sousa',
            'security_phone' => '024 423 63 97',
            'comment' => 'Env. 80 personnes',
            'status_id' => 2,
            'announcement_date' => '2018-08-01',
            'decision_date' => '2018-08-04',
            'service_id' => 2,
        ]);
        DB::table('events')->insert([
            'title' => 'Fête du quartier des Cygnes',
            'organisation' => 'Amicale des Cygnes',
            'contact_name' => 'Luc Martin',
            'contact_phone' => '024 423 63 94',
            'security_name' => 'Stéphane Malta e Sousa',
            'security_phone' => '024 423 63 97',
            'comment' => 'Ca va chauffer !',
            'status_id' => 3,
            'announcement_date' => '2018-08-01',
            'decision_date' => '2018-08-04',
            'service_id' => 3,
        ]);
        DB::table('events')->insert([
            'title' => 'Festival d\'accordéon',
            'organisation' => 'Le club des accordéonistes',
            'contact_name' => 'Jean Dujardin',
            'contact_phone' => '024 423 63 94',
            'security_name' => 'Stéphane Malta e Sousa',
            'security_phone' => '024 423 63 97',
            'comment' => 'Des tracts seront distribués dans les boîtes aux lettres',
            'status_id' => 4,
            'announcement_date' => '2018-08-01',
            'decision_date' => '2018-08-04',
            'service_id' => 4,
        ]);
        
       // slots
        DB::statement("TRUNCATE TABLE slots RESTART IDENTITY CASCADE");
        
        DB::table('slots')->insert([
            'event_id' => 1,
            'slottype_id' => 1,
            'location' => 'Place Pestalozzi',
            'start_time' => '2018-09-01 08:00:00',
            'end_time' => '2018-09-01 17:00:00',
        ]);
        DB::table('slots')->insert([
            'event_id' => 1,
            'slottype_id' => 2,
            'location' => 'Aula Magna',
            'start_time' => '2018-09-10 15:00:00',
            'end_time' => '2018-09-10 18:00:00',
        ]);
        DB::table('slots')->insert([
            'event_id' => 1,
            'slottype_id' => 1,
            'location' => 'Aula Magna',
            'start_time' => '2018-09-10 18:00:00',
            'end_time' => '2018-09-10 21:30:00',
        ]);
        DB::table('slots')->insert([
            'event_id' => 2,
            'slottype_id' => 1,
            'location' => 'Aula Magna',
            'start_time' => '2018-09-10 18:00:00',
            'end_time' => '2018-09-10 21:30:00',
        ]);
        DB::table('slots')->insert([
            'event_id' => 3,
            'slottype_id' => 1,
            'location' => 'Quartier des Cygnes',
            'start_time' => '2018-06-15 18:00:00',
            'end_time' => '2018-09-18 22:00:00',
        ]);
        DB::table('slots')->insert([
            'event_id' => 4,
            'slottype_id' => 1,
            'location' => 'Rue Saint-Georges 54',
            'start_time' => '2018-08-29 01:00:00',
            'end_time' => '2018-09-30 23:45:00',
        ]);
        
        // users
        DB::statement("TRUNCATE TABLE users RESTART IDENTITY CASCADE");
        
        //DB::statement("INSERT INTO lv_yvent.users (username,email,password,role,key) SELECT username,email,password,role_name,md5(random()::text) FROM main_static.user");
        
        DB::table('users')->insert([
            'username' => 'jdoe',
            'email' => 'jdoe@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'role_admin',
            'key' => substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz2345678923456789') , 0 , 32 ),
        ]);
        // DB::table('users')->insert([
            // 'username' => 'tczaka',
            // 'email' => 'thomas@czaka.net',
            // 'password' => bcrypt('123456'),
            // 'role' => 'role_yverdon',
            // 'key' => substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz2345678923456789') , 0 , 32 ),
        // ]);
        // DB::table('users')->insert([
            // 'username' => 'thomas',
            // 'email' => 'thomas@czaka.net',
            // 'password' => bcrypt('123456'),
            // 'role' => 'role_yverdon_editeur_police_administrative',
            // 'key' => substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz2345678923456789') , 0 , 32 ),
        // ]);
    }
}
