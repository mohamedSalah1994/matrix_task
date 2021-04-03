@extends('company-layouts.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css
    ">

@endsection

@section('title')
    Training Matrix
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('training-matrix.index') }}" method="get">
            @csrf
            @method('get')
            <div class="row mt20 mb-5">
                <div class="col-md-3">
                    <label for="">Department</label>
                    <select  id="department" name="department"
                    data-search="true" class="form-control form-control-lg">
                    <option value="">-Select Department-</option>
                    @foreach ($departments as $department)
                        <option  value="{{ $department->id }}">
                            {{ $department->name }}</option>
                    @endforeach
                </select>

                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <label for="">&nbsp;</label>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-dark" id="searchBtn"><i class="fa fa-search"
                                aria-hidden="true"></i> Find</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>

                <th>Employee No.</th>

                <th>Department</th>
                <th>Position</th>
                <th>Project</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($workForces as $workForce)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{ $workForce->name }}</td>

                    <td>{{ $workForce->work_id }}</td>

                    <td>{{ $workForce->department->name }}</td>
                    <td>{{ $workForce->position->name }}</td>
                    <td>{{ $workForce->project->name }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection

@section('js')

    <script src=" https://code.jquery.com/jquery-3.5.1.js
     "></script>
    <script src=" https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js
     "></script>
    <script src=" https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js
     "></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
     "></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
     "></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
     "></script>
    <script src=" https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js
     "></script>





    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });

    </script>
@endsection
