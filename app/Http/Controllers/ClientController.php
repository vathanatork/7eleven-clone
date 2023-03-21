<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Validator;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')
                        ->select('Name')
                        ->distinct('Name')->get();
         
        $items = Product::paginate(12);
        return view('page/client/product')->with('products',$items)
                                         ->with('categories',$categories);
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
        $categories = DB::table('categories')
                        ->select('Name')
                        ->where('type','=',function($query) use($search){
                            $query->select('type')->from('categories')->where('Name','=',$search);
                        })->distinct('Name')->get();
                    
        $products = DB::table('products')
                    ->join('categories', function ($join) use ($search) {
                        $join->on('products.category_id', '=', 'categories.id')
                            ->where('categories.Name', '=', $search);
                    })
                    ->select('products.id', 'products.title','products.price','products.description', 'products.image', 'categories.Name')
                    ->paginate(12);
        
        return view('page/client/product')->with('products',$products)
                                          ->with('categories',$categories);
    }
}
