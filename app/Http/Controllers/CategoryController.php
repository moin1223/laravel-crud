<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::get();

        // dd($categories);

        return view('categories.list', ['collectionData' => $categories]);
    }


    public function create()
    {

        return view('categories.new');
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required|unique:categories|max:200'

        ]);

        // dd($request->title);
        $category = new Category;
        $category->title = $request->title;
        $category->category = $request->category;
        $category->freshness = $request->freshness;
        $category->size = json_encode($request->size);
        $category->save();
        return redirect('/');
    }
    public function edit($id)
    {
        // dd($id);
        $category = Category::where('id', $id)->first();
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect('/');
    }

    public function destroy($id)
    {

        $category = Category::whereId($id)->first();
        $category->delete();
      
        return redirect('/');
    }
}
