<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Apprenant</title>
</head>
<body>
    <div class="container mt-5">

        <div class="card">
            <div class="card-header">
                <h2>Gestion apprenant</h2>
                <a href="{{route('ajout') }}" class="btn btn-primary">Ajouter apprenant</a>
                <a href="{{route('formation') }}" class="btn btn-primary">Afficher formations</a>
            </div>
            <div class="card-body">
                <br> <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Niveau</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($apprenant as $ap)
                            <tr>
                                <td>{{ $ap->id}}</td>
                                <td>{{ $ap->matricule}}</td>
                                <td>{{ $ap->nom}}</td>
                                <td>{{ $ap->prenom}}</td>
                                <td>{{ $ap->niveau}}</td>
                                <td>
                                    <a href="{{ route('apprenant.show', ['id' => $ap->id]) }}" class="btn btn-primary">Details</a>
                                </td>
                            </tr>
                           @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>