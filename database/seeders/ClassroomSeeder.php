<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat data untuk table class

        //1. eloquent ORM
        //disable foreignkey
        Schema::disableForeignKeyConstraints();
        //mengosongkan table
        ClassRoom::truncate();
        //enable foreignkey
        Schema::enableForeignKeyConstraints();
        $data = [
            [
                'name' => '12 RPL A',
            ],
            [
                'name' => '12 RPL B',
            ],
            [
                'name' => '12 RPL C',
            ],
        ];
        //multiple insert
        foreach ($data as $value) {
            ClassRoom::insert([
            'name' => $value ['name'],
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        }


        // ClassRoom::insert([
        //     'name' => '12 TKJ B',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        //2.query builder
        // DB::table('class')->insert([
        //     'name' => '12 TKJ C',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
