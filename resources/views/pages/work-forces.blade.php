@extends('company-layouts.master')

@section('css')

    {{-- modals --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bs-example {
            margin: 20px;
        }

    </style>
    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('title')
    Workforces
@endsection

@section('content')
    <div>
        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0" id="hedn">Training Matrix Structure</h1>
                </div>
                <div class="col-md-6">
                    <div class="form-group text-right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
                    </div>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </header>
        <div class="panel panel-light">
            <div class="container mt-3 mb-3">
                <div class="container"></div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Added By</th>
                            <th>Employee No.</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Project</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($workForces as $workForce)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $workForce->name }}</td>
                                <td>{{ $workForce->user->name }}</td>
                                <td>{{ $workForce->work_id }}</td>
                                <td>{{ $workForce->email }}</td>
                                <td>{{ $workForce->department->name }}</td>
                                <td>{{ $workForce->position->name }}</td>
                                <td>{{ $workForce->project->name }}</td>
                                <td><a href="" class="act-sp" title="Edit" data-toggle="modal"
                                        data-target="#edit{{ $workForce->id }}">
                                        <i class="fa fa-fw fa-edit"></i>
                                    </a>
                                    <a class="act-sp" title="Delete" data-toggle="modal"
                                        data-target="#delete{{ $workForce->id }}"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>


                            <!-------- Edit Modal -------->
                            <div id="edit{{ $workForce->id }}" class="modal fade" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="workforces/{{ $workForce->id }}" method="post">
                                            {{ method_field('patch') }}
                                            {{ csrf_field() }}

                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body mdb">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Name</label>

                                                                <input type="text" id="fname" name="name"
                                                                    class="form-control" value="{{ $workForce->name }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Work Id</label>
                                                                <input type="number" id="work_id" name="work_id"
                                                                    class="form-control"
                                                                    value="{{ $workForce->work_id }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" id="email" name="email"
                                                                    class="form-control" value="{{ $workForce->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input type="password" id="password" name="password"
                                                                    class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Department</label>
                                                            <select id="department" name="department" data-toggle="select2"
                                                                data-search="true" class="form-control form-control-lg">
                                                                <option value="">-Select Department-</option>
                                                                @foreach ($departments as $department)
                                                                    <option value="{{ $department->id }}">
                                                                        {{ $department->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Position</label>
                                                            <select id="position" name="position" data-toggle="select2"
                                                                data-search="true" class="form-control form-control-lg">
                                                                <option value="">-Select Position-</option>
                                                                @foreach ($positions as $position)
                                                                    <option value="{{ $position->id }}">
                                                                        {{ $position->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt20">
                                                            <label for="">Project</label>
                                                            <select id="project" name="project" data-toggle="select2"
                                                                data-search="true" class="form-control form-control-lg">
                                                                <option value="">-Select Project-</option>
                                                                @foreach ($projects as $project)
                                                                    <option value="{{ $project->id }}">
                                                                        {{ $project->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--------End Edit Modal -------->

                            <!-------- Delete Modal -------->
                            <div class="modal fade" id="delete{{ $workForce->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="workforces/{{ $workForce->id }}" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                Are You Sure ?

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-------- End Delete Modal -------->
                        @endforeach


                    </tbody>

                </table>
                <!-------- Create Modal -------->
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <form action="{{ route('workforces.store') }}" method="post">
                                @csrf
                                @method('post')

                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body mdb">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" id="fname" name="name" value="{{ old('name') }}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Work Id</label>
                                                    <input type="number" id="work_id" name="work_id" value="{{ old('work_id') }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Department</label>
                                                <select id="department" name="department" data-toggle="select2"
                                                    data-search="true" class="form-control form-control-lg">
                                                    <option value="">-Select Department-</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">
                                                            {{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Position</label>
                                                <select id="position" name="position" data-toggle="select2"
                                                    data-search="true" class="form-control form-control-lg">
                                                    <option value="">-Select Position-</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}">
                                                            {{ $position->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt20">
                                                <label for="">Project</label>
                                                <select id="project" name="project" data-toggle="select2"
                                                    data-search="true" class="form-control form-control-lg">
                                                    <option value="">-Select Project-</option>
                                                    @foreach ($projects as $project)
                                                        <option value="{{ $project->id }}">
                                                            {{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary">Add </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!--------End Create Modal -------->
            </div>
        </div>


    </div>
@endsection

@section('js')
    @livewireScripts
    {{-- modals --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- datatables --}}

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="    https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js
                "></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js
                "></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
@endsection
