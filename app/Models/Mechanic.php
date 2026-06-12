<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Mechanic extends Model
{
  public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }

      protected function name(): Attribute    // ahmed   => Ahmed
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }
}
