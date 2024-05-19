<?php
namespace App\Http\Controllers;

use App\Models\Abonnee;
use App\Models\Tournee;
use App\Models\Branchement;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class BranchementController extends Controller
{
    public function index()
    {
        $branchements = Branchement::with('abonnee')->get();
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

        Branchement::create($validatedData);

        return redirect()->route('branchements.index')->with('success', 'Branchement created successfully.');
    }

    public function show(Branchement $branchement)
    {
        $branchement->load('abonnee');
        return view('branchements.show', compact('branchement'));
    }
    public function edit(Branchement $branchement)
    {
        $abonnees = Abonnee::all(); // Assuming you have an Abonnee model
        return view('branchements.edit', compact('branchement', 'abonnees'));
    }

    public function update(Request $request, Branchement $branchement)
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

        $branchement->update($validatedData);

        return redirect()->route('branchements.index')->with('success', 'Branchement updated successfully.');
    }

    public function destroy(Branchement $branchement)
    {
        $branchement->delete();
        return redirect()->route('branchements.index')->with('success', 'Branchement deleted successfully.');
    }

    public function pdf(Branchement $branchement)
    {
        $branchement->load('abonnee');

        $html = view('branchements.pdf', compact('branchement'))->render();

        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        
        $dompdf->loadHtml($html);
        
        $dompdf->setPaper('A4', 'portrait');
        
        $dompdf->render();
        
       
        
        return $dompdf->stream('branchement' . $branchement->nom . '.pdf');
    }
}