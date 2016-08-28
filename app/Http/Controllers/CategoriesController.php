<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CategoryRequest;

use App\Category;

use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::orderBy('id','DESC')->paginate(5);

    	return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(Categoryrequest $request)
    {
    	$category = new Category($request->all());
    	$category->save();

    	flash('La categoria '.$category->name.' se ha registrado con exito', 'success');

    	return redirect()->route('admin.categories.index');
    }

    public function destroy ($id)
    {
    	$category = Category::find($id);
    	$category->delete();

    	flash('La Categoria '. $category->name .' ha sido borrada permanentemente de forma exitosa!!', 'danger');
    	return redirect()->route('admin.categories.index');
    }

    public function edit ($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all()); //modifica los campos actualizados del formulario
        //Modifica los campos actualizados en el formulario uno por uno
        //$category->name = $request->name;
        $category->save();

        flash('La categoria '. $category->name .' ha sido modificada de forma exitosa!!', 'warning');

        return redirect()->route('admin.categories.index');
    }
}
