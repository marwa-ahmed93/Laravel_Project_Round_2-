<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   public function visaCard()
    {
        return $this->hasOne(VisaCard::class);
    }
}
