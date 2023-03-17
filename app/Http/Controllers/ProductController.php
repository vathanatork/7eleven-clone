<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sorts = DB::select("SELECT DISTINCT Name FROM  categories");
        $books = Product::all();
        return view('page.admin.list-books')->with('books',$books)->with('distinctItems',$sorts);
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
        $upload = 'img/products';
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
        $book->delete();
        return redirect()->back();
    }

    public function sortBycategory(string $search){
        
    }

    public function filterProduct(string $filter){
        
    }

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
