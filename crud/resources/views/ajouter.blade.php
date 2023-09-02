<?php
?>


@if (session('status'))
<div class="alert alert-success">
   {{session('status')}}
  </div>
</div>
@endif


<ul>
@foreach ($errors->all() as $error)
<li class="alert alert-danger">{{$error}}</li>
@endforeach

</ul>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD LARAVEL 10</title>
</head>
<body>



    <div class="container">
  <div class="row">
    <div class="col ss12">
         <h1>FORMULAIRE D'AJOUT DE PRODUIT</h1>
         <hr>



         <form action="/ajouter/traitement" method="POST">
            @csrf
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>

  <div class="mb-3">
    <label for="Quantite" class="form-label">Quantite</label>
    <input type="number" class="form-control" id="quantite" name="quantite">
  </div>

  <div class="mb-3">
    <label for="Prix" class="form-label">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix">
  </div>

  <div class="mb-3">
    <label for="Reference" class="form-label">Reference</label>
    <input type="text" class="form-control" id="reference" name="reference">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter produit</button>
  <a href="/produit" class="btn btn-danger">Liste des produit</a>

</form>


    </div>

  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
