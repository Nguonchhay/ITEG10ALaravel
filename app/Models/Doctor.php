<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['fullname', 'specialist', 'avatar', 'info', 'experience_year', 'socials'])]
class Doctor extends Model
{
    //
}
