<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('backend.product.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required | min:3| max:255',
        //     'slug'=>'required | min:3| max:255| unique:categories',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        // ]);
        // $imageName = time().'-img.'.$request->image->extension();
        // $request->image->move(public_path('images/backend'), $imageName);

        // Method2=>>>
        // $category = new Category([
        //     'name' => $request->get('name'),
        //     'slug' => $request->get('slug'),
        //     'image' => $imageName,
        //     'status' => $request->get('status')
        // ]);
        // $category->save();

        // Method2=>>>
        // $category_data= $request->all();
        // $category_data['image']= $imageName;
        // Category::create($category_data);

        // Method3 =>>>>
        // Category::insert([
        //     'name' => $request->name,
        //     'slug' => $request->slug,
        //     'image' => $imageName,
        //     'status' => $request->status
        // ]);
        // session()->flash('msg','Category Created Successfully');
        // session()->flash('cls','success');
        // return redirect()->route('category.index');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
