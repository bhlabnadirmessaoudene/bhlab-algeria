@extends('layouts.app')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    
</head>
<body>
@section('content')
<div class="album py-5 bg-light">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach ($products as $product)
    <div class="col">

    <div class=" flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden position-static">
      <div class="w-1/3 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
      </div>
      <div class="w-2/3 p-3">
        <h1 class="text-gray-900 font-bold text-2xl">{{ $product->name }}</h1>
        <p class="mt-2 text-gray-600 text-sm">{{ $product->description }}</p>
        <div class="flex item-center justify-between mt-3">
          <h1 class="text-gray-700 font-bold text-xl ">{{ $product->price / 100 }} €</h1>
          <button  class="ml-3 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Ajouter au panier</button>
        </div>
      
    
</div>
  </div>
  
</div>
@endforeach
  </div>
</div>
</div>
@endsection
</body>
</html>

