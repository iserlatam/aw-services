<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteForm extends Model
{
    use HasFactory;

    protected $fillable = ["first_name","last_name","email","country_code","phone_number","service", "message"];
}
