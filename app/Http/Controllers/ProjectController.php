<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::orderBy('updated_at', 'desc')->get();
       return view('pages.projects',compact('projects'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $projects = new Project();
        $projects->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $projects->save();
        return redirect()->route('projects.index');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $projects = Project::findOrFail($id);
        $projects->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $projects->save();
        return redirect('/projects');
    }


    public function destroy($id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect('/projects');
    }
}
