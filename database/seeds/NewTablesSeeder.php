<?php

use Illuminate\Database\Seeder;

class NewTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // eventtype_role
        DB::statement("TRUNCATE TABLE eventtype_role RESTART IDENTITY CASCADE");
        
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_admin',
            'eventtype_id' => 1,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_admin',
            'eventtype_id' => 2,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_admin',
            'eventtype_id' => 3,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_admin',
            'eventtype_id' => 4,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon', //il faudra filtrer tous les comptes contenant ce string puis ceux matchant parfaitement
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_yvent',
            'eventtype_id' => 1,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_yvent',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_policier',
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_policier',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_policier',
            'eventtype_id' => 3,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_trafic',
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_trafic',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_trafic',
            'eventtype_id' => 3,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_police_administrative',
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_police_administrative',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_police_administrative',
            'eventtype_id' => 3,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier',
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier',
            'eventtype_id' => 3,
            'rights' => 'RW'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier_trafic',
            'eventtype_id' => 1,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier_trafic',
            'eventtype_id' => 2,
            'rights' => 'R'
        ]);
        DB::table('eventtype_role')->insert([
            'role_id' => 'role_yverdon_editeur_policier_trafic',
            'eventtype_id' => 3,
            'rights' => 'RW'
        ]);
        
        // eventtype_slottype
        DB::statement("TRUNCATE TABLE eventtype_slottype RESTART IDENTITY CASCADE");
        
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 1,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 1,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 2,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 2,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 3,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 3,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 4,
            'eventtype_id' => 3
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 5,
            'eventtype_id' => 3
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 6,
            'eventtype_id' => 3
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 7,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 8,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 9,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_slottype')->insert([
            'slottype_id' => 10,
            'eventtype_id' => 4
        ]);
        
        // eventtype_service
        DB::statement("TRUNCATE TABLE eventtype_service RESTART IDENTITY CASCADE");
        
        DB::table('eventtype_service')->insert([
            'service_id' => 1,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 1,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 2,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 2,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 3,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 3,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 4,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 4,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 5,
            'eventtype_id' => 1
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 5,
            'eventtype_id' => 2
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 6,
            'eventtype_id' => 3
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 7,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 8,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 9,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 10,
            'eventtype_id' => 4
        ]);
        DB::table('eventtype_service')->insert([
            'service_id' => 11,
            'eventtype_id' => 4
        ]);
        
        // eventtype_status
        DB::statement("TRUNCATE TABLE eventtype_status RESTART IDENTITY CASCADE");
        
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 1,
            'status_id' => 1
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 1
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 2
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 3
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 4
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 5
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 6
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 2,
            'status_id' => 7
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 3,
            'status_id' => 8
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 3,
            'status_id' => 9
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 4,
            'status_id' => 10
        ]);
        DB::table('eventtype_status')->insert([
            'eventtype_id' => 4,
            'status_id' => 11
        ]);
        
        // eventtype_commune
        DB::statement("TRUNCATE TABLE eventtype_commune RESTART IDENTITY CASCADE");
        
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 1,
            'commune_id' => 1
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 2,
            'commune_id' => 1
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 4,
            'commune_id' => 1
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 1
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 2
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 3
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 4
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 5
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 6
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 7
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 8
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 9
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 10
        ]);
        DB::table('eventtype_commune')->insert([
            'eventtype_id' => 3,
            'commune_id' => 11
        ]);
        
        // slottypes (updated)
        DB::table('slottypes')->where('id', 2)->update([
            'type' => 2
        ]);
        DB::table('slottypes')->where('id', 3)->update([
            'type' => 2
        ]);
        DB::table('slottypes')->where('id', 2)->update([
            'type' => 2
        ]);
        DB::table('slottypes')->where('id', 7)->update([
            'type' => 2
        ]);
        DB::table('slottypes')->where('id', 8)->update([
            'type' => 2
        ]);
        DB::table('slottypes')->where('id', 9)->update([
            'type' => 2
        ]);
    }
}
