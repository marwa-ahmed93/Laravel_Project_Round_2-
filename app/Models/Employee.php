<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   public function visaCard()
    {
        return $this->hasOne(VisaCard::class);
    }
       protected function name(): Attribute    // ahmed   => Ahmed
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }
}
