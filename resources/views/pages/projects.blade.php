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
    Projects
@endsection

@section('content')
    <div>
        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0" id="hedn">Positions</h1>
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
                            <th>Name In English</th>
                            <th>Name In Arabic</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($projects as $project)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $project->getTranslation('name', 'en') }}</td>
                                <td>{{ $project->getTranslation('name', 'ar') }}</td>



                                <td><a href="" class="act-sp" title="Edit" data-toggle="modal"
                                        data-target="#edit{{ $project->id }}">
                                        <i class="fa fa-fw fa-edit"></i>
                                    </a>
                                    <a class="act-sp" title="Delete" data-toggle="modal"
                                        data-target="#delete{{ $project->id }}"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>


                            <!-------- Edit Modal -------->
                            <div id="edit{{ $project->id }}" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="projects/{{ $project->id }}" method="post">
                                            {{ method_field('patch') }}
                                            {{ csrf_field() }}

                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Project</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body mdb">


                                                            <div class="form-group">
                                                                <label for="">Name In English</label>

                                                                <input type="text" id="name_en" name="name_en"
                                                                    class="form-control"
                                                                    value="{{ $project->getTranslation('name', 'en') }}">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="">Name In Arabic</label>

                                                                <input type="text" id="name_ar" name="name_ar"
                                                                    class="form-control"
                                                                    value="{{ $project->getTranslation('name', 'ar') }}">
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
                            <div class="modal fade" id="delete{{ $project->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Project</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="projects/{{ $project->id }}" method="post">
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
                    <div class="modal-dialog">
                        <div class="modal-content mdc">
                            <form action="{{ route('projects.store') }}" method="post">
                                @csrf
                                @method('post')

                                <div class="modal-header">
                                    <h5 class="modal-title">Add Project</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body mdb">


                                            <div class="form-group">
                                                <label for="">Name In English</label>
                                                <input type="text" id="name_en" name="name_en" value="{{ old('name_en') }}"
                                                    class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Name In Arabic</label>
                                                <input type="text" id="name_ar" name="name_ar" value="{{ old('name_ar') }}"
                                                    class="form-control">
                                            </div>



                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary">Add </button>
                                </div>
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
