<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngatlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoriak')->insert(
            [
                ['nev'=>'Ház'],
                ['nev'=>'Lakás'],
                ['nev'=>'Építési telek'],
                ['nev'=>'Garázs'],
                ['nev'=>'Mezőgazdasági terület'],
                ['nev'=>'Ipari ingatlan'],
            ]
            );
        DB::table('ingatlanok')->(
            [
                ['kategoria'=>1,
                'leiras'=>'Családi ház',
                'hirdetesDatuma'=>'2026-02-16',
                'tehermentes'=>true,
                'ar'=>45000000,
                'kepUrl'=>'http://ingatlan.hu/65875.jpg'],

                [
                    'kategoria'=>2,
                'leiras'=>'Építési telek',
                'hirdetesDatuma'=>'2026-02-16',
                'tehermentes'=>true,
                'ar'=>45000000,
                'kepUrl'=>'http://ingatlan.hu/65874.jpg'
                ]

                ]
                );
    }
}
