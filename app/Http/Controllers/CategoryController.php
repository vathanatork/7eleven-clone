<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Category::all();
        $sorts = DB::select("SELECT DISTINCT type FROM categories");
        return view('page.admin.category.list-category')->with('categoryItems',$items)->with('distinctItems',$sorts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.admin.category.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|max:20|min:3',
            'name' => 'required|max:20|min:3',
        ]);
          
        if ($validator->fails()) {
            return redirect('admin/category/create')
                ->withInput()
                ->withErrors($validator);
        }

        $category = new Category();
        $category->type = $request->type;
        $category->Name = $request->name;
        $category->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('page.admin.category.edit-category')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'type' => 'required|max:20|min:3',
            'name' =>'required|max:20|min:3',
        ]);
        if ($validator->fails()) {
            return redirect('admin/category/create')
                ->withInput()
                ->withErrors($validator);
        }

        $category = Category::find($id);
        $category->type = $request->type;
        $category->Name = $request->name;
        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function selectByCategory(string $search){
        $categorys = DB::select("SELECT * FROM  categories where type ='$search'");
        $sorts = DB::select("SELECT DISTINCT type FROM  categories");
        return view('page.admin.category.list-category')->with('categoryItems',$categorys)->with('distinctItems',$sorts);
    } 
}
