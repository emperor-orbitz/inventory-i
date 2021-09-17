<?php

namespace App\Http\Controllers;

use App\Category as CategoryModel;
use App\Item;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function index(Request $request, $id)
    {
        //
        try {
            $category = CategoryModel::where(['id' => $id])->get()->first();
            $items = Item::where(['category_id' => $id])->get();
            $categories =  CategoryModel::get();
            return view('auth.category', ['category' => $category, 'items' => $items, 'categories' => $categories]);
        } catch (\Throwable $th) {
            //report
            return back()->withErrors(['message', 'Unable to Get this category at this Moment']);
        }
    }


    public function create(Request $request)
    {
        //
        try {
            CategoryModel::create($request->input());
            return back()->with('success', 'Category successfully created');
        } catch (\Throwable $th) {
            //report
            return back()->withErrors(['message', 'Unable to Create Categories at this Moment']);
        }
    }


    public function delete(CategoryModel $CategoryModel, $id)
    {
        try {
            $CategoryModel::where('id', '=', $id)->delete();
            return back()->with('success', 'Category successfully deleted');
        } catch (\Throwable $th) {
            //report
            dd($th);
            return back()->withErrors(['message', 'Unable to delete Categories at this Moment']);
        }
    }
}
