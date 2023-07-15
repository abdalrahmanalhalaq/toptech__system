<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;



    //Appended Model Attribute
    public function fullMobile(): Attribute
    {
        return new Attribute(get: fn () => $this->mobile != "" ? "+00" . $this->mobile : "No Mobile");
    }
}
