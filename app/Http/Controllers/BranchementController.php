<?php
namespace App\Http\Controllers;

use App\Models\Abonnee;
use App\Models\Tournee;
use App\Models\Branchement;
use Illuminate\Http\Request;

class BranchementController extends Controller
{
    public function index()
    {
        $branchements = Branchement::with('abonnees')->get();
        return view('branchements.index', compact('branchements'));
    }

    public function create()
    {
        $abonnees = Abonnee::all();
        $orderNumber = Branchement::count() + 1;
    
        return view('branchements.create', compact('abonnees', 'orderNumber'));
        
        
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
          
            
            'n_police' => 'required|exists:abonnees,police_abonnee',
            'tournee' => 'required|string',
            'nature' => 'required|string',
            'l_branch' => 'required|string',
            
           
            'l_chaussée' => 'required|string',
            'nature_chaussée' => 'required|string',
            'date_ver' => 'required|date',
            'n_ver' => 'required|string',
            'date_realisation' => 'required|date',
            'observation' => 'required|string',
        ]);

       
        $abonnee = Abonnee::where('police_abonnee', $validatedData['n_police'])->first();

        if (!$abonnee) {
            return back()->withErrors(['n_police' => 'The specified police number does not exist.'])->withInput();
        }

       
        $branchement = new Branchement();
     
        $branchement->n_police = $validatedData['n_police'];
        $branchement->tournee = $validatedData['tournee'];
        $branchement->nature = $validatedData['nature'];
        $branchement->l_branch = $validatedData['l_branch'];
       
        $branchement->l_chaussée = $validatedData['l_chaussée'];
        $branchement->nature_chaussée = $validatedData['nature_chaussée'];
        $branchement->date_ver = $validatedData['date_ver'];
        $branchement->n_ver = $validatedData['n_ver'];
        $branchement->date_realisation = $validatedData['date_realisation'];
        $branchement->observation = $validatedData['observation'];
        $branchement->save();

        return redirect()->route('branchements.index')->with('success', 'Branchement created successfully.');
    }

    public function show(Branchement $branchement)
    {
        
        $abonnees = $branchement->abonnees;
        return view('branchements.show', compact('branchement',  'abonnees'));    }

    public function edit(Branchement $branchement)
    {
        
    $abonnees = Abonnee::all(); 
    return view('branchements.edit', compact('branchement', 'abonnees'));
    }

    public function update(Request $request, Branchement $branchement)
    {
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'tournee' => 'required|string',
            'nature' => 'required|string',
            'l_branch' => 'required|string',
            'adresse_branch' => 'required|string',
            'l_chaussée' => 'required|string',
            'nature_chaussée' => 'required|string',
            'date_ver' => 'required|date',
            'n_ver' => 'required|string',
            'date_reg' => 'required|date',
            'date_realisation' => 'required|date',
            'dn_cond' => 'required|string',
            'n_serie' => 'required|string',
            'observation' => 'required|string',
             
            'n_abonnee' => 'required|exists:abonnees,id'  
        ]);
        

        $branchement->update($validatedData);

        return redirect()->route('branchements.index')->with('success', 'Branchement updated successfully.');
    }

    public function destroy(Branchement $branchement)
    {
        $branchement->delete();
        return redirect()->route('branchements.index')->with('success', 'Branchement deleted successfully.');
    }
}