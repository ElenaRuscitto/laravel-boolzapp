<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Alex',
                'personal' => false
            ],
            [
                'name' => 'Elena',
                'personal' => false
            ],
            [
                'name' => 'Laroussi',
                'personal' => false
            ],
            [
                'name' => 'Matteo',
                'personal' => false
            ],
            [
                'name' => 'Nicola',
                'personal' => false
            ],
            [
                'name' => 'Stefano',
                'personal' => true
            ],
        ];

        foreach ($contacts as $contact) {
            $new_contact = new Contact();
            $new_contact->name = $contact['name'];
            $new_contact->personal = $contact['personal'];
            $new_contact->save();
        }
    }
}
