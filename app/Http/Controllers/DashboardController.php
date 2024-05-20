<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Exemple de données, à remplacer par vos données réelles.
        $abonnees = [12, 19, 3, 5, 2, 3, 7];
        $branchements = [5, 10, 8, 15, 6, 9, 11];
        $reclamations = [2, 3, 1, 4, 2, 1, 3];

        return view('accueil', compact('abonnees', 'branchements', 'reclamations'));
    }
}
