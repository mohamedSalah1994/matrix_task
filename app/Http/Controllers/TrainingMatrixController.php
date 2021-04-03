<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Position;
use App\Models\WorkForce;
use App\Models\Department;
use Illuminate\Http\Request;

class TrainingMatrixController extends Controller
{
    public function index(Request $request){
        $workForces = WorkForce::where(function ($q) use ($request) {

            return $q->when($request , function ($query) use ($request) {
                if($request->department){
                    return $query->where('department_id', 'like', '%' . $request->department . '%');

                }elseif($request->position){
                    return $query->where('position_id', 'like', '%' . $request->position . '%');
                }elseif($request->project){
                    return $query->where('project_id', 'like', '%' . $request->project . '%');
                }
                else{
                    return $query->where('department_id', 'like', '%' . $request->department . '%')
                    ->where('position_id', 'like', '%' . $request->position . '%')
                    ->where('position_id', 'like', '%' . $request->position . '%');
                }



            });

        })->latest()->paginate(5);
       $departments = Department::all();
       $positions = Position::all();
       $projects = Project::all();

       return view('pages.training_matrix' , compact('workForces','departments','positions','projects'));
    }


    // public function search(Request $request){
    //     $departments = Department::all();
    //     $positions = Position::all();
    //     $projects = Project::all();
    //     $workForces = WorkForce::where(function ($q) use ($request) {

    //         return $q->when($request->search, function ($query) use ($request) {

    //             return $query->where('name', 'like', '%' . $request->search . '%');

    //         });

    //     })->latest()->paginate(5);

    //     return view('training_matrix', compact('workForces','departments','positions','projects'));

    // }

}
