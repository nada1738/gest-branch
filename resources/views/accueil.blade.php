@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="grid grid-cols-3 gap-4 mb-4">
    <!-- Boutons -->
    <div class="col-span-1">
        <a href="{{ route('abonnees.index') }}" class="flex items-center justify-center p-4 bg-blue-500 border border-gray-200 rounded-lg shadow hover:bg-blue-600 text-white">
            <!-- Icône pour Abonnées -->
            <svg class="w-10 h-10 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 117.804 15.12M9 12V7a4 4 0 10-4 4h5z" />
            </svg>
            <div>
                <h5 class="mb-2 text-xl font-semibold">Abonnées</h5>
                <p class="font-normal">Gérer les abonnés</p>
            </div>
        </a>
    </div>
    <div class="col-span-1">
        <a href="{{ route('branchements.index') }}" class="flex items-center justify-center p-4 bg-green-500 border border-gray-200 rounded-lg shadow hover:bg-green-600 text-white">
            <!-- Icône pour Branchements -->
            <svg class="w-10 h-10 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <div>
                <h5 class="mb-2 text-xl font-semibold">Branchements</h5>
                <p class="font-normal">Gérer les branchements</p>
            </div>
        </a>
    </div>
    <div class="col-span-1">
        <a href="{{ route('reclamations.index') }}" class="flex items-center justify-center p-4 bg-red-500 border border-gray-200 rounded-lg shadow hover:bg-red-600 text-white">
            <!-- Icône pour Réclamations -->
            <svg class="w-10 h-10 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 11-12.728 0 9 9 0 0112.728 0zM12 9v2m0 4h.01" />
            </svg>
            <div>
                <h5 class="mb-2 text-xl font-semibold">Réclamations</h5>
                <p class="font-normal">Gérer les réclamations</p>
            </div>
        </a>
    </div>

    <!-- Diagrammes -->
    <div class="col-span-3">
        <canvas id="myChart"></canvas>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Abonnées',
                        data: @json($abonnees),
                        backgroundColor: 'rgba(0, 0, 255, 0.5)', // Bleu pour Abonnées
                        borderColor: 'rgba(0, 0, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Branchements',
                        data: @json($branchements),
                        backgroundColor: 'rgba(0, 128, 0, 0.5)', // Vert pour Branchements
                        borderColor: 'rgba(0, 128, 0, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Réclamations',
                        data: @json($reclamations),
                        backgroundColor: 'rgba(255, 0, 0, 0.5)', // Rouge pour Réclamations
                        borderColor: 'rgba(255, 0, 0, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endpush
=======
    <div class="grid grid-cols-2 gap-4 mb-4 ">

        {{-- <div class=" h-48">
            <a href="{{ route('tournees.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Tournees</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div> --}}
        <div class=" h-48">
            <a href="{{ route('branchements.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Branchements</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div>
        <div class=" h-48">
            <a href="{{ route('reclamations.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Reclamations</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div>



    </div>
@endsection
>>>>>>> 7864392ac40bac7bb1ad278d4604afda2581fea1
