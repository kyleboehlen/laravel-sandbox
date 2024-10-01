<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\PowerToWeightRatio;

class MotorcycleModel extends Model
{
    use HasFactory;
    use PowerToWeightRatio;
}
