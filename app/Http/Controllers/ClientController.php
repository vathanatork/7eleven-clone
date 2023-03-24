<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\message;
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

    //about us
    public function about(){
        return view('page/client/about');
    }

    //contact us
    public function contact(){
        return view('page/client/contact');
    }

    //contact store
    public function contactStore(REQUEST $request){
        $message = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|',
        ]);

        $post = new message();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->slag = 1;
        $post->save();
        session()->flash('success','Successfully sent message');
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Product::find($id);
        return view('page/client/detail')->with('product',$item);
    }
    //filter by type
    
    public function filter($filter){
        $products = DB::table('products')
        ->join('categories', function ($join) use ($filter) {
            $join->on('products.category_id', '=', 'categories.id')
                ->where('categories.type', '=', $filter);
        })
        ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
        ->paginate(12);

        $categories = DB::table('categories')
                        ->select('Name')
                        ->distinct('Name')->get();

        return view('page/client/product')->with('products',$products)
        ->with('categories',$categories);
    }

    //sort products
    public function sortBy($sort){
        if($sort == 'newest'){
            $products = DB::table('products')
            ->join('categories', function ($join) use ($sort) {
                $join->on('products.category_id', '=', 'categories.id')
                ->orderBy('products.created_at');
            })
            ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
            ->paginate(12);
        }
        else if($sort == 'a-z'){
            $products = DB::table('products')
            ->join('categories', function ($join) use ($sort) {
                $join->on('products.category_id', '=', 'categories.id')
                ->orderBy('products.title');
            })
            ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
            ->paginate(12);
        }else if($sort == 'z-a'){
            $products = DB::table('products')
            ->join('categories', function ($join) use ($sort) {
                $join->on('products.category_id', '=', 'categories.id')
                ->orderByDesc('products.title');
            })
            ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
            ->paginate(12);
        }
        

        $categories = DB::table('categories')
                        ->select('Name')
                        ->distinct('Name')->get();

        return view('page/client/product')->with('products',$products)
        ->with('categories',$categories);
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

    //search for products
    public function search(REQUEST $request){
        $keyword = !empty($request->input('search'))?$request->input('search'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('page/client/product')
                ->with('products', Product::where('title', 'LIKE', '%'.$keyword.'%')->paginate(5))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return view('page/client/product')
                ->with('products', Product::paginate(5))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        }
    }
}
