<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Buste'],
            ['name' => 'Carta'],
            ['name' => 'Toner'],
        ];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type['name'];

            $new_type->save();
        }
    }
}
