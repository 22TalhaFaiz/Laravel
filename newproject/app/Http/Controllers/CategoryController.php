<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_form()
    {
        return view('insertcat');
    }
    public function insert_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);

        Category::create([
            'cat_name' => $request->name,
            
        ]);

        return redirect()->route('create');
           
    }
    public function show_cat()
    {
        $cat = Category::all();
        return view('showcat', ['category'=>$cat]);
    }


    public function edit($id)
    {
        $cat = Category::find($id);
        return view('editcat', ['cat'=>$cat]);
    }

    public function update(Request $request)
{
    $request->validate([
        'name' => 'required', 
    ]);
    $iid=$request->input('id');
   
    $cat = Category::find($iid);
    $cat->update([
        'cat_name' => $request->name,
    ]);
    return redirect()->route('showcat');

          
}
    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect()->route('showcat');
    }
}
