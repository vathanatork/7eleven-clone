<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use File;
use Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')
                    ->join('categories', function ($join) {
                        $join->on('products.category_id', '=', 'categories.id');
                    })
                    ->select('products.id', 'products.title', 'products.description','products.price', 'products.image', 'categories.Name')
                    ->paginate();
        return view('page.admin.list-books')->with('books',$products);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Category::all();
        return view('page.admin.create-book')->with('categorys', $categorys);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|min:3',
            'category_id' => 'required|integer',
            'price' => 'required|max:20|min:3',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:2000|min:10',
        ]);
          
        if ($validator->fails()) {
            return redirect('admin/product/create')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create The product
        $image = $request->file('image');
        $upload = 'img/';
        $filename = time().$image->getClientOriginalName();
        move_uploaded_file($image->getPathName(), $upload. $filename);
    
        $product = new Product();
        $product->title = $request->name;
	    $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $filename;
        $product->description = $request->description;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Product::find($id);
        return view('page.admin.show-book')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Product::find($id);
        $categorys = category::all();
        return view('page.admin.edit-book')->with('book', $book)->with('categorys', $categorys);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|min:3',
            'category_id' => 'required|integer',
            'price' => 'required|max:20|min:3',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:2000|min:10',
        ]);
          
        if ($validator->fails()) {
            return redirect('admin/product/create')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create The product
        $image = $request->file('image');
        $upload = 'img';
        $filename = time().$image->getClientOriginalName();
        move_uploaded_file($image->getPathName(), $upload. $filename);
    
        $product = Product::find($id);
        $product->title = $request->name;
	    $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $filename;
        $product->description = $request->description;
        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Product::find($id);
        $imagepath = 'img/'.$book->image;
        File::delete($imagepath);
        $book->delete();
        return redirect()->back();
    }

    // sort by type
    public function sortByType(string $search){
        
        //-------------modify code to query bulder to use paginate buildin function --

        $products = DB::table('products')
                    ->join('categories', function ($join) use ($search) {
                        $join->on('products.category_id', '=', 'categories.id')
                            ->where('categories.type', '=', $search);
                    })
                    ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
                    ->paginate(4);
        
        return view('page.admin.list-books')->with('books',$products);
    }

    // filter by Title and Category ASC

    public function filterProduct(string $filter){
        if($filter=='category'){
            $products = DB::select('select products.id,products.title,products.description,
            products.image,categories.Name From products 
            INNER JOIN categories On products.category_id = categories.id Order by categories.Name');
        }else if($filter=='title'){
            $products = DB::select('select products.id,products.title,products.description,
            products.image,categories.Name From products 
            INNER JOIN categories On products.category_id = categories.id Order by products.title');
        }
        return view('page.admin.list-books')->with('books',$products);;
    }

    // searching
    
    public function search(Request $request){
        $keyword = !empty($request->input('search'))?$request->input('search'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('page/admin/search-book')
                ->with('products', Product::where('title', 'LIKE', '%'.$keyword.'%')->paginate(2))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return view('page/admin/product')
                ->with('products', Product::paginate(2))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        }
    }
}