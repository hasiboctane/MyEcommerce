<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{

    public function index(){
        $categories= Category::paginate(3);
        return view('backend.category.index', compact('categories'));
    }
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required | min:3| max:255| unique:categories',
            'slug'=>'required | min:3| max:255| unique:categories',
            'description'=>'required | min:10| max:255'
        ],
            // Customize error message
        [
            'name.unique' => 'Name should be unique',
            'slug.unique' => 'Slug should be unique'
        ]
        );

        Category::insert([
            'name' => $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
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
