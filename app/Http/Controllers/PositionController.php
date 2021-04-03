<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
       $positions = Position::orderBy('updated_at', 'desc')->get();
       return view('pages.positions' , compact('positions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $positions = new Position();
        $positions->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $positions->save();
        return redirect()->route('positions.index');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $positions = Position::findOrFail($id);

        $positions->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $positions->save();
        return redirect('/positions');
    }

    public function destroy($id)
    {
        $positions = Position::findOrFail($id);
        $positions->delete();
        return redirect('/positions');
    }
}
