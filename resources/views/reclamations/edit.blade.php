@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Edit Reclamation</h1>
    <form action="{{ route('reclamations.update', $reclamation->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="n_order" class="block text-sm font-medium text-gray-700">Branchement:</label>
            <select id="n_order" name="n_order" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @foreach($branchements as $branchement)
                    <option value="{{ $branchement->n_order }}" {{ $reclamation->n_order == $branchement->n_order ? 'selected' : '' }}>
                        {{ $branchement->n_order }}
                    </option>
                @endforeach
            </select>
            @error('n_order')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        
        <div>
            <label for="nature_rec" class="block text-sm font-medium text-gray-700">Nature Rec:</label>
            <input type="text" id="nature_rec" name="nature_rec" value="{{ old('nature_rec', $reclamation->nature_rec) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            @error('nature_rec')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="date_rec" class="block text-sm font-medium text-gray-700">Date Rec:</label>
            <input type="date" id="date_rec" name="date_rec" value="{{ old('date_rec', $reclamation->date_rec) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            @error('date_rec')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="date_rep" class="block text-sm font-medium text-gray-700">Date Rep:</label>
            <input type="date" id="date_rep" name="date_rep" value="{{ old('date_rep', $reclamation->date_rep) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            @error('date_rep')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Update
            </button>
        </div>
    </form>
</div>
@endsection