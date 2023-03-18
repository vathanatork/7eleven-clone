<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Validator;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Product::paginate(20);
        return view('page/client/product')->with('products',$items);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Product::find($id);
        return view('page/client/detail')->with('product',$item);
    }

    // sorting by category
    public function sortByCategory($search){
        $products = DB::select("select products.id,products.title,products.description,
                                products.image,categories.type,categories.Name From products 
                                INNER JOIN categories On products.category_id = categories.id and categories.Name = '$search';");
        return view('page/client/product')->with('products',$products);;
    }
}
