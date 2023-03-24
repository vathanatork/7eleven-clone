<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\message;
use Illuminate\Support\Facades\DB;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = message::where('slag','1')->paginate(4);
        $items = Category::paginate(5);
        $sorts = DB::select("SELECT DISTINCT type FROM categories");
        return view('page.admin.category.list-category')->with('categoryItems',$items)->with('distinctItems',$sorts)->with('messages',$messages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messages = message::where('slag','1')->paginate(4);
        return view('page.admin.category.create-category')
        ->with('messages', $messages);
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
        $messages = message::where('slag','1')->paginate(4);
        $category = Category::find($id);
        return view('page.admin.category.edit-category')->with('category',$category)->with('messages',$messages);
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
        $messages = message::where('slag','1')->paginate(4);
        $categorys = DB::select("SELECT * FROM  categories where type ='$search'");
        $sorts = DB::select("SELECT DISTINCT type FROM  categories");
        return view('page.admin.category.list-category')->with('categoryItems',$categorys)->with('distinctItems',$sorts)->with('messages',$messages);
    } 
}
