@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Reclamation Details</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Reclamation Information</h3>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Order</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->n_order }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tournee</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->branchement->tournee }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date Rec</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->date_rec }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Adresse</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->branchement->abonnee->adresse }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Telephone</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->branchement->abonnee->telephone }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Nature Rec</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->nature_rec }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date Rec</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->date_rec }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Date Rep</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $reclamation->date_rep }}</dd>
                    </div>
                </dl>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a href="{{ route('reclamations.pdf', $reclamation->id) }}"
                    class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition">
                    Generate PDF
                </a>

                <a href="{{ route('reclamations.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Back to Reclamations</a>
            </div>
        </div>
    </div>

@endsection