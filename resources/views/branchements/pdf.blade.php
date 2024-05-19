<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Branchements Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .header {
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Branchements Details</h1>
    </div>
    <table class="table">
        <tr>
            <th>TITLE</th>
            <th>DATA</th>
        </tr>
        <tr>
            <td>Order</td>
            <td>{{ $branchement->id }}</td>
        </tr>
        <tr>
            <td>Police</td>
            <td>{{ $branchement->n_police }}</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>{{ $branchement->abonnee->nom }}</td>
        </tr>
        <tr>
            <td>Tournée</td>
            <td>{{ $branchement->tournee }}</td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{ $branchement->abonnee->adresse }}</td>
        </tr>
        <tr>
            <td>Nature B</td>
            <td>{{ $branchement->nature }}</td>
        </tr>
        <tr>
            <td>L branchement</td>
            <td>{{ $branchement->l_branch }}</td>
        </tr>
        <tr>
            <td>L chaussée</td>
            <td>{{ $branchement->l_chaussée }}</td>
        </tr>
        <tr>
            <td>Nature chaussée</td>
            <td>{{ $branchement->nature_chaussée }}</td>
        </tr>
        <tr>
            <td>Date versement</td>
            <td>{{ $branchement->date_ver }}</td>
        </tr>
        <tr>
            <td>N° versement</td>
            <td>{{ $branchement->n_ver }}</td>
        </tr>
        <tr>
            <td>Date Réalisation</td>
            <td>{{ $branchement->date_realisation }}</td>
        </tr>
        <tr>
            <td>Observation</td>
            <td>{{ $branchement->observation }}</td>
        </tr>
    </table>
</body>
</html>