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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
