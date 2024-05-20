@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Edit Abonnee</h1>
        <form action="{{ route('abonnees.update', $abonnee->police_abonnee) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="police_abonnee" class="block text-sm font-medium text-gray-700">Police:</label>
                <input type="text" id="police_abonnee" name="nom" value="{{ $abonnee->police_abonnee }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ $abonnee->nom }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="cne" class="block text-sm font-medium text-gray-700">Cne:</label>
                <input type="text" id="cne" name="cne" value="{{ $abonnee->cne }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone:</label>
                <input type="text" id="telephone" name="telephone" value="{{ $abonnee->telephone }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse:</label>
                <input type="text" id="adresse" name="adresse" value="{{ $abonnee->adresse }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Edit</button>
                <a href="{{ route('abonnees.index') }}"
                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection