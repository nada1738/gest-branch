<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reclamation Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid black;
        }

        .table th,
        .table td {
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
        <h1>Reclamation Details</h1>
    </div>
    <table class="table">
        <tr>
            <th>TITLE</th>
            <th>DATA</th>
        </tr>
        <tr>
            <td>Order</td>
            <td>{{ $reclamation->n_order }}</td>
        </tr>

        <tr>
            <td>Nom</td>
            <td> {{ $reclamation->branchement->abonnee->nom }}
            </td>
        </tr>
        
        <tr>
            <td>Adresse</td>
            <td> {{ $reclamation->branchement->abonnee->adresse }}
            </td>
        </tr>
        
        <tr>
            <td>Telephone</td>
            <td> {{ $reclamation->branchement->abonnee->telephone }}
            </td>
        </tr>

        <tr>
            <td>Tournée</td>
            <td> {{ $reclamation->branchement->tournee }}
            </td>
        </tr>
      
        <tr>
            <td>Nature Rec</td>
            <td>{{ $reclamation->nature_rec }}</td>
        </tr>
        <tr>
            <td>Date Rec</td>
            <td>{{ $reclamation->date_rec }}</td>
        </tr>
        <tr>
            <td>Date Rep</td>
            <td>{{ $reclamation->date_rep }}</td>
        </tr>
    </table>
</body>

</html>
