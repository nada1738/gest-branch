<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'reclamations';

    protected $fillable = [
        
        'nature_rec',
        'date_rec',
        'date_rep',
        'n_order',
    ];

    public function branchement()
    {
        return $this->belongsTo(Branchement::class, 'n_order', 'n_order');
    }
}
