<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResonatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('resonators')->truncate(); 

        DB::table('resonators')->insert([
            [
                'name' => 'Jiyan',
                'element' => 'Aero',
                'weapon_type' => 'Broadblade',
                'rarity' => 5,
                'best_echoes' => 'Feilian Beringal',
                'echo_image' => 'echo_feilian.png',
                'sonata_effect' => 'Sierra Gale (5-Piece)',
                'echo_cost' => '4-3-3-1-1',
                'main_stats' => 'CRIT DMG > CRIT Rate|Aero DMG|Aero DMG|ATK%|ATK%',
                'substats' => 'Energy Regen >= CRIT RATE = CRIT DMG > ATK% > Flat ATK',
                'recommended_weapons' => json_encode([
                    ['percentage' => '100.00%', 'name' => 'Verdant Summit (R1)', 'image' => 'weapon_verdant.png', 'color' => 'bg-purple-600', 'desc' => 'Senjata signature Jiyan. Memberikan peningkatan stat Heavy Attack DMG yang sangat masif.'],
                    ['percentage' => '85.20%', 'name' => 'Autumntrace (R5)', 'image' => 'weapon_autumntrace.png', 'color' => 'bg-purple-500', 'desc' => 'Pilihan bintang 4 terbaik dari Battle Pass. Memberikan stat CRIT Rate.']
                ]),
                'recommended_teams' => json_encode([
                    [
                        'team_name' => 'Premium Heavy Attack Team',
                        'desc' => 'Mortefi memberikan buff Heavy Attack DMG yang sangat masif, sementara Verina memberikan buff ATK global.',
                        'members' => [
                            ['role' => 'Main DPS', 'name' => 'Jiyan', 'image' => 'jiyan.jpg'],
                            ['role' => 'Sub DPS', 'name' => 'Mortefi', 'image' => 'mortefi.jpg'],
                            ['role' => 'Support', 'name' => 'Verina', 'image' => 'verina.jpg']
                        ]
                    ]
                ]),
                'image' => 'jiyan.jpg', 
                'detail_image' => 'jiyan_detail.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yinlin',
                'element' => 'Electro',
                'weapon_type' => 'Rectifier',
                'rarity' => 5,
                'best_echoes' => 'Mech Abomination',
                'echo_image' => 'echo_mech_abomination.png',
                'sonata_effect' => 'Void Thunder (5-Piece)',
                'echo_cost' => '4-3-3-1-1',
                'main_stats' => 'CRIT Rate > CRIT DMG|Electro DMG|Electro DMG|ATK%|ATK%',
                'substats' => 'Energy Regen (Until Breakpoint) >= CRIT RATE = CRIT DMG > ATK% > Flat ATK',
                'recommended_weapons' => json_encode([
                    ['percentage' => '100.00%', 'name' => 'Stringmaster (R1)', 'image' => 'weapon_stringmaster.png', 'color' => 'bg-[#9333ea]', 'desc' => 'Senjata signature Yinlin. Memberikan ATK, CRIT Rate, dan DMG Bonus buff yang sangat besar.'],
                    ['percentage' => '88.10%', 'name' => 'Augment (R5)', 'image' => 'weapon_augment.png', 'color' => 'bg-[#a855f7]', 'desc' => 'Opsi bintang 4 terbaik dari Battle Pass. Memberikan buff ATK dan sub-stat CRIT.']
                ]),
                'recommended_teams' => json_encode([
                    [
                        'team_name' => 'Electro Quickswap Team',
                        'desc' => 'Yinlin bertindak sebagai Sub-DPS yang luar biasa untuk Calcharo, memberikan buff Electro DMG dan Resonance Liberation DMG.',
                        'members' => [
                            ['role' => 'Main DPS', 'name' => 'Calcharo', 'image' => 'calcharo.jpg'],
                            ['role' => 'Sub DPS', 'name' => 'Yinlin', 'image' => 'yinlin.jpg'],
                            ['role' => 'Support', 'name' => 'Verina', 'image' => 'verina.jpg']
                        ]
                    ]
                ]),
                'image' => 'yinlin.jpg',
                'detail_image' => 'yinlin_detail.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rover (Spectro)',
                'element' => 'Spectro',
                'weapon_type' => 'Sword',
                'rarity' => 5,
                'best_echoes' => 'Mourning Aix',
                'echo_image' => 'echo_mourning_aix.png',
                'sonata_effect' => 'Celestial Light (5-Piece)',
                'echo_cost' => '4-3-3-1-1',
                'main_stats' => 'CRIT DMG > CRIT Rate|Spectro DMG|Spectro DMG|ATK%|ATK%',
                'substats' => 'Energy Regen >= CRIT RATE = CRIT DMG > ATK% > Flat ATK',
                'recommended_weapons' => json_encode([
                    ['percentage' => '100.00%', 'name' => 'Emerald of Genesis (R1)', 'image' => 'weapon_emerald.png', 'color' => 'bg-[#9333ea]', 'desc' => 'Senjata standar terbaik. Memberikan CRIT Rate tinggi dan Energy Regen tambahan.'],
                    ['percentage' => '85.50%', 'name' => 'Commando of Conviction (R5)', 'image' => 'weapon_commando.png', 'color' => 'bg-[#a855f7]', 'desc' => 'Opsi gacha bintang 4. Memberikan buff ATK tambahan setelah Intro Skill.']
                ]),
                'recommended_teams' => json_encode([
                    [
                        'team_name' => 'Balanced Spectro Team',
                        'desc' => 'Sanhua membantu meningkatkan Basic Attack DMG Rover, sementara Verina memberikan support penyembuhan dan buff damage.',
                        'members' => [
                            ['role' => 'Main DPS', 'name' => 'Rover', 'image' => 'rover.jpg'],
                            ['role' => 'Sub DPS', 'name' => 'Sanhua', 'image' => 'sanhua.jpg'],
                            ['role' => 'Support', 'name' => 'Verina', 'image' => 'verina.jpg']
                        ]
                    ]
                ]),
                'image' => 'rover.jpg',
                'detail_image' => 'rover_detail.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baizhi',
                'element' => 'Glacio',
                'weapon_type' => 'Rectifier',
                'rarity' => 4,
                'best_echoes' => 'Bell-Borne Geochelone',
                'echo_image' => 'echo_geochelone.png',
                'sonata_effect' => 'Rejuvenating Glow (5-Piece)',
                'echo_cost' => '4-3-3-1-1',
                'main_stats' => 'Healing Bonus|HP%|HP%|Energy Regen|Energy Regen',
                'substats' => 'HP% >= Energy Regen > Resonance Skill DMG% = Crit Rate > Flat HP',
                'recommended_weapons' => json_encode([
                    ['percentage' => '100.00%', 'name' => 'Variation (R5)', 'image' => 'weapon_variation.png', 'color' => 'bg-[#9333ea]', 'desc' => 'Sangat krusial untuk regenerasi energi dan rotasi Concerto yang cepat.'],
                    ['percentage' => '95.00%', 'name' => 'Comet Flare (R5)', 'image' => 'weapon_cometflare.png', 'color' => 'bg-[#a855f7]', 'desc' => 'Memberikan HP% masif untuk meningkatkan kekuatan penyembuhan Baizhi.']
                ]),
                'recommended_teams' => json_encode([
                    [
                        'team_name' => 'Standard F2P Support',
                        'desc' => 'Baizhi bertindak sebagai pilar pertahanan utama dalam tim manapun, terutama sangat efektif untuk tim F2P.',
                        'members' => [
                            ['role' => 'Main DPS', 'name' => 'Rover', 'image' => 'rover.jpg'],
                            ['role' => 'Sub DPS', 'name' => 'Chixia', 'image' => 'chixia.jpg'],
                            ['role' => 'Support', 'name' => 'Baizhi', 'image' => 'baizhi.jpg']
                        ]
                    ]
                ]),
                'image' => 'baizhi.jpg',
                'detail_image' => 'baizhi_detail.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}