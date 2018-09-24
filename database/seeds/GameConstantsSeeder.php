<?php

use Illuminate\Database\Seeder;

use App\Models\DiceType;
use App\Models\DamageType;
use App\Models\AmmoType;
use App\Models\WeaponType;
use App\Models\WeaponCategory;

class GameConstantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->diceTypes();
        $this->damageTypes();
        $this->weaponTypes();
        $this->weaponCategories();
    }

    /**
     * @return void
     */
    private function diceTypes()
    {
        DiceType::insert(
            array_map( function ($e) {
                return [
                    'value'         => $e,
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];
            },
            [
                2,
                4,
                6,
                8,
                10,
                12,
                20,
                100
            ])
        );
    }

    /**
     * @return void
     */
    private function damageTypes()
    {
        DamageType::insert([ 
            [
                'code'          => 'a',
                'name'          => 'acid',
                'is_energy'     => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'code'          => 'c',
                'name'          => 'cold',
                'is_energy'     => true,
                'created_at'    => now(),
                'updated_at'    => now()
            ], 
            [
                'code'          => 'e',
                'name'          => 'electricity',
                'is_energy'     => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'code'          => 'f',
                'name'          => 'fire',
                'is_energy'     => true,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'code'          => 's',
                'name'          => 'slashing',
                'is_energy'     => false,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'code'          => 'so',
                'name'          => 'sonic',
                'is_energy'     => false,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'code'          => 'p',
                'name'          => 'piercing',
                'is_energy'     => false,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]
        ]);
    }

    /**
     * @return void
     */
    private function weaponTypes()
    {
        WeaponType::insert(
            array_map(
                function ($e) {
                    return [
                        'name'      => $e,
                        'created_at'=> now(),
                        'updated_at'=> now()
                    ];
                },
                [
                    'Basic Melee Weapon',
                    'Advanced Melee Weapon',
                    'Small Arm',
                    'Longarm',
                    'Heavy Weapon',
                    'Sniper Weapon',
                    'Special Weapon',
                ]
            )
        );
    }

    /**
     * @return void
     */
    private function weaponCategories()
    {
        WeaponCategory::insert(
            array_map(
                function ($e) {
                    return [
                        'name'      => $e,
                        'created_at'=> now(),
                        'updated_at'=> now()
                    ];
                },
                [
                    'Cryo',
                    'Flame',
                    'Laser',
                    'Projectile',
                    'Plasma',
                    'Shock',
                    'Sonic',
                    'Uncategorized',
                ]
            )
        );
    }
}
