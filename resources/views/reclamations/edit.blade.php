@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Edit Reclamation</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">

            <div class="border-t border-gray-200">
                <form action="{{ route('reclamations.update', $reclamation->id) }}" method="POST" class="space-y-6 px-4 py-5 sm:px-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                            @foreach(App\Models\Reclamation::getTypeOptions() as $option)
                                <option value="{{ $option }}" {{ $reclamation->type == $option ? 'selected' : '' }}>{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="date_creation" class="block text-sm font-medium text-gray-700">Date Creation</label>
                        <input type="date" id="date_creation" name="date_creation" value="{{ $reclamation->date_creation }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    <div>
                        <label for="branchement_id" class="block text-sm font-medium text-gray-700">Branchement</label>
                        <select id="branchement_id" name="branchement_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                            <option disabled>Select Branchement</option>
                            @foreach ($branchements as $branchement)
                                <option value="{{ $branchement->id }}" {{ $reclamation->branchement_id == $branchement->id ? 'selected' : '' }}>{{ $branchement->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Update</button>
                        <a href="{{ route('reclamations.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
