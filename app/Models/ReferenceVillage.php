<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceVillage extends Model
{
    use HasFactory;
    protected $table = 'indonesia_villages';

    public function district()
    {
        return $this->belongsTo(ReferenceDistrict::class, 'district_code');
    }
}
