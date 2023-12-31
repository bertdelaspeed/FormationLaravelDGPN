<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'matricule',
        'email',
        'telephone',
        'service_id'
    ];


    function service() {
        return $this->belongsTo(Service::class);
    }

}
