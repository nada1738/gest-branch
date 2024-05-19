@extends('layouts.app')

@section('content')
@if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    {{-- <form action="{{ route('branchements.update', $branchement->n_order) }}" method="POST" class="space-y-6"> --}}
@endif
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Edit Branchements</h1>
        <form action="{{ route('branchements.update', $branchement->n_order) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
        
            <div>
                <label for="n_police" class="block text-sm font-medium text-gray-700">Select N Police:</label>
                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="n_police" name="n_police">
                    @foreach($abonnees as $abonnee)
                        <option value="{{ $abonnee->police_abonnee }}" {{ $branchement->abonnee->police_abonnee == $abonnee->police_abonnee ? 'selected' : '' }}>{{ $abonnee->nom }}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <label for="tournee" class="block text-sm font-medium text-gray-700">Tournee:</label>
                <input type="text" id="tournee" name="tournee" value="{{ $branchement->tournee }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('tournee')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="nature" class="block text-sm font-medium text-gray-700">Nature:</label>
                <input type="text" id="nature" name="nature" value="{{ $branchement->nature }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('nature')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="l_branch" class="block text-sm font-medium text-gray-700">L Branch</label>
                <input type="text" id="l_branch" name="l_branch" value="{{ $branchement->l_branch }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('l_branch')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="l_chaussée" class="block text-sm font-medium text-gray-700">L Chaussée</label>
                <input type="text" id="l_chaussée" name="l_chaussée" value="{{ $branchement->l_chaussée }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('l_chaussée')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="nature_chaussée" class="block text-sm font-medium text-gray-700">Nature Chaussée</label>
                <input type="text" id="nature_chaussée" name="nature_chaussée" value="{{ $branchement->nature_chaussée }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('nature_chaussée')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="date_ver" class="block text-sm font-medium text-gray-700">Date Versement</label>
                <input type="date" id="date_ver" name="date_ver" value="{{ $branchement->date_ver }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('date_ver')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="n_ver" class="block text-sm font-medium text-gray-700">N° versement</label>
                <input type="text" id="n_ver" name="n_ver" value="{{ $branchement->n_ver }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('n_ver')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="date_realisation" class="block text-sm font-medium text-gray-700">Date Réalisation</label>
                <input type="date" id="date_realisation" name="date_realisation" value="{{ $branchement->date_realisation }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('date_realisation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="observation" class="block text-sm font-medium text-gray-700">Observation</label>
                <input type="text" id="observation" name="observation" value="{{ $branchement->observation }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('observation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="flex items-center justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Update</button>
                <a href="{{ route('branchements.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection