<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::orderBy('updated_at', 'desc')->get();
      return view('pages.departments' , compact('departments'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $departments = new Department();
        $departments->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $departments->save();
        return redirect()->route('departments.index');
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $departments = Department::findOrFail($id);
        $departments->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $departments->save();
        return redirect('/departments');
    }


    public function destroy($id)
    {
        $departments = Department::findOrFail($id);
        $departments->delete();
        return redirect('/departments');
    }
}
