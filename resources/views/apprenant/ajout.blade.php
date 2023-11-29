<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Ajout apprenant</title>
</head>
<body>
    <div class="container">
        <div class="container mt-5">
            <a href="{{route('apprenant.index') }}" class="btn btn-secondary col-md-8 offset-md-2 p-2">Liste apprenants</a>
            <div class="card mt-4 col-md-8 offset-md-2">
                <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout d'apprenant</div>
                <div class="card-body">
                    <form action="/store" class="align-middle" method="post">
                        @csrf
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Matricule</label>
                            <input name="matricule" type="text" class="form-control col-md-8" required>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Nom</label>
                            <input name="nom" type="text" class="form-control col-md-8" required>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Prenom</label>
                            <input name="prenom" type="text" class="form-control col-md-8" required>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Niveau</label>
                            <select name="niveau" class="form-control">
                                <option value="debutant">Debutant</option>
                                <option value="amateur">Amateur</option>
                            </select>
                        </div>
                        <div class="row col-md-12 mt-5">
                            <label for="" class="col-md-4 h5 text-left pt-1">Formations </label> (appuyer sur ctrl pour selectionner plusieurs)
                            <select name="formations[]" multiple class="form-control">
                                @foreach($formations as $formation)
                                    <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg mt-3">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>