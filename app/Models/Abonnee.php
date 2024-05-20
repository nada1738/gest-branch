<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Abonnee extends Model
// {
//     use HasFactory;
   
//     protected $primaryKey = 'police_abonnee';
//     public $incrementing = true; 
//     protected $fillable = [ 'nom', 'cne', 'adresse', 'telephone'];

//     public function branchement()
//     {
//         return $this->hasMany(Branchement::class,'police_abonnee');
//     }
// }
class Abonnee extends Model
{
    use HasFactory;

    protected $table = 'abonnees';
    protected $primaryKey = 'police_abonnee';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'police_abonnee',
        'nom',
        'cne',
        'adresse',
        'telephone',
    ];

    public function branchements()
    {
        return $this->hasMany(Branchement::class, 'n_police', 'police_abonnee');
    }
}
