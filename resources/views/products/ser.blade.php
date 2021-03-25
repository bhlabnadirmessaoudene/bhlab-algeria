@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  
</head>

@section('content')

<style>
    .marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
</style>
<body>


<section>
    @include('index')
  </section>

<div class="container" >
 


<div class="row mt-5" >
   
       
        @foreach ($products as $product)
        

  <div class="col-sm-6 col-md-3 mb-3 mt-5">
    <div class="card card-product">
        <div class="card-image">
            <a href="#">
                <img class="img rounded" src="https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" style="width:100%" />
            </a>
        </div>

        <div class="card-body">
            <h6 class="category text-danger">Categorie</h6>
            <h4 class="card-title">
                <a href="#pablo" class="card-link">Automate 4000</a>
            </h4>
            <div class="card-description">
                Machine trés performante et efficace, utile pour la medecine 
            </div>


         
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
               
                <h4 class="text-gray-700 font-bold">{{ $product->price / 100 }} €</h4>
               
                  </div>
              </div>
             

        </div>

    </div>
</div>
        
@endforeach
          
    </div>
    </div>

    <div class="container marketing mt-5">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach ($products as $product)
          <div class="col-sm-6 col-md-3 mb-3 mt-5">
            <a href="#">

                <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"  />
            </a>    
           <a href="" class="mt-3"> <h3>Automate</h3></a>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
            <h4 class="text-gray-700 font-bold text-xl">{{ $product->price / 100 }} €</h4>
            <button class="btn btn-secondary"><a  href="#" style="color: white">View details &raquo;</a></button>
            </div>
          </div><!-- /.col-lg-4 -->
         @endforeach
        </div><!-- /.row -->
    </div>
@endsection
</body>
</html>