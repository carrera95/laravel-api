<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function services()
    {
        //Table that is gonna look for: 'clients_services'
        return $this->belongsToMany(Service::class, 'clients_services');
    }
    
}
