<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use File;
use Validator;
use App\Models\message;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $messages = message::where('slag','1')->paginate(4);
        $products = DB::table('products')
                    ->join('categories', function ($join) {
                        $join->on('products.category_id', '=', 'categories.id');
                    })
                    ->select('products.id', 'products.title', 'products.description','products.price', 'products.image', 'categories.Name')
                    ->paginate(5);
        return view('page.admin.list-books')->with('books',$products)->with('messages',$messages);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $messages = message::where('slag','1')->paginate(4);;
        $categorys = Category::all();
        return view('page.admin.create-book')->with('categorys', $categorys)->with('messages', $messages);
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
        $messages = message::paginate(4);
        $book = Product::find($id);
        return view('page.admin.show-book')->with('book', $book)->with('messages', $messages);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $messages = message::where('slag','1')->paginate(4);
        $product = Product::find($id);
        $categorys = category::all();
        return view('page.admin.edit-book')->with('product', $product)->with('categorys', $categorys)->with('messages', $messages);
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
        $messages = message::where('slag','1')->paginate(4);
        $products = DB::table('products')
                    ->join('categories', function ($join) use ($search) {
                        $join->on('products.category_id', '=', 'categories.id')
                            ->where('categories.type', '=', $search);
                    })
                    ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
                    ->paginate(10);
        
        return view('page.admin.list-books')->with('books',$products)->with('message',$message);
    }

    // filter by Title and Category ASC

    public function filterProduct(string $filter){
        $messages = message::where('slag','1')->paginate(4);
        if($filter=='category'){
            $products = DB::table('products')
            ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->orderBy('categories.Name')
            ->paginate(5);
        }else if($filter=='title'){
            $products = DB::table('products')
            ->select('products.id', 'products.title', 'products.description', 'products.image', 'categories.Name')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->orderBy('products.title')
            ->paginate(5);
        }
        return view('page.admin.list-books')->with('books',$products)->with('messages',$messages);
    }

    // searching
    
    public function search(Request $request){
        $messages = message::where('slag','1')->paginate(4);
        $keyword = !empty($request->input('search'))?$request->input('search'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('page/admin/search-book')
                ->with('products', Product::where('title', 'LIKE', '%'.$keyword.'%')->paginate(2))
                ->with('keyword', $keyword)
                ->with('categories', $categories)
                ->with('messages',$messages);
        } else {
            return view('page/admin/product')
                ->with('products', Product::paginate(5))
                ->with('keyword', $keyword)
                ->with('categories', $categories)
                ->with('messages',$messages);
        }
    }
}