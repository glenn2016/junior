<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Formations</title>
</head>
<body>
    <div class="container mt-5">

        <div class="card">
            <div class="card-header">
                <h2>Liste formations</h2>
                <a href="{{route('apprenant.index') }}" class="btn btn-primary">Liste apprenants</a>
            </div>
            <div class="card-body">
                <br> <br>
                <div class="">
                    @foreach($formation as $f)
                        <div class="mt-3" style="background-color: #F0F0F0; padding : 15px; border-radius : 20px">
                            <h5>{{$f->nom}}</h5>
                            Code : {{$f->code}} <br>
                            Dureé : {{$f->duree}} mois <br>
                            Nombre d'apprenant : {{$f->apprenants->count()}}
                        </div>
                    @endforeach 
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>