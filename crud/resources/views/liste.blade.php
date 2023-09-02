
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
         <h1>LISTE DES PRODUITS</h1>
         <hr>

         <a href="/ajouter" class="btn btn-primary">Ajouter produit</a>
         <hr>

         @if (session('status'))
<div class="alert alert-success">
   {{session('status')}}
  </div>
</div>
@endif


<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Quantite</th>
            <th>Prix</th>
            <th>Reference</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>


        @foreach($produit as $produit)
        <tr>
            <td>{{$produit->id}}</td>
            <td>{{$produit->nom}}</td>
            <td>{{$produit->quantite}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->reference}}</td>
            <td>
            <a href="/update_produit/{{$produit->id}}" class="btn btn-warning">UPDATE</a>
            <a href="#" class="btn btn-danger">DELETE</a>

            </td>
        </tr>
        @endforeach
        <tr>
            <td>1</td>
            <td>pure de piment</td>
            <td>50</td>
            <td>2000</td>
            <td>p001</td>
            <td>
            <a href="/update_produit/{{$produit}}" class="btn btn-warning">UPDATE</a>
            <a href="#" class="btn btn-danger">DELETE</a>

            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>pure de tomate</td>
            <td>50</td>
            <td>2000</td>
            <td>t001</td>
            <td>
            <a href="#" class="btn btn-warning">UPDATE</a>
            <a href="#" class="btn btn-danger">DELETE</a>

            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>savon moringa</td>
            <td>70</td>
            <td>2500</td>
            <td>S001</td>
            <td>
            <a href="#" class="btn btn-warning">UPDATE</a>
            <a href="#" class="btn btn-danger">DELETE</a>

            </td>
        </tr>


    </tbody>



</table>


    </div>

  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
