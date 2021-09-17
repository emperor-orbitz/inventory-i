<?php

namespace App\Http\Controllers;

use App\Item as ItemModel;
use Illuminate\Http\Request;

class Item extends Controller
{
    public function create(Request $request)
    {
        try {
            ItemModel::create($request->input());
            return back()->with('success', 'Item successfully created');
        } catch (\Throwable $th) {
            //report
            return back()->withErrors(['message', 'Unable to Create Categories at this Moment']);
        }
    }


    public function delete(Request $request, $id)
    {
        try {
            ItemModel::where('id', '=', $id)->delete();
            return back()->with('success', 'Item successfully deleted');
        } catch (\Throwable $th) {
            //report
            return back()->withErrors(['message', 'Unable to delete Item at this Moment']);
        }
    }
}
