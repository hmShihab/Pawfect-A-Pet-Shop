@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-mid-12">
        @if(session('message'))
           <div class="alert alert-success">{{ session('message') }}</div>

        @endif

        <div class="card">
            <div class="card-header">
                <h3>Slider List
                    <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary btn-sm text-white float-end">
                    Add Slider</a>

                </h3>
            </div>
            <div class="card-body">
                <table  class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $sliders as $slider )
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->decsription }}</td>
                                <td>{{ $slider->image }} <img src="{{ asset("$slider->image") }}" style="width: 70px; height= 70px" alt="Slider"></td>
                                <td>{{ $slider->status }}</td>
                                <td>
                                    <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}"
                                        onclick="return confirm('Are you sure you want to delete ?');"
                                        class="btn btn-danger"
                                        >
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
