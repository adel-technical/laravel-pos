<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('permission:view caregory', ['only' => ['index', 'show']]);
        // $this->middleware('permission:create caregory', ['only' => ['create', 'store']]);
        // $this->middleware('permission:edit caregory', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:delete caregory', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view("pages.categories.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255,unique:categories',
        ]);
        Category::create([
            'category_name'=>$request->category_name,
        ]);
        return redirect()->route('categories.index')->with('success', 'تم اضافة البيانات بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('categories.index')->with('success', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('categories.index')->with('success', 'تم الحذف بنجاح');
    }
}
