@extends('admin.layouts.base')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Homes</h1>
        <a href="{{ route('home.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> 
            <i class="fa fa-plus fa-sm text-white-50"></i> Create Home
        </a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m- font-weight-bold text-primary">Home List</h6> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title 1</th>
                            <th>Title 2</th>
                            <th>Title 3</th>
                            <th>Button Left</th>
                            <th>Button Right</th>
                            <th>About Me Title</th>
                            <th>About Me Description</th>
                            <th>Profile Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($homes) > 0)
                            @foreach ($homes as $home)
                                <tr>
                                <td>{{ $home->tittle_1 }}</td> 
                                <td>{{ $home->tittle_2 }}</td>
                                <td>{{ $home->tittle_3 }}</td>
                                <td>{{ $home->button_left }}</td>
                                <td>{{ $home->button_right }}</td>
                                <td>{{ $home->about_me_tittle}}</td>
                                <td>{{ $home->about_me_description }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $home->image_path) }}" alt="{{ $home->about_me_title}}" width="100"> </td>
                                <td>
                                    <a href="{{ route('home.edit', $home->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('home.destroy', $home->id) }}" method="POST" class="d-inline"> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Page level plugins-->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts-->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endpush