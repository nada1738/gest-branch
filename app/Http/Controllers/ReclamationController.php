<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use App\Models\Branchement;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReclamationController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $reclamations = Reclamation::with('branchement')->paginate(10);
        return view('reclamations.index', compact('reclamations'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        $branchements = Branchement::all();
        return view('reclamations.create', compact('branchements'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           
            'nature_rec' => 'required|string',
            'date_rec' => 'required|date',
            'date_rep' => 'required|date',
            'n_order' => 'required|exists:branchements,n_order'
        ]);

        Reclamation::create($validatedData);

        return redirect()->route('reclamations.index')->with('success', 'Reclamation created successfully.');
    }

    // Display the specified resource
    public function show(Reclamation $reclamation)
    {
        $reclamation->load('branchement');
        return view('reclamations.show', compact('reclamation'));
    }

    // Show the form for editing the specified resource
    public function edit(Reclamation $reclamation)
    {
        $branchements = Branchement::all();
        return view('reclamations.edit', compact('reclamation', 'branchements'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Reclamation $reclamation)
    {
        $validatedData = $request->validate([
           
            'nature_rec' => 'required|string',
            'date_rec' => 'required|date',
            'date_rep' => 'required|date',
            'n_order' => 'required|exists:branchements,n_order'
        ]);

        $reclamation->update($validatedData);

        return redirect()->route('reclamations.index')->with('success', 'Reclamation updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect()->route('reclamations.index')->with('success', 'Reclamation deleted successfully.');
    }

    // Generate a PDF for the specified resource
    public function generatePdf(Reclamation $reclamation)
    {
        $reclamation->load('branchement');

        $html = view('reclamations.pdf', compact('reclamation'))->render();

        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('reclamation_'. $reclamation->id .'.pdf');
    }
}