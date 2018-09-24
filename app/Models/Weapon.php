<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illumunate\Database\Eloquent\BelongsTo;

class Weapon extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return Illuminate\Database\Eloquent\BelongsTo
     */
    public function itemDescription() : BelongsTo
    {
        return $this->belonsTo(DamageType::class);
    }

    /**
     * @return Illuminate\Database\Eloquent\BelongsTo
     */
    public function weaponType() : BelongsTo
    {
        return $this->belonsTo(WeaponType::class);
    }

    /**
     * @return Illuminate\Database\Eloquent\BelongsTo
     */
    public function ammoType() : BelongsTo
    {
        return $this->belonsTo(AmmoType::class);
    }

    /**
     * @return Illuminate\Database\Eloquent\BelongsTo
     */
    public function damageType() : BelongsTo
    {
        return $this->belonsTo(DamageType::class);
    }

    /**
     * @return Illuminate\Database\Eloquent\BelongsTo
     */
    public function diceType() : BelongsTo
    {
        return $this->belonsTo(DiceType::class);
    }
}
