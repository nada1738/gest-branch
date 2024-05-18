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
@endif
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Edit Branchements</h1>
        <form action="{{ route('branchements.update', $branchement->n_order) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="n_order" class="block text-sm font-medium text-gray-700">Order:</label>
                <input type="text" id="n_order" name="n_order" value="{{ $branchement->n_order }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="n_police" class="block text-sm font-medium text-gray-700">Police:</label>
                <input type="text" id="n_police" name="n_police" value="{{ $branchement->n_police }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>

            <div>
                <label for="tournee" class="block text-sm font-medium text-gray-700">Tournee:</label>
                <input type="text" id="tournee" name="tournee" value="{{ $branchement->tournee }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="nature" class="block text-sm font-medium text-gray-700">Nature:</label>
                <input type="text" id="nature" name="nature" value="{{ $branchement->nature }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Edit</button>
                <a href="{{ route('branchements.index') }}"
                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection