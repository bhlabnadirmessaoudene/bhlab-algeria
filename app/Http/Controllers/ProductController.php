<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {


        

            $products = Product::orderBy('created_at', 'DESC')->paginate(8);
        
            	
    	return view('products.index2')->with('products', $products);
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->firstOrFail();

      $stock = $product->stock == 0 ? 'Produit indisponible' : 'Produit disponible';

    	return view('products.show', [

        'product'=> $product,
        'stock' => $stock


      ]);
    }
}
