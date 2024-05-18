<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchement extends Model
{
    use HasFactory;
    protected $fillable = ['n_order', 'n_police', 'nature', 'tournee','l_branch', 'l_chaussée', 'nature_chaussée', 'date_ver', 'n_ver', 'date_reg', 'date_realisation', 'dn_cond', 'n_serie', 'observation'];
    protected $primaryKey = 'n_order';
    public $incrementing = true; 
    
    
    public function abonnees()
    {
        return $this->belongsTo(Abonnee::class, 'police_abonnee');
    }
}