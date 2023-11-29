<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>detail</title>
</head>
<body>

    <div class="container mt-5">

        <div class="card">
            <div class="card-header">
                <h2>Detail apprenant ({{$apprenant->prenom .' '. $apprenant->nom}})</h2>
                <a href="{{route('apprenant.index') }}" class="btn btn-primary">Liste apprenants</a>
            </div>
            <div class="card-body">
                <p><strong>Matricule : </strong> {{ $apprenant->matricule }}</p>
                <p><strong>Nom : </strong> {{ $apprenant->nom }}</p>
                <p><strong>Prénom : </strong> {{ $apprenant->prenom }}</p>
                <p><strong>Niveau : </strong> {{ $apprenant->niveau }}</p>

                <h2>Formations:</h2>
                <ul>
                    @foreach($apprenant->formations as $formation)
                        <div class="mt-3" style="background-color: #F0F0F0; padding : 15px; border-radius : 20px">
                            <h5>{{$formation->nom}}</h5>
                            Dureé : {{$formation->duree}} mois
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>