<?php

namespace App\Http\Controllers;

use App\Http\Requests\workforces\Store;
use App\Http\Requests\workforces\Update;
use App\Models\Project;
use App\Models\Position;
use App\Models\WorkForce;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WorkForceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $workForces = WorkForce::orderBy('updated_at', 'desc')->get();
       $departments = Department::all();
       $positions = Position::all();
       $projects = Project::all();
       return view('pages.work-forces' , compact('workForces','departments','positions','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        if (WorkForce::create([
            'name' => $request->name,
            'email' => $request->email,
            'work_id' => $request->work_id,
            'password'=>  Hash::make($request->password),
            'department_id' => $request->department,
            'position_id' => $request->position,
            'project_id' => $request->project,
            'user_id' => (Auth::user()->id),


        ]))


        return redirect('/workforces');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request ,$id)
    {

        $workForces = WorkForce::findOrFail($id);
        $workForces->update([

            'name' => $request->name,
            'email' => $request->email,
            'work_id' => $request->work_id,
            'password'=>  Hash::make($request->password),
            'department_id' => $request->department,
            'position_id' => $request->position,
            'project_id' => $request->project,
          ]);
          return redirect('/workforces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workForces = WorkForce::findOrFail($id);
        $workForces->delete();

        return redirect('/workforces');
    }
}
