@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">
                        Brand
                    </h5>
                    <table class="mb-0 table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <th scope="row">{{$brand->id}}</th>
                                <td>{{$brand->name}}</td>
                                <td class="d-flex">
                                    <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-info btn-sm mx-2">
                                        Edit
                                    </a>
                                    <form action="{{route('brand.destroy',$brand->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>

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
