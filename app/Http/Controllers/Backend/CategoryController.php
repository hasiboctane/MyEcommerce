<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function dash(){
        return view('backend.index');
    }
    public function index(){
        $categories= Category::all();
        return view('backend.category.index', compact('categories'));
    }
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required | min:3| max:255',
            'slug'=>'required | min:3| max:255| unique:categories',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $imageName = time().'-img.'.$request->image->extension();
        $request->image->move(public_path('images/backend'), $imageName);

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
        Category::insert([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imageName,
            'status' => $request->status
        ]);
        session()->flash('msg','Category Created Successfully');
        session()->flash('cls','success');
        return redirect()->route('category.index');


    }

    public function edit($id){
        $category= Category::findOrFail($id);
        // dd($category);
        return view('backend.category.edit',compact('category'));

    }
    public function update(){

    }

}
